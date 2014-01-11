<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');  
  
class Display extends CI_Controller {
	
	public function building(){
		$this->load->helper('url');
		$this->load->view('building', Array("pageTitle" => "Building"));
	}
	
	public function store(){
		$this->load->helper('url');
		$this->load->view('store', Array("pageTitle" => "Store"));
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
		
		$this->load->view('building', Array("pageTitle" => "Zoo_building","data" => $data ));
	}
	
	public function search_result2(){
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
		
		$this->load->view('store', Array("pageTitle" => "Zoo_store","data" => $data ));
	}
}

