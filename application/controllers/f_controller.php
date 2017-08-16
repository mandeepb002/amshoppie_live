<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class f_controller extends MS_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -  
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in 
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
public function register(){

		 $this->load->model('f_model');
        // Validate the user can login
				$this->load->library('form_validation');

         /* Set validation rule for name field in the form */
		 $this->form_validation->set_rules('country_code', 'Country Code', 'required');
         $this->form_validation->set_rules('mobile', 'Mobile', 'required|trim|xss_clean');
         $this->form_validation->set_rules('email', 'Email', 'required|trim|xss_clean|valid_email|');
         $this->form_validation->set_rules('password', 'Password', 'required|min_length[8]');
		  $data=array(
	 'country_code' => $this->input->post('country_code'),
	 'mobile' => $this->input->post('mobile'),
	 'email' => $this->input->post('email'),
	 'password' => md5($this->input->post('password')),
         'otp'=> $otp,
	 'usertype' => $this->input->post('usertype'),
	 'device_id' => $this->input->post('device_id'),
	 );

}

}
