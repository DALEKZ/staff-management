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

		public function getAstaff($eid)
		{
			$query = $this->db->query('select employee.d_id,salary,indate, employee.eid,name,age,sex,d_name,p_name,phone,email,introduce from ((
							employee inner join position  
							on employee.pid=position.pid) 
							inner join department on employee.d_id = department.d_id)
							INNER JOIN info on employee.eid=info.eid 
							where employee.eid='.$eid);
			return $query->row();
		}

		public function getHeader($id)
		{
			$data = $this->db->query('select name,p_name ,img from employee inner join position on employee.pid=position.pid where employee.eid='.$id->eid);
			return $data->row();
		}

		public function getupdate()
		{
			$data = $this->db->query('select  employee.eid as eid,name,pg_name from employee inner join program on employee.eid=program.eid where update_bit=1');
			return $data->result();
		}

	}
 ?>