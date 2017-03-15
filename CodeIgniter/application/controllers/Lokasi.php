<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Lokasi extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Model_perusahaan');	
		//Do your magic here
	}
	public function index($id)
	{
		$data['lokasi_array']=$this->Model_perusahaan->getLokasi($id);
		$this->load->view('lokasi',$data);
	}

}

/* End of file Lokasi.php */
/* Location: ./application/controllers/Lokasi.php */