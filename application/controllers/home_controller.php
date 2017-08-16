<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class home_controller extends MS_Controller {
	public function register_home(){
		
		$this->load->library('form_validation');
		$this->form_validation->set_rules('mobile', 'Mobile', 'required|trim|is_unique[register.mobile]');
		//$this->form_validation->set_rules('mobile', 'Mobile', 'required|trim');
		$this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email|is_unique[register.email]');
		$this->form_validation->set_rules('password', 'Password', 'required|trim');
		
		$string = '0123456789';
           $string_shuffled = str_shuffle($string);
           $otp = substr($string_shuffled, 1, 4);
		
		if($this->form_validation->run() == False){
				$d=validation_errors();
                         $x=str_replace("<p>","",$d);
                         $x1=str_replace("</p>","",$x);
                         $x2=str_replace("\n","",$x1);
			 $this->load->helper('json');
                         echo json_return("false",$x2);
						 
                   }
		else{
			$data = array(
				'mobile'=> $this->input->post('mobile'),
				'email'=> $this->input->post('email'),
				'password'=> md5($this->input->post('password')),
				'usertype'=> '1',
				'status' => '3',
				'otp' => $otp,
				'add_by'=> '1',
				);
			$this->load->model('home_model');
			$dataa=$this->home_model->home_register($data);
		    $this->load->helper('json');
					echo json_return("true",$dataa);
		} 
	}
}
	//login form
	
	/*public function login_home(){
		$this->load->model('home_model');
		$this->load->library('form_validation');
	    Set validation rule for name field in the form 
		$this->form_validation->set_rules('mobile','Mobile','required|trim');
		$this->form_validation->set_rules('password','Password','required|trim|min_length[8]');
		
		$data= array(
		'mobile'=>$this->input->post('mobile'),
		'password'=>md5($this->input->post('password'),
		
		);
		if($this->form_validation->run() == False){
			$d=validation_errors();
					$x=str_replace("<p>","",$d);
					$x1=str_replace("</p>","",$x);
					$x2=str_replace("\n","",$x1);
			this->load->helper('json');
			echo json_encode($x2);
		}else{
			$login_id = $this->home_model->login($data);

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
				
				if($this->session->userdata('id')==true && $this->session->userdata('usertype') == 1){
				echo json_encode($session_data);
				
		}else{
			$url=base_url().'home_controller/login?msg=email and password not matched';
				redirect($url);
		}
		
		
		
		
	}else{
		echo"password error";
	}
	
	
}
}*/
	/******* close login ************/
	
