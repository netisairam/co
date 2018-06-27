<?php
class Home extends CI_Controller{
	public function index(){
		$title = "login";
		$this->load->view('car/header.php');
		$this->load->view('car/login.php');
		$this->load->view('car/footer.php');
	}
}
?>