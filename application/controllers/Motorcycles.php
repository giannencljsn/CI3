<?php

	class Motorcycles extends CI_Controller{
    public function __construct(){
        parent::__construct();
    }

    public function index(){
        $data["title"] = "Motorcycle Listings";

        $this->load->model("Motorcycles_model");
        $data["motorcycles"] = $this->Motorcycles_model->get_motorcycles();

        $this->load->view("pages/motorcycles", $data);
    }
}
   
?>
