<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends CI_Controller {


	public function __construct(){
		
		parent::__construct();
		
		$this->load->model("m_home");
		
		}

	public function index()
	{
		$data['categories']=$this->m_home->getAllCategory();
		
		$this->load->view('home',$data);
	}
}
