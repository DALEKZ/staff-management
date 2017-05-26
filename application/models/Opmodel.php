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

	public function update($o)
	{
		$data1  = array(
			'eid' => $o['eid'],
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
		$this->db->where('eid', $o['eid']);
		$this->db->update('employee', $data1);
		//$this->db->query($str1);
		$data2  = array(
			'eid' => $o['eid'],
			'email' => $o['email'],
			'phone '=> $o['phone'],
			
		);
		$this->db->where('eid', $o['eid']);
		$this->db->update('info', $data2);
		//$this->db->query($str2);

		//var_dump($str2);
	}
	public function getprofile($id)
	{
		$data = $this->db->query('select  brief,start_time,employee.eid,name,pg_name,age,sex,d_name,p_name,phone,email,introduce from (((
							employee inner join position  
							on employee.pid=position.pid) 
							inner join department on employee.d_id = department.d_id)
							INNER JOIN info on employee.eid=info.eid)
							inner join program on employee.eid=program.eid
							where employee.eid='.$id);
	
		return $data -> result();
	}

	public function check($a,$b)	
	{
		$this->load->helper('url');
		$data = $this->db->query('select eid from users where account='."'$a'".' and password='."'$b'");
		return $data->row();
		
	
	}	

	public function admin_check($a,$b)	
	{
		$this->load->helper('url');
		$data = $this->db->query('select eid from admin where account='."'$a'".' and password='."'$b'");
		return $data->row();
		
	
	}	


}
?>