<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class M_home extends CI_Model {

	
	public function getAllCategory(){
		
		$data=$this->db->get("tbl_category");
		
		return $data->result();
		
		}
	
	
}

