<?php

if (!defined('BASEPATH'))exit('No direct script access allowed');

class fetch extends CI_Model {

//fetch user detials
public function fetch_details($data){

	$condition = "user_id =" . "'" . $data['id'] . "'";
$this->db->select('*');
$this->db->from('register');
$this->db->where($condition);
$query = $this->db->get();
 
if ($query->num_rows() == 1) {
return $query->result();
} else {
return false;
}

}
	
//fetch detail 2 query

public function fetch_details1($data){
$condition = "user_id =" . "'" . $data['id'] .  "'";
$this->db->select('*');
$this->db->from('additional_user_info');
$this->db->where($condition);
$query = $this->db->get(); 
if ($query->num_rows() == 1) {
return $query->result();

} else {
return false;
}

}
}
