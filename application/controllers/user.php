<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');  
  
class User extends CI_Controller {
	
	public function __construct()
	{
		parent::__construct();
		$this->load->library('session');
	}
	
	public function login(){
		$this->load->helper('url');
		/* If user already login */
		if(isset($_SESSION["user"]) && $_SESSION["user"] != null){
			redirect(site_url("/")); 	// turn to homepage
			return true;
		}
	
		$this->load->view('login',Array(
	            "pageTitle" => "Login"
		));
	}  //end login
	
	public function logining(){
		$this->load->helper('url');
		/* If user already login */
		if(isset($_SESSION["user"]) && $_SESSION["user"] != null){
			redirect(site_url("/")); 	// turn to homepage
			return true;
		}
	
		echo "ya";
		$account = trim($this->input->post("UserID"));
		$password = trim($this->input->post("password"));
	
		$this->load->model("User_model");
		$user = $this->User_model->getUser($account,$password);
		
		
		if($user == null){
			$this->load->view(
	                "login",
			Array( "pageTitle" => "Logining" ,
	                "UserID" => $account
			));
			return true;
		}
	
		$this->session->set_userdata('user', $user);
		redirect(site_url("/")); 	// turn to homepage
	}//end logining
	
	public function logout(){
		$this->load->helper('url');
		session_destroy();
		redirect(site_url("/")); 	// turn to homepage
	}//end logout
}  
