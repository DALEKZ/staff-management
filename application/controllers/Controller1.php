<?php 
	defined('BASEPATH') or exit('No direct script access allowed');

	class Controller1 extends CI_Controller
	{

		public function getDBview()
		{
			$this->load->model('SQLmodel','',TRUE);
			$data['staff'] = $this->SQLmodel->getstaff();
			$data['noe'] = $this->SQLmodel->getNumber_Of_Employees();
			$data['non'] = $this->SQLmodel->getNew_Staff_Num();
			$this->load->helper('url');
			$this->load->view('myviews/index',$data);
		}
	}	
 ?>