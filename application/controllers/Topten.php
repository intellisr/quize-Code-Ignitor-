<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Topten extends CI_Controller {

	public function index()
	{	
		$this->load->model('ToptenModel');
		$data['topten']=$this->ToptenModel->get_topten();
		$this->load->view('topten', $data);
	}
}
