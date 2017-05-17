	
<?php 
	defined('BASEPATH') OR exit('No direct script access allowed');

	class Test extends CI_Controller{
		public function test1(){
			echo "CI框架blablablabal";
		}

		public function msg($n,$g){
			echo "姓名：".urldecode($n),"<br/>";
			echo "性别：".urldecode($g),"<br/>";
		}

		public function getview(){
			$this->load->helper('url');
			$this->load->view('myviews/index');
		}

	    public function showuser(){
	    	$this->load->model('usermodel','',TRUE);
	    	//$this->usermodel->_construct();
	    	$data = $this->usermodel->getusers();
	    	var_dump($data);	
	    }
	}
?>
