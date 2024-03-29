<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_Admin extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        // Your own constructor code
        $this->load->model('M_Bab');
        $this->load->model('M_Opening');
        $this->load->model('Admin/M_Admin');
    }

    public function cekAkun()
    {
        $this->load->model('M_Opening');
        $data['page'] = $this->M_Opening->opening()->row_array();

        $this->load->model('Admin/M_Admin'); //load model user(data user)

        //validasi login
        $username = $this->input->post('username','required');
        $password = $this->input->post('password','required');

        $query = $this->M_Admin->cekLogin($username, $password);

        if ($query === 1) {
            echo "<script> alert('user tidak ditemukan'); </script>";
            $this->load->view('Admin/Login', $data);
        } else if ($query === 2) {
            echo "<script> alert('user tidak aktif'); </script>";
            $this->load->view('Admin/Login', $data);
        } else if ($query === 3) {
            echo "<script> alert('password salah!'); </script>";
            $this->load->view('Admin/Login', $data);
        } else {
            //berhasil
            //membuat session dengan nama user
            $userdata = array(
                'id' => $query->id,
                'username' => $query->username,
                'email' => $query->email,
                'password' => $query->password,
                'active' => $query->active,
                'logged_in' => TRUE
            );
            $this->session->set_userdata($userdata);
            return TRUE;
        }
    }

    public function login()
    {
        $data['page'] = $this->M_Opening->opening()->row_array();

        if ($this->input->post('submit')) {
            $this->load->model('Admin/M_Admin');

            $this->form_validation->set_rules('username', 'Username', 'required');
            $this->form_validation->set_rules('password', 'Password', 'required');

            $username = $this->input->post('username','required');
            $password = $this->input->post('password','required');


            $authResult = $this->cekAkun();

            if ($this->form_validation->run() && $authResult === TRUE) {
                $dt_login = $this->M_Admin->cekLogin($username, $password);

                if ($this->session->userdata('active') == "1") {
                    redirect('admin_home');
                } else {
                    redirect('admin');
                }
            }

        } else {
            $this->load->view('Admin/Login', $data);
        }
    }

    function logout()
    {
        $this->session->sess_destroy();
        redirect('admin');
    }

    public function home()
	{
        $data['home'] = $this->M_Opening->opening()->row_array();
		$this->load->view('Admin/Home', $data);
	}

    public function index()
	{
        $this->load->model('M_Opening');
        $this->load->model('Admin/M_Admin');

        $data['page'] = $this->M_Opening->opening()->row_array();

		$this->load->view('Admin/Login', $data);
	}

    public function daftar_isi()
	{
        $data['home'] = $this->M_Opening->opening()->row_array();
        $data['daftar_isi'] = $this->M_Admin->show_bab()->result_array();

		$this->load->view('Admin/Daftar-isi', $data);
	}

    public function add_daftar_isi()
    {
        $judul = $this->input->post('judul');
        $jdl_gambar = str_replace(['.','/',' '],'-',$judul);
        // $gambar

        if($_FILES['gambar']['name']!="") {
            $config['upload_path']      = '../inobel/assets/image/image-bab';
            $config['allowed_types']    = 'jpg|png|jpeg|webp|GIF|JPG|PNG|JPEG|WEBP';
            $config['max_size']         = 10240; //10Mb
            $config['overwrite']		= true;
            $config['file_name']        = 'gambar-'.$jdl_gambar;
            $this->load->library('upload', $config);

            if (!is_dir('../inobel/assets/image/image-bab')) {
                mkdir('../inobel/assets/image/image-bab', 0777, TRUE);
            }

            if ( ! $this->upload->do_upload('gambar')) {
                $error = array('error' => $this->upload->display_errors());
            } else {
                $upload_data = $this->upload->data();
                $gambar = $upload_data['file_name'];
            }

        } else {
            $gambar = $this->input->post('perspektif_old');
        }

        $this->M_Admin->add_bab($judul,$gambar);
        redirect($_SERVER['HTTP_REFERER']);
    }

    public function update_daftar_isi()
    {
        $judul = $this->input->post('judul');
        $id = $this->input->post('id');
        $jdl_gambar = str_replace(['.','/',' '],'-',$judul);
        // $gambar

        if($_FILES['gambar']['name']!="") {
            $config['upload_path']      = '../inobel/assets/image/image-bab';
            $config['allowed_types']    = 'jpg|png|jpeg|webp|GIF|JPG|PNG|JPEG|WEBP';
            $config['max_size']         = 10240; //10Mb
            $config['overwrite']		= true;
            $config['file_name']        = 'gambar-'.$jdl_gambar;
            $this->load->library('upload', $config);

            if (!is_dir('../inobel/assets/image/image-bab')) {
                mkdir('../inobel/assets/image/image-bab', 0777, TRUE);
            }

            if ( ! $this->upload->do_upload('gambar')) {
                $error = array('error' => $this->upload->display_errors());
            } else {
                $upload_data = $this->upload->data();
                $gambar = $upload_data['file_name'];
            }

        } else {
            $gambar = $this->input->post('gambar_old');
        }

        $this->M_Admin->update_bab($judul,$gambar,$id);
        redirect($_SERVER['HTTP_REFERER']);
    }

    public function materi()
	{
        $data['home'] = $this->M_Opening->opening()->row_array();
        $data['daftar_isi'] = $this->M_Admin->show_bab()->result_array();
        $data['materi'] = $this->M_Admin->show_materi()->result_array();

		$this->load->view('Admin/Materi', $data);
	}

    public function add_materi()
    {
        $id_bab = $this->input->post('id_bab');
        $nama   = $this->input->post('nama');

        $this->M_Admin->add_materi($id_bab,$nama);
        redirect($_SERVER['HTTP_REFERER']);
    }

    public function isi_materi($id_materi)
    {
        $data['home'] = $this->M_Opening->opening()->row_array();
        $data['daftar_isi'] = $this->M_Admin->show_bab()->result_array();
        $data['materi'] = $this->M_Admin->show_materi()->result_array();

        $data['select_materi'] = $this->M_Admin->select_materi($id_materi)->row_array();

        

		$this->load->view('Admin/Materi-isi', $data);
    }

    public function add_isi_materi($id)
    {
        $isi = $this->input->post('isi_materi');

        $this->M_Admin->add_isi_materi($isi,$id);
        redirect($_SERVER['HTTP_REFERER']);
    }

    public function edit_materi($id_materi)
    {
        $data['home'] = $this->M_Opening->opening()->row_array();
        $data['daftar_isi'] = $this->M_Admin->show_bab()->result_array();
        $data['materi'] = $this->M_Admin->show_materi()->result_array();

        $data['select_materi'] = $this->M_Admin->select_materi($id_materi)->row_array();

		$this->load->view('Admin/Materi-edit', $data);
    }

    public function setting()
	{
        $data['home'] = $this->M_Opening->opening()->row_array();
		$this->load->view('Admin/Setting', $data);
	}

    public function update_page()
    {
        $salam          = $this->input->post('salam');
        $nama_apk       = $this->input->post('nama_apk');
        $nama_sekolah   = $this->input->post('nama_sekolah');

        $this->M_Admin->update_page($salam,$nama_apk,$nama_sekolah);
        redirect($_SERVER['HTTP_REFERER']);
    }

    // KAMUS
    public function view_kamus()
	{
        $data['kamus'] = $this->M_Admin->isi_kamus()->result_array();
		$this->load->view('Admin/Kamus', $data);
	}

    public function add_kamus()
    {
        $ngoko  = $this->input->post('ngoko');
        $madya  = $this->input->post('madya');
        $inggil = $this->input->post('inggil');

        $this->M_Admin->add_kamus($ngoko,$madya,$inggil);
        redirect($_SERVER['HTTP_REFERER']);
    }

    public function delete_kamus($id)
    {
        $this->M_Admin->delete_kamus($id);
        redirect($_SERVER['HTTP_REFERER']);
    }
    

}
