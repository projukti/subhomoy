<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Manage_result extends CI_Controller {
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
		$this->load->model(array('Common_model'));
	}
	################################################################
	function index()
	{
		
		$conditions=array('published'=>1);
		
		$table['name']='dumkal_result';
		$order_by[0] = array('field'=>'subjectCode','type'=>'DESC'); 
		
		$data['rows']=$this->Common_model->find_data($table,'array','',$conditions,'','','',$order_by);
		//echo '<pre>';print_r($data['rows']);die;
		
		$data['head'] = $this->load->view('admin/elements/head','',true);
		$data['header'] = $this->load->view('admin/elements/header','',true);
		$data['left_sidebar'] = $this->load->view('admin/elements/left-sidebar','',true);
		$data['footer'] = $this->load->view('admin/elements/footer','',true);
		$data['maincontent']=$this->load->view('admin/maincontents/manage-result-list-view',$data,true);
		$this->load->view('admin/layout_after_login',$data);
	}
	######################################################################################
	
	
	function add()
	{
		$data['action'] = 'Add';
		
		
		
		/* for insert result */		
					if($this->form_validate() == FALSE)
					{
						$data['error_message']=validation_errors();
					}
					else
					{
						$table['name']='dumkal_result';
						$postdata = array(
											'subjectCode'=> $this->input->post('subjectCode'),
											'appeared'=> strtoupper($this->input->post('appeared')),
											//'passed'=> $this->input->post('passed'),
											'published'=> 1
											);
					   //echo '<pre>';print_r($postdata);die;		
						$success = $this->Common_model->save_data($table,$postdata);						
						if($success)
						{	
							$this->session->set_flashdata('success_message','Offer Text successfully inserted');	
							redirect('admin/manage_result/index');
						}
						else
						{	
							$this->session->set_flashdata('error_message','Please try again.');		
							redirect(current_url());					
						}	
					}
		/* for insert result */
		$data['head'] = $this->load->view('admin/elements/head','',true);
		$data['header'] = $this->load->view('admin/elements/header','',true);
		$data['left_sidebar'] = $this->load->view('admin/elements/left-sidebar','',true);
		$data['footer'] = $this->load->view('admin/elements/footer','',true);
		$data['maincontent']=$this->load->view('admin/maincontents/add-edit-result-view',$data,true);
		
		
		
		$this->load->view('admin/layout_after_login',$data);
	}
	######################################################################################
	
	function edit($id)
	{
		$data['action'] = 'Edit';
		
	
		
		
		$conditions = array('id'=>$id);
		$table['name']='dumkal_result';
		$data['row'] = $this->Common_model->find_data($table,'row','',$conditions);
		//echo '<pre>';print_r($data);die;
		
		/* for update result */		
					if($this->form_validate() == FALSE)
					{
						$data['error_message']=validation_errors();
					}
					else
					{
						$table['name']='dumkal_result';
						$postdata = array(
											'subjectCode'=>$this->input->post('subjectCode'),
											'appeared'=>strtoupper($this->input->post('appeared')),
											//'passed'=>$this->input->post('passed'),
											'published'=> 1
											);
						//echo '<pre>';print_r($postdata);die;		
						$success = $this->Common_model->save_data($table,$postdata,$id);						
						if($success)
						{	
							$this->session->set_flashdata('success_message','Offer Text successfully updated');	
							redirect('admin/manage_result/index');
						}
						else
						{	
							redirect('admin/manage_result/index');			
						}	
					}			
		/* for update result */
		$data['head'] = $this->load->view('admin/elements/head','',true);
		$data['header'] = $this->load->view('admin/elements/header','',true);
		$data['left_sidebar'] = $this->load->view('admin/elements/left-sidebar','',true);
		$data['footer'] = $this->load->view('admin/elements/footer','',true);
		$data['maincontent']=$this->load->view('admin/maincontents/add-edit-result-view',$data,true);
		
		
		
		$this->load->view('admin/layout_after_login',$data);
	}
	######################################################################################
	
	function confirmDelete($id)
	{
		if($this->session->flashdata('success_message'))
		{
			$data['success_message'] =  $this->session->flashdata('success_message');
		}
		if($this->session->flashdata('error_message'))
		{
			$data['error_message'] =  $this->session->flashdata('error_message');
		}
		
		$table['name']='dumkal_result';
		if($this->Common_model->delete_data($table,$id))
		{
			$this->session->set_flashdata('success_message','Offer Text has been Deleted successfully.');
			redirect('admin/manage_result');
		}
		else
		{
			$this->session->set_flashdata('error_message','Some error occurred during delete! Please try again.');
			redirect('admin/manage_result');
		}
	}
	
	##############################################################################################
	
	
	function form_validate()
	{
		$this->load->library('form_validation');
		$this->form_validation->set_rules('subjectCode', 'Subject Code', 'required');
		$this->form_validation->set_rules('appeared', 'Appeared', 'required');
		//$this->form_validation->set_rules('passed', 'Passed', 'required');
		
		if ($this->form_validation->run() == FALSE)
		{
			return FALSE;
		}
		else
		{
			return true;
		}
	}
	
	#################################  MAIN PAGE END #####################################
	
	
	
}

