<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Produk extends CI_Controller {

	 public function __construct()
	{
		parent::__construct();
		$this->load->model('Model_perusahaan');
		//Do your magic here
	}
	public function index($id)
	{
		$data['produk_array']=$this->Model_perusahaan->getProduk($id);
		$this->load->view('produk',$data);
	}

}

/* End of file Produk.php */
/* Location: ./application/controllers/Produk.php */