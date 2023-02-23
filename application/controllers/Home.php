<?php

class Home extends CI_Controller{
	
	public function index(){

		
		$data["title"] = "Passing Data to View"; 
		$this->load->view('index', $data);
	}	
}

?>
