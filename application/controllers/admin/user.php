<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class User extends CI_Controller {
	function __construct()
	{
		parent::__construct();
		$this->load->library('admin_init_elements');
		if($this->uri->segment('3')=='login')
		{
			//echo "login";
		}
		else
		{
			$this->admin_init_elements->init_elements();
		}
	}
	################################################################
	function index()
	{
		$this->load->model('common_model');
		$table['name'] = 'dumkal_sliders';
		$conditions = array('published'=>1);
		$data['portfolio']=$this->common_model->find_data($table,'count','',$conditions);
		
		$table['name'] = 'dumkal_image_galleries';
		$conditions = array('published'=>1,'category_id'=>'Flats for Resale');
		$data['resale']=$this->common_model->find_data($table,'count','',$conditions);
		
		$table['name'] = 'dumkal_image_galleries';
		$conditions = array('published'=>1,'category_id'=>'Flats for Rent');
		$data['rent']=$this->common_model->find_data($table,'count','',$conditions);
		
		
		
		$data['head'] = $this->load->view('admin/elements/head','',true);
		$data['header'] = $this->load->view('admin/elements/header','',true);
		$data['left_sidebar'] = $this->load->view('admin/elements/left-sidebar','',true);
		$data['footer'] = $this->load->view('admin/elements/footer','',true);
		$data['maincontent']=$this->load->view('admin/maincontents/home',$data,true);
		$this->load->view('admin/layout_after_login',$data);
	}
	######################################################################################
	public function login()
	{
		$this->load->model('user_model');
			if($this->session->flashdata('error_message'))
			{
				$data['error_message'] =  $this->session->flashdata('error_message');
			}
			/*if(!$this->session->userdata('is_admin_logged_in'))
			{*/
			//if($this->input->post('submit'))
				//{
					//echo "sdcsc";die;
					if($this->form_validate() == FALSE)
					{
						$data['error_message']=validation_errors();
					}
					else
					{
						$conditions = array(
											'username'=>$this->input->post('username'),
											'password'=>md5($this->input->post('password'))
											);
											
						$record = $this->user_model->find_data('',$conditions,'row');
						
						if($record)
						{
							$sessiondata = array(
												'user_id' => $record->id,
												'username' => $record->username,
												'is_admin_logged_in' => true
												);
												
							$this->session->set_userdata($sessiondata);
							if($this->session->userdata('is_admin_logged_in') == 1)
							{
								redirect('admin/user');
							}						
						}
						else
						{	
							$this->session->set_flashdata('error_message','Invalid username or password! Please try again.');		
							redirect(current_url());					
						}	
					}					
				//}
			$data['head'] = $this->load->view('admin/elements/head','',true);
			//$data['header'] = $this->load->view('admin/elements/header','',true);
			//$data['footer'] = $this->load->view('admin/elements/footer','',true);
			$data['maincontent'] = $this->load->view('admin/maincontents/login','',true);
			$this->load->view('admin/home_layout', $data);
		//}
		
	}	
	###############################################################################
	
	function change_password()
	{
		$this->load->model('user_model');
		
		if($this->password_validate() == FALSE)
			{//echo "ok";die;
				$data['error_message']=validation_errors();
			}
			else
			{
						$postdata = array(
											'password'=>md5($this->input->post('new_password'))
											);
						 //echo '<pre>';print_r($postdata);
						$user_id = $this->session->userdata('user_id');					
						$success = $this->user_model->save_data($postdata,$user_id);
						
						if($success)
						{	
							$this->session->set_flashdata('success_message','Password changed successfully');	
							redirect(current_url());
						}
						else
						{	
							$this->session->set_flashdata('error_message','Invalid username or password! Please try again.');		
							redirect(current_url());					
						}					
			}	
		$data['head'] = $this->load->view('admin/elements/head','',true);
		$data['header'] = $this->load->view('admin/elements/header','',true);
		$data['left_sidebar'] = $this->load->view('admin/elements/left-sidebar','',true);
		$data['footer'] = $this->load->view('admin/elements/footer','',true);
		$data['maincontent']=$this->load->view('admin/maincontents/add-edit-password-view',$data,true);
		$this->load->view('admin/layout_after_login',$data);
	}
	###############################################################################
	function logout()
	{
		redirect('admin/user/login');
	}
	###############################################################################
	function form_validate()
	{
		$this->load->library('form_validation');
		$this->form_validation->set_rules('username', 'Username', 'required');
		$this->form_validation->set_rules('password', 'Password', 'required');
		if ($this->form_validation->run() == FALSE)
		{
			return FALSE;
		}
		else
		{
			return true;
		}
	}
	
	function password_validate()
	{
		$this->load->library('form_validation');
		$this->form_validation->set_rules('old_password', 'Old Password', 'required|callback_existing_password');
		$this->form_validation->set_rules('new_password', 'New Password', 'required');
		$this->form_validation->set_rules('confirm_password', 'Confirm Password', 'required|matches[new_password]');
		if ($this->form_validation->run() == FALSE)
		{
			return FALSE;
		}
		else
		{
			return true;
		}
	}
	
	function existing_password($str)
	{
		$old_password =  md5($str);
		$data['row'] = $this->user_model->find_data('','','row');
		//echo '<pre>';print_r($data['row']);
		$existing_password = $data['row']->password;
		
		if ($existing_password != $old_password)
		{
			$this->form_validation->set_message('existing_password', 'Old Password is incorrect!');
			return FALSE;
		}
		else
		{
			return TRUE;
		}
		
	}
}

