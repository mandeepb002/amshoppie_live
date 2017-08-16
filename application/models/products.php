<?php

if (!defined('BASEPATH'))exit('No direct script access allowed');

class products extends CI_Model {

   public function add_products($data) {
	$this->db->insert('product',$data);

	$result = $this->db->get('product')->result();
	if($result){
		
	$this->db->select('*');
	$this->db->from('product');   
	$this->db->limit(1);
	$this->db->order_by("id","desc");
	$query = $this->db->get();
	if($query->num_rows()==1){
		return $query->result();
		}else{
		return false;	
			}
		}
   }
   
   //select product attribute
    public function p_attribute($product_id,$attr_id){
 $query = $this->db->query("SELECT *  FROM product_attribute  where product_id = '$product_id' and attr_id = '$attr_id' ");
             return $query->row();
}
   
   
   // color attribute
   public function attribute_data($id){
 $query = $this->db->query("SELECT * 
   FROM product AS p LEFT JOIN  product_attribute AS a ON ( p.id = a.product_id) LEFT JOIN  attribute AS t ON ( a.attr_id = t.id)  where p.id= '$id' and t.parent_id =1");
             return $query->result();
}

   // color attribute
   public function attribute2_data($id){
 $query = $this->db->query("SELECT * 
   FROM product AS p LEFT JOIN  product_attribute AS a ON ( p.id = a.product_id) LEFT JOIN  attribute AS t ON ( a.attr_id = t.id)  where p.id= '$id' and t.parent_id =2");
             return $query->result();
}
   // Delete attribute
   
   
     /*   public function del_attribute($id, $array) {
	   $result = false;
		foreach($array as $arr ) {
			$con = array(
			
			'product_id' => $id,
			//'attr_id' => $arr,
			  
			);
			if($this->db->delete('product_attribute', $con)) {
				$result = true;
			}
		}
		return $result;
			
	}  */
	
   public function del_attribute($product_id){
	   $this->db->where('product_id',$product_id);
	    // $this->db->where('attr_id',$attr_id);
	   $this->db->delete('product_attribute');
	   return true;
	   } 
   
   
   
   
   
   //add attributes
   
   public function add_attribute($id, $array) {
	   $result = false;
		foreach($array as $arr ) {
			$con = array(
			
			'product_id' => $id,
			'attr_id' => $arr,
			  
			);
			if($this->db->insert('product_attribute', $con)) {
				$result = true;
			}
		}
		return $result;
			
	}
	
   //image add
public function add_images($images_array, $id) {
	//echo "<pre>";print_r($images_array);print_r($_POST);die;
	$result = false;
	if(!empty($images_array)) {
		$i = 1;
		$main = 0;
		foreach($images_array as $image) {
			$new_image = 'main_image'.$i;
		//echo $_POST[$new_image]."<br>";die;
				if(isset($_POST[$new_image]) && !empty($_POST[$new_image])) {
					$main = 1;
				} else {
					$main = 0;
				}
			$con = array(
			'image' => $image,
			'p_id' => $id,
			'main_image' => $main,
			  
			);
			if($this->db->insert('product_image', $con)) {
				$result = true;
			}
			//echo $this->db->last_query();echo "<br>";
			$i++;
		}
		//die;
	}
	if($result){
		return true;
		}else{
			return false;
			}
   } 

//commission plain
 public function comm_plain($data){
	 $this->db->select('user_id');
	 $this->db->from('subscribe_comission');
	 $this->db->where('user_id',$data['user_id']);
	 $query = $this->db->get();
	 if($query->num_rows()>0){
		 $this->db->update('subscribe_comission',$data);
		 $this->db->where('user_id',$data['user_id']);
		 if($this->db->affected_rows()==true){
			 return true;
		 }
	 }else{
        $this->db->insert('subscribe_comission',$data);
        if($this->db->affected_rows()==true){
            return true;
        }else{
            return false;
        }
	 }
    }

//cancel order
public function cancel_orders($data){
	$condition  = array(
	'id' => $data['id'],
	);
	$t = array(
	'order_status' => $data['order_status'],
	);
	$this->db->where($condition);
		$this->db->update('orders', $t);
		
		//echo $this->db->last_query();
		//die();
		if($result){
				return true;
				}else{
				return "No Record Found";	
					}

   }
	
	//pending order
	public function pending_order($data){
	$condition  = array(
	'id' => $data['id'],
	);
	$s = array(
	'order_status' => $data['order_status'],
	);
	$this->db->where($condition);
		$this->db->update('orders', $s);
		
		//echo $this->db->last_query();
		//die();
		return true;

   }

//review cancel order

public function review_order($data){
			$this->db->select('*');
			$this->db->from('orders');
			$this->db->where($data);
			$query = $this->db->get();
				if($query->num_rows()==true){
				return $query->result();
				}else{
				return False;	
					}
			}
		
	

//edit products
 
   
    public function edit_products($id){
	   		

 $query = $this->db->query("SELECT * 
   FROM categories AS c LEFT JOIN  product AS p ON ( c.cat_id = p.category_name)  where  p.id = $id ");
             return $query->row();

		
   }
   //edit done

public function edit_done($id,$data){
		//$this->db->update('product', $data);
	//$this->db->where('id', $id);
		//return true;
		  $this->db-> where('id',$id);
		  $this->db->update('product',$data);
		   return true; 

   }
  //delete done 
   
   public function delete_products($id){
	   $this->db->where('id',$id);
	   $this->db->delete('product');
	   return true;
	   }
	   //inactive delete product
	   public function delete_inactive_products($id){
	   $this->db->where('id',$id);
	   $this->db->delete('product');
	   return true;
	   }
	//inactive single details
	public function inactive_single_details($id){
			$condition = array(
			'id' => $id,
			);
			$this->db->select('*');
			$this->db->from('product');
			$this->db->where($condition);
			$query = $this->db->get();
			if($query->num_rows()==1){
				return $query->result();
				}else{
				return "False";	
					}
			}
		
	   //single details show
	   public function show_single_details($id){
			$condition = array(
			'id' => $id,
			);
			$this->db->select('*');
			$this->db->from('product');
			$this->db->where($condition);
			$query = $this->db->get();
			if($query->num_rows()==1){
				return $query->result();
				}else{
				return "False";	
					}
			}
		
	   
	   public function review_details($data) {
	$this->db->insert('review',$data);

	$result = $this->db->get('review')->result();
	if($result){
		return true;
		}else{
			return false;
			}
   }
   			public function select_brands(){
			$this->db->select('*');
			$this->db->from('brands');
			
			if ($query = $this->db->get()) {
			return $query->result();
			} else {
			return "Data Not Available";
			}
			}
 public function select_category(){
			$this->db->select('*');
			$this->db->from('category');
			
			if ($query = $this->db->get()) {
			return $query->result();
			} else {
			return "Data Not Available";
			}

 }
 		public function total_products($id){
				$condition=array(
				'user_id'=>$id,
				);
		$this->db->select('*');
		$this->db->from('orders');
		$this->db->where($condition);
		$query = $this->db->get();
		if ($query->num_rows() > 0) {
		return $query->num_rows();
		} else {
		return false;
		}
}
		public function total_cancelled_orders($id){
				$condition=array(
				'user_id'=>$id,
				'order_status' =>'6',
				);
		$this->db->select('*');
		$this->db->from('orders');
		$this->db->where($condition);
		$query = $this->db->get();
		if ($query->num_rows() > 0) {
		return $query->num_rows();
		} else {
		return false;
		}
}
		public function returned_orders($id){
				$condition=array(
				'user_id'=>$id,
				'order_status' =>'4',
				);
		$this->db->select('*');
		$this->db->from('orders');
		$this->db->where($condition);
		$query = $this->db->get();
		if ($query->num_rows() > 0) {
		return $query->num_rows();
		} else {
		return false;
		}
}
	
		public function product_lists($data){
			$condition = array(
			'id' => $data,
			);
			$this->db->select('product_name, description, item_price, discount, image');
			$this->db->where($condition);
			$this->db->from('product');
			
			$query = $this->db->get();
			if($query->num_rows()>0){
				
				return $query->result();
				
				}else{
				return false;	
					}
			}
			
		public function last_product(){
			 $query=$this -> db ->query("SELECT id FROM product ORDER BY id DESC LIMIT 1");
			 return $query->row();
		}
		public function product_lists1(){
			$condition = array(
			'status' => '1',
			
			);
			$this->db->select('*');
			$this->db->from('product');
			$this->db->where($condition);
			
			$query = $this->db->get();
			if($query->num_rows()>0){
				
				return $query->result();
				
				}else{
				return false;	
					}
			}
			public function product_lists2($data){
			$condition = array(
			'id' => $data,
			);
			$this->db->select('*');
			$this->db->from('product');
			$this->db->where($condition);
			
			$query = $this->db->get();
			if($query->num_rows()>0){
				
				return $query->result();
				
				}else{
				return false;	
				}
			}
			public function product_lists3($data){
			$condition = array(
			'id' => $data,
			);
			$this->db->select('product_name');
			$this->db->from('product');
			$this->db->where($condition);
			
			$query = $this->db->get();
			if($query->num_rows()>0){
				
				return $query->result();
				
				}else{
				return false;	
				}
			}

		public function fetch_ps($data){
			$this->db->select('*');
            $this->db->from('product');
            $this->db->where($data);
			
            $query = $this->db->get();
            if($query->num_rows()>0){
                return $query->result();
            }else{
                return false;
            }
        }
	    public function fetch_ids($id){
		    $this->db->select('*');
            $this->db->from('product');
            $this->db->where('id',$id);
            $query = $this->db->get();
            if($query->num_rows()>0){
                return $query->result();
            }else{
                return false;
            }
		
		}
		
		public function fetch_images($id){
			$this->db->select('image');
            $this->db->from('product_image');
            $this->db->where('p_id',$id);
            $query = $this->db->get();
            if($query->num_rows()>0){
					return $query->result_array();
            }else{
                return false;
            }
		}
		public function fetch_images1(){
			$condition = array(
			'main_image' => '1',
			);
			$this->db->select('*');
            $this->db->from('product_image');
            $this->db->where($condition);
            $query = $this->db->get();
            if($query->num_rows()>0){
					return $query->result_array();
            }else{
                return false;
            }
		}
		public function get_categories(){

        $this->db->select('*');
        $this->db->from('attribute');
        $this->db->where('parent_id', 0);

        $parent = $this->db->get();
        
        $categories = $parent->result();
        $i=0;
        foreach($categories as $p_cat){

            $categories[$i]->sub = $this->sub_categories($p_cat->id);
            $i++;
        }
        return $categories;
    }

		public function sub_categories($id){

        $this->db->select('*');
        $this->db->from('attribute');
        $this->db->where('parent_id', $id);

        $child = $this->db->get();
        $categories = $child->result();
        $i=0;
        foreach($categories as $p_cat){

            $categories[$i]->sub = $this->sub_categories($p_cat->id);
            $i++;
        }
        return $categories;       
    }
		public function wish_lists($dataa){
		$condition = "user_id =" . "'" . $dataa['user_id'] . "' AND " . "product_id =" . "'" . $dataa['product_id'] . "'";
		$this->db->from('wish_list');
		$this->db->where($condition);
		$query = $this->db->get();
		if($query->num_rows()>0){
		return false;
		}else{
			$this->db->select('*');
			$this->db->from('product');
			$this->db->where('id',$dataa['product_id']);
			$query = $this->db->get();
			if($query->num_rows() > 0){
				$this->db->insert('wish_list', $dataa);
			return true;
			}else{
				return "product not avilable in product list";
			}
		
		}
		}
        
        public function change_pstatus($data){
            //echo $_GET['id'];die;
            $this->db->where('id',$_GET['id']);    
            $this->db->update('product', $data);  
            if($this->db->affected_rows()==true){
                return true;
            }else{
                return false;
            }
        }
		
		
		 function select_image($id)
  {
     $query=$this -> db ->query("SELECT * FROM product_image where  id =$id");
   return $query->row();
  }
  function deleteimage($id)
  {
     $this->db->where('id', $id);
           $query = $this->db->delete('product_image');
     return $query;
  }

  
  public function attr_colour(){
  	$condition = array(
  		'parent_id'	=>	1,
  		'status'	=>	1,
  		);
  	$this->db->select('*');
  	$this->db->from('attribute');
  	$this->db->where($condition);
  	$query = $this->db->get();
  	if($query->num_rows()>0){
  		return $query->result();
  	}else{
  		return false;
  	}
  }

  public function attr_size(){
  	$condition = array(
  		'parent_id'	=>	2,
  		'status'	=>	1,
  		);
  	$this->db->select('*');
  	$this->db->from('attribute');
  	$this->db->where($condition);
  	$query = $this->db->get();
  	if($query->num_rows()>0){
  		return $query->result();
  	}else{
  		return false;
  	}
  }
  
  public function com(){
	  $this->db->select('*');
	  $this->db->from('subscribe_comission');
	  $this->db->where('user_id',$this->session->userdata('id'));
	  $query = $this->db->get();
	  if($query->num_rows()>0){
		  foreach($query->result() as $row){
			  $this->db->select('*');
			  $this->db->from('comission_sale');
			  $this->db->where('id',$row->plan_id);
			  $query = $this->db->get();
			  if($query->num_rows()>0){
				  return $query->result();
			  }else{
				  return false;
			  }
		  }
	  }
  }

public function all_parent($cat_id){
	  $this->db->select('*');
	  $this->db->from('categories');
	  $this->db->where('cat_id',$cat_id);
	  $query = $this->db->get();
	   return $query->row();
			
  
 
			
  }

 public function all_cat($parent_id='0' ){
       $this->db->select('*');
       $this->db->from('categories');
       $this->db->where('parent_id',$parent_id);
	$query=$this->db->get();
	return $query->result();
    }
    
      public function all_productimages(){
	   		

 $query = $this->db->query("SELECT * FROM product_image  ");
             return $query->result();

		
   }
   
    public function add_to_deal($data){
		$this->db->insert('deal_of_the_day',$data);
		$result = $this->db->get('product')->result();
		if($result){	
			return true;
		}else{
			return false;	
		}
	}
	
	public function view_deal(){
		 $query = $this->db->query("SELECT * FROM deal_of_the_day  ");
             return $query->result();
		
	}
	public function view_deal1($data){
		$condition = array(
  		'product_id'	=>	$data,
  		);
		$this->db->select('*');
		$this->db->from('deal_of_the_day');
		$this->db->where($condition);
		$query=$this->db->get();
		return $query->result();
		
	}
	public function edit_deal($id,$data){
		$condition = array(
  		'product_id'	=>	$id,
  		);
		//print_r($condition);die;
		$this->db-> where($condition);
		$this->db->update('deal_of_the_day',$data);
		
		
		if($this->db->affected_rows()==true){
			 return true;
		}
		
	}
	public function del_deal($data){
		$condition = array(
  		'product_id'	=>	$data,
  		);
		$this->db-> where($condition);
		$this->db->delete('deal_of_the_day');
        return true;
		
	}

}
 