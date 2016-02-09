<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Manage_client extends CI_Controller {
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
		$this->load->model(array('Common_model','Gallery_model'));
	}
	################################################################
	function index()
	{
		$table['name'] = 'thi_sliders';
		$data['rows']=$this->Common_model->find_data($table,'array');
		//echo '<pre>';print_r($data['rows']);die;
		
		$data['head'] = $this->load->view('admin/elements/head','',true);
		$data['header'] = $this->load->view('admin/elements/header','',true);
		$data['left_sidebar'] = $this->load->view('admin/elements/left-sidebar','',true);
		$data['footer'] = $this->load->view('admin/elements/footer','',true);
		$data['maincontent']=$this->load->view('admin/maincontents/manage-client-list-view',$data,true);
		
		$this->load->view('admin/layout_after_login',$data);
	}
	######################################################################################
	
	
	
	
	#################################  Photo gallery START #####################################
	
	
	function add()
	{
	
		$data['action'] = 'Add';
		
		
		/* for insert image */	
		if($this->input->post('slider1') == 1)
		{	
					
					
						$nt = $_FILES["slider_image"]["name"];
			
						if($nt == '')
						{
							$this->session->set_flashdata('message', 'Please upload a image');
							redirect(current_url());
						}
						$exp = explode('.',$nt);
						$imageFileType = $exp[1];
						
						if($imageFileType != "jpg" && $imageFileType != "PNG" && $imageFileType != "jpeg" && $imageFileType != "gif" )
						{
							$this->session->set_flashdata('message', 'Sorry, only JPG, JPEG, PNG & GIF files are allowed');
							redirect(current_url());
						}
						$notice = $exp[0].time().'.'.$exp[1];
						$temp = $_FILES["slider_image"]["tmp_name"];
						
						$postdata = array(											
											'slider_image'=>$notice,
											'date_created'=> date('d-m-Y'),
											'published'=> 1
											);
						//echo '<pre>';print_r($postdata);die;
						$table['name']='thi_sliders';			
						$success = $this->Common_model->save_data($table,$postdata);						
						if($success)
						{	
							$this->client_image_upload($notice,$temp);
							$this->session->set_flashdata('success_message','Client Image successfully inserted');	
							redirect('admin/manage_client');
						}
						else
						{	
							$this->session->set_flashdata('error_message','Invalid username or password! Please try again.');		
							redirect(current_url());					
						}	
					
		}
		/* for insert image */
		$data['head'] = $this->load->view('admin/elements/head','',true);
		$data['header'] = $this->load->view('admin/elements/header','',true);
		$data['left_sidebar'] = $this->load->view('admin/elements/left-sidebar','',true);
		$data['footer'] = $this->load->view('admin/elements/footer','',true);
		$data['maincontent']=$this->load->view('admin/maincontents/add-edit-client-view',$data,true);
		
		
		
		$this->load->view('admin/layout_after_login',$data);
		
	}
	######################################################################################
	
	function edit($id)
	{
		
		$data['action'] = 'Edit';
		
		
		
		$conditions=array('id'=>$id);
		$table['name'] = 'thi_sliders';
		$data['row'] = $this->Common_model->find_data($table,'row','',$conditions);
		
	
		
		/* for update gallery image */		
					
		if($this->input->post('slider1') == 1)
		{	
					
					
						$nt = $_FILES["slider_image"]["name"];
						
						if($nt == '')
						{
						$nt = $data['row']->slider_image;
						}
						else
						{
						$nt = $_FILES["slider_image"]["name"];
						}
			
						if($nt == '')
						{
							$this->session->set_flashdata('message', 'Please upload a image');
							redirect(current_url());
						}
						$exp = explode('.',$nt);
						$imageFileType = $exp[1];
						
						if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif" )
						{
							$this->session->set_flashdata('message', 'Sorry, only JPG, JPEG, PNG & GIF files are allowed');
							redirect(current_url());
						}
						if($nt != $data['row']->slider_image)
						{
						$notice = $exp[0].time().'.'.$exp[1];
						}
						else
						{
						$notice = $data['row']->slider_image;	
						}
						$temp = $_FILES["slider_image"]["tmp_name"];
						
						$postdata = array(											
											'slider_image'=>$notice,
											'date_modified'=> date('d-m-Y'),
											'published'=> 1
											);
						//echo '<pre>';print_r($postdata);die;
						$table['name']='thi_sliders';			
						$success = $this->Common_model->save_data($table,$postdata,$id);						
						if($success)
						{	
							if($nt != '')
							{
								$this->client_image_upload($notice,$temp);	
							}
							
							$this->session->set_flashdata('success_message','Client Image successfully updated');	
							redirect('admin/manage_client');
						}
						else
						{	
							redirect('admin/manage_client');					
						}	
					
		}
		/* for update gallery image */
		$data['head'] = $this->load->view('admin/elements/head','',true);
		$data['header'] = $this->load->view('admin/elements/header','',true);
		$data['left_sidebar'] = $this->load->view('admin/elements/left-sidebar','',true);
		$data['footer'] = $this->load->view('admin/elements/footer','',true);
		$data['maincontent']=$this->load->view('admin/maincontents/add-edit-client-view',$data,true);
		
		
		
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
		
		$table['name']='thi_sliders';
		if($this->Common_model->delete_data($table,$id))
		{
			$this->session->set_flashdata('success_message','Record has been Deleted successfully.');
			redirect('admin/manage_client');
		}
		else
		{
			$this->session->set_flashdata('error_message','Some error occurred during delete! Please try again.');
			redirect('admin/manage_client');
		}
	}
	
	##############################################################################################
	
	
	function client_image_upload($img,$tmp)
	   {
		   $image_path = 'uploads/client_image/';
		   //echo $image_path;die;
		   if(move_uploaded_file($tmp,$image_path.$img))
		   return true;
	   }
	
	#################################  Photo gallery END #####################################
	
}

