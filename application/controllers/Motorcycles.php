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
    public function add(){
        $data["title"] = "Add Motorcycle Record";
        $this->form_validation->set_rules("brand", "Brand", "required|callback_brand_check");
        $this->form_validation->set_rules("model", "Model", "required");
        $this->form_validation->set_rules("displacement", "Displacement", "required");

        if ($this->form_validation->run() == true){
            
            $data = array(
                "mc_brand" => $this->input->post("brand"),
                "mc_model" => $this->input->post("model"),
                "mc_displacement" => $this->input->post("displacement")
            );

            $this->load->model("Motorcycles_model");
            $isAdded = $this->Motorcycles_model->add($data);

            if ($isAdded){
                echo "Success!";
            } else {
                echo "Oops! Something went wrong.";
            }
        }
        else {
            $this->load->view("pages/motorcycle_add", $data);
        }
    }
    public function brand_check($brand){
        if($brand == "xyz"){
            $this->form_validation->set_message("brand_check", "This %s is banned and not honored.");
            return false;
        }else {
            return true;
        }
    }


	public function edit($mc_id=""){
		if($mc_id){
			$data["title"] = "Edit Motorcycle Record";
			$this->load->model("Motorcycles_model");
			$data["motorcycles"] = $this->Motorcycles_model->get_motorcycles($mc_id);

			$this->load->view("pages/motorcycle_edit", $data); 
		} else{
			redirect("/CI3/Motorcycles");
		}
	}

	public function verifyEdit($mc_id = ""){
		$this->form_validation->set_rules("brand","Brand", "required|callback_brand_check");
		$this->form_validation->set_rules("model","Model", "required");
		$this->form_validation->set_rules("displacement","Displacement","required");

		if($this->form_validation->run() == true){
			$data = array(
				"mc_brand" => $this->input->post("brand"),
				"mc_model" => $this->input->post("model"),
				"mc_displacement" => $this->input->post("displacement")

			);

			$this->load->model("Motorcycles_model");
			$isUpdated = $this->Motorcycles_model->edit($mc_id, $data); 
		
			if($isUpdated){
				echo "Success!";
			} else{
				echo "Oops! Something went wrong.";
			}
		}
		else {
			$this->edit($mc_id);
		}
	}
}
