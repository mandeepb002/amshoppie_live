<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

	class social_reg_api extends MS_Controller {
		
		
		public function reg_api(){
		$this->load->library('form_validation');
		
		/* Set validation rule for name field in the form */
		$this->form_validation->set_rules('firstname','Firstname','trim|required');
		$this->form_validation->set_rules('lastname','Lastname','trim|required');
		//$this->form_validation->set_rules('mobile','Mobile','trim|required');
		$this->form_validation->set_rules('email','Email','trim|required');
		$this->form_validation->set_rules('gender','Gender','trim|required');
		$this->form_validation->set_rules('dob','Dob','trim|required');
		$this->form_validation->set_rules('locality','Locality','trim|required');
		$this->form_validation->set_rules('device_id','Device_id','trim|required');
		
		$data=array(
		'firstname'=>$this->input->post('firstname'),
		'lastname'=>$this->input->post('lastname'),
		'mobile'=>$this->input->post('mobile'),
		'email'=>$this->input->post('email'),
		'gender'=>$this->input->post('gender'),
		'dob'=>$this->input->post('dob'),
		'locality'=>$this->input->post('locality'),
		'device_id'=>$this->input->post('device_id'),
      );
		if ($this->form_validation->run() == FALSE) {
                         
			 $d=validation_errors();
                         $x=str_replace("<p>","",$d);
                         $x1=str_replace("</p>","",$x);
                         $x2=str_replace("\n","",$x1);
			 $this->load->helper('json');
                         echo json_return("false",$x2);
                   }
		else{
			$this->load->model('social_api_model');
			$datx=$this->social_api_model->insert_api($data);

          	    $this->load->helper('json');
                         echo json_return("true",$datx);
	 	}
		}
		
		public function categories(){

        $this->load->model('social_api_model');
		$data = $this->social_api_model->get_categories();
		$this->load->helper('json');
                         echo json_return("true",$data);

		
    }
		
		}
	