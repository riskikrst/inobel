<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_Bab extends CI_Model {

    public function show_bab()
    {
        $this->db->select('id');
        $this->db->select('judul');
        $this->db->select('gambar');

        $this->db->from('tb_bab');

        $query = $this->db->get();
        return $query;
    }

    public function daftar_materi($id_bab)
    {
        $this->db->select('id');
        $this->db->select('id_bab');
        $this->db->select('nama');

        $this->db->from('tb_materi');
        $this->db->where('id_bab', $id_bab);

        $query = $this->db->get();
        return $query;
    }

}