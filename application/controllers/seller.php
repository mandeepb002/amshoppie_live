<?php
class seller extends MS_Controller{
	public function index(){
		if($this->session->userdata('id')==true){
			
		$this->load->model('products');
		$this->load->model('orders');
		$this->load->model('admins');
		$this->load->view('seller/header');
		$data['record'] = $this->admins->add_details(); 
		$this->load->view('seller/nav',$data);
		//$data['q'] = $this->orders->total_orders();
		$id = $this->session->userdata('id');
		if($this->products->total_products($id)){
			$data['q']=$this->products->total_products($id);
		}else{
			$data['q']=0;
		}
		$this->load->model('users');
		$data['total_r'] = $this->users->total_registered();
		$data['total_blocked'] = $this->users->total_blocked();
		$data['total_active'] = $this->users->total_active();
		$data['total_pending'] = $this->users->total_pending();
		$data['total_pending'] = $this->users->total_seller();
		$data['total_seller'] = $this->users->total_seller();
		$data['tot_sel_bl'] = $this->users->total_blocked_seller();
		$data['tot_sel_ac'] = $this->users->total_active_seller();
		$data['tot_sel_pe'] = $this->users->total_pending_seller();
		$data['total_a_sub'] = $this->users->total_sub_a();
		if($this->users->total_product1($id)){
			$data['product_total']=$this->users->total_product1($id);
		}else{
			$data['product_total']=0;
		}
		//$data['product_total'] = $this->users->total_product1($id);
		if($this->users->bank_total1($id)){
			$data['bank_total']=$this->users->bank_total1($id);
		}else{
			$data['bank_total']=0;
		}
		//$data['bank_total'] = $this->users->bank_total1($id);
		if($this->products->total_cancelled_orders($id)){
			$data['cancel']=$this->products->total_cancelled_orders($id);
		}else{
			$data['cancel']=0;
		}
		if($this->products->returned_orders($id)){
			$data['returns']=$this->products->returned_orders($id);
		}else{
			$data['returns']=0;
		}
		if($data['product_total']==0){
			$data['ch']=1;
			$data['total_amount']=0;	
		}else{
			
		if($this->users->amount_total2($id)){
			$amt=$this->users->amount_total2($id);
			foreach($amt as $t){
				$st=$am;
				$am=$st+$t;
			}
			$data['total_amount']=$am;
			$data['ch']=0;
		}else{
			$data['total_amount']=0;
			$data['ch']=1;
		}
		}
		//$data['total_amount'] = $this->users->amount_total1($id);
		//print_r($data);die;
		//print_r($this->products->total_products($id));die;
		$this->load->view('seller/index', $data);
		$this->load->view('seller/footer');
		if(($this->session->userdata('id')==true)){
			$id = $this->session->userdata('id');
			/*foreach($id as $ids){
				$this->load->model('users');
				$idss=$ids->id;
				$data['records']=$this->users->get_user_info($idss);
				
				}*/
			
			}
		}else{
			$url=base_url()."seller/login";
			redirect($url);
			}
		
		}
		public function login(){
			if($this->session->userdata('id')==false){
			$this->load->view('seller/header');
			$this->load->view('seller/login');
			$this->load->view('seller/footer');	
			}else{
				$url=base_url().'seller/commissions';
				redirect($url);
				}
					
			}
	 public function validate_login(){
		 $this->load->model('users');
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
                   
				 $this->load->view('seller/header');
				 $this->load->view('seller/login');
				 $this->load->view('seller/header');				 				 				 
				  
                   }
		else{
			$login_id = $this->users->login($data);
			foreach($login_id as $idd)
			{
			$ids = $idd->id;
			}
			//echo $idd;die;
		$this->load->model('subadmins');
		$dataa1 = $this->subadmins->view_permission($ids);
				$this->load->model('admins');
				$dataa2 = $this->admins->view_admins($ids);
								//print_r($dataa2 );die;
				$seesion_array = array( 'user_id' => $dataa2->user_id,'name' => $dataa2->name,'image'=>$dataa2->image,);
				//print_r($seesion_array );die;
			$per=array();
			if($login_id != "Data Not Available"){
				foreach($login_id as $login_ids){
				$see = array(
				'id' => $login_ids->id,
				'mobile'=>$login_ids->mobile,
				'email'=>$login_ids->email,
				'usertype' => $login_ids->usertype,
				'permission' => $this->subadmins->view_permission($login_ids->id),

				
				);
				}
								
			$this->session->set_userdata($see);
			 $this->session->set_userdata($seesion_array);
			//print_r($session);die;
			$session_data = $this->session->userdata('id');
			$this->load->model('admins');
			$dataa = $this->admins->add_details();
			//$this->session->set_userdata('name',$dataa[0]->name);
			//$this->session->set_userdata('image',$dataa[0]->image);
			
			$this->load->model('users');
			echo '<pre>';
			//print_r($session_data);
			//die();
			if($this->session->userdata('id')==true && $this->session->userdata('usertype') != 1){
				if($this->session->userdata('usertype') == 2){
					
					if($this->users->check_subscribe_user()){
						$url=base_url().'seller';
					}else{
						$url=base_url().'seller/commissions';
					}
					
					
				}else{
					$url=base_url().'seller';
				}				
				redirect($url);
			}else{
				$url=base_url().'seller/login?msg=email and password not matched';
				redirect($url);
				}

			}else{
				echo "Password error";
				}
	 	}
   }
   //add product
   		public function add_product1(){
		
			//$image = $this->input->post('image');
			
			$this->load->library( array( 'form_validation', 'session' ) );
			
        // Validate the user can login
    
		$data['error'] = '';
		
		$this->form_validation->set_rules('product_name', 'product name', 'required|trim');
		$this->form_validation->set_rules('quantity', 'quantity', 'required|trim|numeric');
		$this->form_validation->set_rules('category_name', 'category name', 'required|trim');
		$this->form_validation->set_rules('description', 'description', 'required');
		$this->form_validation->set_rules('mer_sku', 'mer sku', 'required|trim');
		$this->form_validation->set_rules('product_sku', 'product sku', 'required|trim');
		$this->form_validation->set_rules('item_price', 'item price', 'required|trim');
		$this->form_validation->set_rules('price_d', 'price after discount', 'required|trim');
		$this->form_validation->set_rules('weight', 'weight', 'required|trim');
		$this->form_validation->set_rules('country_code', 'country code', 'required|trim');
		$this->form_validation->set_rules('shipping_fee', 'shipping fee', 'required|trim');
		$this->form_validation->set_rules('ship_in', 'ship in', 'required|trim');
		$this->form_validation->set_rules('paid_by', 'paid by', 'required|trim');
			$images_array = array();
		if($this->form_validation->run() !== FALSE ){
//echo "<pre>";print_r($_FILES);die;

			$data = array(

			'user_id' =>$this->session->userdata('id'),
			'status' => '7',
			'product_name' => $this->input->post('product_name'),
			'shop_id' => $this->input->post('shop_id'),
			'quantity' => $this->input->post('quantity'),
			'category_name' => $this->input->post('category_name'),
			'description' => $this->input->post('description'),
			'mer_sku' => $this->input->post('mer_sku'),
			'product_sku' => $this->input->post('product_sku'),
			'item_price' => $this->input->post('item_price'),
			'price_d' => $this->input->post('price_d'),
			'weight' => $this->input->post('weight'),
			'country_code' => $this->input->post('country_code'),
			'shipping_fee' => $this->input->post('shipping_fee'),
			'ship_in' => $this->input->post('ship_in'),
			'paid_by' => $this->input->post('paid_by'),
			'commission_type' => $this->input->post('commission_type'),
			'return_days' => $this->input->post('return_days'),
			'exchange_days' => $this->input->post('exchange_days'),
			);
			
			
			$number_of_files_uploaded = count($_FILES['userfiles']['name']);
			$this->load->library('upload');
			 for ($i = 0; $i < $number_of_files_uploaded; $i++) {
      $_FILES['userfile']['name']     = $_FILES['userfiles']['name'][$i];
      $_FILES['userfile']['type']     = $_FILES['userfiles']['type'][$i];
      $_FILES['userfile']['tmp_name'] = $_FILES['userfiles']['tmp_name'][$i];
      $_FILES['userfile']['error']    = $_FILES['userfiles']['error'][$i];
      $_FILES['userfile']['size']     = $_FILES['userfiles']['size'][$i];
      $config = array(
        'allowed_types' => 'jpg|jpeg|png|gif',
        'max_size'      => 3000,
        'overwrite'     => FALSE,
		'upload_path' => './uploads/',
		);
     
	 $this->upload->initialize($config);
     if(!$this->upload->do_upload()){
		 print_r($this->upload->display_errors());
	 }
	 $image = $this->upload->data(); 
			$image_path = $image['raw_name'].$image['file_ext'];
			$images_array[] = $image_path;

			  } // end for loop
  

			
			$this->load->model('products');
			$data = $this->products->add_products($data);
			if($data){
				
				$this->load->model('products');
			$id = $data[0]->id;
			$colour = $this->input->post('colour');
			$size = $this->input->post('size');
			$this->products->add_attribute($id, $colour);
			$this->products->add_attribute($id, $size);
			
			//$colour = $this->input->post('colour');
			//$size = $this->input->post('size');
			//$this->products->add_attribute($id,$colour,$size);
			if($this->products->add_images($images_array,$id)){
								$url=base_url()."product/product_add?msg=Product Added Successfully";
								
				redirect($url);
				}
				

								
				}
			
			}else{
			 $this->load->model('products');
			 
			 $this->load->view('seller/header');
			 $this->load->view('seller/nav');
			 $this->load->model('products');
		 $data['last'] = $this->products->last_product();
			 $this->load->model('manage_seller_model');
			 		 $this->load->model('products');
		 $data['coms']=$this->products->com();
		//print_r($data['coms']);
		  $this->load->model('settings');
         $data['com'] = $this->settings->comissions();
			  $data['record'] = $this->manage_seller_model->seller_info();
				$data['records'] = $this->manage_seller_model->get_categories();
				 //$data['records'] = $this->admins->single_view_add($id);
		         $this->load->model('settings');
		         $data['com'] = $this->settings->comissions();
		         $this->load->model('products');
		     $data['colour'] = $this->products->attr_colour();
         	 $data['size'] = $this->products->attr_size();
			 $this->load->model('shopes');
			  $data['recordsss'] = $this->shopes->seller_shop1();
			 $this->load->view('seller/add_product',$data);
			 $this->load->view('seller/footer');
			}
		}
		
		public function logout(){
			$this->session->unset_userdata('id');
			$this->session->sess_destroy();
			if($this->session->userdata('id')==true){
				$url=base_url().'seller';
				}else{
				$url=base_url().'seller/login';
				redirect($url);
					}
			}
		public function register(){
			$this->load->view('seller/header');
			$this->load->view('seller/register');						
			$this->load->view('seller/footer');			
			}	
		public function register_here(){
			$this->load->model('users');
        // Validate the user can login
				$this->load->library('form_validation');

         /* Set validation rule for name field in the form */
		 //$this->form_validation->set_rules('country_code', 'Country Code', 'required');
         $this->form_validation->set_rules('mobile', 'Mobile', 'required|trim|xss_clean|regex_match[/^[0-9]{10}$/]|is_unique[register.mobile]');
         $this->form_validation->set_rules('email', 'Email', 'required|trim|xss_clean|valid_email|is_unique[register.email]');
         $this->form_validation->set_rules('password', 'Password', 'required|trim|min_length[8]');

         $string = '0123456789';
           $string_shuffled = str_shuffle($string);
           $otp = substr($string_shuffled, 1, 4);

		if ($this->form_validation->run() == false) {
			
				$this->load->view('seller/header');
				$this->load->view('seller/register');						
				$this->load->view('seller/footer');	
		
			}else{
				
				 $data=array(
		 'country_code' => '91',
		 'mobile' => $this->input->post('mobile'),
		 'email' => $this->input->post('email'),
		 'password' => md5($this->input->post('password')),
			 'otp'=> $otp,
		 'usertype' => '2',
		 'status' => '1'
			  );
			  
			  $this->load->model('users');
			$this->users->register($data);
//Send SMS
/*
$cSession = curl_init();
//step2
curl_setopt($cSession,CURLOPT_URL,"http://login.redsms.in/API/SendMessage.ashx?user=amshoppie&password=tarun927&phone=".$data['mobile']."&text=".$data['otp']."&type=t&senderid=AMSHOP");  
// https://2factor.in/API/V1/{api_key}/SMS/{phone_number}/{otp}/{template_name}
curl_setopt($cSession,CURLOPT_RETURNTRANSFER,true);
curl_setopt($cSession,CURLOPT_HEADER, false);
//step3
$result=curl_exec($cSession);
// step4
curl_close($cSession);*/
				$url = base_url()."seller/login?smsg=Registered Successfully. Please login.";
				redirect($url);
				
				
				}	
		}
		//view bank details
		public function bank_detail_view() {
			$this->load->view('seller/header');
		    $this->load->view('seller/nav');
		    $this->load->model("users");
			$data['records'] = $this->users->view_bank_details();	
			$this->load->view("seller/view_bank_details",$data);
			$this->load->view('seller/footer');
}
	//single bank details show
	
	public function single_bank_detail(){
	
				$this->load->view('seller/header');
		  $this->load->view('seller/nav');
		  $this->load->model('users');

			//$this->load->view("seller/single_product_details_show",$data);
			
			
			$id = $this->input->get('id');
			if(!empty($id)){
				$data['records'] = $this->users->single_bank_details($id);
				//print_r($data);
				//die();
		$this->load->view("seller/single_bank_detail",$data);
		$this->load->view('seller/footer');
				}
			
				}
   		
