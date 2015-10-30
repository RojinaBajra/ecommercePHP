<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class M_login extends CI_Model {

	
	var $tblname="tbl_user";
	
	public function check_user($uname,$pword){
		
		$this->db->where("user_username",$uname);
		
		$this->db->where("user_password",md5($pword));
		
		$data=$this->db->get($this->tblname);
		
		##finding number of rows
		
		if($data->num_rows()>0){
			
			return $data->row();
			
			}
		else{
			return false;
			}
		
		}
}

