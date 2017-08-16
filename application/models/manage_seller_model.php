<?php
if (!defined('BASEPATH'))exit('No direct script access allowed');
class manage_seller_model extends CI_Model{
/**********Total SELLER VIEW MODAL****************/
public function seller_view( $limit, $offset ){
		$condition = array(
		'usertype' => '2',
		);
		$this->db->select('*');
		$this->db->where($condition);
		$this->db->from('register');
    $this->db->limit( $limit, $offset );
		$query = $this->db->get();
		if($query->num_rows() > 0){
			return $query->result();
			}else{
			return false;	
			}
		}
/******************ToTAL SELLER VIEW MODAL*******/

    /**********Total SELLER VIEW MODAL****************/
    public function seller_view_num(){
        $condition = array(
            'usertype' => '2',
        );
        $this->db->select('*');
        $this->db->where($condition);
        $this->db->from('register');

        $query = $this->db->get();
        if($query->num_rows() > 0){
            return $query->num_rows();
        }else{
            return false;
        }
    }
    /******************ToTAL SELLER VIEW MODAL*******/


    /****** Blocked SELLER ********/
	public function block_sellers( $limit, $offset ){
		$condition = array(
		'usertype' => '2',
		'status' => '2',
		);
		$this->db->select('*');
		$this->db->where($condition);
		$this->db->from('register');
        $this->db->limit( $limit, $offset );
		$query = $this->db->get();
		if($query->num_rows() > 0){
			return $query->result();
			}else{
			return false;	
			}
	}
		/****** Blocked SELLER ********/

    /****** Blocked SELLER Num rows********/
    public function block_sellers_num(){
        $condition = array(
            'usertype' => '2',
            'status' => '2',
        );
        $this->db->select('*');
        $this->db->where($condition);
        $this->db->from('register');
        $query = $this->db->get();
        if($query->num_rows() > 0){
            return $query->num_rows();
        }else{
            return false;
        }
    }
    /****** Blocked SELLER ********/


    /****** Active Seller Model ********/
	public function active_seller_model( $limit, $offset ){
		$condition = array(
		'usertype' => '2',
		'status' => '1',
		);
		$this->db->select('*');
		$this->db->where($condition);
		$this->db->from('register');
        $this->db->limit( $limit,$offset );
		$query = $this->db->get();
		if($query->num_rows() > 0){
			return $query->result();
			}else{
			return false;	
			}
	}
		/****** Active Seller Model ********/

    /****** Active Seller Model ********/
    public function active_seller_num(){
        $condition = array(
            'usertype' => '2',
            'status' => '1',
        );
        $this->db->select('*');
        $this->db->where($condition);
        $this->db->from('register');
        $query = $this->db->get();
        if($query->num_rows() > 0){
            return $query->num_rows();
        }else{
            return false;
        }
    }
    /****** Active Seller Model ********/

    /****** Pending Users Model********/
	public function pending_seller_model( $limit, $offset ){
		$condition = array(
		'usertype' => '2',
		'status' => '3',
		);
		$this->db->select('*');
		$this->db->where($condition);
		$this->db->from('register');
		$this->db->limit( $limit, $offset );
		$query = $this->db->get();
		if($query->num_rows() > 0){
			return $query->result();
			}else{
			return false;	
			}
	}
		/****** Pending Users Model End********/

    /****** Pending Users Model********/
    public function pending_seller_num(){
        $condition = array(
            'usertype' => '2',
            'status' => '3',
        );
        $this->db->select('*');
        $this->db->where($condition);
        $this->db->from('register');
        $query = $this->db->get();
        if($query->num_rows() > 0){
            return $query->num_rows();
        }else{
            return false;
        }
    }
    /****** Pending Users Model End********/

    /****** Pending Users Model********/
	public function seller_info(){
 $query = $this->db->query("SELECT * 
   FROM shope AS c LEFT JOIN  additional_user_info AS i ON ( i.user_id = c.user_id) ");
             return $query->result();
}
	//public function seller_info(){
		//$query = $this->db->get('shope');
		//return $query->result();
//	}
		/****** Pending Users Model End********/	
	
	//******************************************************************************
	 public function get_categories(){

        $this->db->select('*');
        $this->db->from('categories');
        $this->db->where('parent_id', 0);

        $parent = $this->db->get();
        
        $categories = $parent->result();
        $i=0;
        foreach($categories as $p_cat){

            $categories[$i]->sub = $this->sub_categories($p_cat->cat_id);
            $i++;
        }
        return $categories;
    }

    public function sub_categories($id){

        $this->db->select('*');
        $this->db->from('categories');
        $this->db->where('parent_id', $id);

        $child = $this->db->get();
        $categories = $child->result();
        $i=0;
        foreach($categories as $p_cat){

            $categories[$i]->sub = $this->sub_categories($p_cat->cat_id);
            $i++;
        }
		
        return $categories;       
    }
	//*******************************************************************************************

    public function coupon_opts($data){
        $this->db->insert('coupon_opt',$data);
        if($this->db->affected_rows()==true){
            return true;
        }else{
            return false;
        }
    }
    
    //*******************************************************************************************
     public function select_cat($parent_id='0' ){
       $this->db->select('*');
       $this->db->from('categories');
       $this->db->where('parent_id',$parent_id);
	$query=$this->db->get();
	return $query->result();
    }
	public function select_cat1($id ){
       $this->db->select('commission');
       $this->db->from('categories');
       $this->db->where('cat_id',$id);
	$query=$this->db->get();
	return $query->row_array();
    }
	public function select_cat2($id ){
       $this->db->select('parent_id');
       $this->db->from('categories');
       $this->db->where('cat_id',$id);
	$query=$this->db->get();
	return $query->row_array();
    }
	//*******************************************************************************************

    public function add_colour($data){
        $this->db->insert('attribute',$data);
        if($this->db->affected_rows()==true){
            return true;
        }else{
            return false;
        }
    }
	//*******************************************************************************************

    public function add_size($data){
        $this->db->insert('attribute',$data);
        if($this->db->affected_rows()==true){
            return true;
        }else{
            return false;
        }
    }
}