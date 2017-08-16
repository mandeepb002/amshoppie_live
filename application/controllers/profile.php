<?php
class profile extends MS_Controller{
	public function profile_detail_view() {
		
			$this->load->view('seller/header');
		    $this->load->view('seller/nav');
		    $this->load->model("profiles");
			$data['records'] = $this->profiles->view_profile_details();	
//print_r($data);
//die;			
			$this->load->view("seller/view_profile",$data);
			//$this->load->view('seller/nav',$data);
			$this->load->view('seller/footer');
	}
	
		//edit profile details
public function edit_profile_detail(){
	
	$this->load->model('profiles');
	 $this->load->view('seller/header');
	 
		 $this->load->view('seller/nav');
		 
		 $id = $this->input->get('id');
		 $data['id'] = $id;
		// echo $id;die;
			if(!empty($id)){
				
				$data['records'] = $this->profiles->edit_profiles_details1($id);
//echo "<pre>";print_r($data);die;				
							}
			$this->load->view('seller/edit_profile', $data);			
		 $this->load->view('seller/footer');

	$this->load->library( array( 'form_validation', 'session' ) );
        // Validate the user can login
    
    $data['error'] = '';
	
	}	
	
	public function edit_profile(){
	$this->load->model('profiles');
	 $this->load->view('seller/header');
		 $this->load->view('seller/nav');
	$this->load->library( array( 'form_validation', 'session' ) );
	   $this->form_validation->set_rules('name', 'name', 'required');
	    $this->form_validation->set_rules('gender', 'gender', 'required');
    $this->form_validation->set_rules('bio', 'bio', 'required');
	 $this->form_validation->set_rules('city', 'city', 'required');
	  $this->form_validation->set_rules('dob', 'dob', 'required');
	   if($this->form_validation->run() !== FALSE)
  {
	  $id = $this->input->get('id'); 
	  // print_r($this->input->post());die;
	 $data=array(
	'name' => $this->input->post('name'),
	'gender' => $this->input->post('gender'),
	'city' => $this->input->post('city'),
    'dob' => $this->input->post('dob'),
	'bio' => $this->input->post('bio'),
	 
     );
	// print_r($data);
	 //die;
	if(!empty($_FILES["userfile"]))
  {

  $config['upload_path'] =  './uploads/';
  $config['allowed_types'] = '*';
  $config['max_size'] = '2000';
  $config['remove_spaces'] = true;
  $config['overwrite'] = false;
  //$config['encrypt_name'] = true;
  $config['max_width']  = '';
  $config['max_height']  = '';
  $this->load->library('upload', $config);
  $this->upload->initialize($config);            
  if ($this->upload->do_upload('userfile')){
  $image_data = $this->upload->data();
  $data["image"] = $image_data["file_name"];
  }
  }
  
	if($result = $this->profiles->edit_profiles_details2($data,$id)){
		//echo "dhdh";
  //die;
  $this->load->model('admins');
  //$ids=$this->session->userdata('id');
				$dataa2 = $this->admins->view_admins($id);
								//print_r($dataa2 );die;
				$seesion_array = array( 'user_id' => $dataa2->user_id,'name' => $dataa2->name,'image'=>$dataa2->image,);
				//print_r($seesion_array);die;
				$this->session->set_userdata($seesion_array);
		  $url = base_url()."seller?msg=profile Edited Successfully";
		  redirect($url);
		  }
	 }else{
		echo validation_errors(); 
		 }

	}
	}
    
?>