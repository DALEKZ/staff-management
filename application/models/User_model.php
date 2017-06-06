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
		$data = $this->db->query('select pr_id, employee.eid as eid,pg_name,start_time,brief from employee INNER JOIN program on employee.eid = program.eid where program.eid ='.$eid->eid);
		
		return $data ->result();
	

	}

	public function login($a)
	{
		$data = $this->db->query('select employee.eid as eid from users inner join employee on employee.eid = users.eid where account= '."'$a'");
		return $data->row();
	}

	public function addpg($o)
	{
		$Edata  = array(
			'eid' => $o['eid'],
			'pg_name' => $o['pg_name'],
			'start_time' => $o['start_time'],
			'brief' => $o['brief'],
			
		);
		$this->db->insert('program', $Edata);
	}

	public function update($o,$id)
	{
		$data1  = array(
			'pg_name' => $o['pg_name'],
			'start_time'=>$o['start_time'],
			'brief'=>$o['brief'],
				'update_bit'=>$o['update_bit'],

		);
		$this->db->where('pr_id', $id);
		$this->db->update('program', $data1);
		//$this->db->query($str1);
		
	}
	

}
?>