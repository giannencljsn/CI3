<?php 

	class Products extends CI_Controller{

		public function index(){
			$data["title"] = "Products";
			$data["products"] = array("Spaghetti", "Baked Mac", "Fettucine", "Lasagna");
			$this->load->view("products", $data);
		}

		public function spaghetti(){
			echo $this->uri->segment(1)."<br />";
			echo $this->uri->segment(2)."<br />";
			echo $this->uri->segment(3)."<br />";
			echo $this->uri->segment(4)."<br />";
		}
	}


?>
