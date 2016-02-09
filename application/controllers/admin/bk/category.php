<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Category extends CI_Controller 
{
	function __construct()
	{
		parent::__construct();
		$this->load->model('category_model');
	}
	
	public function index()
	{		
		
		$data['head'] = $this->load->view('admin/elements/head','',true);
		$data['header'] = $this->load->view('admin/elements/header','',true);
		$data['footer'] = $this->load->view('admin/elements/footer','',true);
		$data['maincontent'] = $this->load->view('admin/maincontents/home','',true);
		$this->load->view('admin/layout_after_login', $data);
	
	}
	
	
}

