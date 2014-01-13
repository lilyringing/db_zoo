<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Animal_model extends CI_Model {

	function __construct()
	{
		parent::__construct();
		$this->load->database();
	}
	
	public function getAnimal($text, $type){
		if( $type == "Nickname" ){			
			$this->db->select("*");
			$this->db->from("animal");
			$this->db->join('animal_name', 'animal_name.Animal_id = animal.Animal_id');
			$this->db->like('Nickname', $text);
			$query = $this->db->get();
			
			if($query->num_rows() > 0){
				return $query->result();
			}
			else{
				return "no result.";
			}
		}
		else if( $type == "Food" ){
			$this->db->select("*");
			$this->db->from("animal");
			$this->db->join('animal_name', 'animal_name.Animal_id = animal.Animal_id');
			$this->db->like('Food', $text);
			$query = $this->db->get();
				
			if($query->num_rows() > 0){
				return $query->result();
			}
			else{
				return "no result.";
			}	
		}
		else{
			$this->db->select("*");
			$this->db->from("animal");
			$this->db->join('animal_name', 'animal_name.Animal_id = animal.Animal_id');
			$this->db->like('Native_area', $text);
			$query = $this->db->get();
				
			if($query->num_rows() > 0){
				return $query->result();
			}
			else{
				return "no result.";
			}
		}
	}
	public function getAnimalById($id){
		
		$this->db->select("*");
		$this->db->from("animal");
		$this->db->join('animal_name', 'animal_name.Animal_id = animal.Animal_id');
		$this->db->where('animal.Animal_id', $id);
		$query = $this->db->get();
				
		if($query->num_rows() > 0){
			return $query->result();
		}
		else{
			return "no result.";
		}	
	}
	
	//input id and data
	//id is the id of the animal
	//data is the array of the changed data  
	public function updateAnimal( $id, $data )
	{
		$where = "Animal_id = $id";
		$str = $this->db->update_string("animal", $data, $where);
	}
	
}