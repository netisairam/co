<?php
class Home extends CI_Controller{
	public function index(){
		$data = array(
   		 		'title' => 'Login',
  		  		'heading' => 'My Heading',
  		  		'message' => 'My Message'
			);


		$this->load->view('car/header.php', $data);
		$this->load->view('car/login.php');
		$this->load->view('car/footer.php');
	}
}
?>