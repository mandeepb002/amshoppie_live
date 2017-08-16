<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class setting extends MS_Controller
{
    public function comission(){
        $this->load->model('settings');
        $this->load->view('seller/header');
        $this->load->view('seller/nav');
        $data['record'] = $this->settings->comissions();
        $this->load->view('admin/comission_c',$data);
        $this->load->view('footer');
    }

    public function edit_comission(){
        $this->load->model('settings');
        $this->load->view('seller/header');
        $this->load->view('seller/nav');
        $data['record'] = $this->settings->comission_id();
        $this->load->view('admin/edit_comission',$data);
        $this->load->view('footer');
    }

    public function hit_com(){
        $this->load->library('form_validation');
        $data = array(
            'val' => $this->input->post('val'),
        );

        $this->load->model('settings');
       $data = $this->settings->update_com($data);
        if($data == true){
            redirect(base_url('setting/comission?msg=Updated successfully'));
        }else{
            redirect(base_url('setting/comission?msg=Not Updated Some Error'));
        }
    }

    public function slider(){
        $this->load->model('settings');
        $this->load->view('seller/header');
        $this->load->view('seller/nav');
        $data['slider_image'] = $this->settings->fetch_slider_image();
        $this->load->view('admin/slider',$data);
        $this->load->view('footer');   
    }	
	public function hompage(){		
	$this->load->view('seller/header');        
	$this->load->view('seller/nav');        
	$this->load->model('manage_seller_model');
	$data['records'] = $this->manage_seller_model->get_categories();
	$this->load->view('admin/add_hompages',$data);		
	$this->load->view('footer');      
	}	
//add hompage data

public function add_hompages1(){
		
			//$image = $this->input->post('image');
			
			$this->load->library( array( 'form_validation', 'session' ) );
			
        // Validate the user can login
    
		$data['error'] = '';
		
		$this->load->library('form_validation');
        $this->form_validation->set_rules('name', 'Name', 'required');
        $this->form_validation->set_rules('link', 'link', 'required');
		
			$images_array = array();
		if($this->form_validation->run() !== FALSE ){
//echo "<pre>";print_r($_FILES);die;

			$data = array(

			    'name' => $this->input->post('name'),
                'link' => $this->input->post('link'),
                
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
  

			
			$this->load->model('admins');
			$data = $this->admins->add_hompages($data);
			$idd =$this->db->insert_id();
			//print_r($idd);
			//die;
			if($data){
				
			$this->load->model('admins');
			//$id = $data[0]->id;
			//echo $this-db->last_query();
			////print_r($data);
			//die;
			if($this->admins->add_images($images_array,$idd)){
			$url=base_url()."setting/add_hompages1?msg=data Added Successfully";
								
				redirect($url);
				}
				

								
				}
			
			     }else{
            $this->load->view('seller/header');
            $this->load->view('seller/nav');
            $this->load->view('admin/add_hompages');
            $this->load->view('footer');
        }
    }
	
	//view list hompage
	
 	 public function homepage_list(){

        $this->load->view('seller/header');
        $this->load->view('seller/nav');
        $this->load->model('admins');
        $data['record'] =  $this->admins->homepages_list();
//echo "<pre>";print_r($data['record']);die;
        $this->load->view('admin/view_homepage', $data);
        $this->load->view('footer');
    }
	
	//single homepage data
	public function single_homepage_detail1(){
				$this->load->view('seller/header');
		  $this->load->view('seller/nav');
		  
		  $this->load->model('admins');

			//$this->load->view("seller/single_product_details_show",$data);
			
			
			$id = $this->input->get('id');
			if(!empty($id)){

				$data['row'] = $this->admins->single_homepage_details($id);
				//print_r($data);
				//die();
		$this->load->view("admin/single_homepage_detail",$data);
		$this->load->view('footer');
				}
			
				}
				//delete homepage data
				public function delete_homepage_detail(){
		$this->load->model('admins');
		$id=$this->input->get('id');
		if($this->admins->delete_homepage_details($id)){
			if($result = $this->admins->delete_homepage_details($data)){
		  $url = base_url()."setting/homepage_list?msg=data Delete Successfully";
		  redirect($url);
		  }
	 }else{
		echo validation_errors(); 
		 }
}
public function edit_homepage_detail(){
	
	$this->load->model('admins');
	 $this->load->view('seller/header');
		 $this->load->view('seller/nav');
		 
		 $id = $this->input->get('id');
			if(!empty($id)){
				$data['records'] = $this->admins->edit_homepage_details1($id);		
							}
			$this->load->view('admin/edit_homepage_details', $data);			
		 $this->load->view('footer');

	$this->load->library( array( 'form_validation', 'session' ) );
        // Validate the user can login
    
    $data['error'] = '';
	
	}	
	
public function edit_homepage(){
	$config = array(	
			'upload_path' => './uploads/',
			'allowed_types' => 'gif|jpg|png',
			);
		
			//$image = $this->input->post('image');
			$this->load->library('upload', $config);

	$this->load->model('admins');
	 $this->load->view('seller/header');
		 $this->load->view('seller/nav');
	$this->load->library( array( 'form_validation', 'session' ) );
	    //$this->form_validation->set_rules('id','product id', 'required');
    $this->form_validation->set_rules('name', 'name', 'required');
    $this->form_validation->set_rules('link', 'link', 'required');
	$this->form_validation->set_rules('category', 'category', 'required');
	$this->form_validation->set_rules('price', 'price', 'required');   
   if($this->form_validation->run() !== FALSE)
  {
	  $id = $this->input->get('id');
	  if($this->form_validation->run() !== FALSE && $this->upload->do_upload()){
	 $data=array(
	   'name' => $this->input->post('name'),
	 'link' => $this->input->post('link'),
	 'category' => $this->input->post('category'),
	 'price' => $this->input->post('price'),
	'image' => $this->input->post('userfile'),
	
     );
	$image = $this->upload->data(); 
			$image_path = base_url("uploads/".$image['raw_name'].$image['file_ext']);
			$data['image'] = $image_path;
	
	if($result = $this->admins->edit_homepage_details2($data,$id)){
		  $url = base_url()."setting/homepage_list?msg=bank Edited Successfully";
		  redirect($url);
		  }
	 }else{
		echo validation_errors(); 
		 }
  }
	}	

	}	


