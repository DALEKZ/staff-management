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
				$data['msg'] =  $this->SQLmodel->getupdate();
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
					$data['msg'] =  $this->SQLmodel->getupdate();
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
			$this->load->library('session');
			$this->load->model('SQLmodel','',TRUE);
			$id = $this->session->userdata('eid');
			$data['header'] = $this->SQLmodel->getHeader($id);

			$data['info'] = $this->SQLmodel->getAstaff($eid);
			$this->load->helper('url');
			//var_dump($data['info']);
			$this->load->view('myviews/addform',$data);	


		}

		public function log_out()
		{
			$this->load->library('session');
			$id = $id = $this->session->userdata('seid');
			$this->load->helper('url');
			$this->session->unset_userdata('seid');
			
			redirect('/UserController/login');		
		}

		public function ajx()
		{
			$this->load->model('SQLmodel','',TRUE);
			$up = $this->SQLmodel->getupdate();
			echo $up;
		}


	}
 ?>