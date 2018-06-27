<?php
class Home extends CI_Controller{
	public function header($dat){
		$this->load->view('car/header.php', $dat);
	}
	public function footer(){
		$this->load->view('car/footer.php');
	}
	public function index(){
		$data = array(
   		 		'title' => 'Login',
			);
		$this->header($data);
		$this->load->view('car/login.php');
		$this->footer();
		
	}
	public function login(){
		$_que = "select * from users where name='".$_POST['username']."' and password='".$_POST['password']."'" ;
		$records = $this->db_model->get_records($_que);
		if( $records  ){
			$data = array(
   		 		'title' => 'Home page',
			);
			$this->header($data);
			$this->load->view('car/home.php');
			$this->footer();	
		}else{
			redirect(base_url());
		}
	}

	public function main_page(){
		echo "<div><h1>Welcome</h1></div>";
	}
}
?>