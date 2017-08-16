<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class product extends MS_Controller {

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
	 public function product_add(){
		 $this->load->model('manage_seller_model');
		 //$parent_id=491;
		//print_r($this->manage_seller_model->select_cat1($parent_id));die;
		 $this->load->view('seller/header');
		 $this->load->view('seller/nav');
		 $this->load->model('manage_seller_model');
		 $this->load->model('products');
		 $data['coms']=$this->products->com();
		 //print_r($data['coms']);
		// die();
		
		 $data['record'] = $this->manage_seller_model->seller_info();
		 $data['records'] = $this->manage_seller_model->get_categories();
		

		$this->load->model('products');
		 $data['last'] = $this->products->last_product();
		 
		 
		 
		 
		 //$data['records'] = $this->admins->single_view_add($id);
         $this->load->model('settings');
         $data['com'] = $this->settings->comissions();
         $data['colour'] = $this->products->attr_colour();
         $data['size'] = $this->products->attr_size();
		 $this->load->model('shopes');
		 $data['recordss'] = $this->shopes->seller_shop();
		 $data['recordsss'] = $this->shopes->seller_shop1();
		 $this->load->view('seller/add_product',$data);
		 $this->load->view('seller/footer');
		 
		 }
		 
		
		  public function cat_add(){
		 
		
		 $this->load->model('manage_seller_model');
		 
		
		$parent_id = $_REQUEST['get_parentid'];
		
		 $data['records'] = $this->manage_seller_model->select_cat($parent_id);
		 //$parent_id = $_GET['get_parentid'];
		  $records = $this->manage_seller_model->select_cat($parent_id);
		if(!empty( $records )){
		 $dropdown =  '<select name="category_name" class="btn btn-default get_parentid aaa">
		 
		   <option selected="selected" id="child_id">Select Category</option>';
		 
					 foreach($records as $row){ 
                
             $dropdown .= " <option value= $row->cat_id > $row->cat_name </option>";
      
                    
                 } 
                   			
                   
                          $dropdown .=   '</select>'; 
                            
		echo $dropdown;
		    }else{
				if($parent_id){
				$id=$parent_id;
				$comm=$this->manage_seller_model->select_cat1($parent_id);
				//print_r($comm);
				//$comm1=$comm[0];
				
				while((empty( $comm ))&&($this->manage_seller_model->select_cat2($id))){
					$id1=$this->manage_seller_model->select_cat2($parent_id);
					$comm1=$this->manage_seller_model->select_cat1($id1['parent_id']);
					$comm=$comm1;
					$id=$id1['parent_id'];
				}
				echo $dropdown = "<span  id='commission' style='margin-left: 2px;' class='cat_comm'>".$comm['commission']."</span><script>category_comm = '".$comm['commission']."'; $('#category_comm_calc').text('".$comm['commission']."')</script>";
				}
				}
				
				
}
		
		     
		                      
					
                   			
                             
		 
		
		 
		 
		 
		  
		 
		 
	public function add_product(){
		
	//$this->load->view('product');	
	$this->load->model('products');
	 
   	$this->load->library( array( 'form_validation', 'session' ) );
        // Validate the user can login
    
    $data['error'] = '';
    $this->form_validation->set_rules('user_id','user id');
	$this->form_validation->set_rules('shop_id','shop_id', 'required');
    $this->form_validation->set_rules('product_name', 'product_name', 'required');
    $this->form_validation->set_rules('quantity', 'quantity', 'required','numeric'); 
	$this->form_validation->set_rules('category_name', 'category_name', 'required');
  	$this->form_validation->set_rules('description', 'description', 'required');
	$this->form_validation->set_rules('mer_sku', 'mer_sku', 'required');
	$this->form_validation->set_rules('product_sku', 'product_sku', 'required');
	$this->form_validation->set_rules('item_price', 'item_price', 'required');
	$this->form_validation->set_rules('price_d', 'price_d', 'required');
	$this->form_validation->set_rules('weight', 'weight', 'required');
	$this->form_validation->set_rules('country_code', 'country_code', 'required');
	$this->form_validation->set_rules('shipping_fee', 'shipping_fee', 'required');
	$this->form_validation->set_rules('ship_in', 'ship_in', 'required');
	$this->form_validation->set_rules('paid_by', 'paid_by', 'required');
	$images_array = array();
	
	 if($this->input->post('key')){
		if($this->form_validation->run() !== FALSE ){
  
  
			$data = array(
	 'user_id' => $this->input->post('user_id'),
	 'shop_id' => $this->input->post('shop_id'),
	 'product_name' => $this->input->post('product_name'),
	 'quantity' => $this->input->post('quantity'),
	 'category_name' => $this->input->post('category_name'),
	 'description' => $this->input->post('description'),
	 'product_sku' => $this->input->post('product_sku'),
	'mer_sku' => $this->input->post('mer_sku'),
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
	//'image' => $this->input->post('userfile'),
     );
 // print_r($data);die;
	  // Faking upload calls to $_FILE
	  $number_of_files_uploaded = count($_FILES['userfiles']['name']);
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
		
     $this->load->library('upload', $config);

	 $image = $this->upload->data(); 
			$image_path = base_url("uploads/".$image['raw_name'].$image['file_ext']);
			$images_array[] = $image_path;
  } // end for loop
 
	  $result = $this->products->add_products($data);
	 if(!empty($result)) {
		 echo json_encode(array('status' => true, 'Id' => $result));
	 } else {
		 echo json_encode(array('status' => false, 'result' => array()));
	 }
	 die;
	 
} else {
	echo json_encode(array('status' => false, 'result' => array(), 'message' => validation_errors()));
}
}
	 }
	 
	 public function view_edit_product(){
		 $this->load->model('products');
		 $this->load->view('seller/header');
		 $this->load->view('seller/nav');
		 $this->load->model("view_products");
		 $id = $this->input->get('id');
			if(!empty($id)){
				$data['records'] = $this->view_products->show_details($id);
			}
		 $this->load->view('seller/edit_product');
		 $this->load->view('seller/footer');
		 }	 
