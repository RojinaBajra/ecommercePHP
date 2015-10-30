<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Product extends CI_Controller {

	
	public function __construct(){
		
		parent::__construct();
		
		$this->load->model('admin/m_product');
		
		$this->load->model('admin/m_category');
		}
	
	public function index()
	{
		if($this->session->userdata("logged_in")){
			
			$data['categories']=$this->m_category->getAllCategory();
			
			$this->load->view('admin/product/addproduct',$data);
			
			}
		else	redirect("admin/login");
		
		
	}
	
	
	public function view()
	{
		if($this->session->userdata("logged_in")){
			
			$data['products']=$this->m_product->getAllProduct();
			
			$this->load->view('admin/product/viewproduct',$data);
			
			}
		else	redirect("admin/login");
		
		
	}
	public function addData(){
		
		
		$flag=$this->m_product->addData();
		
		if($flag) $this->session->set_flashdata("message","Data Successfully Uploaded !!!");
		else $this->session->set_flashdata("message","Data Failed to Upload !!!");
		
		redirect("admin/product");
		
		}
	public function edit($id){
		
		$data['edit']=$this->m_product->edit($id);
		
		$data['categories']=$this->m_category->getAllCategory();
		
		$this->load->view('admin/product/addproduct',$data);
		
		}
	public function update(){
		
		$this->m_product->update();
		
		redirect("admin/product/view");
		}
	
	
}

