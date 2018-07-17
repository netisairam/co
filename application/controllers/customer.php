<?php
include('home.php');
class Customer extends Home {

	// public function header($dat){
	// 	$this->load->view('car/header.php', $dat);
	// 	if($this->session->login == "y" && $this->session->login_page != 'y'){
	// 		$this->load->view('car/menu.php');
	// 	}
	// }
	// public function footer(){
	// 	$this->load->view('car/footer.php');
	// }
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
			$_que = "select * from cities" ;
			$records = $this->db_model->get_records($_que);
			$city_list['list']=$records;
			 // print_r($records);
			$this->header($data);
			$this->load->view('car/customer.php');
			$this->load->view('car/addcity.php',$city_list);
			$this->footer();
		}else{
			$this->ss_destroy();
			redirect(base_url());
		}
	}
	public function addcitydb(){
		$_que = "select * from cities where city='".$_POST['city']."'" ;
		$records = $this->db_model->get_records($_que);
		if(sizeof($records) > 0){
			
		}else{
			$this->db_model->insert_into_user('cities',$_POST);
		}
		redirect(base_url()."customer/addcity");
		
	}
	public function addcity_editdb(){
		$where['id'] = $_POST['id'];
		$update_data = array('city'=>$_POST['city']);
		$this->db_model->update_record('cities',$update_data,$where);
		redirect(base_url()."customer/addcity");
	}
	public function addcity_deletedb(){
		if(isset($_GET['id'])){
			$this->db_model->row_delete('cities',$_GET);
		}
		redirect(base_url()."customer/addcity");
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