//edit product
public function edit_product(){
	
	$this->load->model('products');
	 $this->load->view('seller/header');
		 $this->load->view('seller/nav');
		 
		 $id = $this->input->get('id');
			if(!empty($id)){
				$data['row'] = $this->products->edit_products($id);	
				//print_r($data['row']);die;
				$data['all'] = $this->products->all_cat();
				 
				  $cat_id = $data['row']->category_name;
				while($cat_id!=0){
				$idm=$this->products->all_parent($cat_id);
				$idm->parent_id;
				$ach=$this->products->all_cat($cat_id);
				
				$catdata[]=array(
				'id'=>$idm->cat_id,
				'name'=>$idm->cat_name,
				'allcats'=>$ach,
				);
				$cat_id=$idm->parent_id;
				}
				$data['categorydata']=$catdata;
				//print_r($catdata);die;
				
				//$categ_id=array();
				
				//$data['rec1'] = $this->products->all_parent($cat_id);
				
				
				// $mainparent_id = $data['rec1']->parent_id;
				$data['all_child'] = $this->products->all_cat($cat_id);
				  $data['colour'] = $this->products->attr_colour();
               $data['size'] = $this->products->attr_size();
				
				$data['colour_attr'] = $this->products->attribute_data($id);
				//print_r($data['colour_attr']);die;
				$data['size_attr'] = $this->products->attribute2_data($id);

				
					}
			$this->load->view('seller/edit_product', $data);				
		 $this->load->view('seller/footer');

	$this->load->library( array( 'form_validation', 'session' ) );
        // Validate the user can login
    
    $data['error'] = '';
	
	}	
	
