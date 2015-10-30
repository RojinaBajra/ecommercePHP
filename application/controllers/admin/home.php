<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends CI_Controller {

	
	public function __construct(){
		
		parent::__construct();
		
		$this->load->model('admin/m_login');
		}
	
	public function index()
	{
		if($this->session->userdata("logged_in")){
			
			$this->load->view('admin/home');
			
			}
		else	redirect("admin/login");
		
		
	}
	public function logout(){
		
		$this->session->unset_userdata("logged_in");
		
		redirect("admin/home");
		
		}
	
	
}

