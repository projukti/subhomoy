<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->model(array('Common_model','pagination_model'));
	}
	
	public function index()
	{
		$table['name'] = 'dumkal_image_galleries';
		$conditions = array('published'=>1, 'category_id'=>'Complete Projects');
		$order_by[0] = array('field'=>'id', 'type'=>'DESC');
		$data['latest_projects'] = $this->Common_model->find_data($table,'array','',$conditions,'','','',$order_by,5);
		
		$data['head'] = $this->load->view('elements/head','',true);
		$data['header'] = $this->load->view('elements/header','',true);
		$data['banner'] = $this->load->view('elements/banner','',true);
		$data['menu'] = $this->load->view('elements/menu','',true);		
		$data['footer'] = $this->load->view('elements/footer','',true);
		$data['maincontent']=$this->load->view('maincontents/home-view',$data,true);
		
		$this->load->view('home_layout', $data);
	}
	
	public function about()
	{
		
		$table['name'] = 'thi_sliders';
		$conditions = array('published'=>1);
		$data['client_images'] = $this->Common_model->find_data($table,'array','',$conditions);
		
		
		$data['head_inner'] = $this->load->view('elements/head-inner','',true);
		$data['header'] = $this->load->view('elements/header','',true);
		$data['banner_inner'] = $this->load->view('elements/banner-inner','',true);
		$data['menu'] = $this->load->view('elements/menu','',true);		
		$data['footer'] = $this->load->view('elements/footer','',true);
		$data['maincontent']=$this->load->view('maincontents/about-view',$data,true);
		
		$this->load->view('home_layout', $data);
	}
	

	
	public function completed_projects()
	{
		$table['name'] = 'dumkal_image_galleries';
		$conditions = array('published'=>1, 'category_id'=>'Complete Projects');
		$this->load->library('pagination');

		$config["base_url"] = base_url() . "index.php/home/completed_projects";
		$config["total_rows"] = $this->Common_model->find_data($table,'count','',$conditions);
		$config["per_page"] = 3;
		
		$this->pagination->initialize($config);
		
		$data['page'] = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
		
		$table['name'] = 'dumkal_image_galleries';
		$conditions = array('published'=>1, 'category_id'=>'Complete Projects');
		$data['completed_projects'] = $this->Common_model->find_data($table,'array','',$conditions,'','','','',$config["per_page"], $data['page']);
		
		
		
		$data['links'] = $this->pagination->create_links();
		
		
		$data['head_inner'] = $this->load->view('elements/head-inner','',true);
		$data['header'] = $this->load->view('elements/header','',true);
		$data['banner_inner'] = $this->load->view('elements/banner-inner','',true);
		$data['menu'] = $this->load->view('elements/menu','',true);		
		$data['footer'] = $this->load->view('elements/footer','',true);
		$data['maincontent']=$this->load->view('maincontents/completed-projects-view',$data,true);
		
		$this->load->view('home_layout', $data);
	}
	
	public function ongoing_projects()
	{
		
		$table['name'] = 'dumkal_image_galleries';
		$conditions = array('published'=>1, 'category_id'=>'Ongoing Projects');
		$this->load->library('pagination');

		$config["base_url"] = base_url() . "index.php/home/ongoing_projects";
		$config["total_rows"] = $this->Common_model->find_data($table,'count','',$conditions);
		$config["per_page"] = 3;
		
		$this->pagination->initialize($config);
		
		$data['page'] = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
		
		$table['name'] = 'dumkal_image_galleries';
		$conditions = array('published'=>1, 'category_id'=>'Ongoing Projects');
		$data['ongoing_projects'] = $this->Common_model->find_data($table,'array','',$conditions,'','','','',$config["per_page"], $data['page']);
		
		
		
		$data['links'] = $this->pagination->create_links();
		
		
		
		$data['head_inner'] = $this->load->view('elements/head-inner','',true);
		$data['header'] = $this->load->view('elements/header','',true);
		$data['banner_inner'] = $this->load->view('elements/banner-inner','',true);
		$data['menu'] = $this->load->view('elements/menu','',true);		
		$data['footer'] = $this->load->view('elements/footer','',true);
		$data['maincontent']=$this->load->view('maincontents/ongoing-projects-view',$data,true);
		
		$this->load->view('home_layout', $data);
	}
	
	
	
	
	public function enquiry()
	{
		if($this->input->post('submit')) { 
			$name = $this->input->post('senderName');
			$phone = $this->input->post('phoneNumber');
			$email = $this->input->post('senderEmail');
			$message = $this->input->post('message');
			
			
			$to= "subhomoy.projukti@gmail.com";
			
			
			
			

			
			$subject="CONTACT DETAILS.";
			// Your message
			
			$message = '
			<table width="100%" style="border-collapse: collapse">
				<tr>
					<td align="center">
						<table style="width: 100%; max-width: 600px; font-family: arial, sans-serif; font-size: 14px; border-collapse: collapse">
							<tr>
								<td align="center" style="background: #f5f5f5; padding: 15px"><img src="http://caravanintex.com/assets/images/logo.jpg" style="width: 300px; max-width: 100%" alt="Caravan"></td>
							</tr>
							<tr>
								<td align="center" style="background: #4d4d4d; padding: 15px; color: #f5f5f5">Incoming Message</td>
							</tr>
							<tr>
								<td style="background: #f5f5f5; padding: 0">
									<table width="100%" style="border-collapse: separate">
										<tr>
											<td width="100" style="background: #a98361; color: white; padding: 10px">Name</td>
											<td style="background: #fff; color: #0b0b0b; padding: 10px">'.$name.'</td>
										</tr>
										<tr>
											<td width="100" style="background: #a98361; color: white; padding: 10px">Email</td>
											<td style="background: #fff; color: #0b0b0b; padding: 10px">'.$email.'</td>
										</tr>
										<tr>
											<td width="100" style="background: #a98361; color: white; padding: 10px">Phone</td>
											<td style="background: #fff; color: #0b0b0b; padding: 10px">'.$phone.'</td>
										</tr>
										<tr>
											<td width="100" style="background: #a98361; color: white; padding: 10px">Message</td>
											<td style="background: #fff; color: #0b0b0b; padding: 10px">'.$message.'</td>
										</tr>
									</table>
			
								</td>
							</tr>
							<tr>
								<td style="background: #565656 url(http://localhost/caravanintex/assets/images/logo.jpg) repeat 0 0; padding: 15px; color: #f5f5f5">Sent from <a href="http://caravanintex.com/" style="color: #ffb300; font-weight: 600; text-decoration: none">Caravan</a></td>
							</tr>
						</table>
					</td>
				</tr>
			</table>
			';
			
			$headers = "From: $email\r\nReply-To: subhomoy.projukti@gmail.com";
			$headers .= "\r\nMIME-Version: 1.0\r\nContent-Type: text/html; charset=iso-8859-1\r\n";
			//$headers .= 'Cc: subhomoy.projukti@gmail.com' . "\r\n";
			
			// send email
			if(mail($to, $subject, $message, $headers))
			{
				//$data['action'] = 'submit';
				//$this->session->set_flashdata('success_message','Contact details successfully sent');
				//redirect('home/contact_me');
				echo "succ";
			}
			else
			{
				//$data['action'] = 'submit';
				//$this->session->set_flashdata('error_message','Error in sending contact details! Please try again.');
				//redirect('home/contact_me');
				echo "fail";
			}
			
		}
		
		$data['head_inner'] = $this->load->view('elements/head-inner','',true);
		$data['header'] = $this->load->view('elements/header','',true);
		$data['banner_inner'] = $this->load->view('elements/banner-inner','',true);
		$data['menu'] = $this->load->view('elements/menu','',true);		
		$data['footer'] = $this->load->view('elements/footer','',true);
		$data['maincontent']=$this->load->view('maincontents/contact-view',$data,true);
		
		$this->load->view('home_layout', $data);
	}
	
}
