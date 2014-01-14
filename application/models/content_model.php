<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Content_model extends CI_Model {

	function __construct()
	{
		parent::__construct();
		$this->load->database();
	}
	
	public function getContent($id){			
			$this->db->select("*");
			$this->db->from("animal");
			$this->db->where('animal.animal_id', $id);
			$this->db->join('animal_name', 'animal_name.Animal_id = animal.Animal_id');
			$this->db->join('building', 'building.Building_id = animal.Building_id');
			$this->db->join('genius_species', 'genius_species.Species = animal.Species');
			$this->db->join('family_genius', 'family_genius.Genius = genius_species.Genius');
			$this->db->join('order_family', 'order_family.Family = family_genius.Family');
			$this->db->join('class_order', 'class_order.Order = order_family.Order');
			$this->db->join('phylum_class', 'phylum_class.Class = class_order.Class');
			$this->db->join('kingdom_phylm', 'kingdom_phylm.Phylum = phylum_class.Phylum');
			$query = $this->db->get();
			
			if($query->num_rows() > 0){
				return $query->result();
			}
			else{
				return -1;
			}
		
	}
}