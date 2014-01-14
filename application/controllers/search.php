<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');  
  
class Search extends CI_Controller {
	
	public function __construct()
	{
		parent::__construct();
		$this->load->library('session');
	}
	
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
	
	//the controller of edit page
	//may be replaced in the future
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
	
	//the controller of editting
	//redirect to edit_animal page after editting
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
			
			$scientific_name = $this->input->post("Scientific_name");
			$quantity = $this->input->post("Quantity");
			$food = $this->input->post("Food");
			$native_area = $this->input->post("Native_area");
			$data['animal'] = array( 'Scientific_name' => $scientific_name, 'Quantity' => $quantity, 'Food' => $food, 'Native_area' => $native_area);
			
			$nickname =$this->input->post("Nickname"); 
			$data['animal_name'] = array( 'Nickname' => $nickname );
			
			$description = $this->input->post("Description");
					
			//load database
			$this->load->model("Animal_model");
			$this->Animal_model->updateAnimal( $id, $data );
			$bid = $this->input->get("BID");
			$this->Animal_model->updateBuilding( $bid, $description );
		}
		
		//$data['id'] = $this->Animal_model->getAnimalById( $id );
		//$this->load->view("edit", $data);
		$url = "/search/content?ID=".$id;
		redirect(site_url($url));
	}
	
	//the controller of deleting
	//redirect to edit_animal page after deleting
	public function deleting_animal()
	{
		$this->load->helper('url');
		$id = $this->input->get("ID");
		if ( isset($id) )
		{
			//load database
			$this->load->model("Animal_model");
			$this->Animal_model->deleteAnimal( $id );
		}
		
		$data["pageTitle"] = "Zoo_animal";
		$this->load->view("animal_info", $data);
	}
	
	//the controller of inserting
	//redirect to edit_animal page after inserting
	public function inserting_animal()
	{
		$this->load->helper('url');
		$scientific_name = $this->input->post("insert_scientific_name");
		$quantity = $this->input->post("insert_quantity");
		$food = $this->input->post("insert_food");
		$native_area = $this->input->post("insert_native_area");
		$this->input->post("insert_description");
		$building_id = $this->input->post("insert_building_id");
		$species = $this->input->post("insert_species");
		$data['animal'] = array( 'Scientific_name' => $scientific_name, 'Quantity' => $quantity, 'Food' => $food, 'Native_area' => $native_area,
				'Building_id' => $building_id, 'Species' => $species );
		$nickname =$this->input->post("insert_nickname");
		$data['animal_name'] = array( 'Nickname' => $nickname );
			
		//load database
		$this->load->model("Animal_model");
		$id = $this->Animal_model->insertAnimal( $data );

		$url = "/search/content?ID=".$id->Animal_id;
		redirect(site_url($url));
	}
	
	public function content(){
		$_GET["ID"];
		$this->load->helper('url');
				
		$this->load->model("Content_model");
		$data['info'] = $this->Content_model->getContent($_GET["ID"]);
		
		$data['acct'] = $this->session->userdata('user');
		if ( $data['acct'] != FALSE )
		{
			$this->load->view('content_controlling', Array(
					"pageTitle" => "Zoo_animal_content_controlling",
					"data" => $data ));
		}
		else
		{
			$this->load->view('content', Array(
					"pageTitle" => "Zoo_animal_content",
					"data" => $data ));			
		}
		
	}
	
	public function insert_animal()
	{
		$this->load->helper('url');
		$this->load->model("Animal_model");
		$data["Species"] = $this->Animal_model->getSpecies(  );
		$data["Building"] = $this->Animal_model->getBuilding(  );
		$this->load->view('insert', Array(
				"pageTitle" => "Zoo_animal_insert",
				"data" => $data ));
	}
}