public function edit_productt(){
	$this->load->model('products');
	 $this->load->view('seller/header');
		 $this->load->view('seller/nav');
	$this->load->library( array( 'form_validation', 'session' ) );
	    //$this->form_validation->set_rules('id','product id', 'required');
    $this->form_validation->set_rules('product_name', 'product name', 'required');
    $this->form_validation->set_rules('quantity', 'quantity', 'required');
	$this->form_validation->set_rules('description', 'description', 'required');
	$this->form_validation->set_rules('mer_sku', 'mer_sku', 'required');
	$this->form_validation->set_rules('product_sku', 'product_sku', 'required');
	$this->form_validation->set_rules('category_name', 'category_name', 'required');
    $this->form_validation->set_rules('item_price', 'item_price', 'required');
	$this->form_validation->set_rules('price_d', 'price_d', 'required');
	$this->form_validation->set_rules('weight', 'weight', 'required');
	$this->form_validation->set_rules('country_code', 'country_code', 'required');
	$this->form_validation->set_rules('shipping_fee', 'shipping_fee', 'required');
	$this->form_validation->set_rules('ship_in', 'ship_in', 'required');
	$this->form_validation->set_rules('paid_by', 'paid_by', 'required');
	
	
   
   if($this->form_validation->run() !== FALSE)
  {
//echo"hi";die;
	  $id = $this->input->get('id');
	 
	 $data=array(
	   'product_name' => $this->input->post('product_name'),
	 'quantity' => $this->input->post('quantity'),
	 'description' => $this->input->post('description'),
	 'mer_sku' => $this->input->post('mer_sku'),
	 'product_sku' => $this->input->post('product_sku'),
	 'category_name' => $this->input->post('category_name'),
	'item_price' => $this->input->post('item_price'),
	'price_d' => $this->input->post('price_d'),
	'weight' => $this->input->post('weight'),
	'country_code' => $this->input->post('country_code'),
	'shipping_fee' => $this->input->post('shipping_fee'),
	'ship_in' => $this->input->post('ship_in'),
	'paid_by' => $this->input->post('paid_by'),
	'commission_type' => $this->input->post('commission_type'),
//'main_image' => $this->input->post('main_image1'),
	'tp_price' => $this->input->post('tp_price'),
	'return_days' => $this->input->post('return_days'),
	'exchange_days' => $this->input->post('exchange_days'),
     );
   
   	 $number_of_files_uploaded = count($_FILES['userfiles']);
   	
   	 
			$this->load->library('upload');
			 for ($i = 0; $i < $number_of_files_uploaded; $i++) {
			 
			 if(!empty($_FILES['userfiles']['name'][$i])){
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

			 } } 
			  // end for loop
  

//echo $result;die;

	if($result = $this->products->edit_done($id,$data)){
	$colour = $this->input->post('colour');
			$size = $this->input->post('size');

			//$c =$colour[0];
	
		//	$select = $this->products->p_attribute($id,$c);
			


			$this->products->del_attribute($id);
			
			$this->products->add_attribute($id, $colour);	
            
			$this->products->add_attribute($id, $size);
		$this->products->add_images($images_array,$id);
		
		
		  $url = base_url()."show_product/s_product?msg=Product Edited Successfully";
		  redirect($url);
		  }
	 }else{
		echo validation_errors(); 
		 }

	}
	
	//delete product
	public function delete_product(){
		$this->load->model('products');
		$id=$this->input->get('id');
		if($this->products->delete_products($id)){
			if($result = $this->products->delete_products($data)){
				$this->products->del_deal($id);
		  $url = base_url()."show_product/s_product?msg=Product Delete Successfully";
		  redirect($url);
		  }
	 }else{
		echo validation_errors(); 
		 }
	}
	//show single details

    public function single_product_detail(){
	
				$this->load->view('seller/header');
		  $this->load->view('seller/nav');
		  $this->load->model('products');

			//$this->load->view("seller/single_product_details_show",$data);
			
			
			$id = $this->input->get('id');
			if(!empty($id)){
				$data['records'] = $this->products->show_single_details($id);
				//print_r($data);
				//die();
		$this->load->view("seller/single_product_details_show",$data);
		$this->load->view('seller/footer');
				}
}
//inactive single detils show