//edit bank details
public function edit_bank_detail(){
	
	$this->load->model('users');
	 $this->load->view('seller/header');
		 $this->load->view('seller/nav');
		 
		 $id = $this->input->get('id');
			if(!empty($id)){
				$data['records'] = $this->users->edit_bank_details1($id);		
							}
			$this->load->view('seller/edit_bank_details', $data);			
		 $this->load->view('seller/footer');

	$this->load->library( array( 'form_validation', 'session' ) );
        // Validate the user can login
    
    $data['error'] = '';
	
	}	
	public function edit_banked(){
	$this->load->model('users');
	 $this->load->view('seller/header');
		 $this->load->view('seller/nav');
	$this->load->library( array( 'form_validation', 'session' ) );
	   $this->form_validation->set_rules('ban', 'ban', 'required');
    $this->form_validation->set_rules('ifsc', 'ifsc', 'required');
	$this->form_validation->set_rules('full_name', 'full_name', 'required');
	$this->form_validation->set_rules('bank_name', 'bank_name', 'required');
	$this->form_validation->set_rules('bank_branch', 'bank_branch', 'required');     
	   if($this->form_validation->run() !== FALSE)
  {
	  $id = $this->input->get('id');
	  
	  // print_r($this->input->post());die;
	 $data=array(
	  'ban' => $this->input->post('ban'),
	 'ifsc' => $this->input->post('ifsc'),
	 'full_name' => $this->input->post('full_name'),
	 'bank_name' => $this->input->post('bank_name'),
	 'bank_branch' => $this->input->post('bank_branch'),
	 
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
  
	if($result = $this->users->edit_bank_details2($data,$id)){
		//echo "dhdh";
  //die;
		  $url = base_url()."seller/bank_detail_view?msg=bank Edited Successfully";
		  redirect($url);
		  }
	 }else{
		echo validation_errors(); 
		 }

	}
/*public function edit_banked(){
	$config = array(	
			'upload_path' => './uploads/',
			'allowed_types' => 'gif|jpg|png',
			);
		
			//$image = $this->input->post('image');
			$this->load->library('upload', $config);

	$this->load->model('users');
	 $this->load->view('seller/header');
		 $this->load->view('seller/nav');
	$this->load->library( array( 'form_validation', 'session' ) );
	    //$this->form_validation->set_rules('id','product id', 'required');
    $this->form_validation->set_rules('ban', 'ban', 'required');
    $this->form_validation->set_rules('ifsc', 'ifsc', 'required');
	$this->form_validation->set_rules('full_name', 'full_name', 'required');
	$this->form_validation->set_rules('bank_name', 'bank_name', 'required');
	$this->form_validation->set_rules('bank_branch', 'bank_branch', 'required');   
   if($this->form_validation->run() !== FALSE)
  {
	  $id = $this->input->get('id');
	  if($this->form_validation->run() !== FALSE && $this->upload->do_upload()){
	 $data=array(
	   'ban' => $this->input->post('ban'),
	 'ifsc' => $this->input->post('ifsc'),
	 'full_name' => $this->input->post('full_name'),
	 'bank_name' => $this->input->post('bank_name'),
	 'bank_branch' => $this->input->post('bank_branch'),
	'image' => $this->input->post('userfile'),
	
     );
	$image = $this->upload->data(); 
			$image_path = base_url("uploads/".$image['raw_name'].$image['file_ext']);
			$data['image'] = $image_path;
	
	if($result = $this->users->edit_bank_details2($data,$id)){
		  $url = base_url()."seller/bank_detail_view?msg=bank Edited Successfully";
		  redirect($url);
		  }
	 }else{
		$url = base_url()."seller/bank_detail_view?msg=bank Edited Successfully";
		  redirect($url);
		 }
  }
	}	
*/

//public function edit_bank_detail(){
	//$this->load->view('seller/header');
	//$this->load->view('seller/nav');
	//$this->load->view('seller/edit_bank_details');
	//$this->load->view('seller/footer');
//}
//delete bank details
public function delete_bank_detail(){
		$this->load->model('users');
		$id=$this->input->get('id');
		if($this->users->delete_bank_details($id)){
			if($result = $this->users->delete_bank_details($data)){
		  $url = base_url()."seller/bank_detail_view?msg=data Delete Successfully";
		  redirect($url);
		  }
	 }else{
		echo validation_errors(); 
		 }
}
	//insert bank details part 2 for validation
	
	public function bnk_detailss1(){
			
		
		$config = array(	
			'upload_path' => './uploads/',
			'allowed_types' => 'gif|jpg|png',
			);
		
			//$image = $this->input->post('image');
			$this->load->library('upload', $config);
			$this->load->library( array( 'form_validation', 'session' ) );
			
        // Validate the user can login
    
		$data['error'] = '';
		
		$this->form_validation->set_rules('ban', 'Bank Account Details', 'required|trim|numeric');
		$this->form_validation->set_rules('ifsc', 'IFSC Code', 'required|trim');
		$this->form_validation->set_rules('full_name', 'Full Name', 'required|trim|alpha');
		$this->form_validation->set_rules('bank_name', 'Bank Name', 'required|trim');
		$this->form_validation->set_rules('bank_branch', 'Branch Name', 'required|trim');
		
		if($this->form_validation->run() !== FALSE && $this->upload->do_upload()){
			$data = array(
			
			'user_id' =>$this->session->userdata('id'),
			'ban' =>$this->input->post('ban'),
			'ifsc' => $this->input->post('ifsc'),
			'full_name' => $this->input->post('full_name'),
			'bank_name' => $this->input->post('bank_name'),
			'bank_branch' => $this->input->post('bank_branch'),															
			'image' => $this->input->post('userfile'),
			);
			  //print_r($data);
			$image = $this->upload->data(); 
			$image_path = base_url("uploads/".$image['raw_name'].$image['file_ext']);
			$data['image'] = $image_path;
			$this->load->model('users');
			if($this->users->bank_detailss($data)){
				echo "<input type='text' name='msg' value='Bank Details Insert Successfully' formmethod='post' >";
				$url = base_url()."seller/bank_details?msg=Bank Details Insert Successfully";
				redirect($url);
				}
		else{
			echo validation_errors();
			}
			
				
			}else{
			 $this->load->model('users');
			 $this->load->view('seller/header');
			 $this->load->view('seller/nav');
			 $this->load->view('seller/bank_details');
			 $this->load->view('seller/footer');
			}
		}
		
		//insert bank details
	public function bank_details(){
		$this->load->view('seller/header');
		$this->load->view('seller/nav');		
		$this->load->view('seller/bank_details');		
		$this->load->view('seller/footer');	
		
		
		$config = array(	
			'upload_path' => './uploads/',
			'allowed_types' => 'gif|jpg|png',
			);
			
			//$image = $this->input->post('image');
			$this->load->library('upload', $config);
		$this->load->library( array( 'form_validation', 'session' ) );
		
		// Validate the user can login
    
		$data['error'] = '';
		
		$this->form_validation->set_rules('ban', 'Bank Account Details', 'required|trim|numeric');
		$this->form_validation->set_rules('ifsc', 'IFSC Code', 'required|trim');
		$this->form_validation->set_rules('full_name', 'Full Name', 'required|trim');
		$this->form_validation->set_rules('bank_name', 'Bank Name', 'required|trim');
		$this->form_validation->set_rules('bank_branch', 'Branch Name', 'required|trim');
		
		if($this->form_validation->run() !== FALSE && $this->upload->do_upload()){
			$data = array(
			'user_id' =>$this->session->userdata('id'),
			'ban' =>$this->input->post('ban'),
			'ifsc' => $this->input->post('ifsc'),
			'full_name' => $this->input->post('full_name'),
			'bank_name' => $this->input->post('bank_name'),
			'bank_branch' => $this->input->post('bank_branch'),															
			'image' => $this->input->post('userfile'),
			);
			$image = $this->upload->data(); 
			$image_path = base_url("uploads/".$image['raw_name'].$image['file_ext']);
			$data['image'] = $image_path;
			$this->load->model('users');
			if($this->users->bank_detailss($data)){
				echo "<input type='text' name='msg' value='Bank Details Insert Successfully' formmethod='post' >";
				$url = base_url()."seller/bank_details?msg=Bank Details insert Successfully";
				redirect($url);
				}
		}else{
			echo validation_errors();
			}
			
	}
				//action panding 
		public function action_pending() {
			$this->load->view('seller/header');
		    $this->load->view('seller/nav');
		    $this->load->model("users");
			$data['records'] = $this->users->action_view_pending();
			//$data['rec'] = $this->view_products->inactive_products();
			
			$this->load->view("seller/action_panding",$data);
			$this->load->view('seller/footer');
}
//single detail show action ppending

public function single_action_pending1(){
	
				$this->load->view('seller/header');
		  $this->load->view('seller/nav');
		  $this->load->model('users');

			//$this->load->view("seller/single_product_details_show",$data);
			
			
			$id = $this->input->get('id');
			if(!empty($id)){
				$data['records'] = $this->users->show_action_details($id);
				//print_r($data);
				//die();
		$this->load->view("seller/single_action_pending",$data);
		$this->load->view('seller/footer');
				}
			
				}

	public function socials(){
		$this->load->view('seller/header');
		$this->load->view('seller/nav');		
		$this->load->view('seller/social');		
		$this->load->view('seller/footer');	
		}
	//track controller
public function track_order(){
		$this->load->view('seller/header');
		    $this->load->view('seller/nav');
		    $this->load->model("users");
			$data['reco'] = $this->users->track_orders();
			$data['re'] = $this->users->track_shipped();
			$data['recc'] = $this->users->track_deliverd();
			$data['recco'] = $this->users->track_rto();
			$data['recr'] = $this->users->track_cancel();
			$this->load->view("seller/track_order",$data);
			$this->load->view('seller/footer');
}
//single track order
public function single_rto(){
	
				$this->load->view('seller/header');
		  $this->load->view('seller/nav');
		  $this->load->model('users');

			//$this->load->view("seller/single_product_details_show",$data);
			
			
			$id = $this->input->get('id');
			if(!empty($id)){
				$data['recco'] = $this->users->show_rto($id);
				//print_r($data);
				//die();
		$this->load->view("seller/single_rto",$data);
		$this->load->view('seller/footer');
				}
			
				}
//single track cancel order
public function single_track_cancels(){
	
				$this->load->view('seller/header');
		  $this->load->view('seller/nav');
		  $this->load->model('users');

			//$this->load->view("seller/single_product_details_show",$data);
			
			
			$id = $this->input->get('id');
			if(!empty($id)){
				$data['recr'] = $this->users->show_cancel_track($id);
				//print_r($data);
				//die();
		$this->load->view("seller/single_trcak_cancel",$data);
		$this->load->view('seller/footer');
				}
			
				}


//single track order
public function single_track(){
	
				$this->load->view('seller/header');
		  $this->load->view('seller/nav');
		  $this->load->model('users');

			//$this->load->view("seller/single_product_details_show",$data);
			
			
			$id = $this->input->get('id');
			if(!empty($id)){
				$data['reco'] = $this->users->show_tracks($id);
				//print_r($data);
				//die();
		$this->load->view("seller/single_track_order",$data);
		$this->load->view('seller/footer');
				}
			
				}
	//single track shipped
public function single_shipped(){
	
				$this->load->view('seller/header');
		  $this->load->view('seller/nav');
		  $this->load->model('users');

			//$this->load->view("seller/single_product_details_show",$data);
			
			
			$id = $this->input->get('id');
			if(!empty($id)){
				$data['re'] = $this->users->show_shipped($id);
				//print_r($data);
				//die();
		$this->load->view("seller/track_shipped",$data);
		$this->load->view('seller/footer');
				}
			
				}
		//single track deliverd
public function single_deliverd(){
	
				$this->load->view('seller/header');
		  $this->load->view('seller/nav');
		  $this->load->model('users');

			//$this->load->view("seller/single_product_details_show",$data);
			
			
			$id = $this->input->get('id');
			if(!empty($id)){
				$data['recc'] = $this->users->show_deliverd($id);
				//print_r($data);
				//die();
		$this->load->view("seller/single_deliverd",$data);
		$this->load->view('seller/footer');
				}
			
				}
		
//shipped track order


public function returned_orders(){
		$this->load->view('seller/header');
		$this->load->view('seller/nav');		
		$this->load->view('seller/returned_orders');		
		$this->load->view('seller/footer');	
		}
public function email_order(){
		$this->load->view('seller/header');
		$this->load->view('seller/nav');		
		$this->load->view('seller/email_order');		
		$this->load->view('seller/footer');	
		}
		
	
		//insert baner details
	 public function added_baner(){
        $config = array(
            'upload_path' => './uploads/',
            'allowed_types' => 'gif|jpg|png',
        );
        $this->load->library('upload', $config);

        $this->load->library('form_validation');
       $this->form_validation->set_rules('banner_link', 'banner_link', 'required|trim');
		$this->form_validation->set_rules('priority', 'priority', 'required|trim');
	  if ($this->form_validation->run() == true && $this->upload->do_upload()){
            $data = array(
              
			'banner_link' =>$this->input->post('banner_link'),
			'priority' =>$this->input->post('priority'),
			'image' => $this->input->post('userfile'),
	              'status' => '1',
            );
            $image = $this->upload->data();
            $image_path = $image['raw_name'].$image['file_ext'];
            $data['image'] = $image_path;
            $this->load->model('users');
            $data = $this->users->added_bnr($data);
            if($data==true){
                redirect(base_url('seller/banner?msg=Banner added successfully'));
            }else{
                redirect(base_url('seller/banner?msg=Some error please try again'));
            }
        }else{
            $this->load->view('seller/header');
            $this->load->view('seller/nav');
            $this->load->view('seller/add_banners');
            $this->load->view('seller/footer');
        }
    }
	
	//insert banner details part 2 for validation
	
	public function bnr_details1(){
			
		
		 $config = array(
            'upload_path' => './uploads/',
            'allowed_types' => 'gif|jpg|png',
        );
        $this->load->library('upload', $config);

        $this->load->library('form_validation');
       $this->form_validation->set_rules('banner_link', 'banner_link', 'required|trim');
		$this->form_validation->set_rules('priority', 'priority', 'required|trim');
	  if ($this->form_validation->run() == true && $this->upload->do_upload()){
            $data = array(
              
			'banner_link' =>$this->input->post('banner_link'),
			'priority' =>$this->input->post('priority'),
			'image' => $this->input->post('userfile'),
	              'status' => '1',
            );
            $image = $this->upload->data();
            $image_path = $image['raw_name'].$image['file_ext'];
            $data['image'] = $image_path;
            $this->load->model('users');
            $data = $this->users->added_bnr($data);
            if($data==true){
                redirect(base_url('seller/banner?msg=Banner added successfully'));
            }else{
                redirect(base_url('seller/banner?msg=Some error please try again'));
            }
        }else{
            $this->load->view('seller/header');
            $this->load->view('seller/nav');
            $this->load->view('seller/add_banners');
            $this->load->view('seller/footer');
        }
	}
	
		// view banner
		public function banner(){
		$this->load->view('seller/header');
		$this->load->view('seller/nav');
		$this->load->model("users");
		$data['records'] = $this->users->view_banner();		
		$this->load->view("seller/banner",$data);			
		$this->load->view('seller/footer');	
		}
		//edit banner details
public function edit_banner_detail(){
	
	$this->load->model('users');
	 $this->load->view('seller/header');
		 $this->load->view('seller/nav');
		 
		 $id = $_GET['id'];
			if(!empty($id)){
				$data['records'] = $this->users->edit_banners_details1($id);		
							}
			$this->load->view('seller/edit_banners_details', $data);			
		 $this->load->view('seller/footer');

	$this->load->library( array( 'form_validation', 'session' ) );
        // Validate the user can login
    
    $data['error'] = '';
	
	}	
	public function edit_banner(){
	$this->load->model('users');
	 $this->load->view('seller/header');
		 $this->load->view('seller/nav');
	$this->load->library( array( 'form_validation', 'session' ) );
	    //$this->form_validation->set_rules('id','product id', 'required');
     $this->form_validation->set_rules('banner_link', 'banner_link', 'required');
    $this->form_validation->set_rules('priority', 'priority', 'required');     
	   if($this->form_validation->run() !== FALSE)
  {
	  $id = $this->input->get('id');
	  
	  // print_r($this->input->post());die;
	 $data=array(
	   'banner_link' => $this->input->post('banner_link'),
	 'priority' => $this->input->post('priority'),
	 
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
  
	if($result = $this->users->edit_banners_details2($data,$id)){
		//echo "dhdh";
  //die;
		  $url = base_url()."seller/banner?msg=banner Edited Successfully";
		  redirect($url);
		  }
	 }else{
		echo validation_errors(); 
		 }

	}	


//delete banner details
public function delete_banner_detail(){
		$this->load->model('users');
		$id=$this->input->get('id');
		if($this->users->delete_banner_details($id)){
			if($result = $this->users->delete_banner_details($data)){
		  $url = base_url()."seller/banner?msg=data Delete Successfully";
		  redirect($url);
		  }
	 }else{
		echo validation_errors(); 
		 }
}

		
//analytics


	public function analytics1(){
		$this->load->view('seller/header');
		$this->load->view('seller/nav');		
		$this->load->view('seller/analystics');		
		$this->load->view('seller/footer');	
		}
	
	//guide
	public function guide1(){
		$this->load->view('seller/header');
		$this->load->view('seller/nav');		
		$this->load->view('seller/guide');		
		$this->load->view('seller/footer');	
		}
		//term and condition
	public function term1(){
		$this->load->view('seller/header');
		$this->load->view('seller/nav');		
		$this->load->view('seller/term_condition');		
		$this->load->view('seller/footer');	
		}
		
		//participate
	public function parti(){
		$this->load->view('seller/header');
		$this->load->view('seller/nav');
		$this->load->model("users");
		$data['records'] = $this->users->view_participate();		
		$this->load->view("seller/participate",$data);		
		$this->load->view('seller/footer');	
		}
		public function commission_plain(){
	    $data = array(
	        'user_id'   =>  $this->session->userdata('id'),
            'plan_id'   =>  $_GET['cp'],
        );
        $this->load->model('products');
        $data = $this->products->comm_plain($data);
        if($data==true){
            redirect(base_url('product/product_add?msg=plain subscribe'));
        }else{
			redirect(base_url('seller/commissions?msg=You are already subscribe'));
		}
    }

		//comssion
	public function commissions(){
		$this->load->view('seller/header');
		$this->load->view('seller/nav');
		$this->load->model('admins');		
		$data['record'] = $this->admins->sale_comission();
		$this->load->view('seller/commission',$data);		
		$this->load->view('seller/footer');	
		}
		 public function add_comission(){
        $this->load->view('seller/header');
        $this->load->view('seller/nav');        
        $this->load->view('seller/add_comission');      
        $this->load->view('seller/footer'); 
        }   

    
		//delete page details
public function delete_page_detail(){
		$this->load->model('users');
		$id=$this->input->get('id');
		if($this->users->delete_pages_details($id)){
			if($result = $this->users->delete_pages_details($data)){
		  $url = base_url()."seller/view_pages?msg=data Delete Successfully";
		  redirect($url);
		  }
	 }else{
		echo validation_errors(); 
		 }
}

		//edit page details
public function edit_page_detail(){
	
	$this->load->model('users');
	 $this->load->view('seller/header');
		 $this->load->view('seller/nav');
		 
		 $id = $_GET['id'];
			if(!empty($id)){
				$data['records'] = $this->users->edit_page_details1($id);		
							}
			$this->load->view('seller/edit_pages_details', $data);			
		 $this->load->view('seller/footer');

	$this->load->library( array( 'form_validation', 'session' ) );
        // Validate the user can login
    
    $data['error'] = '';
	
	}	
	
public function edit_page(){
	$this->load->model('users');
	 $this->load->view('seller/header');
		 $this->load->view('seller/nav');
	$this->load->library( array( 'form_validation', 'session' ) );
	    //$this->form_validation->set_rules('id','product id', 'required');
    $this->form_validation->set_rules('title', 'title', 'required');
   $this->form_validation->set_rules('description', 'title', 'required');
   $this->form_validation->set_rules('priority', 'priority', 'required');
   $this->form_validation->set_rules('status', 'status', 'required'); 
   $this->form_validation->set_rules('meta_description', 'meta_description', 'required');
   $this->form_validation->set_rules('meta_title', 'meta_title', 'required'); 
 
   if($this->form_validation->run() !== FALSE)
  {
	  $id = $this->input->get('id');
	 $data=array(
	 
	  'title' => $this->input->post('title'),
	 'priority' => $this->input->post('priority'),
	'description' => $this->input->post('description'),
	'meta_title' => $this->input->post('meta_title'),
	'meta_description' => $this->input->post('meta_description'),
	'status' => $this->input->post('status'),
	
     );
		
	if($result = $this->users->edit_page_details2($data,$id)){
		  $url = base_url('seller/view_pages?msg=page Edited Successfully');
		  redirect($url);
		  }
	 }else{
		echo validation_errors(); 
		 }

	}	
		
	public function pages(){
		$this->load->view('seller/header');
		$this->load->view('seller/nav');		
		$this->load->view('seller/pages');		
		$this->load->view('seller/footer');	
		}
		//view page
		public function view_pages(){
		$this->load->view('seller/header');
		$this->load->view('seller/nav');
		$this->load->model("users");
		$data['records'] = $this->users->view_pageses();		
		$this->load->view("seller/views_pages",$data);		
		$this->load->view('seller/footer');	
		}
		//pages 1 for editor text insert
		public function pagess(){
			
		$this->load->view('seller/header');
		$this->load->view('seller/nav');		
		$this->load->view('seller/pages1');		
		$this->load->view('seller/footer');	
		$this->load->library( array( 'form_validation', 'session' ) );
		
		// Validate the user can login
    
		$data['error'] = '';
		
		$this->form_validation->set_rules('title', 'title');
		$this->form_validation->set_rules('description','description');
		$this->form_validation->set_rules('page_url','page_url');
		$this->form_validation->set_rules('meta_description', 'meta_description');
		$this->form_validation->set_rules('meta_title', 'meta_title');
		$this->form_validation->set_rules('priority', 'priority');
				
		if($this->form_validation->run() !== FALSE){
			$data = array(
			'status' => 1,
			'user_id' =>$this->session->userdata('id'),
			'title' =>$this->input->post('title'),
			'description' =>$this->input->post('description'),
			'page_url' =>$this->input->post('page_url'),
			'meta_description' =>$this->input->post('meta_description'),
			'meta_title' =>$this->input->post('meta_title'),
			'priority' =>$this->input->post('priority'),
			
			);
			
			$this->load->model('users');
			if($this->users->cms_pagges1($data)){
				echo "<input type='text' name='msg' value='data Updated Successfully' formmethod='post' >";
				 $url = base_url('seller/view_pages?msg=data add Successfully');
				 redirect($url);
				}
		}else{
			echo validation_errors();
			}
			
	}
		
	public function editors(){
		$this->load->view('seller/header');
		$this->load->view('seller/nav');		
		$this->load->view('seller/editor');		
		$this->load->view('seller/footer');	
		}
			

			
		//social(my site)
	public function socialsss(){
		$this->load->view('seller/header');
		$this->load->view('seller/nav');		
		$this->load->view('seller/social');		
		$this->load->view('seller/footer');	
		
		$this->load->library( array( 'form_validation', 'session' ) );
	
		// Validate the user can login
    
		$data['error'] = '';
		
		$this->form_validation->set_rules('facebook', 'facebook');
		$this->form_validation->set_rules('twitter', 'twitter');
		$this->form_validation->set_rules('google', 'google');
		$this->form_validation->set_rules('pinterest', 'pinterest');
		$this->form_validation->set_rules('youtube', 'youtube');
		$this->form_validation->set_rules('instagram', 'instagram');
		
		if($this->form_validation->run() !== FALSE){// && $this->upload->do_upload()){
			$data = array(
			'user_id' =>$this->session->userdata('id'),
			'facebook' =>$this->input->post('facebook'),
			'twitter' => $this->input->post('twitter'),
			'google' => $this->input->post('google'),
			'pinterest' => $this->input->post('pinterest'),
			'youtube' => $this->input->post('youtube'),
			'instagram' => $this->input->post('instagram'),															
			);
			
			$this->load->model('users');
			if($this->users->social1($data)){
				  $url = base_url()."seller/socials?msg=socail deatil insert Successfully";
				  redirect($url);
				  }
		}
	}
	public function export_order_report(){
		$this->load->model("users");
		$dat=$this->input->post();
		$data['reco'] = $this->users->track_orders($dat);
		//print_r();die;
		
  
			//Email information
		  $admin_email = $this->session->userdata('email');
		  $email = "shabnamkumariait@gmail.com";
		  $subject ="order records";
		  $comment = $this->load->view('seller/email_record.php',$data,TRUE);
		  $headers = 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
		  //send email
		  if(mail($admin_email, $subject,$comment,$headers, $email)){
			  $this->load->view('seller/header');
		$this->load->view('seller/nav');		
		$this->load->view('seller/email_record_success.php');		
		$this->load->view('seller/footer');
			
		}
	}
	


	
		}
	 
	
  

	