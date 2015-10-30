<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class M_product extends CI_Model {

	
	var $tblname="tbl_product";
	
	public function addData(){
		
			##for image uploading
	
			$imagename=$_FILES['product_image']['name'];
			
			if(empty($imagename)){
				$filename="";
				}
			else{
				
				$source=$_FILES['product_image']['tmp_name'];
				
				$destination="upload/product/".$imagename;
				
				move_uploaded_file($source,$destination);
				
				$filename=$imagename;
				
				}
			##for check box
			$feature=($this->input->post("product_feature"))?"Y":"N";
			
			##for check box
			$publish=($this->input->post("product_publish"))?"Y":"N";
			
		
  $insert_data=array("category_id"=>$this->input->post("category_id"),
  					"product_name"=>$this->input->post("product_name"),
					  "product_description"=>$this->input->post("product_description"),
					  "product_image"=>$filename,
					  "product_brand"=>$this->input->post("product_brand"),
					  "product_price"=>$this->input->post("product_price"),
					  "product_quantity"=>$this->input->post("product_quantity"),
					  "product_feature"=>$feature,
					  "product_publish"=>$publish);
					  
				return $this->db->insert($this->tblname,$insert_data);
		
		}
	public function getAllProduct(){
		
		$data=$this->db->query("SELECT * FROM $this->tblname p LEFT JOIN tbl_category c ON p.category_id=c.category_id");
		
		return $data->result();
		
		}
	public function edit($id){
		
		$this->db->where("product_id",$id);
		
		$data=$this->db->get($this->tblname);
		
		return $data->row();
		
		}
	public function update(){
		
		$id=$this->input->post("product_id");
		
		##for check box
		$feature=($this->input->post("product_feature"))?"Y":"N";
			
		##for check box
		$publish=($this->input->post("product_publish"))?"Y":"N";
		
		
		
		##for image uploading
	
			$imagename=$_FILES['product_image']['name'];
			
			if(empty($imagename)){
				
				$update_data=array("category_id"=>$this->input->post("category_id"),
  					"product_name"=>$this->input->post("product_name"),
					  "product_description"=>$this->input->post("product_description"),
					  "product_brand"=>$this->input->post("product_brand"),
					  "product_price"=>$this->input->post("product_price"),
					  "product_quantity"=>$this->input->post("product_quantity"),
					  "product_feature"=>$feature,
					  "product_publish"=>$publish);
				}
			else{
				
				$source=$_FILES['product_image']['tmp_name'];
				
				$destination="upload/product/".$imagename;
				
				move_uploaded_file($source,$destination);
				
				$filename=$imagename;
				
				$update_data=array("category_id"=>$this->input->post("category_id"),
  					"product_name"=>$this->input->post("product_name"),
					  "product_description"=>$this->input->post("product_description"),
					  "product_image"=>$filename,
					  "product_brand"=>$this->input->post("product_brand"),
					  "product_price"=>$this->input->post("product_price"),
					  "product_quantity"=>$this->input->post("product_quantity"),
					  "product_feature"=>$feature,
					  "product_publish"=>$publish);
				
				}
				
			$this->db->where("product_id",$id);	
				
			return $this->db->update($this->tblname,$update_data);
			
		
		
		
		}
	

	
}

