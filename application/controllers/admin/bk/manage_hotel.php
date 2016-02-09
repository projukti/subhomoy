<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Manage_hotel extends CI_Controller {
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
		$this->load->model(array('state_model','city_model','hotel_model'));
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
	
	function add()
	{
		$data['action'] = 'Add';
		/* for state list */
		
		$select = 'id,state_name';
		$conditions=array('published'=>1);
		$order_by = array('field'=>'state_name','type'=>'ASC');
		$data['categories']=$this->state_model->find_data($select,$conditions,'list','');
		/* for state list */
		
		
		
		/* for insert hotel */		
					if($this->form_validate() == FALSE)
					{
						//$data['error_check'] = 'not';
						$data['exclusive'] = $this->input->post('exclusive');
						$data['error_message']=validation_errors();
					}
					else
					{
						$exclusive = $this->input->post('exclusive');
						if($exclusive == 'on') {$exclusive = 1;} else {$exclusive = 0;}
						
						$air_conditioning = $this->input->post('air_conditioning');
						if($air_conditioning == 'on') {$air_conditioning = 1;} else {$air_conditioning = 0;}
						
						$bar = $this->input->post('bar');
						if($bar == 'on') {$bar = 1;} else {$bar = 0;}
						
						$car_parking = $this->input->post('car_parking');
						if($car_parking == 'on') {$car_parking = 1;} else {$car_parking = 0;}
						
						$atv_rentals = $this->input->post('atv_rentals');
						if($atv_rentals == 'on') {$atv_rentals = 1;} else {$atv_rentals = 0;}
						
						$complimentary_breakfast = $this->input->post('complimentary_breakfast');
						if($complimentary_breakfast == 'on') {$complimentary_breakfast = 1;} else {$complimentary_breakfast = 0;}
						
						$doctor_on_call = $this->input->post('doctor_on_call');
						if($doctor_on_call == 'on') {$doctor_on_call = 1;} else {$doctor_on_call = 0;}
						
						$foreign_exchange_conversion = $this->input->post('foreign_exchange_conversion');
						if($foreign_exchange_conversion == 'on') {$foreign_exchange_conversion = 1;} else {$foreign_exchange_conversion = 0;}
						
						$gymnasium = $this->input->post('gymnasium');
						if($gymnasium == 'on') {$gymnasium = 1;} else {$gymnasium = 0;}
						
						$isd_calling_facility = $this->input->post('isd_calling_facility');
						if($isd_calling_facility == 'on') {$isd_calling_facility = 1;} else {$isd_calling_facility = 0;}
						
						$pickup_dropin_facility = $this->input->post('pickup_dropin_facility');
						if($pickup_dropin_facility == 'on') {$pickup_dropin_facility = 1;} else {$pickup_dropin_facility = 0;}
						
						$restaurant = $this->input->post('restaurant');
						if($restaurant == 'on') {$restaurant = 1;} else {$restaurant = 0;}
						
						$spa_sauna = $this->input->post('spa_sauna');
						if($spa_sauna == 'on') {$spa_sauna = 1;} else {$spa_sauna = 0;}
						
						$swimming_pool = $this->input->post('swimming_pool');
						if($swimming_pool == 'on') {$swimming_pool = 1;} else {$swimming_pool = 0;}
						
						$wifi = $this->input->post('wifi');
						if($wifi == 'on') {$wifi = 1;} else {$wifi = 0;}
						
						$config =  array(
						  'upload_path'     => './uploads',
						  'allowed_types'   => "gif|jpg|png|jpeg"
						);
				
						$this->load->library('upload', $config);
				
						if ($this->upload->do_upload('hotel_image'))
						{
							$data = array('upload_data' => $this->upload->data());
							$upload_msg = 'success-upload';
						}
						else
						{
							
							$this->session->set_flashdata('error_message',$this->upload->display_errors());
							$upload_msg = 'error-upload';
							redirect(current_url());			
						}
						if($upload_msg=='success-upload')
						{
					
							$postdata = array(
												'state_id'=>$this->input->post('state_id'),
												'city_id'=>$this->input->post('city_id'),
												'hotel_name'=>$this->input->post('hotel_name'),
												'username'=>$this->input->post('username'),
												'password'=>MD5($this->input->post('password')),
												'actual_password'=>$this->input->post('password'),
												'email_id'=>$this->input->post('email_id'),
												'contact_person'=>$this->input->post('contact_person'),
												'contact_number'=>$this->input->post('contact_number'),
												'package_starts_from'=>$this->input->post('package_starts_from'),
												'exclusive'=>$exclusive,
												'hotel_image'=>$data['upload_data']['file_name'],
												'site_link'=>$this->input->post('site_link'),
												'short_description'=>$this->input->post('short_description'),
												'air_conditioning'=>$air_conditioning,
												'bar'=>$bar,
												'car_parking'=>$car_parking,
												'atv_rentals'=>$atv_rentals,
												'complimentary_breakfast'=>$complimentary_breakfast,
												'doctor_on_call'=>$doctor_on_call,
												'foreign_exchange_conversion'=>$foreign_exchange_conversion,
												'gymnasium'=>$gymnasium,
												'isd_calling_facility'=>$isd_calling_facility,
												'pickup_dropin_facility'=>$pickup_dropin_facility,
												'restaurant'=>$restaurant,
												'spa_sauna'=>$spa_sauna,
												'swimming_pool'=>$swimming_pool,
												'wifi'=>$wifi,
												'published'=> 1
												);
							//echo '<pre>'; print_r($postdata);die;			
							$success = $this->hotel_model->save_data($postdata);						
							if($success)
							{	
								$this->session->set_flashdata('success_message','Hotel successfully added');	
								redirect('admin/manage_hotel');
							}
							else
							{	
								$this->session->set_flashdata('error_message','Please try again.');		
								redirect(current_url());					
							}
						}
					}
		/* for insert city */
		$data['head'] = $this->load->view('admin/elements/head','',true);
		$data['header'] = $this->load->view('admin/elements/header','',true);
		$data['left_sidebar'] = $this->load->view('admin/elements/left-sidebar','',true);
		$data['footer'] = $this->load->view('admin/elements/footer','',true);
		$data['maincontent']=$this->load->view('admin/maincontents/add-edit-hotel-view',$data,true);
		
		
		
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
		
		$conditions=array('thi_hotels.id'=>$id);
		$data['row'] = $this->hotel_model->find_specific($id);
		//echo '<pre>';print_r($data['row']);die;	
		$data['city_id'] = $data['row']->city_id;
		$data['state_id'] = $data['row']->state_id;
		$data['id'] = $data['row']->id;
		$ac = 'edit';
		if($this->form_validate() == FALSE)
			{
				$data['error_message']=validation_errors();
			}
		else
			{
				$exclusive = $this->input->post('exclusive');
				if($exclusive == 'on') {$exclusive = 1;} else {$exclusive = 0;}
				$air_conditioning = $this->input->post('air_conditioning');
						if($air_conditioning == 'on') {$air_conditioning = 1;} else {$air_conditioning = 0;}
						
						$bar = $this->input->post('bar');
						if($bar == 'on') {$bar = 1;} else {$bar = 0;}
						
						$car_parking = $this->input->post('car_parking');
						if($car_parking == 'on') {$car_parking = 1;} else {$car_parking = 0;}
						
						$atv_rentals = $this->input->post('atv_rentals');
						if($atv_rentals == 'on') {$atv_rentals = 1;} else {$atv_rentals = 0;}
						
						$complimentary_breakfast = $this->input->post('complimentary_breakfast');
						if($complimentary_breakfast == 'on') {$complimentary_breakfast = 1;} else {$complimentary_breakfast = 0;}
						
						$doctor_on_call = $this->input->post('doctor_on_call');
						if($doctor_on_call == 'on') {$doctor_on_call = 1;} else {$doctor_on_call = 0;}
						
						$foreign_exchange_conversion = $this->input->post('foreign_exchange_conversion');
						if($foreign_exchange_conversion == 'on') {$foreign_exchange_conversion = 1;} else {$foreign_exchange_conversion = 0;}
						
						$gymnasium = $this->input->post('gymnasium');
						if($gymnasium == 'on') {$gymnasium = 1;} else {$gymnasium = 0;}
						
						$isd_calling_facility = $this->input->post('isd_calling_facility');
						if($isd_calling_facility == 'on') {$isd_calling_facility = 1;} else {$isd_calling_facility = 0;}
						
						$pickup_dropin_facility = $this->input->post('pickup_dropin_facility');
						if($pickup_dropin_facility == 'on') {$pickup_dropin_facility = 1;} else {$pickup_dropin_facility = 0;}
						
						$restaurant = $this->input->post('restaurant');
						if($restaurant == 'on') {$restaurant = 1;} else {$restaurant = 0;}
						
						$spa_sauna = $this->input->post('spa_sauna');
						if($spa_sauna == 'on') {$spa_sauna = 1;} else {$spa_sauna = 0;}
						
						$swimming_pool = $this->input->post('swimming_pool');
						if($swimming_pool == 'on') {$swimming_pool = 1;} else {$swimming_pool = 0;}
						
						$wifi = $this->input->post('wifi');
						if($wifi == 'on') {$wifi = 1;} else {$wifi = 0;}
						
				$published = $data['row']->published;
				$image = $data['row']->hotel_image;
				
				$postdata['state_id'] = $this->input->post('state_id');
				$postdata['city_id'] = $this->input->post('city_id');
				$postdata['hotel_name'] = $this->input->post('hotel_name');
				if($data['row']->username != $this->input->post('username')){
				$postdata['username'] = $this->input->post('username');
				}
				else if($data['row']->username == $this->input->post('username')) {
				$postdata['username'] = $data['row']->username;	
				}
				$postdata['password'] = md5($this->input->post('password'));
				$postdata['actual_password'] = $this->input->post('password');
				$postdata['email_id'] = $this->input->post('email_id');
				$postdata['contact_person'] = $this->input->post('contact_person');
				$postdata['contact_number'] = $this->input->post('contact_number');
				$postdata['package_starts_from'] = $this->input->post('package_starts_from');
				$postdata['exclusive'] = $exclusive;
				$postdata['site_link'] = $this->input->post('site_link');
				$postdata['short_description'] = $this->input->post('short_description');
				$postdata['air_conditioning'] = $air_conditioning;
				$postdata['bar'] = $bar;
				$postdata['car_parking'] = $car_parking;
				$postdata['atv_rentals'] = $atv_rentals;
				$postdata['complimentary_breakfast'] = $complimentary_breakfast;
				$postdata['doctor_on_call'] = $doctor_on_call;
				$postdata['foreign_exchange_conversion'] = $foreign_exchange_conversion;
				$postdata['gymnasium'] = $gymnasium;
				$postdata['isd_calling_facility'] = $isd_calling_facility;
				$postdata['pickup_dropin_facility'] = $pickup_dropin_facility;
				$postdata['restaurant'] = $restaurant;
				$postdata['spa_sauna'] = $spa_sauna;
				$postdata['swimming_pool'] = $swimming_pool;
				$postdata['wifi'] = $wifi;
				$postdata['published'] = $published;										
				
				$config =  array(
						  'upload_path'     => './uploads',
						  'allowed_types'   => "gif|jpg|png|jpeg"
						);
				
				$this->load->library('upload', $config);
				
				if ($this->upload->do_upload('hotel_image'))
				{
					$data = array('upload_data' => $this->upload->data());
					$postdata['hotel_image'] = $data['upload_data']['file_name'];
					$upload_msg = 'success-upload';
				}
				else
				{
					$postdata['hotel_image'] = $image;	
				}
				//echo '<pre>'; print_r($postdata);die;
							
				$success = $this->hotel_model->save_data($postdata,$id);
								
							if($success)
							{	
								$this->session->set_flashdata('success_message','Hotel successfully updated');	
								redirect('admin/manage_hotel');
							}
							else
							{	
								//$this->session->set_flashdata('error_message','Please try again.');		
								redirect('admin/manage_hotel');					
							}
		}
		$data['head'] = $this->load->view('admin/elements/head','',true);
		$data['header'] = $this->load->view('admin/elements/header','',true);
		$data['left_sidebar'] = $this->load->view('admin/elements/left-sidebar','',true);
		$data['footer'] = $this->load->view('admin/elements/footer','',true);
		$data['maincontent']=$this->load->view('admin/maincontents/add-edit-hotel-view',$data,true);
		
		
		
		$this->load->view('admin/layout_after_login',$data);
	}
	######################################################################################
	
	function view($id)
	{
		$data['action'] = 'View';
			
		$conditions=array('thi_hotels.id'=>$id);
		$data['row'] = $this->hotel_model->find_specific($id);
		//echo '<pre>';print_r($data['row']);die;
		
		$data['head'] = $this->load->view('admin/elements/head','',true);
		$data['header'] = $this->load->view('admin/elements/header','',true);
		$data['left_sidebar'] = $this->load->view('admin/elements/left-sidebar','',true);
		$data['footer'] = $this->load->view('admin/elements/footer','',true);
		$data['maincontent']=$this->load->view('admin/maincontents/view-hotel-view',$data,true);
		$this->load->view('admin/layout_after_login',$data);
	}
	
	######################################################################################
	
	function confirmDelete($id)
	{
		$conditions = array('id'=>$id);
		$data['result'] = $this->hotel_model->find_all_data('',$conditions,'row');
		$image = $data['result']->hotel_image;
		//echo base_url().'uploads/'.$image;die;
		if($this->session->flashdata('success_message'))
		{
			$data['success_message'] =  $this->session->flashdata('success_message');
		}
		if($this->session->flashdata('error_message'))
		{
			$data['error_message'] =  $this->session->flashdata('error_message');
		}
		if($this->hotel_model->delete_data($id))
		{
			
			@unlink(base_url().'index.php/uploads/'.$image);
			$this->session->set_flashdata('success_message','Record has been Deleted successfully.');
			redirect('admin/manage_hotel');
		}
		else
		{
			$this->session->set_flashdata('error_message','Some error occurred during delete! Please try again.');
			redirect('admin/manage_hotel');
		}
	}
	
	##########################################################################################
	
	function deactive($id)
	{
		$data['row'] = $this->hotel_model->find_specific($id);
		$published = $data['row']->published;
		
		$postdata = array(
							'published' => 0
						);
		$deactive = $this->hotel_model->save_data($postdata,$id);
		
		if($deactive)
			{	
				$this->session->set_flashdata('success_message','Hotel successfully deactivated');	
				redirect('admin/manage_hotel');
			}
		else
			{	
				//$this->session->set_flashdata('error_message','Please try again.');		
				redirect('admin/manage_hotel');					
			}
	}
	
	function active($id)
	{
		$data['row'] = $this->hotel_model->find_specific($id);
		$published = $data['row']->published;
		
		$postdata = array(
							'published' => 1
						);
		$deactive = $this->hotel_model->save_data($postdata,$id);
		
		if($deactive)
			{	
				$this->session->set_flashdata('success_message','Hotel successfully activated');	
				redirect('admin/manage_hotel');
			}
		else
			{	
				//$this->session->set_flashdata('error_message','Please try again.');		
				redirect('admin/manage_hotel');					
			}
	}
	
	##############################################################################################
	
	
	function form_validate()
	{		
		$this->load->library('form_validation');
		$this->form_validation->set_rules('state_id', 'State Name', 'required');
		$this->form_validation->set_rules('city_id', 'State Name', 'required');
		$this->form_validation->set_rules('hotel_name', 'Hotel Name', 'required');
		$this->form_validation->set_rules('username', 'Username', 'required|callback_username_check');
		$this->form_validation->set_rules('password', 'Password', 'required');
		$this->form_validation->set_rules('email_id', 'Email Address', 'required|valid_email');
		$this->form_validation->set_rules('contact_person', 'Contact Person', 'required');
		$this->form_validation->set_rules('contact_number', 'Contact Number', 'required|integer');
		$this->form_validation->set_rules('package_starts_from', 'Packeges Starts From', 'required|numeric');
		//$this->form_validation->set_rules('hotel_image', 'Hotel Image', 'required');
		$this->form_validation->set_rules('site_link', 'site link', 'required');
		$this->form_validation->set_rules('short_description', 'short description', 'required');
		if ($this->form_validation->run() == FALSE)
		{
			return FALSE;
		}
		else
		{
			return TRUE;
		}
	}
	
	##################################################################################################
	
	public function username_check($str)
	{	
		$action = $this->uri->segment(3);
		$id = $this->uri->segment(4);
		$username = $this->input->post('username');
		
		if($action == 'edit')
			{
				$condition = array('id !='=>$id,'username'=>$username);
			}
		else if($action == 'add')
			{
				$condition = array('username'=>$username);
			}
		$value = $this->hotel_model->username_check($condition);
		if ($value == 1)
		{
			$this->form_validation->set_message('username_check', 'Username already exists!');
			return FALSE;
		}
		else
		{
			return TRUE;
		}
	}
	
	###################################################################################################
	
	function ajax_call() 
	{
        //Checking so that people cannot go to the page directly.
        if (isset($_POST) && isset($_POST['state'])) 
		{
            $state = $_POST['state'];
			$action = $_POST['action'];
			if($action == 'Edit') {
			$sayantan = $_POST['sayantan']; 
			}
			if($action == 'Edit' && $sayantan == 'ready') {
			$id = $_POST['id']; }
			
			$conditions=array('thi_cities.state_id'=>$state);
			$arrCities = $this->city_model->find_data('thi_cities.*,thi_states.state_name',$conditions,'list');
			
			if($action == 'Edit' && $sayantan == 'ready')
			{
				
				$conditions=array('thi_hotels.id'=>$id);
				$data['row'] = $this->hotel_model->find_data('thi_hotels.id,thi_hotels.city_id,thi_hotels.hotel_name,thi_cities.id,thi_cities.city_name',$conditions,'row');
				
				$city_name = $data['row']->city_id; 
			}
          
             
           
            //Using the form_dropdown helper function to get the new dropdown.
			$js = 'class="form-control" id="city_id"';
			if($action == 'Add')
			 {
				 //echo 'add city drop';
            	echo form_dropdown('city_id',$arrCities,'',$js);
			 }
			 else if($action == 'Edit' && $sayantan == 'ready')
			 {
				 //echo 'edit city drop';
				 echo form_dropdown('city_id',$arrCities,$city_name,$js);
			 }
			 else if($action == 'Edit' && $sayantan == 'change')
			 {
				 //echo 'edit city drop';
				 echo form_dropdown('city_id',$arrCities,'',$js);
			 }
			//echo "succ";
        } 
		else
		{
            redirect('site'); //Else redire to the site home page.
        }
    }
}

