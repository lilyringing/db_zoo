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
	
	public function edit_animal( )
	{
		$this->load->helper('url');
		//need to do login check
		//not yet done
		$id = $this->input->post("animal_id");
		
		$this->load->model("Animal_model");
		$data = $this->Animal_model->getAnimalById( $id );
		
		$this->load->view("edit", Array(
				"pageTitle" => "Zoo_animal",
				"data" => $data ));
		
	}
	
	public function editing_animal( $id )
	{
		$this->load->helper('url');
		
		//need to do login check
		//not yet done
		
		echo "hi";
		
		//load data from user
		/*$scientific_name = $this->input->post("scientific_name");
		if ( isset( $scientific_name ) )
		{
			echo "="+$scientific_name+"=";
		}
		
		if ( isset($this->input->post("quantity")) )
		{
			$quantity = $this->input->post("quantity");
		}
		if ( isset($this->input->post("food")) )
		{
			$food = $this->input->post("food");
		}
		if ( isset($this->input->post("native_area")) )
		{
			$native_area = $this->input->post("native_area");
		}
		*/
		$scientific_name = $this->input->post("scientific_name");
		$quantity = $this->input->post("quantity");
		$food = $this->input->post("food");
		$native_area = $this->input->post("native_area");
		$building_id = $this->input->post("building_id");
		$species = $this->input->post("species");
		$data = array( 'scientific_name' => $scientific_name, 'quantity' => $quantity, 'food' => $food, 'native_area' => $native_area,
				'building_id' => $building_id, 'species' => $species );
		
		//load database
		$this->load->model("Animal_model");
		$this->Animal_model->updateAnimal( $id, $data );
		/*$this->load->view('animal_info', Array(
				"pageTitle" => "Zoo_animal",
				"data" => $data ));*/
	}
	
	public function content(){
		$_GET["ID"];
		$this->load->helper('url');
		$this->load->view('content', Array(
				"pageTitle" => "Zoo_animal_content"));
				
		$this->load->model("Content_model");
		
		$data['id'] = $this->Content_model->getContent($_GET["ID"]);
		
		$this->load->view('content', Array(
				"pageTitle" => "Zoo_animal_content",
				"data" => $data ));
	}
}
