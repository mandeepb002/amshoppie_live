<?php

if (!defined('BASEPATH'))exit('No direct script access allowed');
class shop extends MS_Controller {
		
		
		
	//insert bank details part 2 for validation
	
	public function shop_detailss1(){
			$this->load->model('shopes');
		
		$config = array(
			
			'upload_path' => './uploads/',
			'allowed_types' => 'gif|jpg|png',
			);
		
			//$image = $this->input->post('image');
			$this->load->library('upload', $config);
			$this->load->library( array( 'form_validation', 'session' ) );
			
        // Validate the user can login
    
		$data['error'] = '';
		
		$this->form_validation->set_rules('email', 'email', 'required|trim|xss_clean|is_unique[shope.email]');
    $this->form_validation->set_rules('shope_name', 'shope_name', 'required');
    $this->form_validation->set_rules('address', 'address', 'required');
	$this->form_validation->set_rules('locality', 'locality', 'required');
	$this->form_validation->set_rules('landmark', 'landmark', 'required');
	$this->form_validation->set_rules('pan', 'pan', 'required');
    $this->form_validation->set_rules('gstin', 'gstin', 'required');
	$this->form_validation->set_rules('phone', 'phone', 'required');
	$this->form_validation->set_rules('pincode', 'pincode', 'required');
	$this->form_validation->set_rules('city', 'city', 'required');
	$this->form_validation->set_rules('state', 'state', 'required');
	$this->form_validation->set_rules('country', 'country', 'required');
	$this->form_validation->set_rules('vat', 'vat', 'required');
	$this->form_validation->set_rules('ship_in', 'ship_in', 'required');
	$this->form_validation->set_rules('ship_within', 'ship_within', 'required');
	$this->form_validation->set_rules('ship_within', 'ship_within', 'required');
			
		if($this->form_validation->run() !== FALSE){// && $this->upload->do_upload()){

			$data = array(
			
			'email' => $this->input->post('email'),
	'user_id' => $this->session->userdata('id'),		
	 'shope_name' => $this->input->post('shope_name'),
	 'address' => $this->input->post('address'),
	 'locality' => $this->input->post('locality'),
	 'landmark' => $this->input->post('landmark'),
	 'pan' => $this->input->post('pan'),
	'gstin' => $this->input->post('gstin'),
	'phone' => $this->input->post('phone'),
	'pincode' => $this->input->post('pincode'),
	'city' => $this->input->post('city'),
	'state' => $this->input->post('state'),
	'country' => $this->input->post('country'),
	'vat' => $this->input->post('vat'),
	'ship_in' => $this->input->post('ship_in'),
	'ship_within' => $this->input->post('ship_within'),
   	'logo' => $this->input->post('userfile'),
		'banner' => $this->input->post('userfile1'),
																	);
			 

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
  $data["logo"] = $image_data["file_name"];
  }
  }

if(!empty($_FILES["userfile1"]))
  {
  $config['upload_path'] = './uploads/';
  $config['allowed_types'] = '*';
  $config['max_size'] = '2000';
  $config['remove_spaces'] = true;
  $config['overwrite'] = false;
 // $config['encrypt_name'] = true;
  $config['max_width']  = '';
  $config['max_height']  = '';
  $this->load->library('upload', $config);
  $this->upload->initialize($config);            
  if ($this->upload->do_upload('userfile1')){
  $image_data = $this->upload->data();
  $data["banner"] = $image_data["file_name"];
  }
  }
  $this->load->model('shopes');
  $dataa = $this->shopes->check_suid($data);
 
  if(empty($dataa)){
  //echo"scaaasdc";die;
  	$res = $this->shopes->shopes_detailss($data);
	
		$url = base_url()."shop/shop_detail_view?msg=shop Edited Successfully";
				  
				  redirect($url);
	}else{

$this->load->model('shopes');
			$dataa = $this->shopes->check_suid($data);
			
			
			//if(($dataa[0]->id)){
				$data=array(
	 'id' => $dataa[0]->id,
	   'email' => $this->input->post('email'),
	 'shope_name' => $this->input->post('shope_name'),
	 'address' => $this->input->post('address'),
	 'phone' => $this->input->post('phone'),
	 'state' => $this->input->post('state'),
	 'pan' => $this->input->post('pan'),
	 'country' => $this->input->post('country'),
	 'vat' => $this->input->post('vat'),
	 'gstin' => $this->input->post('gstin'),
	 'landmark' => $this->input->post('landmark'),
	 'ship_in' => $this->input->post('ship_in'),
	 'ship_within' => $this->input->post('ship_within'),
	 'pincode' => $this->input->post('pincode'),
	 'city' => $this->input->post('city'),
	'logo' => $this->input->post('userfile'),
	'banner' => $this->input->post('userfile1'),
	 );
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
  $data["logo"] = $image_data["file_name"];
  }
  }

