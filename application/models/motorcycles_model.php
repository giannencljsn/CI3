<?php
class Motorcycles_model extends CI_Model{
    public function __construct(){
        parent::__construct();
        $this->load->database();
    }
    public function get_motorcycles($id = null){
		if($id == null){
			$result = $this->db->get("motorcycles");
			return $result->result_array();
		} else{
			$result = $this->db->get_where("motorcycles", array("mc_id" => $id));
			return $result->row_array();
		}
	}
    public function add($data){
        return $this->db->insert("motorcycles", $data);
    }

	public function edit($id, $data){
		$this->db->where(array("mc_id" => $id));
		return $this->db->update("motorcycles", $data);
	}
}

?>
