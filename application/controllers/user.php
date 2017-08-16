<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class user extends MS_Controller {

	 public function register_user(){
		
		 $this->load->model('users');
        // Validate the user can login
				$this->load->library('form_validation');

         /* Set validation rule for name field in the form */
		 //$this->form_validation->set_rules('country_code', 'Country Code');
         $this->form_validation->set_rules('mobile', 'Mobile', 'required|trim|xss_clean|regex_match[/^[0-9]{10}$/]');
         $this->form_validation->set_rules('email', 'Email', 'required|trim|xss_clean|valid_email|is_unique[register.email]');
		 $this->form_validation->set_message('is_unique', 'This %s already registered');
		 $this->form_validation->set_message('regex_match', 'Type valid %s number.  ');
         $this->form_validation->set_rules('password', 'Password', 'required|trim|min_length[8]');

         $string = '0123456789';
           $string_shuffled = str_shuffle($string);
           $otp = substr($string_shuffled, 1, 4);



	 $data=array(
	 'country_code' => '+91',
	 'mobile' => $this->input->post('mobile'),
	 'email' => $this->input->post('email'),
	 'password' => md5($this->input->post('password')),
         'otp'=> $otp,
	 'usertype' => $this->input->post('usertype'),
	 'device_id' => $this->input->post('device_id'),
	 'status' => '3',
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
		
			/* $row = $this->users->check_row($data);

			
			if(!$row){
	
                    $datx=$this->users->select_mobile($data);
					
			$f = array(
			'id'  => $datx[0]->id,
			'otp' => $datx[0]->otp,
			
			);

          	    $this->load->helper('json');
				
                         echo json_return("true",$f);//$datx[0]->id,$datx[0]->otp);
			} */
			//else{
				        $datx=$this->users->select_mobile($data);
		
			if($datx)
			{
				       echo json_return("false","Mobile No already exist");
			}
			else
			{
				
			 $this->users->register_users($data);
		    $datx=$this->users->select_mobile($data);
			$f = array(
			'id'  => $datx[0]->id,
			'otp' => $datx[0]->otp,
			
			);
			
	
			$this->session->set_userdata($f);
			
$cSession = curl_init();
//step2
curl_setopt($cSession,CURLOPT_URL,"http://login.redsms.in/API/SendMessage.ashx?user=amshoppie&password=tarun927&phone=".$data['mobile']."&text=".$f['otp']."&type=t&senderid=AMSHOP");  
// https://2factor.in/API/V1/{api_key}/SMS/{phone_number}/{otp}/{template_name}
curl_setopt($cSession,CURLOPT_RETURNTRANSFER,true);
curl_setopt($cSession,CURLOPT_HEADER, false);
//step3
$result=curl_exec($cSession);
// step4
curl_close($cSession);

          	    $this->load->helper('json');
				
                         echo json_return("true",$f);//$datx[0]->id,$datx[0]->otp);

				}
	 	}
	 }
	
	/****** register user api */

	 public function register(){

		 $this->load->model('users');
        // Validate the user can login
				$this->load->library('form_validation');

         /* Set validation rule for name field in the form */
		 //$this->form_validation->set_rules('country_code', 'Country Code');
         $this->form_validation->set_rules('mobile', 'Mobile', 'required|trim|xss_clean|is_unique[register.mobile]');
         $this->form_validation->set_rules('email', 'Email', 'required|trim|xss_clean|valid_email|is_unique[register.email]');
         $this->form_validation->set_rules('password', 'Password', 'required|min_length[8]');

         $string = '0123456789';
           $string_shuffled = str_shuffle($string);
           $otp = substr($string_shuffled, 1, 4);



	 $data=array(
	 'country_code' => '+91',
	 'mobile' => $this->input->post('mobile'),
	 'email' => $this->input->post('email'),
	 'password' => md5($this->input->post('password')),
         'otp'=> $otp,
	 'usertype' => $this->input->post('usertype'),
	 'device_id' => $this->input->post('device_id'),
	 'status' => '3',
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
			$row = $this->users->check_row($data);
			
			
			if(!$row){
			
		    $this->users->register($data);
                    $datx=$this->users->select_mobile($data);
				
			$f = array(
			'id'  => $datx[0]->id,
			'otp' => $datx[0]->otp,
			//'mobile' =>$datx[0]->mobile
			);

          	    $this->load->helper('json');
				
                         echo json_return("true",$f);//$datx[0]->id,$datx[0]->otp);
			}else{
				        $datx = $this->users->select_mobile($data);
					//print_r($datx);
			$f = array(
			'id'  => $datx[0]->id,
			'otp' => $datx[0]->otp,
			//'mobile' =>$datx[0]->mobile
			
			);
			
$cSession = curl_init();
//step2

curl_setopt($cSession,CURLOPT_URL,"http://login.redsms.in/API/SendMessage.ashx?user=amshoppie&password=tarun927&phone=".$data['mobile']."&text=".$f['otp']."&type=t&senderid=AMSHOP");  
// https://2factor.in/API/V1/{api_key}/SMS/{phone_number}/{otp}/{template_name}
curl_setopt($cSession,CURLOPT_RETURNTRANSFER,true);
curl_setopt($cSession,CURLOPT_HEADER, false);
//step3
$result=curl_exec($cSession);

// step4
curl_close($cSession);

          	    $this->load->helper('json');
				
                         echo json_return("true",$f);//$datx[0]->id,$datx[0]->otp);

				}
	 	}
	 }
	 
	public function verify_otp(){
		$this->load->library('form_validation');

         /* Set validation rule for name field in the form */
		 $this->form_validation->set_rules('id', 'ID', 'required');
		 $this->form_validation->set_rules('otp', 'OTP', 'required');
		 		 
		 $data=array(
	  'id' => $this->input->post('id'),	 
	 'otp' => $this->input->post('otp'),
	 );
				 if ($this->form_validation->run() == FALSE) {
                         
			 $d=validation_errors();
                         $x=str_replace("<p>","",$d);
                         $x1=str_replace("</p>","",$x);
                         $x2=str_replace("\n","",$x1);
			 $this->load->helper('json');
                         echo json_return("false",$x2);
						 die();
                   }
				   

		 $this->load->model('users');
		$dats = $this->users->verify_otps($data);
		if($dats == TRUE){
		$this->load->helper('json');
				$f = array(
			'id'  => $dats[0]->id
			);
                         echo json_return("true",$f);
						 die();
		}else{
			$msg="Otp not matched";
			echo json_return("false",$msg);
			die();
			}
	}
	
	
	public function match_otp(){
		$this->load->library('form_validation');

         /* Set validation rule for name field in the form */
		 $this->form_validation->set_rules('mobile', 'Mobile', 'required');
		 $this->form_validation->set_rules('otp', 'OTP', 'required');
		 		 
		 $data=array(
		'mobile' => $this->input->post('mobile'),	 
		'otp' => $this->input->post('otp'),
		);
				 if ($this->form_validation->run() == FALSE) {
                         
			 $d=validation_errors();
                         $x=str_replace("<p>","",$d);
                         $x1=str_replace("</p>","",$x);
                         $x2=str_replace("\n","",$x1);
			 $this->load->helper('json');
                         echo json_return("false",$x2);
						 die();
                   }
				   

		 $this->load->model('users');
		$dats = $this->users->match_otps($data);
		if($dats == TRUE){
		$this->load->helper('json');
				$f = array(
			'mobile'  => $dats[0]->mobile,
			'email' => $dats[0]->email
			);
                         echo json_return("true",$f);
						 die();
		}else{
			$msg="Otp not matched";
			echo json_return("false",$msg);
			die();
			}
	}
	
		
		//addition details
		 public function addition_detail(){
		   $this->load->model('users');
        // Validate the user can login
	$this->load->library('form_validation');

         /* Set validation rule for name field in the form */
		  $this->form_validation->set_rules('id', 'user id', 'required|trim|xss_clean');
		 $this->form_validation->set_rules('name', 'name', 'required');
         $this->form_validation->set_rules('gender', 'gender', 'required');
		 $this->form_validation->set_rules('dob', 'dob', 'required');
		 $data=array(
		 'user_id' => $this->input->post('id'),	 
		 'name' => $this->input->post('name'),
		'gender' => $this->input->post('gender'),
		'dob' => $this->input->post('dob'),
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
			$c=$this->users->check_udetail($data);
			if(!$c){
			$datx=$this->users->addition_details($data);
			
          	    $this->load->helper('json');
                         echo json_return("true",$datx);
			}else{
				$datx=$this->users->update_udetails($data);
			
          	    $this->load->helper('json');
                         echo json_return("true",$datx);
				}
	 	}
}
	//login		
   public function login(){
   		 $this->load->model('users');
        // Validate the user can login
	$this->load->library('form_validation');

         /* Set validation rule for name field in the form */
		 
         $this->form_validation->set_rules('mobile', 'Mobile', 'required|min_length[10]');
         $this->form_validation->set_rules('password', 'Password', 'required|min_length[8]');
		 $this->form_validation->set_rules('usertype', 'usertype', 'required');
		 $this->form_validation->set_rules('device_id', 'Device Id', 'required');
          
         $data=array(
	 'mobile' => $this->input->post('mobile'),
	 'password' => md5($this->input->post('password')),
	 'usertype' => $this->input->post('usertype'),
	 'device_id' => $this->input->post('device_id'),
          );
		  
		if ($this->form_validation->run() == FALSE) {
                         
			 $d=validation_errors();
                         $x=str_replace("<p>","",$d);
                         $x1=str_replace("</p>","",$x);
                         $x2=str_replace("\n","",$x1);
			 $this->load->helper('json');
                         echo json_return("false",$x2);
						 die();
                   }	
				   else{
					   
					   $this->load->model('users');
		$dats = $this->users->login($data);
		
		
		if($dats == TRUE){
			$t = array(
			'id'  => $dats[0]->id,
			'device_id' => $this->input->post('device_id'),
			);
			$this->users->update_deviceid($t);
			$datss = $this->users->fetch_userdetails($dats);

		$this->load->helper('json');
				$f = array(
			'id'  => $dats[0]->id,
			'email' => $dats[0]->email,
			'mobile' => $dats[0]->mobile,
			'gender' => $datss[0]->gender,
			'dob'	=> $datss[0]->dob,
			'name' => $datss[0]->name,
			);
                         echo json_return("true",$f);
						 die();
		}else{
			$msg="Data not available";
			echo json_return("false",$msg);
			die();
			}
	}
					   
                    //$datx=$this->users->login($data);
   }//$this->load->helper('json');
                  //       echo json_return("true",$datx[0]->id);
	 	//}
   //}
   
   public function change_password(){
	    $this->load->model('users');
        // Validate the user can login
	$this->load->library('form_validation');

         /* Set validation rule for name field in the form */
		 $this->form_validation->set_rules('id', 'User Id', 'required');
         $this->form_validation->set_rules('old_password', 'Old password', 'required');
         $this->form_validation->set_rules('password', 'Password', 'required|min_length[8]');
          
         $data=array(
	 'id' => $this->input->post('id'),	 
	 'old_password' => md5($this->input->post('old_password')),
	 'password' => md5($this->input->post('password')),
          );
		 if($this->users->change_password($data) == true){
			 $this->load->model('users');
			if($this->users->update_password($data)== true){
					$this->load->helper('json');
                         echo json_return("true","Password updated successfully");
				}else{
					$this->load->helper('json');
                         echo json_return("False","Failed to update password");
					}
				
			 }else{
 				 echo json_return("False","Old password error");
				 }
	   } 
	   //warehosue details
	   
	    public function warehouse_details(){
		   $this->load->model('users');
        // Validate the user can login
	$this->load->library('form_validation');

         /* Set validation rule for name field in the form */
		  $this->form_validation->set_rules('user_id', 'user_id', 'required');
		 $this->form_validation->set_rules('warehouse_id', 'warehouse_id', 'required');
         $this->form_validation->set_rules('warehouse_name', 'warehouse_name', 'required');
		 $this->form_validation->set_rules('address', 'address', 'required');
		 $this->form_validation->set_rules('city', 'city', 'required');
		 $this->form_validation->set_rules('state', 'state', 'required');
		 $this->form_validation->set_rules('pincodFe', 'pincode', 'required');
		 $this->form_validation->set_rules('cst', 'cst', 'required');
		 $this->form_validation->set_rules('vat', 'vat', 'required');
         $data=array(
		 'user_id' => $this->input->post('user_id'),	 
		 'warehouse_id' => $this->input->post('warehouse_id'),
		'warehouse_name' => $this->input->post('warehouse_name'),
		'address' => $this->input->post('address'),
		'city' => $this->input->post('city'),
		'state' => $this->input->post('state'),
		'pincode' => $this->input->post('pincode'),
		'cst' => $this->input->post('cst'),
		'vat' => $this->input->post('vat'),
		
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
			 if($this->users->select_id_warehouse($data)==false){
                    $datx=$this->users->warehouse_detail($data);

          	    $this->load->helper('json');
                         echo json_return("true",$datx);
			}else{
                    $datx=$this->users->update_warehouse($data);

          	    $this->load->helper('json');
                         echo json_return("true",$datx);
	 	}
		  
	   }
	   }

	   
	   
	   //kyc details
	    public function kyc_details(){
		   $this->load->model('users');
        // Validate the user can login
	$this->load->library('form_validation');

         /* Set validation rule for name field in the form */
		  $this->form_validation->set_rules('user_id', 'user_id', 'required');
		 $this->form_validation->set_rules('pan_card_no', 'pan_card_no', 'required');
         $this->form_validation->set_rules('vat_no', 'vat_no', 'required');
         $data=array(
		 'user_id' => $this->input->post('user_id'),	 
		 'pan_card_no' => $this->input->post('pan_card_no'),
		'vat_no' => $this->input->post('vat_no'),
		
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
			 if($this->users->select_id_kyc($data)==false){
                    $datx=$this->users->kyc_details($data);

          	    $this->load->helper('json');
                         echo json_return("true",$datx);
			}else{
                    $datx=$this->users->update_kyc($data);

          	    $this->load->helper('json');
                         echo json_return("true",$datx);
	 	}
		  
	   }
	   }

	   
	   
	   //alternate address
	   
	
	   public function alternate_address(){
		   $this->load->model('users');
        // Validate the user can login
	$this->load->library('form_validation');

         /* Set validation rule for name field in the form */
		  $this->form_validation->set_rules('user_id', 'user_id', 'required');
		 $this->form_validation->set_rules('name', 'name', 'required');
         $this->form_validation->set_rules('email_id', 'email_id', 'required');
         $this->form_validation->set_rules('mobile_no', 'mobile_no', 'required');
		 $this->form_validation->set_rules('additional_info', 'additional_info', 'required');
		 $data=array(
		 'user_id' => $this->input->post('user_id'),	 
		 'name' => $this->input->post('name'),
		'email_id' => $this->input->post('email_id'),
		'mobile_no' => $this->input->post('mobile_no'),
		'additional_info' => $this->input->post('additional_info'),
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
			 if($this->users->select_id_alter($data)==false){
                    $datx=$this->users->alter_address($data);

          	    $this->load->helper('json');
                         echo json_return("true",$datx);
			}else{
                    $datx=$this->users->update_alter_address($data);

          	    $this->load->helper('json');
                         echo json_return("true",$datx);
	 	}
		  
	   }
	   }
	   

	   
	   
	   //address details
	   public function address_detail(){
		   $this->load->model('users');
        // Validate the user can login
	$this->load->library('form_validation');

         /* Set validation rule for name field in the form */
		  $this->form_validation->set_rules('user_id', 'user_id', 'required');
		 $this->form_validation->set_rules('address', 'address', 'required');
         $this->form_validation->set_rules('city', 'city', 'required');
         $this->form_validation->set_rules('state', 'state', 'required');
		 $this->form_validation->set_rules('pincode', 'pincode', 'required');
		 $data=array(
		 'user_id' => $this->input->post('user_id'),	 
		 'address' => $this->input->post('address'),
		'city' => $this->input->post('city'),
		'state' => $this->input->post('state'),
		'pincode' => $this->input->post('pincode'),
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
			 if($this->users->select_id_address($data)==false){
                    $datx=$this->users->address_details1($data);

          	    $this->load->helper('json');
                         echo json_return("true",$datx);
			}else{
                    $datx=$this->users->update_address($data);

          	    $this->load->helper('json');
                         echo json_return("true",$datx);
	 	}
		  
	   }
	   }
	   
		 //bank details
           public function bank_detail(){
		   $this->load->model('users');
        // Validate the user can login
	$this->load->library('form_validation');

         /* Set validation rule for name field in the form */
		 $this->form_validation->set_rules('user_id', 'User Id', 'required');
		 $this->form_validation->set_rules('benf_name', 'Beneficiary Name', 'required');
         $this->form_validation->set_rules('ban', 'Bank Account Number', 'required');
         $this->form_validation->set_rules('ifsc', 'IFSC Code', 'required');
		 $this->form_validation->set_rules('bank_name', 'Bank Name', 'required');
		 $this->form_validation->set_rules('branch_name', 'Branch Name', 'required');
          
         $data=array(
		 'user_id' => $this->input->post('user_id'),	 
		 'benf_name' => $this->input->post('benf_name'),	 
		 'ban' => $this->input->post('ban'),
		 'ifsc' => $this->input->post('ifsc'),
		 'bank_name' =>$this->input->post('bank_name'),
		 'branch_name' =>$this->input->post('branch_name'),
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
		    if($this->users->select_id($data)==false){
                    $datx=$this->users->bank_details($data);

          	    $this->load->helper('json');
                         echo json_return("true",$datx);
			}else{
				$datx=$this->users->update_bankd($data);

          	    $this->load->helper('json');
                         echo json_return("true",$datx);
				}
	 	}
		   }
		// view  address
		public function profile(){
		$this->load->view('header');
		$this->load->model('welcomes');
		$data['cat'] = $this->welcomes->get_categories();
		$this->load->view('nav',$data);
		$this->load->model('homes');
		$data['ship_address'] = $this->homes->ships();
        $data['order'] = $this->homes->order();
		
		$this->load->view('profile',$data);
	    $this->load->view('footernav');				
		$this->load->view('footer_content');
        $this->load->view('footer');
		}

		//user term and condition
		public function user_terms(){
		$this->load->view('header');
		$this->load->view('nav');	
		$this->load->view('user_term');			
		$this->load->view('footer_content');
		
	
		}
		//user term and condition
		public function users_privacy(){
		$this->load->view('header');
		$this->load->view('nav');	
		$this->load->view('user_privacy');			
		$this->load->view('footer_content');
		
	
		}
	     // delete address
		public function delete_address(){
				$data= array(
				'id'=> $_GET['id'],	
				);
				
				$this->load->model('users');
				$dataa=$this->users->delete_address($data);
				if($dataa==true){
			    redirect(base_url('user/profile'));
		         }
			}
			
		/*********user add address******************/
		
			public function user_add_address(){
			 $this->load->library('form_validation');
		     $this->form_validation->set_rules('name','Name','trim|required|min_length[5]|xss_clean');
			 $this->form_validation->set_rules('mobile','Contact No.','trim|required|regex_match[/^[0-9]{10}$/]|xss_clean');
			 $this->form_validation->set_rules('pincode','Pincode','trim|required|min_length[6]|numeric|xss_clean');
			 $this->form_validation->set_rules('address','Address','trim|xss_clean|required');
			 $this->form_validation->set_rules('locality','Locality','trim|xss_clean|required');
			 $this->form_validation->set_rules('landmark','Landmark','trim|xss_clean|required');
			 $this->form_validation->set_rules('country','Country','trim|xss_clean|required');
			 if($this->form_validation->run()== false){
						$d=validation_errors();
                         $x=str_replace("<p>","",$d);
                         $x1=str_replace("</p>","",$x);
                         $x2=str_replace("\n","",$x1);
			 $this->load->helper('json');
                         echo json_return("false",$x2);  
			}else{
					 $data = array(
					'name'=> $this->input->post('name'),
					'mobile'=> $this->input->post('mobile'),
					'pincode'=> $this->input->post('pincode'),					
					'address'=> $this->input->post('address'),
					'locality'=> $this->input->post('locality'),
					'landmark'=> $this->input->post('landmark'),
					'country'=> $this->input->post('country'),
					'user_id' =>$this->session->userdata('id'),
					);
					
					$this->load->model('users');
					$add=$this->users->add_addresss($data);
					
						$this->load->helper('json');
							echo json_return("true",$add);
					 
				 }
			
			
		}
		/*********user add address close******************/
	
		/********view added address **********************/
		
		/*$this->load->view('header');
		$this->load->view('nav');
		$this->load->model('users');
		$data['user'] = $this->users->add_view();
		$this->load->view('profile',$data);
		$this->load->view('footernav');				
		$this->load->view('footer');
		
		/*********close view add address*********/
		
		
		public function edit_users(){
	
			$this->load->model('users');
			
			$this->load->model('welcomes');
			$data['cat'] = $this->welcomes->get_categories();
			//$this->load->view('nav',$data);
		    $id = $_POST['id'];
			if(!empty($id)){
				$dataa= $this->users->edit_views($id);		
							}
			if($dataa){
				$this->load->helper('json');
				echo json_return("true",$dataa);
			}else{
				$this->load->helper('json');
				echo json_return("false","try again");
			}
			//$this->load->view('profile', $dataa);			
		
			}	

		public function user_edit_address(){
			 $this->load->library('form_validation');
		     $this->form_validation->set_rules('name','Name','trim|required|min_length[5]|xss_clean');
			 $this->form_validation->set_rules('mobile','Contact No.','trim|required|regex_match[/^[0-9]{10}$/]|xss_clean');
			 $this->form_validation->set_rules('pincode','Pincode','trim|required|min_length[6]|numeric|xss_clean');
			 $this->form_validation->set_rules('address','Address','trim|xss_clean|required');
			 $this->form_validation->set_rules('locality','Locality','trim|xss_clean|required');
			 $this->form_validation->set_rules('landmark','Landmark','trim|xss_clean|required');
			 $this->form_validation->set_rules('country','Country','trim|xss_clean|required');
			 if($this->form_validation->run()== false){
						$d=validation_errors();
                         $x=str_replace("<p>","",$d);
                         $x1=str_replace("</p>","",$x);
                         $x2=str_replace("\n","",$x1);
			 $this->load->helper('json');
                         echo json_return("false",$x2);  
			}else{
					 $data = array(
					 'id'=> $this->input->post('id'),
					'name'=> $this->input->post('name'),
					'mobile'=> $this->input->post('mobile'),
					'pincode'=> $this->input->post('pincode'),					
					'address'=> $this->input->post('address'),
					'locality'=> $this->input->post('locality'),
					'landmark'=> $this->input->post('landmark'),
					'country'=> $this->input->post('country'),
					'user_id' =>$this->session->userdata('id'),
					);
					
					$this->load->model('users');
					$add=$this->users->edit_update($data);
						if(!empty($add)){
						$this->load->helper('json');
							echo json_return("true",$add);
						}else{
							 $this->load->helper('json');
									echo json_return("false","try");  
						}
					 
				 }
			
			
		}
		//public function edit_users(){
			//$data= array(
			//'id'=> $_GET['id'],	
		///		);
			//$this->load->view('header');
			//$this->load->model('welcomes');
			//$data['cat'] = $this->welcomes->get_categories();
			//$this->load->view('nav',$data);
			//$this->load->model('users');
			//$dataa['records'] = $this->users->edit_views($data);
		    //$this->load->view('profile',$dataa);
			//$this->load->view('footernav');				
			//$this->load->view('footer');
	//	}
		
		
		
		
		public function edit_profile(){
		$this->load->view('header');
		$this->load->view('nav');		
		$this->load->view('edit_profile');
		$this->load->view('footernav');				
		$this->load->view('footer');
		}
		
		public function add_cart(){
		$this->load->view('header');
		$this->load->view('nav');		
		$this->load->view('add_cart');
		$this->load->view('footernav');				
		$this->load->view('footer');
		
		}
		
	/************ Update Profile Start *********************/
	public function show_otp(){
		$this->load->model('users');
		$this->load->library('form_validation');

         /* Set validation rule for name field in the form */
		 $data = array(
		 'id' => $this->input->post('id'),
		 );
		$ghata=$this->users->get_otp($data);
                         	 
		 $data=array(
	  'id' => $this->input->post('id'),	 
	 	'otp' => $ghata[0]->otp,
	 );
	 $ghata=$this->users->get_otp($data);
		
	 $this->load->helper('json');
		echo json_return("true",$ghata[0]->otp);
		
	}
	
		public function updateprofile(){
			
		$this->load->model('users');
		$this->load->library('form_validation');

         /* Set validation rule for name field in the form */
		 $this->form_validation->set_rules('email', 'Email', 'required');
		 $this->form_validation->set_rules('id', 'Id', 'required');
         $this->form_validation->set_rules('name', 'Name', 'required');
         $this->form_validation->set_rules('dob', 'DOB', 'required');
         $this->form_validation->set_rules('gender', 'Gender', 'required');
		 $this->form_validation->set_rules('mobile', 'Mobile', 'required');
        //If Not Edit Mobile Number
		if($this->form_validation->run() == true){
					$data=array(
					 'id' => $this->input->post('id'),	 
					 'email' => $this->input->post('email'),	 
					 'name' => $this->input->post('name'),
					 'dob' => $this->input->post('dob'),
					 'gender' =>$this->input->post('gender'),
					 'mobile' => $this->input->post('mobile'),
					 'otp'	=> $this->input->post('otp'),
					  );
			$check_mobile = $this->users->check_mobile($data);
			if($check_mobile==true){
				$this->users->update_reguser($data);
				$kata=$this->users->update_udetailss($data);
				if($kata==TRUE){
					$this->load->helper('json');
					
                         echo json_return("true","true");
					}
				}else{
					if(!$this->input->post('otp')){
					$ghata=$this->users->get_otp($data);
						 $this->load->helper('json');
                         echo json_return("true",$ghata['0']->otp);
						 }
					$sata=$this->users->verify_otps($data);
					if($sata == true){
						$this->users->update_reguserr($data);
							$kata=$this->users->update_udetailss($data);
						if($kata==TRUE){
							$this->load->helper('json');
								 echo json_return("true","true");
							}
						}else{
							if($this->input->post('otp')){
							$this->load->helper('json');
                         echo json_return("false","Otp not matched");
						 }
							}
					}		  
		}else{
					$d=validation_errors();
                         $x=str_replace("<p>","",$d);
                         $x1=str_replace("</p>","",$x);
                         $x2=str_replace("\n","",$x1);
			 			 $this->load->helper('json');
                         echo json_return("false",$x2);
					}
				
		
		
		
		}
	/************ Update Profile End ***********************/	
	
	/******************COuntry List Start***********************/
	public function country_list(){
		$this->load->model('users');
		$this->load->helper('json');
		$data = $this->users->country_lists();	
		print_r(json_return('true',$data));
		die();
		/*foreach($data as $key){
			$tata=array(
			'id' => $key->id,
			'name' => $key->name
			);
		}*/
		//echo json_encode($tata);
		
		//echo json_return("true",$data[]->id);
		
		}
		
	/******************COuntry List End***********************/
	/******************State List Start***********************/
	public function state_list(){
	$this->load->library('form_validation');

         /* Set validation rule for name field in the form */
		 $this->form_validation->set_rules('country_id', 'Country id', 'required');
		if($this->form_validation->run() == true){
		$data = array(
		'country_id' => $this->input->post('country_id'), 
		);
		$this->load->model('users');
		$datx = $this->users->state_lists($data);
		if($datx==true){
		print_r(json_return('true',$datx));
		}else{
			echo json_return('false','Please enter a valid country id');
			}
		}else{
			$d=validation_errors();
                         $x=str_replace("<p>","",$d);
                         $x1=str_replace("</p>","",$x);
                         $x2=str_replace("\n","",$x1);
			 			 $this->load->helper('json');
                         echo json_return("false",$x2);
				
			}
	}
	/******************State List End***********************/
	
	/******************City List Start***********************/
	public function city_list(){
	$this->load->library('form_validation');

         /* Set validation rule for name field in the form */
		 $this->form_validation->set_rules('state_id', 'State id', 'required');
		if($this->form_validation->run() == true){
		$data = array(
		'state_id' => $this->input->post('state_id'), 
		);
		$this->load->model('users');
		$datx = $this->users->city_lists($data);
		if($datx==true){
		print_r(json_return('true',$datx));
		}else{
			echo json_return('false','Please enter a valid country id');
			}
		}else{
			$d=validation_errors();
                         $x=str_replace("<p>","",$d);
                         $x1=str_replace("</p>","",$x);
                         $x2=str_replace("\n","",$x1);
			 			 $this->load->helper('json');
                         echo json_return("false",$x2);
				
			}
	}
	/******************City List End***********************/
	
	/************************Delivery address start***************/
	public function delivery_address(){
		$this->load->library('form_validation');
		
		$this->form_validation->set_rules('id', 'User id', 'required');
		$this->form_validation->set_rules('first_name', 'First Name', 'required');
		$this->form_validation->set_rules('last_name', 'Last Name', 'required');
		$this->form_validation->set_rules('mobile', 'Mobile', 'required');
		$this->form_validation->set_rules('address', 'Address', 'required');
		$this->form_validation->set_rules('country', 'Country', 'required');
		$this->form_validation->set_rules('state', 'State', 'required');
		$this->form_validation->set_rules('city', 'State', 'required');
		$this->form_validation->set_rules('postal_code', 'State', 'required');
		
		if($this->form_validation->run() == TRUE){
			$data = array(
			'user_id' => $this->input->post('id'),
			'first_name' => $this->input->post('first_name'),
			'last_name' => $this->input->post('last_name'),
			'mobile' => $this->input->post('mobile'),
			'address' => $this->input->post('address'),
			'country' => $this->input->post('country'),
			'state' => $this->input->post('state'),
			'postal_code' => $this->input->post('postal_code'),
			);
			$this->load->model('users');
			$tata = $this->users->check_del_address($data);
			if($tata == true){
					$dataa = $this->users->update_del_address($data);
			if($dataa==true){
				echo json_return("true",$dataa);
				}
				}else{
			$dataa = $this->users->delivery_addresss($data);
			if($dataa==true){
				echo json_return("true",$dataa);
				}
			}
			}else{
				$d=validation_errors();
                         $x=str_replace("<p>","",$d);
                         $x1=str_replace("</p>","",$x);
                         $x2=str_replace("\n","",$x1);
			 			 $this->load->helper('json');
                         echo json_return("false",$x2);
				}
		}
	
	/************************Delivery address end*****************/
	/************************Test*********************************/
	public function upload (){
		$this->load->view('upload');
		
		}
		
		public function do_upload(){
		$config = array(	
			'upload_path' => './uploads/',
			'allowed_types' => 'gif|jpg|png',
			);
			
			$this->load->library('upload', $config);
			
			if($this->upload->do_upload()){
				$data = array(
				'user_id' => '1',//$this->input->post('id'),
				'image' => $this->input->post('userfile'),
				);
				
				$image = $this->upload->data(); 
				$image_path = $image['raw_name'].$image['file_ext'];
				$data['image'] = $image_path;
				$this->load->model('users');
			if($this->users->uploads($data)){
				$this->load->helper('json');
                         echo json_return("true","Uploaded successfully");
				}
				}
		}	
		
		public function update(){
			$this->load->view('upload');
		}
		
		public function profile_update(){
			$config = array(	
			'upload_path' => './uploads/',
			'allowed_types' => 'gif|jpg|png',
			);
			
			$this->load->library('upload', $config);
			
			if($this->upload->do_upload()){
				$data = array(
				'user_id' => $this->input->post('id'),
				'image' => $this->input->post('userfile'),
				);
				
				$image = $this->upload->data(); 
				$image_path = $image['raw_name'].$image['file_ext'];
				$data['image'] = $image_path;
				$this->load->model('users');
			if($this->users->update_imgs($data)){
				$this->load->helper('json');
                         echo json_return("true","Updated successfully");
				}
				}
		}
		
		public function fetch_pimage(){
			$data = array(
			'user_id' => $this->input->post('id'),
			);
			$this->load->model('users');
			$data = $this->users->fetch_pimages($data);
			$url = base_url()."uploads/".$data[0]->image;
			$this->load->helper('json');
             echo json_return("true",$url);
			
			}
			
		public function user_login(){
		 $this->load->model('users');
        // Validate the user can login
		$this->load->library('form_validation');

         /* Set validation rule for name field in the form */
         $this->form_validation->set_rules('mobile', 'Mobile', 'required|regex_match[/^[0-9]{10}$/]');
		 $this->form_validation->set_message('regex_match', 'Type valid %s number.  ');
         $this->form_validation->set_rules('password', 'Password', 'required|min_length[8]');
          
         $data=array(
		'mobile' => $this->input->post('mobile'),
		'password' => md5($this->input->post('password')),
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
			$login_id = $this->users->login($data);
				
			if(!empty($login_id) && $login_id != "Data Not Available"){
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
			/*$this->load->model('admins');
			$dataa = $this->admins->add_details();
			$this->session->set_userdata('name',$dataa[0]->name);*/
			//print_r($this->session->all_userdata());
			//die();
			//echo '<pre>';
			//print_r($session_data);
			//die();
			if($this->session->userdata('id')==true && $this->session->userdata('usertype') == 1){
				$this->load->helper('json');
					echo json_return("true","Login successfully");
			}else{
				$this->load->helper('json');
					echo json_return("false","try again");
				}

			}else{
				$this->load->helper('json');
					echo json_return("false","You are not registered with us. Please sign up.");
				}
	 	}
   }	
		public function logout(){
			$this->session->unset_userdata('id');
			$this->session->sess_destroy();
			if($this->session->userdata('id')==true){
				$url=base_url();
				}else{
				$url=base_url();
				redirect($url);
					}
			}
		
		public function view_profile(){
		
		$this->load->model('users');
		$dataa = $this->users->view_editprofile();
		if($dataa == true){
			$this->load->helper('json');
				echo json_return("true",$dataa);
		}else{
			$this->load->helper('json');
				echo json_return("false","try again");
			
		}
		
		}
		
	public function edit_userpro(){
		
		$this->load->model('users');
		
		$this->load->library('form_validation');
		
        /* Set validation rule for name field in the form */
		$this->form_validation->set_rules('email', 'Email', 'required');
		// $this->form_validation->set_rules('id', 'Id', 'required');
       $this->form_validation->set_rules('name', 'Name', 'required');
         //$this->form_validation->set_rules('bio', 'Bio', 'required');
         $this->form_validation->set_rules('lastname', 'Lastname', 'required');
         //$this->form_validation->set_rules('password', 'Password', 'trim');
        // $this->form_validation->set_rules('dob', 'DOB', 'required');
         //$this->form_validation->set_rules('gender', 'Gender', 'required');
		 //$this->form_validation->set_rules('mobile', 'Mobile', 'required');
    // get form variable
	
		if($this->form_validation->run() == false){
			
			$d=validation_errors();
                         $x=str_replace("<p>","",$d);
                        $x1=str_replace("</p>","",$x);
                        $x2=str_replace("\n","",$x1);
						$this->load->helper('json');
                        echo json_return("false",$x2);
		}else{
					
		$data=array(
		'id' => $this->session->userdata('id'),	 
		'email' => $this->input->post('email'),	 
		'name' => $this->input->post('name'),
		'lastname' => $this->input->post('lastname'),
		'dob' => $this->input->post('dob'),
		'gender' =>$this->input->post('gender'),
		'mobile' => $this->input->post('mobile'),
		'bio' => $this->input->post('bio'),
		'otp'=> $this->input->post('otp'),
		'city'=> $this->input->post('city'),
		'password' => $this->input->post('password'),
		);
		
		$edit = $this->users->edit_profile_user($data);
		if($edit){
				$this->load->helper('json');
					echo json_return("true",$edit);
			}else{
				$this->load->helper('json');
					echo json_return("false","Not updated");
			}
		
		}
    }
		
		
		
}



