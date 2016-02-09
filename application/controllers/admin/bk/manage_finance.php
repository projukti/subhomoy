<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Manage_finance extends CI_Controller {
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
		$this->load->model(array('state_model','city_model','hotel_model','common_model','finance_model'));
	}
	################################################################
	function index()
	{
		$select = 'thi_hotels.id,thi_hotels.hotel_name,thi_finances.*';
		$conditions=array('thi_finances.published'=>1);
		$order_by[0] = array('field'=>'thi_finances.id','type'=>'ASC');
		$table['name']='thi_finances';
		$join[0]=array('table'=>'thi_hotels','field'=>'id','table_master'=>'thi_finances','field_table_master'=>'hotel_id','type'=>'INNER');
		$data['rows']=$this->common_model->find_data($table,'array','',$conditions,$select,$join,'',$order_by);
		//echo '<pre>';print_r($data['rows']);die;	
		
		$data['head'] = $this->load->view('admin/elements/head','',true);
		$data['header'] = $this->load->view('admin/elements/header','',true);
		$data['left_sidebar'] = $this->load->view('admin/elements/left-sidebar','',true);
		$data['footer'] = $this->load->view('admin/elements/footer','',true);
		$data['maincontent']=$this->load->view('admin/maincontents/manage-finance-list-view',$data,true);
		$this->load->view('admin/layout_after_login',$data);
	}
	######################################################################################
	
	function add()
	{
		$data['action'] = 'Add';
		
		/* for hotel list */
		
		$select = 'id,hotel_name';
		$conditions=array('published'=>1);
		$order_by[0] = array('field'=>'hotel_name','type'=>'ASC');
		$table['name']='thi_hotels';
		$list = array('empty_name'=>' Hotel Name','key'=>'id','value'=>'hotel_name');
		$data['categories']=$this->common_model->find_data($table,'list',$list,$conditions,$select,'','',$order_by);
		
		/* for hotel list */
		
		/* for insert city */		
					if($this->form_validate() == FALSE)
					{
						$data['error_message']=validation_errors();
					}
					else
					{
						$postdata = array(
											'hotel_id'=>$this->input->post('state_id'),
											'start_date'=>$this->input->post('start_date'),
											'end_date'=>$this->input->post('end_date'),
											'amount'=>$this->input->post('amount'),
											'published'=> 1
											);
						//echo '<pre>';print_r($postdata);die;
						$table['name']='thi_finances';			
						$success = $this->common_model->save_data($table,$postdata);
												
						if($success)
						{	
							$this->session->set_flashdata('success_message','Finance successfully inserted');	
							redirect('admin/manage_finance');
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
		$data['maincontent']=$this->load->view('admin/maincontents/add-edit-finance-view',$data,true);
		
		
		
		$this->load->view('admin/layout_after_login',$data);
	}
	######################################################################################
	
	function edit($id)
	{
		$data['action'] = 'Edit';
		
		/* for hotel list */
		
		$select = 'id,hotel_name';
		$conditions=array('published'=>1);
		$order_by[0] = array('field'=>'hotel_name','type'=>'ASC');
		$table['name']='thi_hotels';
		$list = array('empty_name'=>' Hotel Name','key'=>'id','value'=>'hotel_name');
		$data['categories']=$this->common_model->find_data($table,'list',$list,$conditions,$select,'','',$order_by);
		
		/* for hotel list */
		
		$select = 'thi_hotels.id,thi_hotels.hotel_name,thi_finances.*';
		$conditions=array('thi_finances.id'=>$id,'thi_finances.published'=>1);
		$data['row']=$this->finance_model->find_data($select,$conditions,'row');
		//echo '<pre>';print_r($data);die;
		
		/* for update city */		
					if($this->form_validate() == FALSE)
					{
						$data['error_message']=validation_errors();
					}
					else
					{
						$postdata = array(
											'hotel_id'=>$this->input->post('state_id'),
											'start_date'=>$this->input->post('start_date'),
											'end_date'=>$this->input->post('end_date'),
											'amount'=>$this->input->post('amount'),
											'published'=> $data['row']->published
											);
						//echo '<pre>';print_r($postdata);die;
						$table['name']='thi_finances';			
						$success = $this->common_model->save_data($table,$postdata,$id);
												
						if($success)
						{	
							$this->session->set_flashdata('success_message','Finance successfully updated');	
							redirect('admin/manage_finance');
						}
						else
						{	
							$this->session->set_flashdata('error_message','Invalid username or password! Please try again.');		
							redirect(current_url());					
						}	
					}
		/* for update city */
		$data['head'] = $this->load->view('admin/elements/head','',true);
		$data['header'] = $this->load->view('admin/elements/header','',true);
		$data['left_sidebar'] = $this->load->view('admin/elements/left-sidebar','',true);
		$data['footer'] = $this->load->view('admin/elements/footer','',true);
		$data['maincontent']=$this->load->view('admin/maincontents/add-edit-finance-view',$data,true);
		
		
		
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
		$table['name'] = 'thi_finances';
		if($this->common_model->delete_data($table,$id))
		{
			$this->session->set_flashdata('success_message','Record has been Deleted successfully.');
			redirect('admin/manage_finance');
		}
		else
		{
			$this->session->set_flashdata('error_message','Some error occurred during delete! Please try again.');
			redirect('admin/manage_finance');
		}
	}
	
	##############################################################################################
	
	
	function form_validate()
	{
		$this->load->library('form_validation');
		$this->form_validation->set_rules('state_id', 'Hotel Name', 'required');
		$this->form_validation->set_rules('start_date', 'Start Date', 'required');
		$this->form_validation->set_rules('end_date', 'End Date', 'required');
		$this->form_validation->set_rules('amount', 'Amount', 'required|numeric');
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

