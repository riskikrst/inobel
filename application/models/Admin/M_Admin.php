<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_Admin extends CI_Model {

    // public $table = 'tb_user';

    public function cekLogin($username, $password)
    {
        $this->db->where('email', $username);
        $query = $this->db->get('tb_user')->row();

        if(!$query) return 1;
        if($query->active == 0) return 2;

        $hash = $query->password;
        if(md5($password) != $hash) return 3;

        return $query;
    }

    public function show_bab()
    {
        $this->db->select('id');
        $this->db->select('judul');
        $this->db->select('gambar');

        $this->db->from('tb_bab');

        $query = $this->db->get();
        return $query;
    }

    public function add_bab($judul,$gambar)
    {
        $this->db->set('judul', $judul);
        $this->db->set('gambar', $gambar);
        $this->db->insert('tb_bab');
    }

    public function add_materi($id_bab,$nama)
    {
        $this->db->set('id_bab', $id_bab);
        $this->db->set('nama', $nama);
        $this->db->insert('tb_materi');
    }

    public function show_materi()
    {
        $this->db->select('tb_bab.judul');
        $this->db->select('tb_materi.id');
        $this->db->select('tb_materi.nama');

        $this->db->from('tb_materi');
        $this->db->join('tb_bab','tb_materi.id_bab = tb_bab.id ');

        $query = $this->db->get();
        return $query;
    }

    public function select_materi($id_materi)
    {
        $this->db->select('tb_bab.judul');
        $this->db->select('tb_materi.id');
        $this->db->select('tb_materi.nama');
        $this->db->select('tb_materi.isi');

        $this->db->from('tb_materi');
        $this->db->join('tb_bab','tb_materi.id_bab = tb_bab.id ');

        $this->db->where('tb_materi.id', $id_materi);

        $query = $this->db->get();
        return $query;
    }

    public function add_isi_materi($isi,$id)
    {
        $this->db->set('isi', $isi);
        $this->db->where('id', $id);
        $this->db->update('tb_materi');
    }

    public function update_page($salam,$nama_apk,$nama_sekolah)
    {
        $this->db->set('salam', $salam);
        $this->db->set('nama_apk', $nama_apk);
        $this->db->set('nama_sekolah', $nama_sekolah);

        $this->db->update('tb_opening');
    }

}