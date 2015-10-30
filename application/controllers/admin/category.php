<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Category extends CI_Controller {

	
	public function __construct(){
		
		parent::__construct();
		
		$this->load->model('admin/m_category');
		}
	
	public function index()
	{
		if($this->session->userdata("logged_in")){
			
			$this->load->view('admin/addcategory');
			
			}
		else	redirect("admin/login");
		
		
	}
	
	
	public function view()
	{
		if($this->session->userdata("logged_in")){
			
			$data['categories']=$this->m_category->getAllCategory();
			
			$this->load->view('admin/viewcategory',$data);
			
			}
		else	redirect("admin/login");
		
		
	}
	public function addData(){
		
		
		$flag=$this->m_category->addData();
		
		if($flag) $this->session->set_flashdata("message","Data Successfully Uploaded !!!");
		else $this->session->set_flashdata("message","Data Failed to Upload !!!");
		
		redirect("admin/category");
		
		}
	
	
}

