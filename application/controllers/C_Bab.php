<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_Bab extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        // Your own constructor code
        $this->load->model('M_Bab');
    }
	
	public function index()
	{
        $data['list_bab'] = $this->M_Bab->show_bab()->result_array();

		$this->load->view('Home', $data);
	}

    public function daftar_materi($id_bab)
	{
        $data = $this->M_Bab->daftar_materi($id_bab)->result();
        echo json_encode($data);
	}

    public function detail_materi($id_materi)
	{
        $data['detail_materi'] = $this->M_Bab->detail_materi($id_materi)->row_array();

		$this->load->view('Detail_Materi', $data);
	}

    public function view_kamus()
	{
        $data['kamus'] = $data['kamus'] = $this->M_Bab->isi_kamus()->result_array();

		$this->load->view('Detail_Kamus', $data);
	}

    

    

}
