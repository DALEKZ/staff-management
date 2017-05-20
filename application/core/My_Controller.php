<?php 
	defined('BASEPATH') or exit('No direct script access allowed');

	class My_Controller extends CI_Controller
	{
		public function _construct()
		{
			
			parent::_construct();
		}

		public function getDBview()
		{

			$this->load->model('SQLmodel','',TRUE);
			$data['staff'] = $this->SQLmodel->getstaff();
			$data['noe'] = $this->SQLmodel->getNumber_Of_Employees();
			$data['non'] = $this->SQLmodel->getNew_Staff_Num();
			$this->load->helper('url');
			$this->load->view('myviews/index',$data);
		}

		public function table()
		{
			$this->load->helper('url');
			redirect('/Op_Controller/table');		
		}

		public function form()
		{
			$this->load->helper('url');
			$this->load->view('myviews/addform');	
		}
	}
 ?>