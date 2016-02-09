<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Manage_city extends CI_Controller {
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
		$this->load->model(array('state_model','city_model'));
	}
	################################################################
	function index()
	{
		$conditions=array('thi_cities.published'=>1);
		//$order_by = array('field'=>'state_name','type'=>'ASC');
		$data['rows'] = $this->city_model->find_data('thi_cities.*,thi_states.state_name',$conditions);
		//echo '<pre>';print_r($data);die;	
		$data['head'] = $this->load->view('admin/elements/head','',true);
		$data['header'] = $this->load->view('admin/elements/header','',true);
		$data['left_sidebar'] = $this->load->view('admin/elements/left-sidebar','',true);
		$data['footer'] = $this->load->view('admin/elements/footer','',true);
		$data['maincontent']=$this->load->view('admin/maincontents/manage-city-list-view',$data,true);
		$this->load->view('admin/layout_after_login',$data);
	}
	######################################################################################
	
	function add()
	{
		$data['action'] = 'Add';
		/* for state list */
		
		$select = 'id,state_name';
		$conditions=array('published'=>1);
		$order_by = array('field'=>'state_name','type'=>'ASC');
		$data['categories']=$this->state_model->find_data($select,$conditions,'list','');
		/* for state list */
		
		/* for insert city */		
					if($this->form_validate() == FALSE)
					{
						$data['error_message']=validation_errors();
					}
					else
					{
						$postdata = array(
											'state_id'=>$this->input->post('state_id'),
											'city_name'=>$this->input->post('city_name'),
											'published'=> 1
											);
									
						$success = $this->city_model->save_data($postdata);						
						if($success)
						{	
							$this->session->set_flashdata('success_message','City successfully inserted');	
							redirect('admin/manage_city');
						}
						else
						{	
							$this->session->set_flashdata('error_message','Invalid username or password! Please try again.');		
							redirect(current_url());					
						}	
					}
		/* for insert city */
		$data['head'] = $this->load->view('admin/elements/head','',true);
		$data['header'] = $this->load->view('admin/elements/header','',true);
		$data['left_sidebar'] = $this->load->view('admin/elements/left-sidebar','',true);
		$data['footer'] = $this->load->view('admin/elements/footer','',true);
		$data['maincontent']=$this->load->view('admin/maincontents/add-edit-city-view',$data,true);
		
		
		
		$this->load->view('admin/layout_after_login',$data);
	}
	######################################################################################
	
	function edit($id)
	{
		$data['action'] = 'Edit';
		/* for state list */		
		$select = 'id,state_name';
		$conditions=array('published'=>1);
		$order_by = array('field'=>'state_name','type'=>'ASC');
		$data['categories']=$this->state_model->find_data($select,$conditions,'list','');
		/* for state list end */
		
		$conditions=array('thi_cities.id'=>$id);
		$data['row'] = $this->city_model->find_data('thi_cities.*,thi_states.state_name',$conditions,'row');
			
		
		/* for update city */		
					if($this->form_validate() == FALSE)
					{
						$data['error_message']=validation_errors();
					}
					else
					{
						$postdata = array(
											'state_id'=>$this->input->post('state_id'),
											'city_name'=>$this->input->post('city_name'),
											'published'=> 1
											);
						//echo '<pre>';print_r($postdata);die;			
						$success = $this->city_model->save_data($postdata,$id);						
						if($success)
						{	
							$this->session->set_flashdata('success_message','City successfully updated');	
							redirect('admin/manage_city');
						}
						else
						{	
							$this->session->set_flashdata('error_message','Invalid username or password! Please try again.');		
							redirect(current_url());					
						}	
					}
		/* for insert city */
		$data['head'] = $this->load->view('admin/elements/head','',true);
		$data['header'] = $this->load->view('admin/elements/header','',true);
		$data['left_sidebar'] = $this->load->view('admin/elements/left-sidebar','',true);
		$data['footer'] = $this->load->view('admin/elements/footer','',true);
		$data['maincontent']=$this->load->view('admin/maincontents/add-edit-city-view',$data,true);
		
		
		
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
		if($this->city_model->delete_data($id))
		{
			$this->session->set_flashdata('success_message','Record has been Deleted successfully.');
			redirect('admin/manage_city');
		}
		else
		{
			$this->session->set_flashdata('error_message','Some error occurred during delete! Please try again.');
			redirect('admin/manage_city');
		}
	}
	
	##############################################################################################
	
	
	function form_validate()
	{
		$this->load->library('form_validation');
		$this->form_validation->set_rules('state_id', 'State Name', 'required');
		
		$this->form_validation->set_rules('city_name', 'City Name', 'required|alpha');
		if ($this->form_validation->run() == FALSE)
		{
			return FALSE;
		}
		else
		{
			return true;
		}
	}
	
	##################################################################################################
	
}

