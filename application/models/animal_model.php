<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Animal_model extends CI_Model {

	function __construct()
	{
		parent::__construct();
		$this->load->database();
	}
	
	public function getAnimal($text, $type){
		$this->db->select("*");
		$this->db->from("animal");
		$this->db->join('animal_name', 'animal_name.Animal_id = animal.Animal_id');
		
		if( $type == "Nickname" ){			
			$this->db->like('Nickname', $text);
		}
		else if( $type == "Food" ){
			$this->db->like('Food', $text);
		}
		else if ($type == "Native_area"){
			$this->db->like('Native_area', $text);
		}
		else if ($type == "Building"){
			$this->db->join('building', 'building.Building_id = animal.Building_id');
			$this->db->like('Description', $text);
		}
		else if ($type == "Kingdom"){
			$this->db->join('genius_species', 'genius_species.Species = animal.Species');
			$this->db->join('family_genius', 'family_genius.Genius = genius_species.Genius');
			$this->db->join('order_family', 'order_family.Family = family_genius.Family');
			$this->db->join('class_order', 'class_order.Order = order_family.Order');
			$this->db->join('phylum_class', 'phylum_class.Class = class_order.Class');
			$this->db->join('kingdom_phylm', 'kingdom_phylm.Phylum = phylum_class.Phylum');
			$this->db->like('Kingdom', $text);
		}
		else if ($type == "Phylum"){
			$this->db->join('genius_species', 'genius_species.Species = animal.Species');
			$this->db->join('family_genius', 'family_genius.Genius = genius_species.Genius');
			$this->db->join('order_family', 'order_family.Family = family_genius.Family');
			$this->db->join('class_order', 'class_order.Order = order_family.Order');
			$this->db->join('phylum_class', 'phylum_class.Class = class_order.Class');
			$this->db->like('Phylum', $text);
		}
		else if ($type == "Class"){
			$this->db->join('genius_species', 'genius_species.Species = animal.Species');
			$this->db->join('family_genius', 'family_genius.Genius = genius_species.Genius');
			$this->db->join('order_family', 'order_family.Family = family_genius.Family');
			$this->db->join('class_order', 'class_order.Order = order_family.Order');
			$this->db->like('Class', $text);
		}
		else if ($type == "Order"){
			$this->db->join('genius_species', 'genius_species.Species = animal.Species');
			$this->db->join('family_genius', 'family_genius.Genius = genius_species.Genius');
			$this->db->join('order_family', 'order_family.Family = family_genius.Family');
			$this->db->like('Order', $text);
		}
		else{
			$this->db->join('genius_species', 'genius_species.Species = animal.Species');
			$this->db->join('family_genius', 'family_genius.Genius = genius_species.Genius');
			$this->db->like('Family', $text);		
		}
		
		$query = $this->db->get();
		if($query->num_rows() > 0){
			return $query->result();
		}
		else{
			return -1;
		}
	}
	
	//input id
	//id is the id of the animal
	//get the animal entry with the given id
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
			return -1;
		}	
	}
	
	//input id and data
	//id is the id of the animal
	//data['animal'] is the array of the changed data in animal table
	//data['animal_name'] is the array of the changed data in animal_name table
	//update the animal and animal_name table  
	public function updateAnimal( $id, $data )
	{
		//echo "data[Scientific_name] = ".$data["Scientific_name"];
		$where = $id;
		$this->db->where("Animal_id", $where);
		$this->db->update("animal", $data['animal']);
		$this->db->where("Animal_id", $where);
		$this->db->update("animal_name", $data['animal_name']);
	}
	
	//input id
	//id is the id of the animal
	//delete the animal entry in table animal and animal_name table with the given id
	public function deleteAnimal( $id )
	{
		$this->db->where("Animal_id", $id);
		$this->db->delete("animal_name");
		$this->db->where("Animal_id", $id);
		$this->db->delete("animal");
	}
	
	//input data
	//data['animal'] is the array of the inserted data in animal table
	//data['animal_name'] is the array of the inserted data in animal_name table
	//insert entry in the animal and animal_name table
	public function insertAnimal( $data )
	{
		$this->db->insert("animal", $data['animal']);
		
		//get inserting id
		$this->db->select("Animal_id");
		$this->db->where( $data['animal']);
		$this->db->from("animal");
		$query = $this->db->get();
		if($query->num_rows() > 0){
			$data['animal_name']["Animal_id"] = $query->row()->Animal_id;
			$this->db->insert("animal_name", $data['animal_name']);
			return $query->row();
		}
	}
	
	public function updateBuilding( $bid, $description )
	{
		$this->db->where("Building_id", $bid);
		$this->db->update("building", array("Description" => $description) );
	}
}