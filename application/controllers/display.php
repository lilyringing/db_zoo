<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');  
  
class Display extends CI_Controller {
	
	public function __construct()
	{
		parent::__construct();
		$this->load->library('session');
	}	
	
	public function building(){
		$this->load->helper('url');
		
		$this->load->model("Building_model");
		$data['building'] = $this->Building_model->getAllBuilding();
		
		$this->load->view('building', Array("pageTitle" => "Building","data" => $data));
	}
	
	public function store(){
		$this->load->helper('url');
		
		$this->load->model("Building_model");
		$data['store'] = $this->Building_model->getAllStoreName();
		$this->load->view('store', Array("pageTitle" => "Store", "data" => $data));
	}
	
	public function traffic(){
		$this->load->helper('url');
		
		$this->load->view('traffic', Array("pageTitle" => "Traffic"));
	}
	
	public function search_result(){
		$building_id;
		$this->load->helper('url');
		$search_text = $this->input->post("SearchText");
		$search_type = $this->input->post("SearchType");
		
		$this->load->model("Building_model");
		if(isset($search_text)){
			$data['id'] = $this->Building_model->getBuilding($search_text, $search_type);	
		}
		else{
			$error_message="";
		}
		
		$data['building'] = $this->Building_model->getAllBuilding();
		$this->load->view('building', Array("pageTitle" => "Zoo_building","data" => $data ));
	}
	
	public function store_search_result(){
		$building_id;
		$this->load->helper('url');
		$search_text = $this->input->post("SearchText");
		$search_type = $this->input->post("SearchType");
		
		$this->load->model("Building_model");
		if(isset($search_text)){
			$data['id'] = $this->Building_model->getBuilding($search_text, $search_type);	
		}
		else{
			$error_message="";
		}
		
		$data['store'] = $this->Building_model->getAllStoreName();
		$this->load->view('store', Array("pageTitle" => "Zoo_store","data" => $data ));
	}
}