if(!empty($_FILES["userfile1"]))
  {
  $config['upload_path'] = './uploads/';
  $config['allowed_types'] = '*';
  $config['max_size'] = '2000';
  $config['remove_spaces'] = true;
  $config['overwrite'] = false;
 // $config['encrypt_name'] = true;
  $config['max_width']  = '';
  $config['max_height']  = '';
  $this->load->library('upload', $config);
  $this->upload->initialize($config);            
  if ($this->upload->do_upload('userfile1')){
  $image_data = $this->upload->data();
  $data["banner"] = $image_data["file_name"];
  }
  }
	 
	if($result = $this->shopes->edit_shop_details2($data,$id)){
		  $url = base_url()."shop/shop_detail_view?msg=shop Edited Successfully";
		  redirect($url);
		  }
	}
				//else {
					
					//if($this->shopes->shop_detailss($data)==true){
				 // $url = base_url()."shop/shop_detail_view?msg=shop Edited Successfully";
				  
				//  redirect($url);
				//	}
				
			// else{
			//	echo validation_errors(); 
				// }
		
	//}			
		
			//$this->load->model('shopes');
			//if($this->shopes->shopes_detailss($data)){
				//echo "<input type='text' name='msg' value='shop Details Updated Successfully' formmethod='post' >";
				//$url = base_url()."shop/shop_detail_view?msg=shop Details Updated Successfully";
				//redirect($url);
				//}
		//else{
			//echo validation_errors();
			//}
			
				
			}else{
			 $this->load->model('shopes');
			 $this->load->view('seller/header');
			 $this->load->view('seller/nav');
			 $this->load->view('seller/shope');
			 $this->load->view('seller/footer');
			}
		}
		
		//insert shop details
	public function shop_details(){
		$this->load->view('seller/header');
		$this->load->view('seller/nav');		
		$this->load->view('seller/shope');		
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
		$this->form_validation->set_rules('email', 'email', 'required|trim|xss_clean|is_unique[shope.email]');
    $this->form_validation->set_rules('shope_name', 'shope_name', 'required');
    $this->form_validation->set_rules('address', 'address', 'required');
	$this->form_validation->set_rules('locality', 'locality', 'required');
	$this->form_validation->set_rules('landmark', 'landmark', 'required');
	$this->form_validation->set_rules('pan', 'pan', 'required');
    $this->form_validation->set_rules('gstin', 'gstin', 'required');
	$this->form_validation->set_rules('phone', 'phone', 'required');
	$this->form_validation->set_rules('pincode', 'pincode', 'required');
	$this->form_validation->set_rules('city', 'city', 'required');
	$this->form_validation->set_rules('state', 'state', 'required');
	$this->form_validation->set_rules('country', 'country', 'required');
	$this->form_validation->set_rules('vat', 'vat', 'required');
	$this->form_validation->set_rules('ship_in', 'ship_in', 'required');
	$this->form_validation->set_rules('ship_within', 'ship_within', 'required');
	$this->form_validation->set_rules('ship_within', 'ship_within', 'required');
		
		if($this->form_validation->run() !== FALSE && $this->upload->do_upload()){
			$data = array(
			'email' => $this->input->post('email'),
	'user_id' => $this->session->userdata('id'),		
	 'shope_name' => $this->input->post('shope_name'),
	 'address' => $this->input->post('address'),
	 'locality' => $this->input->post('locality'),
	 'landmark' => $this->input->post('landmark'),
	 'pan' => $this->input->post('pan'),
	'gstin' => $this->input->post('gstin'),
	'phone' => $this->input->post('phone'),
	'pincode' => $this->input->post('pincode'),
	'city' => $this->input->post('city'),
	'state' => $this->input->post('state'),
	'country' => $this->input->post('country'),
	'vat' => $this->input->post('vat'),
	'ship_in' => $this->input->post('ship_in'),
	'ship_within' => $this->input->post('ship_within'),
   	'logo' => $this->input->post('userfile'),
	
	
			);
			$logo = $this->upload->data(); 
			$image_path = base_url("uploads/".$logo['raw_name'].$logo['file_ext']);
			$data['logo'] = $image_path;
			$this->load->model('shopes');
			if($this->shopes->shopes_detailss($data)){
				echo "<input type='text' name='msg' value='Shop Details Updated Successfully' formmethod='post' >";
				$url = base_url()."shop/shop_detail_view?msg=Shop Details Updated Successfully";
				redirect($url);
				}
		}else{
			echo validation_errors();
			}
			
	}
//shop add seller
public function seller_shop(){
		$query = $this->db->get('shope');
		return $query->result();
	}
	//shop view details
	
	public function shop_detail_view() {
			$this->load->view('seller/header');
		    $this->load->view('seller/nav');
		    $this->load->model("shopes");
			$data['records'] = $this->shopes->view_shop_details();	
			$this->load->view("seller/view_shop_detail",$data);
			$this->load->view('seller/footer');
}

