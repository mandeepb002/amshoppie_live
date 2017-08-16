<?php
class order extends MS_Controller{
	public function total_order(){
		$this->load->model('orders');
		$q = $this->orders->total_orders();
		$this->load->helper('json');
        echo json_return("true",$q);
		}
		
	public function order_list(){
		$this->load->model('orders');
		$q = $this->orders->order_lists();
		$this->load->helper('json');
        echo json_return("true",$q);
		}	
	
	
	/* add to cart api*/
	public function add_cart(){
		$this->load->model('orders');
		$this->load->library('form_validation');
		$this->form_validation->set_rules('user_id','User_id','required');
		$this->form_validation->set_rules('product_id','Product_id','required');
		if($this->form_validation->run() == false){
				$d=validation_errors();
                         $x=str_replace("<p>","",$d);
                         $x1=str_replace("</p>","",$x);
                         $x2=str_replace("\n","",$x1);
				 $this->load->helper('json');
				  echo json_return('false',$x2);
		}else{		
	    $dataa=array(
			  'user_id'=> $this->input->post('user_id'),
			  'product_id'=> $this->input->post('product_id'),
			  'quantity'=>1,
		);
		$q = $this->orders->fetch_cart($dataa);
		if($q == false){
		$this->load->helper('json');
				  echo json_return('false',"product already added");
	    }else{
			$data=$this->orders->check_product($dataa);
			if($data == true){
				$data="true";
				$this->load->helper('json');
				  echo json_return('true',$data);
			}else{
			$this->load->helper('json');
				  echo json_return('false',"product is not avialable");
	    }
        }
	}
	}
	
	/*fetch data for add cart  api*/
			public function add_cart_list(){
				
			$this->load->model('orders');
			$id=$this->input->post('user_id');
			$datz['product'] = $this->orders->fetch_ids($id);
			$product_array = array();
			$sub_total = 0;
			if(!empty($datz['product'])){
			foreach($datz['product'] as $row){
				if(!empty($row->image)){
				$row->image = base_url('uploads')."/".$row->image;	
				}else{
				$row->image ="";	
				}
				
				$row->COLOUR = array();
				$row->SIZE = array();
				//$product_array[] = $row;
				$dat = $this->orders->get_product_attr($row->product_id);
				$attribte_array = $arr = array();
				if(!empty($dat)) {
					foreach($dat as $attr){
						//echo "<pre>";print_r($attr);
						$name = $attr['name'];
						unset($attr['name']);
						if($name == 'COLOUR')
							$row->COLOUR[] = $attr;
						else 
							$row->SIZE[] = $attr;
						//$row = $arr;
						
					}
				}
				//$row[] = $attribte_array;
				
				$item_price = $row->price_d;
				$ship = $row->shipping_fee;
				
				$row->total_price = $item_price + $ship;
				$sub_total += $row->total_price;
				$product_array[] = $row;
				
			}
			//echo "<pre>";print_r($product_array);die;
			$datz['product'] = $product_array;
			
			$datz['sub_total'] = $sub_total;
				//print_r($datz['sub_total']);
			
			}
	        if(!empty($datz['product'])){
				$this->load->helper('json');
				echo json_return('true',$datz);
			
		}else{
			$this->load->helper('json');
			echo json_return('false',"No product available");
		}
		}

	/******** wish*******/
	public function fetch_wish_list(){
		$this->load->model('orders');
		$id=$this->input->post('user_id');
		$dataa['product'] = $this->orders->fetch_wish($id);
        $product_array = array();
		if(!empty($dataa['product'])){
			foreach($dataa['product'] as $row){
				if(!empty($row->image)){
				$row->image = base_url('uploads')."/".$row->image;
				}else{
				$row->image ="";
				}
				$product_array[] = $row;
			}
			$dataa['product'] = $product_array;
			
			}
			//print_r($product_array);
			//die();
		if(!empty($dataa['product'])){
			$this->load->helper('json');
			echo json_return('true',$dataa);
		}else{
			$this->load->helper('json');
			echo json_return('false',"No data available");
		}
	}
	/*---- remove wishlist -------*/
	public function remove_wishlist(){
	
	
	$data=array(
			  'user_id'=> $this->input->post('user_id'),
			  'product_id'=> $this->input->post('product_id'),
		);
	$this->load->model('orders');
	$data = $this->orders->remo($data);
	if($data==true){
			$this->load->helper('json');
			echo json_return('true',"Deleted");
	}else{
		$this->load->helper('json');
			echo json_return('false',"Not deleted");
	}
	}
	
	/*---- remove cartlist -------*/
	
	public function remove_cartlist(){
		
	$data=array(
			  'user_id'=> $this->input->post('user_id'),
			  'product_id'=> $this->input->post('product_id'),
		);
	$this->load->model('orders');
	$data = $this->orders->rem_cart($data);
	if($data==true){
			$this->load->helper('json');
			echo json_return('true',"Deleted");
	}else{
		$this->load->helper('json');
			echo json_return('false',"Not deleted");
	}
	}
	/*---- count items in cart list -------*/
	
	public function count_items(){
		$this->load->model('orders');
		$id=$this->input->post('user_id');
		$x=$this->orders->count_rows($id);
		if($data=true){
			$this->load->helper('json');
			echo json_return('true',"$x");
		}else{
			$this->load->helper('json');
			echo json_return('false',"Not deleted");
		}
		
		
	}
	public function profile_image(){
		$this->load->model('orders');
		$id = $this->input->post('user_id');
		$dataa= $this->orders->user_image($id);
		if(!empty($dataa)){
	    $image['image']= base_url('uploads')."/".$dataa->image;
		}else{
			$image['image']="";
		}
		
		if($image['image'] == true){
			$this->load->helper('json');
				echo json_return('true',$image);
			
		}else{
			$this->load->helper('json');
				echo json_return('false',"image not avialable");
		} 
	}
	
}