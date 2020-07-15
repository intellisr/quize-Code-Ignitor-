<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Demo extends CI_Controller {

	public function index()
	{
		$this->session->player_name = null;
		$this->load->view('demo');
	}
}
