<?php


class Home extends CI_Controller{

	public function index(){
		$this->load->model('Crudmodel');
		$records = $this->Crudmodel->getRecords();
		$count = count($records); // get the number of items in $records array
		
		$this->load->helper('url');
		$this->load->view('CRUD/home', ['records'=>$records, 'count'=>$count]);
		
	}


	public function create(){
		$this->load->helper('url');
		$this->load->view('CRUD/create');
		
	}


	public function save(){
		echo "Form submitted";
		$this->load->helper('form');
		$this->load->library('form_validation');
		$this->form_validation->set_rules('customerName','Customer Name','required');
		$this->form_validation->set_rules('phone','Phone','required');
		$this->form_validation->set_rules('address','Address','required');
		$this->form_validation->set_rules('city','City','required');
		$this->form_validation->set_rules('country','Country','required');

		if($this->form_validation->run())
		{
			echo 'Success';
		}

		else{
			echo validation_errors();

		}


	}
	public function edit(){
		echo "Edit function";
		
	}




}




?>
