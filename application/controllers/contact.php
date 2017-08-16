<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class contact extends MS_Controller {

	public function index()
	{
		$this->load->view('header');
		$this->load->view('contact_us');

	}
}
/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */
