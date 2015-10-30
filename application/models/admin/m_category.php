<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class M_category extends CI_Model {

	
	var $tblname="tbl_category";
	
	public function addData(){
		
			##for image uploading
	
			$imagename=$_FILES['category_image']['name'];
			
			if(empty($imagename)){
				$filename="";
				}
			else{
				
				$source=$_FILES['category_image']['tmp_name'];
				
				$destination="upload/".$imagename;
				
				move_uploaded_file($source,$destination);
				
				$filename=$imagename;
				
				}
			##for check box
			$publish=($this->input->post("category_publish"))?"Y":"N";
			
		
  $insert_data=array("category_name"=>$this->input->post("category_name"),
					  "category_description"=>$this->input->post("category_description"),
					  "category_image"=>$filename,
					  "category_publish"=>$publish);
					  
				return $this->db->insert($this->tblname,$insert_data);
		
		}
	public function getAllCategory(){
		
		$data=$this->db->get($this->tblname);
		
		return $data->result();
		
		}
	
	
}

