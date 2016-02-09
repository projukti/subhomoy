<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Manage_slider extends CI_Controller {
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
		$this->load->model(array('slider_model'));
	}
	################################################################
	function index()
	{
		
		$data['rows'] = $this->slider_model->find_data();
		//echo '<pre>';print_r($data);die;	
		$data['head'] = $this->load->view('admin/elements/head','',true);
		$data['header'] = $this->load->view('admin/elements/header','',true);
		$data['left_sidebar'] = $this->load->view('admin/elements/left-sidebar','',true);
		$data['footer'] = $this->load->view('admin/elements/footer','',true);
		$data['maincontent']=$this->load->view('admin/maincontents/manage-slider-list-view',$data,true);
		$this->load->view('admin/layout_after_login',$data);
	}
	######################################################################################
	
	function add()
	{
		
		$data['action'] = 'Add';
	
		
		/* for insert slider */
		if($this->input->post('slider1') == 1)
		{
			if($this->form_validate() == FALSE)
					{
						$data['error_message']=validation_errors();
					}
					else
					{
			
						$imge = $_FILES["slider_image"]["name"];
			
			if($imge == '')
			{
				$this->session->set_flashdata('message', 'Please upload an image');
				redirect(current_url());
			}
			$exp = explode('.',$imge);
			$imageFileType = $exp[1];
			
			if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif" )
			{
				$this->session->set_flashdata('message', 'Sorry, only JPG, JPEG, PNG & GIF files are allowed');
				redirect(current_url());
			}
			$image = $exp[0].time().'.'.$exp[1];
			$temp = $_FILES["slider_image"]["tmp_name"];
			
			
				/*$imagedetails = getimagesize($_FILES['slider_image']['tmp_name']);
				$width = $imagedetails[0];
				$height = $imagedetails[1];
			
				if($width < 810 && $height < 365)
				{  
					$this->session->set_flashdata('message', 'Sorry file is big');
					redirect(current_url());
				}*/
			
			$fields = array(
			'slider_title' => $this->input->post('slider_title'),
			'slider_description' => $this->input->post('slider_description'),
			'slider_image' => $image,
			'published'		=> 1,
			'date_created'	=>	date('d-m-Y')
			);
			//echo '<pre>';print_r($fields);die;
			$data = $this->slider_model->save_data($fields);
			if($data)
			{
			$this->slider_model->student_file_upload($image,$temp);
			
			$this->session->set_flashdata('success_message','Portfolio Image successfully inserted');	
			redirect('admin/manage_slider');
			}
					
					}
				
			
		}
		/* for insert slider */
		$data['head'] = $this->load->view('admin/elements/head','',true);
		$data['header'] = $this->load->view('admin/elements/header','',true);
		$data['left_sidebar'] = $this->load->view('admin/elements/left-sidebar','',true);
		$data['footer'] = $this->load->view('admin/elements/footer','',true);
		$data['maincontent']=$this->load->view('admin/maincontents/add-edit-slider-view',$data,true);
		
		
		
		$this->load->view('admin/layout_after_login',$data);
	}
	######################################################################################
	
	function edit($id)
	{
		$data['action'] = 'Edit';
		
		$conditions=array('id'=>$id);
		$data['row'] = $this->slider_model->find_data('',$conditions,'row');
		//echo '<pre>';print_r($data['row']);die;
		$data['slider_image'] = $data['row']->slider_image;
		$slider_image = $data['row']->slider_image;
		if($this->input->post('slider1') == 1)
		{
			if($this->form_validate() == FALSE)
					{
						$data['error_message']=validation_errors();
					}
					else
					{
						$published = $data['row']->published;
			$postdata['published'] = $published;
			$postdata['date_modified'] = date('d-m-Y');
			
			$imge = $_FILES["slider_image"]["name"];
				if($imge != '')
				{
					$exp = explode('.',$imge);
					$imageFileType = $exp[1];
					
					if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif" )
					{
						$this->session->set_flashdata('message', 'Sorry, only JPG, JPEG, PNG & GIF files are allowed');
						redirect(current_url());
					}
					$image = $exp[0].time().'.'.$exp[1];
					$temp = $_FILES["slider_image"]["tmp_name"];
					
					$imagedetails = getimagesize($_FILES['slider_image']['tmp_name']);
					$width = $imagedetails[0];
					$height = $imagedetails[1];
				
					/*if($width < 1920 && $height < 1080)
					{  
						$this->session->set_flashdata('message', 'Sorry file is big');
						redirect(current_url());
					}*/
					
					$postdata['slider_image'] = $image;	
					$this->slider_model->student_file_upload($image,$temp);
				}
				else
				{
					$postdata['slider_image'] = $slider_image;	
				}
				
				
				//echo '<pre>';print_r($postdata);die;
				$data = $this->slider_model->save_data($postdata,$id);
				
				if($data) {
				$this->session->set_flashdata('success_message','Portfolio Image successfully updated');	
				redirect('admin/manage_slider');
				}
				else
				{
					redirect('admin/manage_slider');
				}
					}				
			
				
			}
		/* for insert city */
		$data['head'] = $this->load->view('admin/elements/head','',true);
		$data['header'] = $this->load->view('admin/elements/header','',true);
		$data['left_sidebar'] = $this->load->view('admin/elements/left-sidebar','',true);
		$data['footer'] = $this->load->view('admin/elements/footer','',true);
		$data['maincontent']=$this->load->view('admin/maincontents/add-edit-slider-view',$data,true);
		
		
		
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
		if($this->slider_model->delete_data($id))
		{
			$this->session->set_flashdata('success_message','Portfolio Image has been Deleted successfully.');
			redirect('admin/manage_slider');
		}
		else
		{
			$this->session->set_flashdata('error_message','Some error occurred during delete! Please try again.');
			redirect('admin/manage_slider');
		}
	}
	
	##############################################################################################
	
	function deactive($id)
	{
		
		
		$postdata = array(
							'published' => 0
						);
		$deactive = $this->slider_model->save_data($postdata,$id);
		
		if($deactive)
			{	
				$this->session->set_flashdata('success_message','Portfolio Image successfully deactivated');	
				redirect('admin/manage_slider');
			}
		else
			{	
				//$this->session->set_flashdata('error_message','Please try again.');		
				redirect('admin/manage_slider');					
			}
	}
	
	function active($id)
	{
		
		
		$postdata = array(
							'published' => 1
						);
		$deactive = $this->slider_model->save_data($postdata,$id);
		
		if($deactive)
			{	
				$this->session->set_flashdata('success_message','Portfolio Image successfully activated');	
				redirect('admin/manage_slider');
			}
		else
			{	
				//$this->session->set_flashdata('error_message','Please try again.');		
				redirect('admin/manage_slider');					
			}
	}
	
	##############################################################################################
	
	function form_validate()
	{
		$this->load->library('form_validation');
		$this->form_validation->set_rules('slider_title', 'Slider Title', 'required');
		$this->form_validation->set_rules('slider_description', 'Slider Description', 'required');
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

