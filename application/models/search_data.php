<?php

if (!defined('BASEPATH'))exit('No direct script access allowed');

class search_data extends CI_Model {

public function serach_details($data){
	   		
	$this->db->select('*');
	$this->db->from('product');   
   	$this->db->where($data);
	$query = $this->db->get();
	
	if($query->num_rows()==true){
		return $query->result();
		}else{
		return false;	
			}
   }
}