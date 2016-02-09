<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Landing extends CI_Controller {

	public function index()
	{
		$this->load->view('home_layout');
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */