<?php 
defined('BATHPATH') or exit('ehei !!!误access');

class Opmodel extends CI_Model()
{
	function _construct()
	{
		$this->load->database();
	}

	public function delete($id)
	{
		$this->db->query('delete from employee where eid =$id');
	}

	public function add()
	{
		$this->db->query('insert into employee values()');
	}

	public function update()
	{

	}
}
?>