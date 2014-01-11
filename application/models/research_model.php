<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Research_model extends CI_Model {

	function __construct()
	{
		parent::__construct();
		$this->load->database();
	}
	
	public function getResearch(){
			$this->db->select("*");
			$this->db->from("research");
			$query = $this->db->get();
			
			if($query->num_rows() > 0){
				return $query->result();
			}
			else{
				return "no result.";
			}
	}
	
	public function getActivity(){
			$this->db->select("*");
			$this->db->from("activity");
			$this->db->join('building', 'building.building_id=activity.building_id');
			$query = $this->db->get();
			
			if($query->num_rows() > 0){
				return $query->result();
			}
			else{
				return "no result.";
			}
	}
}