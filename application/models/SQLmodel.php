<?php 
	class SQLmodel extends CI_Model
	{
		function _construct()
		{
			$this->load->database();
		}

		public function getstaff()
		{
			$query = $this->db->query('select * from (employee inner join position  on employee.pid=position.pid) inner join department on employee.d_id = department.d_id');
			return $query->result();
		}

		public function getNumber_Of_Employees()
		{
			$query = $this->db->query('select count(eid) as num from employee');
			return $query->row();
		}

		public function getNew_Staff_Num()
		{
			$query = $this->db->query('select count(*) as n_num from employee where right(indate,4) = 2017');
			return $query->row();
		}

		

	}
 ?>