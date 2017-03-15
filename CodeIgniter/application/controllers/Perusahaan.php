<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Perusahaan extends CI_Controller {

	public function index()
	{
	$this->load->model('Model_perusahaan');
	$data['perusahaan_array']=$this->Model_perusahaan->getPerusahaan();
	$this->load->view('perusahaan', $data);		
	}

}

/* End of file Perusahaan.php */
/* Location: ./application/controllers/Perusahaan.php */ ?>