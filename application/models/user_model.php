
<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class User_model extends CI_Model {

	function __construct()
	{
		parent::__construct();
	}
	
	public function getUser($account,$password){
		$this->db->select("Zookeeper_id,password");
		$query = $this->db->get_where("zookeeper", Array(
				"Zookeeper_id" => $account,
				"password" => $password ));
		/* If there are tuples */
		if ($query->num_rows() > 0){
			return $query->row();	// return first tuple  
		}
		else{
			return null;
		}
	}
}