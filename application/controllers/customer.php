<?php
class Customer extends CI_Controller{
	public function header($dat){
		$this->load->view('car/header.php', $dat);
		if($this->session->login == "y" && $this->session->login_page != 'y'){
			$this->load->view('car/menu.php');
		}
	}
	public function footer(){
		$this->load->view('car/footer.php');
	}
	// require('home.php');
	// $home = new Home();
	public function index(){
		if($this->session->login == "y" && $this->session->login_page != 'y'){
			$data = array(
	   		 		'title' => 'Customer Details',
				);
			$this->header($data);
			$this->load->view('car/customer.php');
			$this->footer();
		}else{
			$this->ss_destroy();
			redirect(base_url());
		}
	}
	public function addcity(){
		if($this->session->login == "y" && $this->session->login_page != 'y'){
			$data = array(
	   		 		'title' => 'Customer Details',
				);
			$this->header($data);
			$this->load->view('car/customer.php');
			$this->load->view('car/addcity.php');
			$this->footer();
		}else{
			$this->ss_destroy();
			redirect(base_url());
		}
	}
	public function addcustmer(){
		if($this->session->login == "y" && $this->session->login_page != 'y'){
			$data = array(
	   		 		'title' => 'Customer Details',
				);
			$this->header($data);
			$this->load->view('car/customer.php');
			$this->load->view('car/addcustmer.php');
			$this->footer();
		}else{
			$this->ss_destroy();
			redirect(base_url());
		}	
	}
	public function show_cd(){
		if($this->session->login == "y" && $this->session->login_page != 'y'){
			$data = array(
	   		 		'title' => 'Customer Details',
				);
			$this->header($data);
			$this->load->view('car/customer.php');
			$this->load->view('car/show_cd.php');
			$this->footer();
		}else{
			$this->ss_destroy();
			redirect(base_url());
		}	
	}
	public function ss_destroy(){
		$this->session->sess_destroy();
	}
}
?>