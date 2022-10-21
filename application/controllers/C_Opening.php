<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_Opening extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        // Your own constructor code
        $this->load->model('M_Opening');
    }
	
	public function index()
	{
        $data['home'] = $this->M_Opening->opening()->row_array();

		$this->load->view('Welcome', $data);
	}
}
