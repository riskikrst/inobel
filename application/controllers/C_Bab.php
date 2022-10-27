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

}
