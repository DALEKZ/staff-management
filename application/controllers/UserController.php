<?php 
	defined('BASEPATH') or exit('No direct script access allowed');

	class UserController extends My_Controller
	{
		function _construct()
		{
			 parent::__construct();
		}

		public function getindex()
		{
			$this->load->model('User_model','',TRUE);

			$this->load->library('session');

			if (isset($_SESSION['seid'])) 
			{
				$eid = $this->session->userdata('seid');
				$this->load->model('SQLmodel','',TRUE);
				$data['header'] = $this->SQLmodel->getHeader($eid);
				$this->load->helper('url');

				$data['pro']=$this->User_model->getprograms($eid);
				//var_dump($data);
				$this->load->view('myviews/user_index',$data);
			}
			else
			{
				$account = $this->input->post('account');
				$pwd = $this->input->post('password');
				$this->load->model('Opmodel','',TRUE);
				$eid = $this->Opmodel->check($account,$pwd);
				if(empty($eid))
				{
					echo "error";
				}
				else
				{
					$this->load->library('session');
					$this->session->set_userdata('seid',$eid);
					$this->load->model('SQLmodel','',TRUE);
					$data['header'] = $this->SQLmodel->getHeader($eid);
					$this->load->helper('url');
					$data['pro']=$this->User_model->getprograms($eid);
					$this->load->view('myviews/user_index',$data);
				}
			}
		}

		public function normalview()
		{
			$this->load->helper('url');

			$this->load->view('myviews/normal');
		}

		public function pgform()
		{
			$this->load->helper('url');
			$this->load->library('session');
			$eid = $this->session->userdata('seid');
			$this->load->model('SQLmodel','',TRUE);

			$data['header'] = $this->SQLmodel->getHeader($eid);
			$this->load->view('myviews/add_program',$data);
		}


		
		public function conlist()
		{
			$this->load->helper('url');

			$this->load->view('myviews/contact_list');
		}
		public function mypro()
		{
			$this->load->library('session');			
			$this->load->helper('url');
			$this->load->model('User_model','',TRUE);
			$this->load->model('SQLmodel','',TRUE);
			$eid = $this->session->userdata('seid');
			$data['pro']=$this->User_model->getprograms($eid);
		//	$data['re'] = $this->SQLmodel->getAstaff($eid);
			$this->load->library('session');
			$this->load->model('SQLmodel','',TRUE);
			$data['header'] = $this->SQLmodel->getHeader($eid);
			$this->load->view('myviews/programs',$data);


		
		}

		public function updateview($prid)
		{
			$this->load->helper('url');
			$this->load->library('session');
			$eid = $this->session->userdata('seid');
			$this->load->model('SQLmodel','',TRUE);
			$data['header'] = $this->SQLmodel->getHeader($eid);
			$data['prid'] = $prid;

			$this->load->view('myviews/update_program',$data);
			

		}
		public function login()
		{
			$this->load->helper('url');
			$this->load->view('myviews/login');
		}

		public function addprogram()
		{
			$this->load->library('session');

			$this->load->helper('url');
			$new = $this->input->post();

			$eid= $this->session->userdata('seid');
			$new['eid'] = $eid->eid;
			$this->load->model('User_model','',TRUE);
			$this->User_model->addpg($new);
			redirect('/UserController/getindex');
		}

		public function updateprogram($id)
		{
			var_dump($id);
			$this->load->library('session');
			$this->load->helper('url');
			$new = $this->input->post();	
			$this->load->model('User_model','',TRUE);
			$this->User_model->update($new,$id);
			redirect('/UserController/mypro');		
		}

			
	}	

 ?>		
