<?php 
	class Crudmodel extends CI_Model{

		public function getRecords(){
			$query = $this->db->get('customer');
			return $query->result_array();
		}


		public function createRecord($data){
			$this->load->model('Crudmodel');
			$this->db->insert('customers', $data);
			return true;
		}
	}

?>
