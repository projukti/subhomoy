<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class User extends CI_Controller 
{
	function __construct()
	{
		parent::__construct();
		$this->load->model('user_model');
	}
	
	public function index()
	{		
		if($this->input->post('submit'))
		{
			$conditions = array(
								'username'=>$this->input->post('username'),
								'password'=>md5($this->input->post('password'))
								);
								
			$record = $this->user_model->find_data('',$conditions,'row');
			//print_r($record);
			if($record)
			{
				$sessiondata = array(
									'user_id' => $record->id,
									'username' => $record->username,
									'is_user_logged_in' => true
									);
									
				$this->session->set_userdata($sessiondata);
				if($this->session->userdata('is_user_logged_in') == 1)
				{
					redirect('admin/user/success');
				}
				else
				{
					redirect('admin/user');
				}	
			}			
		}
		$data['head'] = $this->load->view('admin/elements/head','',true);
		$data['header'] = $this->load->view('admin/elements/header','',true);
		$data['footer'] = $this->load->view('admin/elements/footer','',true);
		$data['maincontent'] = $this->load->view('admin/maincontents/login','',true);
		$this->load->view('admin/home_layout', $data);
	
	}
	
	public function success()
	{
		
		$data['head'] = $this->load->view('admin/elements/head','',true);
		$data['header'] = $this->load->view('admin/elements/header','',true);
		$data['footer'] = $this->load->view('admin/elements/footer','',true);
		$data['maincontent'] = $this->load->view('admin/maincontents/home','',true);
		$this->load->view('admin/layout_after_login', $data);
		
		/*echo "<pre>";
		print_r($this->session->all_userdata());*/
	}
	
	function logout()
	{
		redirect('admin/user');
	}
}

