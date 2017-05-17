<?php 

class Usermodel extends CI_Model{

    function _construct(){
    	
		$this->load->database();
		echo"sdsada";
	}

	public function getusers(){
		$q = $this->db->query("select * from user");
		return $q->result();
	}
}

 ?>