//single shop details show
	
	public function single_shop_detail(){
	
				$this->load->view('seller/header');
		  $this->load->view('seller/nav');
		  
		  $this->load->model('shopes');

			//$this->load->view("seller/single_product_details_show",$data);
			
			
			$id = $this->input->get('id');
			if(!empty($id)){

				$data['row'] = $this->shopes->single_shop_details($id);
				//print_r($data);
				//die();
		$this->load->view("seller/single_shop_detailss",$data);
		$this->load->view('seller/footer');
				}
			
				}
   
   public function test(){
	
		$this->load->view("seller/single_shop_detailss");
	
			
	}
	//edit Shop details
public function edit_shop_detail(){
	
	$this->load->model('shopes');
	 $this->load->view('seller/header');
		 $this->load->view('seller/nav');
		 
		 $id = $this->input->get('id');
			if(!empty($id)){
				$data['records'] = $this->shopes->edit_shop_details1($id);		
							}
			$this->load->view('seller/edit_shop_details', $data);			
		 $this->load->view('seller/footer');

	$this->load->library( array( 'form_validation', 'session' ) );
        // Validate the user can login
    
    $data['error'] = '';
	
	}	
	
public function edit_shop(){
	$this->load->model('shopes');
	 $this->load->view('seller/header');
		 $this->load->view('seller/nav');
	$this->load->library( array( 'form_validation', 'session' ) );
	    //$this->form_validation->set_rules('id','product id', 'required');
    $this->form_validation->set_rules('email', 'email', 'required');
    $this->form_validation->set_rules('shope_name', 'shope_name', 'required');
	$this->form_validation->set_rules('address', 'address', 'required');
	$this->form_validation->set_rules('phone', 'phone', 'required');
	$this->form_validation->set_rules('city', 'city', 'required');  
	$this->form_validation->set_rules('state', 'state', 'required');
	$this->form_validation->set_rules('pan', 'pan', 'required');
	$this->form_validation->set_rules('pincode', 'pincode', 'required');
	$this->form_validation->set_rules('gstin', 'gstin', 'required');
	$this->form_validation->set_rules('country', 'country', 'required'); 
	$this->form_validation->set_rules('vat', 'vat', 'required');
	$this->form_validation->set_rules('ship_in', 'ship_in', 'required'); 
	$this->form_validation->set_rules('ship_within', 'ship_within', 'required');  
	$this->form_validation->set_rules('landmark', 'landmark', 'required');  
	   if($this->form_validation->run() !== FALSE)
  {
	  $id = $this->input->get('id');
	 $data=array(
	 'id' => $this->input->get('id'),
	   'email' => $this->input->post('email'),
	 'shope_name' => $this->input->post('shope_name'),
	 'address' => $this->input->post('address'),
	 'phone' => $this->input->post('phone'),
	 'state' => $this->input->post('state'),
	 'pan' => $this->input->post('pan'),
	 'country' => $this->input->post('country'),
	 'vat' => $this->input->post('vat'),
	 'gstin' => $this->input->post('gstin'),
	 'landmark' => $this->input->post('landmark'),
	 'ship_in' => $this->input->post('ship_in'),
	 'ship_within' => $this->input->post('ship_within'),
	 'pincode' => $this->input->post('pincode'),
	 'city' => $this->input->post('city'),
	 'logo' => $this->input->post('userfile'),
	 'banner' => $this->input->post('userfile1'),
	 
     );
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
  $data["logo"] = $image_data["file_name"];
  }
  }

if(!empty($_FILES["userfile1"]))
  {
  $config['upload_path'] = './uploads/';
  $config['allowed_types'] = '*';
  $config['max_size'] = '2000';
  $config['remove_spaces'] = true;
  $config['overwrite'] = false;
 // $config['encrypt_name'] = true;
  $config['max_width']  = '';
  $config['max_height']  = '';
  $this->load->library('upload', $config);
  $this->upload->initialize($config);            
  if ($this->upload->do_upload('userfile1')){
  $image_data = $this->upload->data();
  $data["banner"] = $image_data["file_name"];
  }
  }

	if($result = $this->shopes->edit_shop_details2($data,$id)){
		  $url = base_url()."shop/shop_detail_view?msg=shop Edited Successfully";
		  redirect($url);
		  }
	 }else{
		echo validation_errors(); 
		 }

	}	

   //delete shop detail
   public function delete_shop_detail(){
		$this->load->model('shopes');
		$id=$this->input->get('id');
		if($this->shopes->delete_shop_details($id)){
			if($result = $this->shopes->delete_shop_details($data)){
		  $url = base_url()."shop/shop_detail_view?msg=data Delete Successfully";
		  redirect($url);
			}
	 }else{
		echo validation_errors(); 
		 }
}


}