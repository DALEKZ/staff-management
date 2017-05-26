<?php 
	defined('BASEPATH') or exit('No direct script access allowed');

	class Op_Controller extends My_Controller
	{
		function _construct()
		{
			 parent::__construct();
		}

		public function table()
		{
			$this->load->model('SQLmodel','',TRUE);
			$data['staff'] = $this->SQLmodel->getstaff();
			$adata = $this->SQLmodel->getAstaff(11);
			$this->load->helper('url');
			$this->load->library('session');
			$this->load->model('SQLmodel','',TRUE);
			$eid = $this->session->userdata('eid');
			$data['header'] = $this->SQLmodel->getHeader($eid);
			$this->load->view('myviews/tables_responsive',$data);
		}

		public function delete($id)
		{
			$this->load->model('Opmodel','',TRUE);
			$this->Opmodel->delete($id);
		}
		
		public function add()	
		{
			$new = $this->input->post();	
			$this->load->model('Opmodel','',TRUE);
			$this->Opmodel->add($new);
		}	

			 public function adminlogin()
		{
			$this->load->helper('url');
			$this->load->view('myviews/admin_login');
		}
		public function getprofile($id)
		{
			$this->load->helper('url');
			$this->load->model('Opmodel','',TRUE);
			$data['profile'] = $this->Opmodel->getprofile($id);
		//	var_dump($data);
			$this->load->library('session');
			$this->load->model('SQLmodel','',TRUE);
			$eid = $this->session->userdata('eid');
			$data['header'] = $this->SQLmodel->getHeader($eid);
			$this->load->view('myviews/profile',$data);
			

		}

		public function update($a)	
		{
			$this->load->helper('url');
			$this->load->model('Opmodel','',TRUE);
			$data['profile'] = $this->Opmodel->getprofile($id);
			$this->load->view('myviews/addform',$data);
			
			
		}	
		public function updateSQL()	
		{
			$this->load->helper('url');
			$new = $this->input->post();	
			var_dump($new);
			$this->load->model('Opmodel','',TRUE);
			$this->Opmodel->update($new);
			
			
		}	

		
			
	}	

 ?>		
