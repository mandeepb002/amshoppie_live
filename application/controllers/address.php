<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class address extends CI_Controller {

	public function index()
	{
		$this->load->view('ucp/header1');
		$this->load->view('ucp/navbar');
    $this->load->view('ucp/checkout');
		$this->load->view('ucp/address');
		$this->load->view('ucp/footer');

	}
}
/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */

