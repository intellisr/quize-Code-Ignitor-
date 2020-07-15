<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {
	public function index()
	{	
		$this->session->player_name = null;
		$this->load->view('home');
	}
}
