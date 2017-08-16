<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class main_user extends MS_Controller {

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
		public function register_user(){
			$this->load->model('main_model');
        // Validate the user can login
				$this->load->library('form_validation');

         /* Set validation rule for name field in the form */
		 //$this->form_validation->set_rules('country_code', 'Country Code', 'required');
         $this->form_validation->set_rules('mobile', 'Mobile', 'required|trim|xss_clean|is_unique[register.mobile]');
         $this->form_validation->set_rules('email', 'Email', 'required|trim|xss_clean|valid_email|is_unique[register.email]');
         $this->form_validation->set_rules('password', 'Password', 'required|trim|min_length[8]');

         $string = '0123456789';
           $string_shuffled = str_shuffle($string);
           $otp = substr($string_shuffled, 1, 4);

		if ($this->form_validation->run() == false) {
			echo validation_errors();
				/*$this->load->view('header');
				$this->load->view('nav');	
				$this->load->view('footernav');					
				$this->load->view('footer');	*/
		
			}else{
				
				 $data=array(
		 'country_code' => '91',
		 'mobile' => $this->input->post('mobile'),
		 'email' => $this->input->post('email'),
		 'password' => md5($this->input->post('password')),
			 'otp'=> $otp,
		 'usertype' => '1',
		 'status' => '1'
			  );
			  
			  //print_r($data);
			  $this->load->model('main_model');
			$this->main_model->main_register($data);
				$url = base_url()."?msg=Registered Successfully Login below";
				redirect($url);
				
				
				}	
		}
		
		//login user
		public function user_login(){
		 $this->load->model('main_model');
        // Validate the user can login
	$this->load->library('form_validation');

         /* Set validation rule for name field in the form */
         $this->form_validation->set_rules('mobile', 'Mobile', 'required');
         $this->form_validation->set_rules('password', 'Password', 'required|min_length[8]');
          
         $data=array(
	 'mobile' => $this->input->post('mobile'),
	 'password' => md5($this->input->post('password')),
          );
		 if ($this->form_validation->run() == FALSE) {
                   
				 $this->load->view('header');
				$this->load->view('nav');	
				$this->load->view('footernav');					
				$this->load->view('footer');	
					 				 
				  
                   }
		else{
			$login_id = $this->main_model->login_users($data);

			if($login_id != "Data Not Available"){
				foreach($login_id as $login_ids){
				$see = array(
				
				'id' => $login_ids->id,
				'mobile'=>$login_ids->mobile,
				'email'=>$login_ids->email,
				'usertype' => $login_ids->usertype,
				);
				}
								
			$this->session->set_userdata($see);
			$session_data = $this->session->userdata('id');

			echo '<pre>';
			//print_r($session_data);
			//die();
			if($this->session->userdata('id')==true){
				$url=base_url('user/profile');
				redirect($url);
			}else{
				$url=base_url('?msg=Phone and password not matched');
				redirect($url);
				}

			}else{
				echo "Password error";
				}
	 	}
   }
   
   public function logout(){
	   $this->session->sess_destroy();
	   if($this->session->userdata('id')==true){
		   redirect(base_url());
		   }else{
			   redirect(base_url('?msg=Logged out successfully'));
			   }
	   }
   }