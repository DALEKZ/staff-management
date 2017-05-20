<?php 
	defined('BASEPATH') or exit('No direct script access allowed');

	class Op_Controller extends My_Controller
	{
		function _construct()
		{
			$this->load->helper('url');
			 parent::__construct();
		}

		public function table()
		{
			$this->load->model('SQLmodel','',TRUE);
			$data['staff'] = $this->SQLmodel->getstaff();
			$this->load->helper('url');
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
			
	}	

 ?>