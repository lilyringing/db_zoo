<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');  


class Project extends CI_Controller {
	
	public function __construct()
	{
		parent::__construct();
		$this->load->library('session');
	}
	
	public function research(){
		$this->load->helper('url');
		
		$this->load->model("Research_model");
		$data['id'] = $this->Research_model->getResearch();
		$this->load->view('research', Array("pageTitle" => "Zoo_research","data" => $data ));
	}
	
	public function activity(){
		$this->load->helper('url');
		
		$this->load->model("Research_model");
		$data['act'] = $this->Research_model->getActivity();
		$this->load->view('activity', Array("pageTitle" => "Zoo_activity","data" => $data ));
	}
}

