<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Play extends CI_Controller {

	public function index()
	{	
		if($this->input->post()){
			$name = $this->input->post('name');

            if(!empty($name)){
            	$this->session->player_name = $name;
            }
		}
		$data['player_name']=$this->session->player_name;
		$this->session->quection = 0;
		$this->load->model('QuizModel');
		$this->db->query('update tbl_celebrities set used = 0 ');
		$data['quiz']=$this->QuizModel->get_allcalebrities();
		$this->load->view('play', $data);
	}

	public function score()
	{
		$quectionNum=$this->session->quection;
		$score=$this->session->score;
		$this->load->model('QuizModel');
		$remain=$this->QuizModel->get_allcalebrities();
		$remaincount=count($remain);		
		if(3 >= $quectionNum && $remaincount > 2){

			if($this->input->post()){
				$real = $this->input->post('real');
				$answer = $this->input->post('answer');
				$this->session->quection = $quectionNum + 1;
				if($real == $answer){
					if($score == null){
						$this->session->score = 10;
					}else{

						$this->session->score = $score + 10;
					}
				}else{

				}
				$this->load->model('QuizModel');
				$detail=$this->QuizModel->updateCeleb($real);

			}
			$data['player_name']=$this->session->player_name;
			$this->load->model('QuizModel');
			$data['quiz']=$this->QuizModel->get_allcalebrities();
			$this->load->view('play', $data);
		}else{
			$playerName=$this->session->player_name;
			$this->load->model('ToptenModel');
			$resdata=$this->ToptenModel->UpdatePlayer($score,$playerName);
			$data['score']=$score;
			$this->session->score = 0;
			$this->db->query('update tbl_celebrities set used = 0 ');			
			$this->load->view('results', $data);
		}
		
	}
}
