<?php 
	defined('BASEPATH') or exit('No direct script access allowed');

	class My_Controller extends CI_Controller
	{
		public function _construct()
		{
			$this->load->library('session');
			parent::_construct();
		}


		
		public function getDBview()
		{
			$this->load->library('session');

			if (isset($_SESSION['eid'])) {
				$this->load->model('SQLmodel','',TRUE);
				$data['staff'] = $this->SQLmodel->getstaff();
				$data['header'] = $this->SQLmodel->getHeader($_SESSION['eid']);
				$data['noe'] = $this->SQLmodel->getNumber_Of_Employees();
				$data['non'] = $this->SQLmodel->getNew_Staff_Num();
				$this->load->helper('url');
				$this->load->view('myviews/index',$data);
			}
			else
			{
				$account = $this->input->post('account');
				$pwd = $this->input->post('password');
				$this->load->model('Opmodel','',TRUE);
				$eid = $this->Opmodel->admin_check($account,$pwd);
				if(empty($eid))
				{
					echo "error";
				}
				else
				{
					$this->session->set_userdata('eid',$eid);
					$this->load->model('SQLmodel','',TRUE);
					$data['staff'] = $this->SQLmodel->getstaff();
					$data['header'] = $this->SQLmodel->getHeader($eid);
					$data['noe'] = $this->SQLmodel->getNumber_Of_Employees();
					$data['non'] = $this->SQLmodel->getNew_Staff_Num();
					$this->load->helper('url');

					$this->load->view('myviews/index',$data);
				}
			
			}
		}

		public function table()
		{
			$this->load->helper('url');
			$this->load->model('SQLmodel','',TRUE);

			redirect('/Op_Controller/table');		
		}

		public function form()
		{
			$this->load->helper('url');
			$this->load->library('session');
			$this->load->model('SQLmodel','',TRUE);
			$eid = $this->session->userdata('eid');
			$data['header'] = $this->SQLmodel->getHeader($eid);
			$this->load->view('myviews/addform',$data);	
		}
		public function uform($eid)
		{
			$this->load->model('SQLmodel','',TRUE);
			$data = $this->SQLmodel->getAstaff($eid);
			$this->load->helper('url');
			$this->load->view('myviews/addform',$data);	
		}




	}
 ?>