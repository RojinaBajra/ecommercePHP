<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login extends CI_Controller {

	
	public function __construct(){
		
		parent::__construct();
		
		$this->load->model('admin/m_login');
		}
	
	public function index()
	{
		$this->load->view('admin/login');
	}
	
	public function check_user(){
		
		$username=$this->input->post("username");
		
		$password=$this->input->post("password");
		
		$usercheck=$this->m_login->check_user($username,$password);
		
		if($usercheck){
			##setting session
			
			$this->session->set_userdata("logged_in",$usercheck);
			
			redirect("admin/home");
			
			}
		else{
			
			##setting error messsage in flash data session
			
			$this->session->set_flashdata("login_message","Invalid Username or Password");
			redirect("admin/login");
			}
		
		}
}

