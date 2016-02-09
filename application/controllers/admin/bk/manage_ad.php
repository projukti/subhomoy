<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Manage_ad extends CI_Controller {
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
		$this->load->model(array('add_model','Common_model'));
	}
	################################################################
	function index()
	{
		
		$data['rows'] = $this->hotel_model->find_all();
		//echo '<pre>';print_r($data);die;
		$data['head'] = $this->load->view('admin/elements/head','',true);
		$data['header'] = $this->load->view('admin/elements/header','',true);
		$data['left_sidebar'] = $this->load->view('admin/elements/left-sidebar','',true);
		$data['footer'] = $this->load->view('admin/elements/footer','',true);
		$data['maincontent']=$this->load->view('admin/maincontents/manage-hotel-list-view',$data,true);
		$this->load->view('admin/layout_after_login',$data);
	}
	######################################################################################
	
	function right_panel()
	{
		
		/*if($this->input->post('submit'))
		{*/
		
		
		$conditions = array('hidden_value'=>1,'published'=>1);
		$data['row1'] = $this->add_model->find_data('',$conditions,'row','','',1,0);
		//echo '<pre>';print_r($data['row1']);die;
		$conditions = array('hidden_value'=>2,'published'=>1);
		$data['row2'] = $this->add_model->find_data('',$conditions,'row','','',1,0);
		
		$conditions = array('hidden_value'=>3,'published'=>1);
		$data['row3'] = $this->add_model->find_data('',$conditions,'row','','',1,0);
		
			if($this->input->post('adid') == 1)
			{							
					$imge = $_FILES["ad1"]["name"];
					$expiry_date1 = $this->input->post('expiry_date1');
					$action = $this->input->post('action');
					if($expiry_date1 == '')
					{
						$this->session->set_flashdata('expiry_date1', 'Please select expiry date');
						//$this->session->set_flashdata('message1', 'Please upload an image');
						//redirect(current_url());
					}
					
					if($imge == '' && $action == 'add')
					{
						$this->session->set_flashdata('message1', 'Please upload an image');
						//redirect(current_url());
					}
					$exp = explode('.',$imge);
					$imageFileType = $exp[1];
					
					
					if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif" && $imageFileType != "")
					{
						$this->session->set_flashdata('message1', 'Sorry, only JPG, JPEG, PNG & GIF files are allowed');
						redirect(current_url());
					}
					$image = $exp[0].time().'.'.$exp[1];
					$temp = $_FILES["ad1"]["tmp_name"];
					
					
						$imagedetails = getimagesize($_FILES['ad1']['tmp_name']);
						$width = $imagedetails[0];
						$height = $imagedetails[1];
					
						/*if($width < 1920 && $height < 1080)
						{  
							$this->session->set_flashdata('message1', 'Sorry file is big');
							redirect(current_url());
						}*/
						
					if($this->input->post('action') == 'add')
					{
						$fields = array(
									'image' => $image,
									'expiry_date' => $expiry_date1,
									'published'		=> 1,
									'hidden_value'	=>	$this->input->post('adid')
										);
					//echo '<pre>';print_r($fields);die;
					$data = $this->add_model->save_data($fields);
					}
					else if($this->input->post('action') == 'edit')
					{
						$id1 = $data['row1']->id;
						if($imge != '')
						{
							$fields['image'] = $image;
						}
						else
						{
							$fields['image'] = $data['row1']->image;
						}
						$fields['expiry_date'] = $expiry_date1;
						$fields['published'] = 1;
						$fields['hidden_value'] = $this->input->post('adid');
					
					//echo '<pre>';print_r($fields);die;
					$data = $this->add_model->save_data($fields,$id1);
					}
					
					
					if($data)
					{
					$this->load->helper("url");
					$file_name = $data['row1']->image;
					//echo base_url("uploads/right_panel_add/" . $file_name);die;
					delete_files(base_url("uploads/right_panel_add/" . $file_name));
					$this->add_model->student_file_upload($image,$temp);
					
					if($this->input->post('action') == 'add') {
					$this->session->set_flashdata('success_message1','Add 1 successfully inserted');
					}
					else if($this->input->post('action') == 'edit') {
					$this->session->set_flashdata('success_message1','Add 1 successfully updated');	
					}
					redirect('admin/manage_ad/right_panel');
					}			
			}
			else if($this->input->post('adid') == 2)
			{
											
					$imge = $_FILES["ad2"]["name"];
					$expiry_date2 = $this->input->post('expiry_date2');
					$action = $this->input->post('action');
					if($expiry_date2 == '')
					{
						$this->session->set_flashdata('expiry_date2', 'Please select expiry date');
						//$this->session->set_flashdata('message2', 'Please upload an image');
						//redirect(current_url());
					}
					
					if($imge == '' && $action == 'add')
					{
						$this->session->set_flashdata('message2', 'Please upload an image');
						//redirect(current_url());
					}
					$exp = explode('.',$imge);
					$imageFileType = $exp[1];
					
					
					if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif" && $imageFileType != "")
					{
						$this->session->set_flashdata('message2', 'Sorry, only JPG, JPEG, PNG & GIF files are allowed');
						redirect(current_url());
					}
					$image = $exp[0].time().'.'.$exp[1];
					$temp = $_FILES["ad2"]["tmp_name"];
					
					
						$imagedetails = getimagesize($_FILES['ad2']['tmp_name']);
						$width = $imagedetails[0];
						$height = $imagedetails[1];
					
						/*if($width < 1920 && $height < 1080)
						{  
							$this->session->set_flashdata('message2', 'Sorry file is big');
							redirect(current_url());
						}*/
					if($this->input->post('action') == 'add')
					{
						$fields = array(
									'image' => $image,
									'expiry_date' => $expiry_date2,
									'published'		=> 1,
									'hidden_value'	=>	$this->input->post('adid')
										);
					//echo '<pre>';print_r($fields);die;
					$data = $this->add_model->save_data($fields);
					}
					else if($this->input->post('action') == 'edit')
					{
						$id2 = $data['row2']->id;
						if($imge != '')
						{
							$fields['image'] = $image;
						}
						else
						{
							$fields['image'] = $data['row2']->image;
						}
						$fields['expiry_date'] = $expiry_date2;
						$fields['published'] = 1;
						$fields['hidden_value'] = $this->input->post('adid');
					
					//echo '<pre>';print_r($fields);die;
					$data = $this->add_model->save_data($fields,$id2);
					}
					
					
					if($data)
					{
					$this->load->helper("url");
					$file_name = $data['row2']->image;
					//echo base_url("uploads/right_panel_add/" . $file_name);die;
					delete_files(base_url("uploads/right_panel_add/" . $file_name));
					$this->add_model->student_file_upload($image,$temp);
					
					if($this->input->post('action') == 'add') {
					$this->session->set_flashdata('success_message2','Add 2 successfully inserted');
					}
					else if($this->input->post('action') == 'edit') {
					$this->session->set_flashdata('success_message2','Add 2 successfully updated');	
					}
					redirect('admin/manage_ad/right_panel');
					}			
						
			}
			else if($this->input->post('adid') == 3)
			{
											
					$imge = $_FILES["ad3"]["name"];
					$expiry_date3 = $this->input->post('expiry_date3');
					$action = $this->input->post('action');
					if($expiry_date3 == '')
					{
						$this->session->set_flashdata('expiry_date3', 'Please select expiry date');
						//$this->session->set_flashdata('message1', 'Please upload an image');
						//redirect(current_url());
					}
					
					if($imge == '' && $action == 'add')
					{
						$this->session->set_flashdata('message3', 'Please upload an image');
						//redirect(current_url());
					}
					$exp = explode('.',$imge);
					$imageFileType = $exp[1];
					
					
					if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif" && $imageFileType != "")
					{
						$this->session->set_flashdata('message3', 'Sorry, only JPG, JPEG, PNG & GIF files are allowed');
						redirect(current_url());
					}
					$image = $exp[0].time().'.'.$exp[1];
					$temp = $_FILES["ad3"]["tmp_name"];
					
					
						$imagedetails = getimagesize($_FILES['ad3']['tmp_name']);
						$width = $imagedetails[0];
						$height = $imagedetails[1];
					
						/*if($width < 1920 && $height < 1080)
						{  
							$this->session->set_flashdata('message3', 'Sorry file is big');
							redirect(current_url());
						}*/
					if($this->input->post('action') == 'add')
					{
						$fields = array(
									'image' => $image,
									'expiry_date' => $expiry_date3,
									'published'		=> 1,
									'hidden_value'	=>	$this->input->post('adid')
										);
					//echo '<pre>';print_r($fields);die;
					$data = $this->add_model->save_data($fields);
					}
					else if($this->input->post('action') == 'edit')
					{
						$id3 = $data['row3']->id;
						if($imge != '')
						{
							$fields['image'] = $image;
						}
						else
						{
							$fields['image'] = $data['row3']->image;
						}
						$fields['expiry_date'] = $expiry_date3;
						$fields['published'] = 1;
						$fields['hidden_value'] = $this->input->post('adid');
					
					//echo '<pre>';print_r($fields);die;
					$data = $this->add_model->save_data($fields,$id3);
					}
					
					
					if($data)
					{
					$this->load->helper("url");
					$file_name = $data['row3']->image;
					//echo base_url("uploads/right_panel_add/" . $file_name);die;
					delete_files(base_url("uploads/right_panel_add/" . $file_name));
					$this->add_model->student_file_upload($image,$temp);
					
					if($this->input->post('action') == 'add') {
					$this->session->set_flashdata('success_message3','Add 3 successfully inserted');
					}
					else if($this->input->post('action') == 'edit') {
					$this->session->set_flashdata('success_message3','Add 3 successfully updated');	
					}
					redirect('admin/manage_ad/right_panel');
					}			
			
			}
		//}
		$data['head'] = $this->load->view('admin/elements/head','',true);
		$data['header'] = $this->load->view('admin/elements/header','',true);
		$data['left_sidebar'] = $this->load->view('admin/elements/left-sidebar','',true);
		$data['footer'] = $this->load->view('admin/elements/footer','',true);
		$data['maincontent']=$this->load->view('admin/maincontents/manage-right-panel-view',$data,true);
		$this->load->view('admin/layout_after_login',$data);
	}
	
	######################################################################################
	
	function header_panel()
	{
		$data = array(); 
		
		$table['name'] = 'thi_header_ads';
		$conditions = array('hidden_value'=>11,'published'=>1);
		$data['row11'] = $this->Common_model->find_data($table,'row','',$conditions,'');
		
		$conditions = array('hidden_value'=>12,'published'=>1);
		$data['row12'] = $this->Common_model->find_data($table,'row','',$conditions,'');
		
		$conditions = array('hidden_value'=>13,'published'=>1);
		$data['row13'] = $this->Common_model->find_data($table,'row','',$conditions,'');
		
		$conditions = array('hidden_value'=>21,'published'=>1);
		$data['row21'] = $this->Common_model->find_data($table,'row','',$conditions,'');
		
		$conditions = array('hidden_value'=>22,'published'=>1);
		$data['row22'] = $this->Common_model->find_data($table,'row','',$conditions,'');
		
		$conditions = array('hidden_value'=>23,'published'=>1);
		$data['row23'] = $this->Common_model->find_data($table,'row','',$conditions,'');
		
		$conditions = array('hidden_value'=>31,'published'=>1);
		$data['row31'] = $this->Common_model->find_data($table,'row','',$conditions,'');
		
		$conditions = array('hidden_value'=>32,'published'=>1);
		$data['row32'] = $this->Common_model->find_data($table,'row','',$conditions,'');
		
		$conditions = array('hidden_value'=>33,'published'=>1);
		$data['row33'] = $this->Common_model->find_data($table,'row','',$conditions,'');
		
			if($this->input->post('adid') == 11)
			{							
					$imge = $_FILES["ad11"]["name"];
					$expiry_date11 = date_create($this->input->post('expiry_date11'));
					$expiry_date11 = date_format($expiry_date11,"d-m-Y");
					
					$action = $this->input->post('action');
					if($expiry_date11 == '')
					{
						$this->session->set_flashdata('expiry_date11', 'Please select expiry date');
						//$this->session->set_flashdata('message1', 'Please upload an image');
						//redirect(current_url());
					}
					
					if($imge == '' && $action == 'add')
					{
						$this->session->set_flashdata('message11', 'Please upload an image');
						//redirect(current_url());
					}
					$exp = explode('.',$imge);
					$imageFileType = $exp[1];
					
					
					if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif" && $imageFileType != "")
					{
						$this->session->set_flashdata('message11', 'Sorry, only JPG, JPEG, PNG & GIF files are allowed');
						redirect(current_url());
					}
					$image = $exp[0].time().'.'.$exp[1];
					$temp = $_FILES["ad11"]["tmp_name"];
					
					
						$imagedetails = getimagesize($_FILES['ad11']['tmp_name']);
						$width = $imagedetails[0];
						$height = $imagedetails[1];
					
						/*if($width < 1920 && $height < 1080)
						{  
							$this->session->set_flashdata('message11', 'Sorry file is big');
							redirect(current_url());
						}*/
						
					if($this->input->post('action') == 'add')
					{
						$fields = array(
									'image' => $image,
									'expiry_date' => $expiry_date11,
									'published'		=> 1,
									'hidden_value'	=>	$this->input->post('adid')
										);
					
					
					
					$table['name'] = 'thi_header_ads';
					$data = $this->Common_model->save_data($table,$fields);
					}
					else if($this->input->post('action') == 'edit')
					{
						$id11 = $data['row11']->id;
						if($imge != '')
						{
							$fields['image'] = $image;
						}
						else
						{
							$fields['image'] = $data['row11']->image;
						}
						$fields['expiry_date'] = $expiry_date11;
						$fields['published'] = 1;
						$fields['hidden_value'] = $this->input->post('adid');
					
					//echo '<pre>';print_r($fields);die;
					$table['name'] = 'thi_header_ads';
					$data = $this->Common_model->save_data($table,$fields,$id11);
					}
					
					
					if($data)
					{
					$this->Common_model->student_file_upload($image,$temp);
					
					if($this->input->post('action') == 'add') {
					$this->session->set_flashdata('success_message11','Ads 1.1 successfully inserted');
					}
					else if($this->input->post('action') == 'edit') {
					$this->session->set_flashdata('success_message11','Ads 1.1 successfully updated');	
					}
					redirect('admin/manage_ad/header_panel');
					}			
			}
			
			if($this->input->post('adid') == 12)
			{							
					$imge = $_FILES["ad12"]["name"];
					$expiry_date12 = date_create($this->input->post('expiry_date12'));
					$expiry_date12 = date_format($expiry_date12,"d-m-Y");
					
					$action = $this->input->post('action');
					if($expiry_date12 == '')
					{
						$this->session->set_flashdata('expiry_date12', 'Please select expiry date');
						//$this->session->set_flashdata('message21', 'Please upload an image');
						//redirect(current_url());
					}
					
					if($imge == '' && $action == 'add')
					{
						$this->session->set_flashdata('message12', 'Please upload an image');
						//redirect(current_url());
					}
					$exp = explode('.',$imge);
					$imageFileType = $exp[1];
					
					
					if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif" && $imageFileType != "")
					{
						$this->session->set_flashdata('message12', 'Sorry, only JPG, JPEG, PNG & GIF files are allowed');
						redirect(current_url());
					}
					$image = $exp[0].time().'.'.$exp[1];
					$temp = $_FILES["ad12"]["tmp_name"];
					
					
						$imagedetails = getimagesize($_FILES['ad12']['tmp_name']);
						$width = $imagedetails[0];
						$height = $imagedetails[1];
					
						/*if($width < 1920 && $height < 1080)
						{  
							$this->session->set_flashdata('message12', 'Sorry file is big');
							redirect(current_url());
						}*/
						
					if($this->input->post('action') == 'add')
					{
						$fields = array(
									'image' => $image,
									'expiry_date' => $expiry_date12,
									'published'		=> 1,
									'hidden_value'	=>	$this->input->post('adid')
										);
					
					
					
					$table['name'] = 'thi_header_ads';
					$data = $this->Common_model->save_data($table,$fields);
					}
					else if($this->input->post('action') == 'edit')
					{
						$id12 = $data['row12']->id;
						if($imge != '')
						{
							$fields['image'] = $image;
						}
						else
						{
							$fields['image'] = $data['row12']->image;
						}
						$fields['expiry_date'] = $expiry_date12;
						$fields['published'] = 1;
						$fields['hidden_value'] = $this->input->post('adid');
					
					//echo '<pre>';print_r($fields);die;
					$table['name'] = 'thi_header_ads';
					$data = $this->Common_model->save_data($table,$fields,$id12);
					}					
					
					if($data)
					{
					$this->Common_model->student_file_upload($image,$temp);
					
					if($this->input->post('action') == 'add') {
					$this->session->set_flashdata('success_message12','Ads 1.2 successfully inserted');
					}
					else if($this->input->post('action') == 'edit') {
					$this->session->set_flashdata('success_message12','Ads 1.2 successfully updated');	
					}
					redirect('admin/manage_ad/header_panel');
					}			
			}
			
			if($this->input->post('adid') == 13)
			{							
					$imge = $_FILES["ad13"]["name"];
					$expiry_date13 = date_create($this->input->post('expiry_date13'));
					$expiry_date13 = date_format($expiry_date13,"d-m-Y");
					
					$action = $this->input->post('action');
					if($expiry_date13 == '')
					{
						$this->session->set_flashdata('expiry_date13', 'Please select expiry date');
						//$this->session->set_flashdata('message1', 'Please upload an image');
						//redirect(current_url());
					}
					
					if($imge == '' && $action == 'add')
					{
						$this->session->set_flashdata('message13', 'Please upload an image');
						//redirect(current_url());
					}
					$exp = explode('.',$imge);
					$imageFileType = $exp[1];
					
					
					if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif" && $imageFileType != "")
					{
						$this->session->set_flashdata('message13', 'Sorry, only JPG, JPEG, PNG & GIF files are allowed');
						redirect(current_url());
					}
					$image = $exp[0].time().'.'.$exp[1];
					$temp = $_FILES["ad13"]["tmp_name"];
					
					
						$imagedetails = getimagesize($_FILES['ad13']['tmp_name']);
						$width = $imagedetails[0];
						$height = $imagedetails[1];
					
						/*if($width < 1920 && $height < 1080)
						{  
							$this->session->set_flashdata('message13', 'Sorry file is big');
							redirect(current_url());
						}*/
						
					if($this->input->post('action') == 'add')
					{
						$fields = array(
									'image' => $image,
									'expiry_date' => $expiry_date13,
									'published'		=> 1,
									'hidden_value'	=>	$this->input->post('adid')
										);
					
					
					
					$table['name'] = 'thi_header_ads';
					$data = $this->Common_model->save_data($table,$fields);
					}
					else if($this->input->post('action') == 'edit')
					{
						$id13 = $data['row13']->id;
						if($imge != '')
						{
							$fields['image'] = $image;
						}
						else
						{
							$fields['image'] = $data['row13']->image;
						}
						$fields['expiry_date'] = $expiry_date13;
						$fields['published'] = 1;
						$fields['hidden_value'] = $this->input->post('adid');
					
					//echo '<pre>';print_r($fields);die;
					$table['name'] = 'thi_header_ads';
					$data = $this->Common_model->save_data($table,$fields,$id13);
					}
					
					
					if($data)
					{
					$this->Common_model->student_file_upload($image,$temp);
					
					if($this->input->post('action') == 'add') {
					$this->session->set_flashdata('success_message13','Ads 1.3 successfully inserted');
					}
					else if($this->input->post('action') == 'edit') {
					$this->session->set_flashdata('success_message13','Ads 1.3 successfully updated');	
					}
					redirect('admin/manage_ad/header_panel');
					}			
			}
		
			if($this->input->post('adid') == 21)
			{							
					$imge = $_FILES["ad21"]["name"];
					$expiry_date21 = date_create($this->input->post('expiry_date21'));
					$expiry_date21 = date_format($expiry_date21,"d-m-Y");
					
					$action = $this->input->post('action');
					if($expiry_date21 == '')
					{
						$this->session->set_flashdata('expiry_date21', 'Please select expiry date');
						//$this->session->set_flashdata('message1', 'Please upload an image');
						//redirect(current_url());
					}
					
					if($imge == '' && $action == 'add')
					{
						$this->session->set_flashdata('message21', 'Please upload an image');
						//redirect(current_url());
					}
					$exp = explode('.',$imge);
					$imageFileType = $exp[1];
					
					
					if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif" && $imageFileType != "")
					{
						$this->session->set_flashdata('message21', 'Sorry, only JPG, JPEG, PNG & GIF files are allowed');
						redirect(current_url());
					}
					$image = $exp[0].time().'.'.$exp[1];
					$temp = $_FILES["ad21"]["tmp_name"];
					
					
						$imagedetails = getimagesize($_FILES['ad21']['tmp_name']);
						$width = $imagedetails[0];
						$height = $imagedetails[1];
					
						/*if($width < 1920 && $height < 1080)
						{  
							$this->session->set_flashdata('message21', 'Sorry file is big');
							redirect(current_url());
						}*/
						
					if($this->input->post('action') == 'add')
					{
						$fields = array(
									'image' => $image,
									'expiry_date' => $expiry_date21,
									'published'		=> 1,
									'hidden_value'	=>	$this->input->post('adid')
										);
					
					
					
					$table['name'] = 'thi_header_ads';
					$data = $this->Common_model->save_data($table,$fields);
					}
					else if($this->input->post('action') == 'edit')
					{
						$id21 = $data['row21']->id;
						if($imge != '')
						{
							$fields['image'] = $image;
						}
						else
						{
							$fields['image'] = $data['row21']->image;
						}
						$fields['expiry_date'] = $expiry_date21;
						$fields['published'] = 1;
						$fields['hidden_value'] = $this->input->post('adid');
					
					//echo '<pre>';print_r($fields);die;
					$table['name'] = 'thi_header_ads';
					$data = $this->Common_model->save_data($table,$fields,$id21);
					}
					
					
					if($data)
					{
					$this->Common_model->student_file_upload($image,$temp);
					
					if($this->input->post('action') == 'add') {
					$this->session->set_flashdata('success_message21','Ads 2.1 successfully inserted');
					}
					else if($this->input->post('action') == 'edit') {
					$this->session->set_flashdata('success_message21','Ads 2.1 successfully updated');	
					}
					redirect('admin/manage_ad/header_panel');
					}			
			}
			
			if($this->input->post('adid') == 22)
			{							
					$imge = $_FILES["ad22"]["name"];
					$expiry_date22 = date_create($this->input->post('expiry_date22'));
					$expiry_date22 = date_format($expiry_date22,"d-m-Y");
					
					$action = $this->input->post('action');
					if($expiry_date22 == '')
					{
						$this->session->set_flashdata('expiry_date22', 'Please select expiry date');
						//$this->session->set_flashdata('message21', 'Please upload an image');
						//redirect(current_url());
					}
					
					if($imge == '' && $action == 'add')
					{
						$this->session->set_flashdata('message22', 'Please upload an image');
						//redirect(current_url());
					}
					$exp = explode('.',$imge);
					$imageFileType = $exp[1];
					
					
					if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif" && $imageFileType != "")
					{
						$this->session->set_flashdata('message22', 'Sorry, only JPG, JPEG, PNG & GIF files are allowed');
						redirect(current_url());
					}
					$image = $exp[0].time().'.'.$exp[1];
					$temp = $_FILES["ad22"]["tmp_name"];
					
					
						$imagedetails = getimagesize($_FILES['ad22']['tmp_name']);
						$width = $imagedetails[0];
						$height = $imagedetails[1];
					
						/*if($width < 1920 && $height < 1080)
						{  
							$this->session->set_flashdata('message22', 'Sorry file is big');
							redirect(current_url());
						}*/
						
					if($this->input->post('action') == 'add')
					{
						$fields = array(
									'image' => $image,
									'expiry_date' => $expiry_date22,
									'published'		=> 1,
									'hidden_value'	=>	$this->input->post('adid')
										);
					
					
					
					$table['name'] = 'thi_header_ads';
					$data = $this->Common_model->save_data($table,$fields);
					}
					else if($this->input->post('action') == 'edit')
					{
						$id22 = $data['row22']->id;
						if($imge != '')
						{
							$fields['image'] = $image;
						}
						else
						{
							$fields['image'] = $data['row22']->image;
						}
						$fields['expiry_date'] = $expiry_date22;
						$fields['published'] = 1;
						$fields['hidden_value'] = $this->input->post('adid');
					
					//echo '<pre>';print_r($fields);die;
					$table['name'] = 'thi_header_ads';
					$data = $this->Common_model->save_data($table,$fields,$id22);
					}					
					
					if($data)
					{
					$this->Common_model->student_file_upload($image,$temp);
					
					if($this->input->post('action') == 'add') {
					$this->session->set_flashdata('success_message22','Ads 2.2 successfully inserted');
					}
					else if($this->input->post('action') == 'edit') {
					$this->session->set_flashdata('success_message22','Ads 2.2 successfully updated');	
					}
					redirect('admin/manage_ad/header_panel');
					}			
			}
			
			if($this->input->post('adid') == 23)
			{							
					$imge = $_FILES["ad23"]["name"];
					$expiry_date23 = date_create($this->input->post('expiry_date23'));
					$expiry_date23 = date_format($expiry_date23,"d-m-Y");
					
					$action = $this->input->post('action');
					if($expiry_date23 == '')
					{
						$this->session->set_flashdata('expiry_date23', 'Please select expiry date');
						//$this->session->set_flashdata('message1', 'Please upload an image');
						//redirect(current_url());
					}
					
					if($imge == '' && $action == 'add')
					{
						$this->session->set_flashdata('message23', 'Please upload an image');
						//redirect(current_url());
					}
					$exp = explode('.',$imge);
					$imageFileType = $exp[1];
					
					
					if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif" && $imageFileType != "")
					{
						$this->session->set_flashdata('message23', 'Sorry, only JPG, JPEG, PNG & GIF files are allowed');
						redirect(current_url());
					}
					$image = $exp[0].time().'.'.$exp[1];
					$temp = $_FILES["ad23"]["tmp_name"];
					
					
						$imagedetails = getimagesize($_FILES['ad23']['tmp_name']);
						$width = $imagedetails[0];
						$height = $imagedetails[1];
					
						/*if($width < 1920 && $height < 1080)
						{  
							$this->session->set_flashdata('message23', 'Sorry file is big');
							redirect(current_url());
						}*/
						
					if($this->input->post('action') == 'add')
					{
						$fields = array(
									'image' => $image,
									'expiry_date' => $expiry_date23,
									'published'		=> 1,
									'hidden_value'	=>	$this->input->post('adid')
										);
					
					
					
					$table['name'] = 'thi_header_ads';
					$data = $this->Common_model->save_data($table,$fields);
					}
					else if($this->input->post('action') == 'edit')
					{
						$id23 = $data['row23']->id;
						if($imge != '')
						{
							$fields['image'] = $image;
						}
						else
						{
							$fields['image'] = $data['row23']->image;
						}
						$fields['expiry_date'] = $expiry_date23;
						$fields['published'] = 1;
						$fields['hidden_value'] = $this->input->post('adid');
					
					//echo '<pre>';print_r($fields);die;
					$table['name'] = 'thi_header_ads';
					$data = $this->Common_model->save_data($table,$fields,$id23);
					}
					
					
					if($data)
					{
					$this->Common_model->student_file_upload($image,$temp);
					
					if($this->input->post('action') == 'add') {
					$this->session->set_flashdata('success_message23','Ads 2.3 successfully inserted');
					}
					else if($this->input->post('action') == 'edit') {
					$this->session->set_flashdata('success_message23','Ads 2.3 successfully updated');	
					}
					redirect('admin/manage_ad/header_panel');
					}			
			}
			
			if($this->input->post('adid') == 31)
			{							
					$imge = $_FILES["ad31"]["name"];
					$expiry_date31 = date_create($this->input->post('expiry_date31'));
					$expiry_date31 = date_format($expiry_date31,"d-m-Y");
					
					$action = $this->input->post('action');
					if($expiry_date31 == '')
					{
						$this->session->set_flashdata('expiry_date31', 'Please select expiry date');
						//$this->session->set_flashdata('message1', 'Please upload an image');
						//redirect(current_url());
					}
					
					if($imge == '' && $action == 'add')
					{
						$this->session->set_flashdata('message31', 'Please upload an image');
						//redirect(current_url());
					}
					$exp = explode('.',$imge);
					$imageFileType = $exp[1];
					
					
					if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif" && $imageFileType != "")
					{
						$this->session->set_flashdata('message31', 'Sorry, only JPG, JPEG, PNG & GIF files are allowed');
						redirect(current_url());
					}
					$image = $exp[0].time().'.'.$exp[1];
					$temp = $_FILES["ad31"]["tmp_name"];
					
					
						$imagedetails = getimagesize($_FILES['ad31']['tmp_name']);
						$width = $imagedetails[0];
						$height = $imagedetails[1];
					
						/*if($width < 1920 && $height < 1080)
						{  
							$this->session->set_flashdata('message31', 'Sorry file is big');
							redirect(current_url());
						}*/
						
					if($this->input->post('action') == 'add')
					{
						$fields = array(
									'image' => $image,
									'expiry_date' => $expiry_date31,
									'published'		=> 1,
									'hidden_value'	=>	$this->input->post('adid')
										);
					
					
					
					$table['name'] = 'thi_header_ads';
					$data = $this->Common_model->save_data($table,$fields);
					}
					else if($this->input->post('action') == 'edit')
					{
						$id31 = $data['row31']->id;
						if($imge != '')
						{
							$fields['image'] = $image;
						}
						else
						{
							$fields['image'] = $data['row31']->image;
						}
						$fields['expiry_date'] = $expiry_date31;
						$fields['published'] = 1;
						$fields['hidden_value'] = $this->input->post('adid');
					
					//echo '<pre>';print_r($fields);die;
					$table['name'] = 'thi_header_ads';
					$data = $this->Common_model->save_data($table,$fields,$id31);
					}
					
					
					if($data)
					{
					$this->Common_model->student_file_upload($image,$temp);
					
					if($this->input->post('action') == 'add') {
					$this->session->set_flashdata('success_message31','Ads 3.1 successfully inserted');
					}
					else if($this->input->post('action') == 'edit') {
					$this->session->set_flashdata('success_message31','Ads 3.1 successfully updated');	
					}
					redirect('admin/manage_ad/header_panel');
					}			
			}
			
			if($this->input->post('adid') == 32)
			{							
					$imge = $_FILES["ad32"]["name"];
					$expiry_date32 = date_create($this->input->post('expiry_date32'));
					$expiry_date32 = date_format($expiry_date32,"d-m-Y");
					
					$action = $this->input->post('action');
					if($expiry_date32 == '')
					{
						$this->session->set_flashdata('expiry_date32', 'Please select expiry date');
						//$this->session->set_flashdata('message21', 'Please upload an image');
						//redirect(current_url());
					}
					
					if($imge == '' && $action == 'add')
					{
						$this->session->set_flashdata('message32', 'Please upload an image');
						//redirect(current_url());
					}
					$exp = explode('.',$imge);
					$imageFileType = $exp[1];
					
					
					if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif" && $imageFileType != "")
					{
						$this->session->set_flashdata('message32', 'Sorry, only JPG, JPEG, PNG & GIF files are allowed');
						redirect(current_url());
					}
					$image = $exp[0].time().'.'.$exp[1];
					$temp = $_FILES["ad32"]["tmp_name"];
					
					
						$imagedetails = getimagesize($_FILES['ad32']['tmp_name']);
						$width = $imagedetails[0];
						$height = $imagedetails[1];
					
						/*if($width < 1920 && $height < 1080)
						{  
							$this->session->set_flashdata('message32', 'Sorry file is big');
							redirect(current_url());
						}*/
						
					if($this->input->post('action') == 'add')
					{
						$fields = array(
									'image' => $image,
									'expiry_date' => $expiry_date32,
									'published'		=> 1,
									'hidden_value'	=>	$this->input->post('adid')
										);
					
					
					
					$table['name'] = 'thi_header_ads';
					$data = $this->Common_model->save_data($table,$fields);
					}
					else if($this->input->post('action') == 'edit')
					{
						$id32 = $data['row32']->id;
						if($imge != '')
						{
							$fields['image'] = $image;
						}
						else
						{
							$fields['image'] = $data['row32']->image;
						}
						$fields['expiry_date'] = $expiry_date32;
						$fields['published'] = 1;
						$fields['hidden_value'] = $this->input->post('adid');
					
					//echo '<pre>';print_r($fields);die;
					$table['name'] = 'thi_header_ads';
					$data = $this->Common_model->save_data($table,$fields,$id32);
					}					
					
					if($data)
					{
					$this->Common_model->student_file_upload($image,$temp);
					
					if($this->input->post('action') == 'add') {
					$this->session->set_flashdata('success_message32','Ads 3.2 successfully inserted');
					}
					else if($this->input->post('action') == 'edit') {
					$this->session->set_flashdata('success_message32','Ads 3.2 successfully updated');	
					}
					redirect('admin/manage_ad/header_panel');
					}			
			}
			
			if($this->input->post('adid') == 33)
			{							
					$imge = $_FILES["ad33"]["name"];
					$expiry_date33 = date_create($this->input->post('expiry_date33'));
					$expiry_date33 = date_format($expiry_date33,"d-m-Y");
					
					$action = $this->input->post('action');
					if($expiry_date33 == '')
					{
						$this->session->set_flashdata('expiry_date33', 'Please select expiry date');
						//$this->session->set_flashdata('message1', 'Please upload an image');
						//redirect(current_url());
					}
					
					if($imge == '' && $action == 'add')
					{
						$this->session->set_flashdata('message33', 'Please upload an image');
						//redirect(current_url());
					}
					$exp = explode('.',$imge);
					$imageFileType = $exp[1];
					
					
					if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif" && $imageFileType != "")
					{
						$this->session->set_flashdata('message33', 'Sorry, only JPG, JPEG, PNG & GIF files are allowed');
						redirect(current_url());
					}
					$image = $exp[0].time().'.'.$exp[1];
					$temp = $_FILES["ad33"]["tmp_name"];
					
					
						$imagedetails = getimagesize($_FILES['ad33']['tmp_name']);
						$width = $imagedetails[0];
						$height = $imagedetails[1];
					
						/*if($width < 1920 && $height < 1080)
						{  
							$this->session->set_flashdata('message33', 'Sorry file is big');
							redirect(current_url());
						}*/
						
					if($this->input->post('action') == 'add')
					{
						$fields = array(
									'image' => $image,
									'expiry_date' => $expiry_date33,
									'published'		=> 1,
									'hidden_value'	=>	$this->input->post('adid')
										);
					
					
					
					$table['name'] = 'thi_header_ads';
					$data = $this->Common_model->save_data($table,$fields);
					}
					else if($this->input->post('action') == 'edit')
					{
						$id33 = $data['row33']->id;
						if($imge != '')
						{
							$fields['image'] = $image;
						}
						else
						{
							$fields['image'] = $data['row33']->image;
						}
						$fields['expiry_date'] = $expiry_date33;
						$fields['published'] = 1;
						$fields['hidden_value'] = $this->input->post('adid');
					
					//echo '<pre>';print_r($fields);die;
					$table['name'] = 'thi_header_ads';
					$data = $this->Common_model->save_data($table,$fields,$id33);
					}
					
					
					if($data)
					{
					$this->Common_model->student_file_upload($image,$temp);
					
					if($this->input->post('action') == 'add') {
					$this->session->set_flashdata('success_message33','Ads 3.3 successfully inserted');
					}
					else if($this->input->post('action') == 'edit') {
					$this->session->set_flashdata('success_message33','Ads 3.3 successfully updated');	
					}
					redirect('admin/manage_ad/header_panel');
					}			
			}
			
		
		$data['head'] = $this->load->view('admin/elements/head','',true);
		$data['header'] = $this->load->view('admin/elements/header','',true);
		$data['left_sidebar'] = $this->load->view('admin/elements/left-sidebar','',true);
		$data['footer'] = $this->load->view('admin/elements/footer','',true);
		$data['maincontent']=$this->load->view('admin/maincontents/manage-header-panel-view',$data,true);
		$this->load->view('admin/layout_after_login',$data);
	}
	
	######################################################################################
	
	
	function confirmDelete($id,$hidden_value)
	{
		if($hidden_value == 1) {	
		$conditions = array('hidden_value'=>$hidden_value,'published'=>1,'id'=>$id);
		$data['row1'] = $this->add_model->find_data('',$conditions,'row','','',1,0);
		$image = $data['row1']->image;
		$expiry_date = $data['row1']->expiry_date;
		$published = $data['row1']->published;
		}
		else if($hidden_value == 2) {	
		$conditions = array('hidden_value'=>$hidden_value,'published'=>1,'id'=>$id);
		$data['row2'] = $this->add_model->find_data('',$conditions,'row','','',1,0);
		$expiry_date = $data['row2']->expiry_date;
		$published = $data['row2']->published;
		}
		
		else if($hidden_value == 3) {	
		$conditions = array('hidden_value'=>$hidden_value,'published'=>1,'id'=>$id);
		$data['row3'] = $this->add_model->find_data('',$conditions,'row','','',1,0);
		$expiry_date = $data['row3']->expiry_date;
		$published = $data['row3']->published;
		}
		
		if($this->session->flashdata('success_message'))
		{
			$data['success_message'] =  $this->session->flashdata('success_message');
		}
		if($this->session->flashdata('error_message'))
		{
			$data['error_message'] =  $this->session->flashdata('error_message');
		}
		$postData =array(
						'image'=>'',
						'expiry_date'=>'',
						'hidden_value'=>''
						);
		
		if($hidden_value == 1) {
			//echo "okkkkkkk<br>";
			/*echo $filename = base_url('uploads/right_panel_add/' . $image);
			echo "<br>";
			$this->load->helper("url");
					$filename1 = base_url("index.php/uploads/right_panel_add/" . $image);
					delete_files(base_url("uploads/right_panel_add/" . $file_name));
			
			if(!delete_files($filename1))
			{
			  echo ("Error deleting ");die;
			  }
			else
			  {
			  echo ("Deleted");die;
			  }*/
		}
		if($this->add_model->delete_data($postData,$id))
		{
			
			//@unlink(base_url().'index.php/uploads/'.$image);
			$this->session->set_flashdata('success_message','Record has been Deleted successfully.');
			$conditions = array('hidden_value'=>0,'published'=>1,'id'=>$id);
			
			if($hidden_value == 1) {
			$data['row1'] = $this->add_model->find_data('',$conditions,'row','','',1,0);
			}
			else if($hidden_value == 2) {	
			$data['row2'] = $this->add_model->find_data('',$conditions,'row','','',1,0);
			}
			else if($hidden_value == 3) {	
			$data['row3'] = $this->add_model->find_data('',$conditions,'row','','',1,0);
			}
			redirect('admin/manage_ad/right_panel');
		}
		else
		{
			$this->session->set_flashdata('error_message','Some error occurred during delete! Please try again.');
			redirect('admin/manage_ad/right_panel');
		}
		
	}
	
	######################################################################################
	
	function confirm_header_ad_Delete($id,$hidden_value)
	{
		
			
			if($hidden_value == 11) 
			{	
				$table['name'] = 'thi_header_ads';		
				if($this->Common_model->delete_data($table,$id))
					{
						
						$this->session->set_flashdata('success_message11','Record has been Deleted successfully.');
						redirect('admin/manage_ad/header_panel');	
					}
			}	
		
	}
	
	
}

