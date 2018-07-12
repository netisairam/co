<?php
class Home extends CI_Controller{

	public function header($dat){
		$this->load->view('car/header.php', $dat);
		if($this->session->login == "y" && $this->session->login_page != 'y'){
			$this->load->view('car/menu.php');
		}
	}
	public function footer(){
		$this->load->view('car/footer.php');
	}
	public function index(){
		$this->ss_destroy();
		$this->session->login_page = "y";		
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
			// print_r($records);
			// exit;
			$this->session->login = "y";
			$this->session->username = $records['name'];
			redirect(base_url()."home");
		}else{
			$_SESSION['login_wrong'] = "y";
			redirect(base_url());
		}
	}

	public function main_page(){
		if($this->session->login != "y"){
			$this->logout();
		}
		$this->session->login_page = "n";
		$data = array(
   		 		'title' => 'Home page',
			);
		$this->header($data);
		$this->load->view('car/home.php');
		$this->footer();	
	}
	function ss_destroy(){
		$this->session->sess_destroy();
	}
	public function logout(){
		$this->ss_destroy();
		redirect(base_url());
	}
}
?>