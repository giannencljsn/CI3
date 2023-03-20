<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Register extends CI_Controller{

	public function index(){
			//Validation
			$this->load->library('form_validation');
			$this->load->helper('form');

			//Rules for validation
			$this->form_validation->set_rules("email","Email ID","required|valid_email");
			$this->form_validation->set_rules("name","Name","required|alpha");
			$this->form_validation->set_rules("age","Age","required|integer");
			$this->form_validation->set_rules("password","Password","required|alpha_numeric|max_length[12]|min_length[6]");





			if($this->form_validation->run() == FALSE){

				$this->load->view('form');

				} else{

				echo "Validation True, You can Proceed";

				}

		
	}
}
?>
