<?php

if (!defined('BASEPATH'))exit('No direct script access allowed');

class welcomes extends CI_Model{

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

 

    public function get_cats(){

        $this->db->select('*');

        $this->db->from('categories');

        $this->db->where('parent_id',$_GET['cat']);

        $query = $this->db->get();

        if($query->num_rows()>0){

            return $query->result();

        }else{

            return false;

        }



    }
	
	//men data
	//show men categories
public function all_data_show(){
	$query = $this->db->query("SELECT * 
   FROM category AS c LEFT JOIN  category_images AS i ON ( i.cate_id = c.id) ");
	            return $query->result();
}
	
//show men categories
public function show_cat(){
	$query = $this->db->query("select * from categories where parent_id='0' AND cat_name='MEN'");
	            return $query->row();
}
//show women category
public function show1_cat(){
	$query = $this->db->query("select * from categories where parent_id='0' AND cat_name='WOMEN'");
	            return $query->row();
}
//show kid category
public function show2_cat(){
	$query = $this->db->query("select * from categories where parent_id='0' AND cat_name='kids'");
	            return $query->row();
}

    public function get_product(){

        $this->db->select('*');

        $this->db->from('product');

        $this->db->where('category_name',$_GET['cat']);

        $query = $this->db->get();

        if($query->num_rows()>0){

            return $query->result();

        }else{

            return false;

        }        

    }



    public function fetch_product(){

        $this->db->select('*');

        $this->db->from('product');

        $this->db->where('id',$this->uri->segment(3));

        $query = $this->db->get();

        if($query->num_rows()>0){

            return $query->result();

        }else{

            return false;

        }   

    }



    public function get_single_cat(){

        $this->db->select('*');

        $this->db->from('categories');

        $this->db->where('cat_id',$_GET['cat']);

        $query = $this->db->get();

        if($query->num_rows()>0){

            return $query->result();

        }else{

            return false;

        }

    }



    public function get_brands(){

        $query = $this->db->query("SELECT * FROM `brand` WHERE `status`= 1 ");

        if($query->num_rows()>0){

            return $query->result();

        }else{

            return false;

        }

    }



    public function get_sizes(){

        $query = $this->db->query("SELECT * FROM `attribute` WHERE `parent_id`= 2 AND `status` = 1");

        if($query->num_rows()>0){

            return $query->result();

        }else{

            return false;

        }

    }



    public function get_color(){

        $query = $this->db->query("SELECT * FROM `attribute` WHERE `parent_id`= 1 AND `status` = 1");

        if($query->num_rows()>0){

            return $query->result();

        }else{

            return false;

        }

    }



    public function add_carts($data){

        $condition = array(

            'user_id'   => $this->session->userdata('id'),

            'product_id'   => $data['product_id'],

            );

        $this->db->select('*');

        $this->db->from('cart');

        $this->db->where($condition);

        $query = $this->db->get();

        if($query->num_rows()>0){ 

            $this->db->where($condition);

            $this->db->update('cart',$data);

        }else{

            $this->db->insert('cart',$data);

            if($this->db->affected_rows()==true){

                return true;

            }

        }

    }



    public function get_single_size(){

        $this->db->select('attr_id');

        $this->db->from('product_attribute');

        $this->db->where('product_id',$this->uri->segment(3));

        $query = $this->db->get();

        if($query->num_rows()>0){

            return $query->result();

        }else{

            return false;

        }

    }



    public function fetch_cart(){

        $this->db->select('*,a.quantity as quent');

        $this->db->from('cart as a');

        $this->db->join('product as b','b.id = a.product_id');

        $this->db->where('a.user_id',$this->session->userdata('id'));

        $query = $this->db->get();

        if($query->num_rows()>0){

          return $query->result();

        }else{

            return false;

        }

    }



    public function del_carts(){

        $condition = array(

            'user_id' => $_GET['user_id'],

            'product_id'    => $_GET['product_id'],

            );

        $this->db->where($condition);

        $this->db->delete('cart');   

        if($this->db->affected_rows()==true){

            return true;

        }else{

            return false;

        }

    }



    public function ship_address(){

        $this->db->select('*');

        $this->db->from('ship_address');

        $this->db->where('user_id',$this->session->userdata('id'));

        $query = $this->db->get();

        if($query->num_rows()>0){

            return $query->result();

        }else{

            return false;

        }

    }



}

    ?>