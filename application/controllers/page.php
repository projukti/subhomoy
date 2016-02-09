<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Page extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		/*$this->load->library('public_init_elements');
		if($this->uri->segment('3')=='login')
		{
			//echo "login";
		}
		else
		{
			$this->public_init_elements->init_elements();
		}*/
		$this->load->model(array('Common_model','Administration_model','Gallery_model'));
	}
	
	public function index()
	{
		$data['head'] = $this->load->view('elements/head','',true);
		$data['header'] = $this->load->view('elements/header','',true);
		$data['banner'] = $this->load->view('elements/banner','',true);
		$data['right_sidebar'] = $this->load->view('elements/right-sidebar','',true);
		$data['footer'] = $this->load->view('elements/footer','',true);
		$data['maincontent']=$this->load->view('maincontents/home-view',$data,true);
		
		$this->load->view('home_layout',$data);
	}
	
	public function page_content($id)
	{
		if($id == 15)
		{
			redirect('page/course');
		}
		else if($id == 18)
		{
			redirect('page/result');
		}
		else if($id == 8)
		{
			redirect('page/combination');
		}
		else if($id == 12)
		{
			redirect('page/fee_structure');
		}
		else if($id == 10)
		{
			redirect('page/image_gallery');
		}
		$table['name'] = 'dumkal_pages';
		$conditions = array('published'=>1,'sub_page_id'=> $id);
		$data['row'] = $this->Common_model->find_data($table,'row','',$conditions);
		//echo '<pre>';print_r($data['row']);die;
		//echo $data['row']->page_content;
		$data['head'] = $this->load->view('elements/head','',true);
		$data['header'] = $this->load->view('elements/header','',true);
		$data['banner'] = $this->load->view('elements/banner','',true);
		$data['right_sidebar'] = $this->load->view('elements/right-sidebar','',true);
		$data['footer'] = $this->load->view('elements/footer','',true);
		$data['maincontent']=$this->load->view('maincontents/page-view',$data,true);
		
		$this->load->view('home_layout',$data);	
	}
	
	public function page_sub_committee($committiee)
	{
		$table['name'] = 'dumkal_sub_committee';
		$conditions = array('published'=>1,'sub_committee_id'=> $committiee);
		$data['committee'] = $committiee;
		$data['rows'] = $this->Common_model->find_data($table,'array','',$conditions);
		//echo '<pre>';print_r($data['rows']);die;
		//echo $data['row']->page_content;
		$data['head'] = $this->load->view('elements/head','',true);
		$data['header'] = $this->load->view('elements/header','',true);
		$data['banner'] = $this->load->view('elements/banner','',true);
		$data['right_sidebar'] = $this->load->view('elements/right-sidebar','',true);
		$data['footer'] = $this->load->view('elements/footer','',true);
		$data['maincontent']=$this->load->view('maincontents/sub-committee-page-view',$data,true);
		
		$this->load->view('home_layout',$data);	
	}
	
	public function page_administrative($administrative_role)
	{
		//if($administrative_role == 'Governing-Body') {
		$conditions=array('published'=>1,'administrative_role'=> $administrative_role);
		$data['adminis'] = $this->Administration_model->find_data('',$conditions,'array'); 
		//echo '<pre>';print_r($data['adminis']);die;
		//}
		
		$data['administrative_role'] = $administrative_role;		
		$select = 'dumkal_subjects.id,dumkal_subjects.subject_name,dumkal_administration.*';
		$conditions=array('dumkal_administration.published'=>1,'dumkal_administration.administrative_role'=> $administrative_role);
		$order_by[0] = array('field'=>'dumkal_administration.id','type'=>'ASC');
		$table['name']='dumkal_administration';
		$join[0]=array('table'=>'dumkal_subjects','field'=>'id','table_master'=>'dumkal_administration','field_table_master'=>'subject_id','type'=>'INNER');
		
		
		$data['rows']=$this->Common_model->find_data($table,'array','',$conditions,$select,$join,'',$order_by);
		//echo '<pre>';print_r($data['rows']);die;
		//echo $data['row']->page_content;
		$data['head'] = $this->load->view('elements/head','',true);
		$data['header'] = $this->load->view('elements/header','',true);
		$data['banner'] = $this->load->view('elements/banner','',true);
		$data['right_sidebar'] = $this->load->view('elements/right-sidebar','',true);
		$data['footer'] = $this->load->view('elements/footer','',true);
		$data['maincontent']=$this->load->view('maincontents/administrative-page-view',$data,true);
		
		$this->load->view('home_layout',$data);	
	}
	
	/*public function ajax_dept()
	{
		$dept = $this->input->post('state');
		$administrative_role = $this->input->post('r');
		
		$select = 'dumkal_subjects.id,dumkal_subjects.subject_name,dumkal_administration.*';
		$conditions=array('dumkal_administration.published'=>1,'dumkal_administration.administrative_role'=> $administrative_role,'dumkal_administration.department'=> $dept);
		$order_by[0] = array('field'=>'dumkal_administration.id','type'=>'ASC');
		$table['name']='dumkal_administration';
		$join[0]=array('table'=>'dumkal_subjects','field'=>'id','table_master'=>'dumkal_administration','field_table_master'=>'subject_id','type'=>'INNER');
		
		$data['rows']=$this->Common_model->find_data($table,'array','',$conditions,$select,$join,'',$order_by);
		
		//print_r($data['rows']);die;
		echo json_encode($data);
		
	}*/
	
	public function course()
	{
		$data['head'] = $this->load->view('elements/head','',true);
		$data['header'] = $this->load->view('elements/header','',true);
		$data['banner'] = $this->load->view('elements/banner','',true);
		$data['right_sidebar'] = $this->load->view('elements/right-sidebar','',true);
		$data['footer'] = $this->load->view('elements/footer','',true);
		$data['maincontent']=$this->load->view('maincontents/course-page-view',$data,true);
		
		$this->load->view('home_layout',$data);
	}
	
	public function result()
	{		
		$select = 'dumkal_subjects.id,dumkal_subjects.subject_name,dumkal_result.*';
		$conditions=array('dumkal_result.published'=>1);
		$order_by[0] = array('field'=>'dumkal_result.id','type'=>'ASC');
		$table['name']='dumkal_result';
		$join[0]=array('table'=>'dumkal_subjects','field'=>'id','table_master'=>'dumkal_result','field_table_master'=>'subjectCode','type'=>'INNER');
		
		$data['rows']=$this->Common_model->find_data($table,'array','',$conditions,$select,$join,'',$order_by);
		//echo '<pre>';print_r($data['rows']);die;
		
		$data['head'] = $this->load->view('elements/head','',true);
		$data['header'] = $this->load->view('elements/header','',true);
		$data['banner'] = $this->load->view('elements/banner','',true);
		$data['right_sidebar'] = $this->load->view('elements/right-sidebar','',true);
		$data['footer'] = $this->load->view('elements/footer','',true);
		$data['maincontent']=$this->load->view('maincontents/result-page-view',$data,true);
		
		$this->load->view('home_layout',$data);
	}
	
	public function page_subject($subject)
	{
	if($subject == 'Computer%20Science' || $subject == 'Political%20Science' || $subject == 'Physical%20Education' || $subject == 'Environmental%20Science')
		{
		$subject = explode('%20',$subject);
		$subject = $subject[0]." ".$subject[1];
		}
		$data['subject'] = $subject;
		
		$table['name'] = 'dumkal_pages';
		$conditions = array('published'=>1,'page_title'=> $subject);
		$data['row'] = $this->Common_model->find_data($table,'row','',$conditions);
		//echo '<pre>';print_r($data['rows']);die;
		
		$table['name'] = 'dumkal_subjects';
		$conditions = array('published'=>1,'subject_name'=> $subject);
		$data['row1'] = $this->Common_model->find_data($table,'row','',$conditions);
		$subject_id = $data['row1']->id;
		
		$select = 'dumkal_subjects.id,dumkal_subjects.subject_name,dumkal_administration.*';
		$conditions=array('dumkal_administration.published'=>1,'dumkal_administration.subject_id'=> $subject_id);
		$order_by[0] = array('field'=>'dumkal_administration.id','type'=>'ASC');
		$table['name']='dumkal_administration';
		$join[0]=array('table'=>'dumkal_subjects','field'=>'id','table_master'=>'dumkal_administration','field_table_master'=>'subject_id','type'=>'INNER');		
		$data['rows2']=$this->Common_model->find_data($table,'array','',$conditions,$select,$join,'',$order_by);
		//echo '<pre>';print_r($data['rows2']);die;
		
		$data['head'] = $this->load->view('elements/head','',true);
		$data['header'] = $this->load->view('elements/header','',true);
		$data['banner'] = $this->load->view('elements/banner','',true);
		$data['right_sidebar'] = $this->load->view('elements/right-sidebar','',true);
		$data['footer'] = $this->load->view('elements/footer','',true);
		$data['maincontent']=$this->load->view('maincontents/subject-page-view',$data,true);
		
		$this->load->view('home_layout',$data);	
	}
	
	public function combination()
	{
		$data['head'] = $this->load->view('elements/head','',true);
		$data['header'] = $this->load->view('elements/header','',true);
		$data['banner'] = $this->load->view('elements/banner','',true);
		$data['right_sidebar'] = $this->load->view('elements/right-sidebar','',true);
		$data['footer'] = $this->load->view('elements/footer','',true);
		$data['maincontent']=$this->load->view('maincontents/combination-page-view',$data,true);
		
		$this->load->view('home_layout',$data);	
	}
	
	public function fee_structure()
	{
		$table['name']='dumkal_fee_structure';
		$data['rows'] = $this->Common_model->find_data($table,'array');
		//echo '<pre>';print_r($data['rows']);die;
		
		$data['head'] = $this->load->view('elements/head','',true);
		$data['header'] = $this->load->view('elements/header','',true);
		$data['banner'] = $this->load->view('elements/banner','',true);
		$data['right_sidebar'] = $this->load->view('elements/right-sidebar','',true);
		$data['footer'] = $this->load->view('elements/footer','',true);
		$data['maincontent']=$this->load->view('maincontents/fee-view',$data,true);
		
		$this->load->view('home_layout',$data);	
	}
	
	public function image_gallery()
	{
		$select = 'dumkal_category.id,dumkal_category.category_name,dumkal_image_galleries.*';
		$conditions=array('dumkal_image_galleries.published'=>1);
		$order_by[0] = array('field'=>'dumkal_image_galleries.id','type'=>'ASC');
		$table['name']='dumkal_image_galleries';
		$join[0]=array('table'=>'dumkal_category','field'=>'id','table_master'=>'dumkal_image_galleries','field_table_master'=>'category_id','type'=>'INNER');
		$data['gallerys']=$this->Common_model->find_data($table,'array','',$conditions,$select,$join,'',$order_by);
		
		/*$conditions=array('dumkal_image_galleries.published'=>1,'dumkal_image_galleries.category_id'=>2);
		$data['gallery'] = $this->Gallery_model->find_data('dumkal_image_galleries.*,dumkal_category.category_name,dumkal_category.id',$conditions,'array');*/
		
		$table['name']='dumkal_category';
		$data['rows'] = $this->Common_model->find_data($table,'array');
		//echo '<pre>';print_r($data['gallerys']);die;
		
		$data['head'] = $this->load->view('elements/head','',true);
		$data['header'] = $this->load->view('elements/header','',true);
		$data['banner'] = $this->load->view('elements/banner','',true);
		$data['right_sidebar'] = $this->load->view('elements/right-sidebar','',true);
		$data['footer'] = $this->load->view('elements/footer','',true);
		$data['maincontent']=$this->load->view('maincontents/gallery-view',$data,true);
		
		$this->load->view('home_layout',$data);
	}
}

