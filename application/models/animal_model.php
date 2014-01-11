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
}