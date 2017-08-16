<?php
class orders extends CI_Model{
/* Total Number Of order start */	
	public function total_orders(){
		$this->db->select('*');
		$this->db->from('orders');
		$query = $this->db->get();
		if ($query->num_rows() > 0) {
		return $query->num_rows();
		} else {
		return false;
		}
		}
/* Total Number Of order start Ends here */

/*Total order lists start here */
	public function order_lists(){
		$this->db->select('*');
		$this->db->from('orders');
		$query = $this->db->get();
		if ($query->num_rows() > 0) {
		return $query->result();
		} else {
		return false;
		}
		} 
/*Total order lists ends here */	

/* add to cart list api */
	/*public function add_carts($data){
		$this->db->insert('cart',$data);
		return true;
		
	}
		*/
		 
	function check_product($dataa) {
		$this->db->select('*');
			$this->db->from('product');
			$this->db->where('id',$dataa['product_id']);
			$query = $this->db->get();
		if($query->num_rows()>0){
		$this->db->insert('cart', $dataa);
		return true;
		}else{
			return false;
		}
	}
/* select cart user_id and product_id*/
	public function fetch_cart($dataa){
	$condition = "user_id =" . "'" . $dataa['user_id'] . "' AND " . "product_id =" . "'" . $dataa['product_id'] . "'";
	$this->db->select('*');
	$this->db->from('cart');
	$this->db->where($condition);
	$query = $this->db->get();
    if($query->num_rows()>0){
		return false;
	}else{
		return true;
		}
	}
	/*-----count items in cart------*/
	public function count_rows($id){
		$this->db->select('*');
		$this->db->from('cart');
		$this->db->where('user_id',$id);
		$query =$this->db->get();
		return $query->num_rows();
		
	}
	/*-----user profile pic-----*/
	public function user_image($id){
		$this->db->select('*');
		$this->db->from('profile_image');
		$this->db->where('user_id',$id);
		$query = $this->db->get();
		return $query->row();
		/* if($query->num_rows()>0){
			return true;
		}else{
			return false;
		} */
	}
	/* fetch api for cart */
		  public function fetch_ids($id){
		   $query = $this->db->query("SELECT d.user_id,i.image,p.id as product_id,p.product_name,p.category_name as cat_id,p.description,p.item_price,p.status,p.price_d,p.discount,p.quantity,p.ship_in,p.shipping_fee,IfNull(b.name,'') as seller_name,c.cat_name FROM cart AS d 
									LEFT JOIN product AS p ON(d.product_id = p.id) 
									LEFT JOIN  additional_user_info AS b ON ( p.user_id = b.user_id) 
									LEFT JOIN categories AS c ON (p.category_name = c.cat_id) 
									LEFT JOIN product_image AS i on(d.product_id = i.p_id AND main_image=1) 
								    where d.user_id = $id");
            if($query->num_rows()>0){
                return $query->result();
            }else{
                return false;
            }
		
		}
	/* wish list listing*/
	public function fetch_wish($id){
		$q = $this->db->query("SELECT d.user_id,i.image,p.product_name,p.id,p.category_name as cat_id,p.description,p.item_price,p.price_d,p.discount,p.quantity,p.status,c.cat_name,IfNull(b.name,'') as seller_name FROM wish_list AS d 
							LEFT JOIN product AS p ON(d.product_id = p.id) 
							LEFT JOIN additional_user_info AS b ON(p.user_id = b.user_id) 
							LEFT JOIN categories AS c ON(p.category_name = c.cat_id) 
							LEFT JOIN product_image AS i ON(d.product_id = i.p_id AND main_image=1) 
							where d.user_id = $id");
		if($q->num_rows()>0){
			return $q->result();
		}else{
			return false;
		}
	}
		
		
	public function get_product_attr($product_id) {
		if(empty($product_id))
			return false;
		$this->db->select('a.id, a.name value, a.parent_id, att.name as name');
        $this->db->from('product_attribute pa');
		$this->db->join('attribute a', 'a.id=pa.attr_id', 'left');
		$this->db->join('attribute att', 'att.id=a.parent_id', 'left'); 
        $this->db->where('product_id', $product_id);
		$this->db->where('a.status', 1);
		$parent = $this->db->get();
		if($parent->num_rows()>0){
		return $parent->result_array();}
		else{
			return false;
		}
				
	}
	public function remo($data){
		$condition=array(
		'user_id'=>$data['user_id'],
		'product_id'=>$data['product_id'],
		);
		$this->db->where($condition);
		$this->db->delete('wish_list');
		if($this->db->affected_rows()==true){
			return true;
		}else{
			return false;
		}
	}
	public function rem_cart($data){
		$condition=array(
		'user_id'=>$data['user_id'],
		'product_id'=>$data['product_id'],
		);
		$this->db->where($condition);
		$this->db->delete('cart');
		if($this->db->affected_rows() ==true){
			return true;
		}else{
			return false;
		}
	}
	
	/*function get_attr_values($product_id = 0) {
		if(empty($product_id))
			return false;
		$product_attrs = $this->get_product_attr($product_id);
		//echo "<pre>";print_r($product_attrs);die;
        if(empty($product_attrs['attrs']))
			return false;
		
		$this->db->select('*');
        $this->db->from('attribute');
       
		if(!empty($attrs)) $this->db->where_in('id', $attrs);

        $child = $this->db->get();
		echo $this->db->last_query();die;
        $categories = $child->result();
		
	}
	/*public function get_categories($product_id = 0){
		if(empty($product_id))
			return false;
		$product_attrs = $this->get_product_attr($product_id);
		//echo "<pre>";print_r($product_attrs);die;
        if(empty($product_attrs['attrs']))
			return false;
		$this->db->select('*');
        $this->db->from('attribute');
        $this->db->where('parent_id', 0);
		//$this->db->where_in('id', $product_attrs['attrs']);

        $parent = $this->db->get();
        
        $categories = $parent->result();
        $i=0;
        foreach($categories as $p_cat){

            $categories[$i]->sub = $this->sub_categories($p_cat->id, $product_attrs['attrs']);
            $i++;
        }
        return $categories;
    }

		public function sub_categories($id, $attrs = array()){

        $this->db->select('*');
        $this->db->from('attribute');
        $this->db->where('parent_id', $id);
		if(!empty($attrs)) $this->db->where_in('id', $attrs);

        $child = $this->db->get();
		echo $this->db->last_query();die;
        $categories = $child->result();
        $i=0;
        foreach($categories as $p_cat){

            $categories[$i]->sub = $this->sub_categories($p_cat->id);
            $i++;
        }
        return $categories;       
    }*/
	}