public function inactive_product_detail(){
	
				$this->load->view('seller/header');
		  $this->load->view('seller/nav');
		  $this->load->model('products');

			
			
			
			$id = $this->input->get('id');
			if(!empty($id)){
				$data['records'] = $this->products->inactive_single_details($id);
				//print_r($data);
				//die();
		$this->load->view("seller/inactive_single_detail",$data);
		$this->load->view('seller/footer');
				}
}
	//inactive DELETE details
	
	public function inactive_delete_product(){
		$this->load->model('products');
		$id=$this->input->get('id');
		if($this->products->delete_products($id)){
			if($result = $this->products->delete_inactive_products($data)){
		  $url = base_url()."show_product/s_product?msg=Product Delete Successfully";
		  redirect($url);
		  }
	 }else{
		echo validation_errors(); 
		 }
	}		 
		//review detail
		 public function review_detail(){
		   $this->load->model('products');
      
	$this->load->library('form_validation');

         /* Set validation rule for name field in the form */
		  $this->form_validation->set_rules('product_id', 'product_id', 'required|trim|xss_clean|is_unique[review.product_id]');
		 $this->form_validation->set_rules('rating', 'rating', 'required');
         $this->form_validation->set_rules('review', 'review', 'required');
		 $data=array(
		 'product_id' => $this->input->post('product_id'),	 
		 'rating' => $this->input->post('rating'),
		'review' => $this->input->post('review'),
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
			$datx=$this->products->review_details($data);

          	    $this->load->helper('json');
                         echo json_return("true",$datx);
	 	}
}
	public function total_product(){
		$this->load->model('products');
		$s = $this->products->total_products();
		$this->load->helper('json');
        echo json_return("true",$s);
		}
		//panding order
		public function pending_order(){
			$this->load->model('products');
			$data = array(
			'id' =>$this->input->get('id'),
			'order_status' => '7'
			);
			if($result = $this->products->pending_order($data)){
		  $url = base_url()."seller/action_pending?msg=Order pending Successfully";
		  redirect($url);
		  }
	else{
		echo validation_errors(); 
		 }
	}	
		
		
		//cancelled order
		public function cancel_product(){
			
			$this->load->model('products');
			
			$data = array(
			'id' => $this->input->get('id'),
			'order_status' => '6'
			);
		if($result = $this->products->cancel_orders($data)){
		  $url = base_url()."product/cancelled_order?msg=Order Cancel Successfully";
		  redirect($url);
		  }
	else{
		echo validation_errors(); 
		 }
	}		
		
		//review order
		public function cancelled_order(){
		$this->load->view('seller/header');
		$this->load->view('seller/nav');		
		$this->load->model('products');
		
		
		$data = array(
		'user_id' => $this->session->userdata('id'),
		'order_status' => '6',
		);
		$tata['records']=$this->products->review_order($data);
		
		$this->load->view('seller/cancelled_order',$tata);		
		$this->load->view('seller/footer');	
		
		}
		
		public function categories(){

        $this->load->model('manage_seller_model');
		$data = $this->manage_seller_model->get_categories();
	
		//print_r($data);
		foreach($data as $row){
			print_r($row);
			}
		}
		
		public function product_list(){
			$this->load->model('products');
			$data = $this->products->product_lists();
			
			$this->load->helper('json');
				echo json_return('true',$data);
			}
			
		//Category Lists
		
		public function category_list(){
			$this->load->model('manage_seller_model');
			$data = $this->manage_seller_model->get_categories();
			$this->load->helper('json');
				echo json_return('true',$data);
			}

		public function fetch_pr(){
            $data = array(
                'category_name' => $this->input->post('id'),
            );
			
			$this->load->model('products');
			$dataa = $this->products->fetch_ps($data);
		    if($dataa==true){
                $this->load->helper('json');
                echo json_return('true',$dataa);
            }else{
                $this->load->helper('json');
                echo json_return('false',"No data available");
            }
        }
		
		public function fetch_pidd(){
			$this->load->model('products');
			$id=$this->input->post('id');
			$dataa['product'] = $this->products->fetch_ids($id);
			$data= $this->products->fetch_images($id);
		    
			$dataaa['images']= $data;
			$image_array = array();
			if(!empty($data)){
			foreach($data as $row){
				$image_array[] = array(
				'image' => base_url('uploads')."/".$row['image'],
				);
			}
			}
			$dataa['images']	= $image_array;
		    $dat = $this->products->get_categories();
			$dataa['colour'] = $dat[0]->sub;
			$dataa['size'] = $dat[1]->sub;
				
			//print_r($data);
			//die;
			
		
			//print_r($dataa['color&size'][0]);
			//die();
			
			if($dataa==true){
				$this->load->helper('json');
				echo json_return('true',$dataa);
			
		}else{
			$this->load->helper('json');
			echo json_return('false',"No data available");
		}
}
	public function wish_list(){
		$this->load->library('form_validation');
		$this->form_validation->set_rules('user_id','User_id','required');
		$this->form_validation->set_rules('product_id','Product_id','required');
		 if($this->form_validation->run() == False){
				 $d=validation_errors();
                         $x=str_replace("<p>","",$d);
                         $x1=str_replace("</p>","",$x);
                         $x2=str_replace("\n","",$x1);
			 $this->load->helper('json');
                         echo json_return("false",$x2);
         }else{
		$dataa=array(
		'user_id'=>$this->input->post('user_id'),
		'product_id'=>$this->input->post('product_id'),
		);
			$this->load->model('products');
			$wish=$this->products->wish_lists($dataa);
			if($wish == true){
					$this->load->helper('json');
                    echo json_return("true",$wish);
			}else{
				$this->load->helper('json');
                         echo json_return("false","product already added");
			}
	 	}
			
		
		
		
	}
	
	
	
	
	function delete_img(){
		
  $this->load->model('products');
    $idd = $_POST["deleteid"];
	
    $delete_img = $this->products->select_image($_POST["deleteid"]);
  
    $id=$delete_img->id;
          if(!$delete_img)
   {
   $data['message'] = "Not";
   $this->output->set_output(json_encode($data));
   }
   if($delete_img->id){
           
  $delete = $this->products->deleteimage($_POST["deleteid"]);
   
    $data['message'] = "Success";
   $this->output->set_output(json_encode($data));  
    }
   
   
   
 }
	


		  public function color_add(){
		// print_r($_REQUEST);die;
		$data['name'] = $_REQUEST['colour'];
		$data['parent_id'] = '1';
		$data['status'] = '1';
		//$parent_id = $_REQUEST['get_parentid'];
		
		 $this->load->model('manage_seller_model');
	   $add = $this->manage_seller_model->add_colour($data);
	
		     }
		                      
       public function size_add(){
		 // print_r($_REQUEST);die;
		$data['name'] = $_REQUEST['size'];
		$data['parent_id'] = '2';
		$data['status'] = '11';
		//$parent_id = $_REQUEST['get_parentid'];
		
		 $this->load->model('manage_seller_model');
	   $add = $this->manage_seller_model->add_size($data);
	  
		     }
			 public function approval(){
		 // print_r($_REQUEST);die;
		$id=$this->input->get('id');
		 $data = array(
        'status' => 1,    
        );
        $this->load->model('products');
        $data = $this->products->change_pstatus($data);
		$url = base_url()."show_product/s_product";
		  redirect($url);
	  
		     }



	
}
		


