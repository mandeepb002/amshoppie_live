<?php

if (!defined('BASEPATH'))exit('No direct script access allowed');

class social_api_model extends CI_Model {
	public function insert_api($data){
		$this->db->insert('register_api',$data);
		return true;
	}
	
	public function get_categories(){

        $this->db->select('*');
        $this->db->from('product_attribute');
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
        $this->db->from('product_attribute');
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
}