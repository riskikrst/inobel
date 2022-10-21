<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_Opening extends CI_Model {

    public function opening()
    {
        $this->db->select('salam');
        $this->db->select('nama_apk');
        $this->db->select('nama_sekolah');

        $this->db->from('tb_opening');

        $query = $this->db->get();
        return $query;
    }

}