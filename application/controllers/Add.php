<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Add extends CI_Controller {

	public function index()
	{
		$data['msg']="";
		$this->load->view('add',$data);
	}

	public function celebrities()
	{
		if($this->input->post()){
			$name = $this->input->post('name');
            $image = $this->input->post('image');

            if(!empty($name) && !empty($image)){
            	$celebritydata=array(
                            'name'=> $name,
                            'image'=> $image
                        );
            	$this->load->model('CelebrityModel');
            	$celebrity = $this->CelebrityModel->add($celebritydata);
            }
		}
		$data['msg']="".$name." Successfully added";
		$this->load->view('add',$data);
	}
}
