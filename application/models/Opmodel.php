<?php 

class Opmodel extends CI_Model
{
	function _construct()
	{
		$this->load->database();
	}

	public function delete($id)
	{
		$this->load->helper('url');
		$isSuccess = $this->db->delete('employee',array('eid' => $id) );
		redirect("/Op_Controller/table");	
		
	}

	public function add($o)
	{
		$Edata  = array(
			'name' => $o['name'],
			'sex' => $o['sex'],
			'age' => $o['age'],
			//'email' => $o['email'],
			//'phone '=> $o['phone'],
			'pid'=> $o['position'],
			'd_id' => $o['department'],
			'salary '=>$o['salary'],
			'indate '=> $o['indate'] 
		);
		$this->db->insert('employee', $Edata);
		var_dump($Edata);
		//$this->db->query('insert into employee values()');
	}

	public function update()
	{

	}


}
?>