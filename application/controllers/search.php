<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');  
  
class Search extends CI_Controller {
	
	public function animal_info(){
		$this->load->helper('url');
		$this->load->view('animal_info', Array(
				"pageTitle" => "Zoo_animal"));
	}
	
	public function search_result(){
		$animal_id;
		$this->load->helper('url');
		$search_text = $this->input->post("SearchText");
		$search_type = $this->input->post("SearchType");
		
		$this->load->model("Animal_model");
		if(isset($search_text)){
			$data['id'] = $this->Animal_model->getAnimal($search_text, $search_type);
			
		}
		else{
			$error_message="";
		}
		
		$this->load->view('animal_info', Array(
				"pageTitle" => "Zoo_animal",
				"data" => $data ));
	}
	
	public function editAnimal()
	{
		$this->load->helper('url');
		//load data from user
		$scientific_name = $this->input->post("scientific_name");
		$quantity = $this->input->post("quantity");
		$food = $this->input->post("food");
		$native_area = $this->input->post("native_area");
		$building_id = $this->input->post("building_id");
		$species = $this->input->post("species");
		
		$this->load->model("Animal_model");
		//if ( isset() )
	}
	
	
	
}
