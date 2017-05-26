<?php 

class User_model extends CI_Model
{
	function _construct()
	{
		parent::__construct(); 
		$this->load->database();
	}

	public function getprograms($eid)
	{
		$data = $this->db->query('select employee.eid as eid,pg_name,start_time,brief from employee INNER JOIN program on employee.eid = program.eid where program.eid ='.$eid);
		
		return $data ->result();
	

	}

	public function login($a)
	{
		$data = $this->db->query('select employee.eid as eid from users inner join employee on employee.eid = users.eid where account= '."'$a'");
		return $data->row();
	}

	
	

}
?>