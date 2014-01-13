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
		$id = $this->input->post("id");

		$this->load->model("Animal_model");
		
		if(isset($id)){
			$data['id'] = $this->Animal_model->getAnimalById( $id );
		}
		$data["pageTitle"] = "Zoo_edit";
		$this->load->view("edit", $data);
		
	}
	
	public function editing_animal(  )
	{
		$this->load->helper('url');
		
		//need to do login check
		//not yet done

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
		$id = $this->input->get("ID");

		if ( isset($id) )
		{
			
			$scientific_name = $this->input->post("scientific_name");
			$quantity = $this->input->post("quantity");
			$food = $this->input->post("food");
			$native_area = $this->input->post("native_area");
			$building_id = $this->input->post("building_id");
			$species = $this->input->post("species");
			$data['animal'] = array( 'Scientific_name' => $scientific_name, 'Quantity' => $quantity, 'Food' => $food, 'Native_area' => $native_area,
					'Building_id' => $building_id, 'Species' => $species );
			$nickname =$this->input->post("nickname"); 
			$data['animal_name'] = array( 'Nickname' => $nickname );
		}
		
		
		//load database
		$this->load->model("Animal_model");
		$this->Animal_model->updateAnimal( $id, $data );
		$data["pageTitle"] = "Zoo_edit";
		$data['id'] = $this->Animal_model->getAnimalById( $id );
		$this->load->view("edit", $data);
	}
	
	public function content(){
		$_GET["ID"];
		$this->load->helper('url');
				
		$this->load->model("Content_model");
		$data['info'] = $this->Content_model->getContent($_GET["ID"]);
		
		$this->load->view('content', Array(
				"pageTitle" => "Zoo_animal_content",
				"data" => $data ));
	}
}
