<?php 
	defined('BASEPATH') or exit('No direct script access allowed');

	class Op_Controller extends CI_Controller
	{

 	

		public function delete()
		{

			var_dump('testexpression');
		}

		public function table()
		{
			$this->load->model('SQLmodel','',TRUE);
			$data['staff'] = $this->SQLmodel->getstaff();
			$this->load->helper('url');
			$this->load->view('myviews/tables_responsive',$data);
		}

		

			
	}	

 ?>