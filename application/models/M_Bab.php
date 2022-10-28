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

    public function detail_materi($id_materi)
    {
        $this->db->select('id');
        $this->db->select('id_bab');
        $this->db->select('nama');
        $this->db->select('isi');

        $this->db->from('tb_materi');
        $this->db->where('id', $id_materi);

        $query = $this->db->get();
        return $query;
    }

    public function isi_kamus()
    {
        $this->db->select('id');
        $this->db->select('ngoko');
        $this->db->select('madya');
        $this->db->select('inggil');

        $this->db->from('tb_kamus');
        $this->db->order_by('ngoko');

        $query = $this->db->get();
        return $query;
    }

}