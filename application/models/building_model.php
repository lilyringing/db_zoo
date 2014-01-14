<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Building_model extends CI_Model {

	function __construct()
	{
		parent::__construct();
		$this->load->database();
	}
	
	public function getBuilding($text, $type){
		if( $type == "Description" ){			
			$this->db->select("*");
			$this->db->from("building");
			$this->db->join('zookeeper', 'zookeeper.Zookeeper_id = building.Curator_id');
			$this->db->like('Description', $text);
			$query = $this->db->get();
			
			if($query->num_rows() > 0){
				return $query->result();
			}
			else{
				return "no result.";
			}
		}
		else if( $type == "Curator" ){
			$this->db->select("*");
			$this->db->from("building");
			$this->db->join('zookeeper', 'zookeeper.Zookeeper_id = building.Curator_id');
			$this->db->like('zookeeper_name', $text);
			$query = $this->db->get();
			
			if($query->num_rows() > 0){
				return $query->result();
			}
			else{
				return "no result.";
			}
		}
		else if( $type == "Shop_name" ){
			$this->db->select("*");
			$this->db->from("Shop");
			$this->db->join('building', 'building.Building_id = shop.Building_id');
			$this->db->like('Shop_name', $text);
			$query = $this->db->get();
			
			if($query->num_rows() > 0){
				return $query->result();
			}
			else{
				return "no result.";
			}
		}
		else if($type == "Location" ){
			$this->db->select("*");
			$this->db->from("Shop");
			$this->db->join('building', 'building.Building_id = shop.Building_id');
			$this->db->like('Location', $text);
			$query = $this->db->get();
			
			if($query->num_rows() > 0){
				return $query->result();
			}
			else{
				return "no result.";
			}
		}
		else if($type == "Product" ){
			$this->db->select("*");
			$this->db->from("Shop");
			$this->db->join('building', 'building.Building_id = shop.Building_id');
			$this->db->like('Product', $text);
			$query = $this->db->get();
			
			if($query->num_rows() > 0){
				return $query->result();
			}
			else{
				return "no result.";
			}
		}
	}
	
	public function getAllBuilding()
	{
		$this->db->select("*");
		$this->db->from("building");
		$this->db->join('zookeeper', 'zookeeper.Zookeeper_id = building.Curator_id');
		$query = $this->db->get();
			
		if($query->num_rows() > 0){
			return $query->result();
		}
		else{
			return "no result.";
		}
	}
	
	public function getAllStoreName()
	{
		$this->db->select("Shop_name");
		$this->db->from("Shop");
		
		$query = $this->db->get();
			
		if($query->num_rows() > 0){
			return $query->result();
		}
		else{
			return "no result.";
		}
	}
}