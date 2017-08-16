<?php

if (!defined('BASEPATH'))exit('No direct script access allowed');

class main_model extends CI_Model {

   public function main_register($data) {
	$this->db->insert('register',$data);

	$result = $this->db->get('register')->result();
   }
   //login users
   public function login_users($data){
	$condition = "mobile =" . "'" . $data['mobile'] . "' AND " . "password =" . "'" . $data['password'] . "'";
$this->db->select('*');
$this->db->from('register');
$this->db->where($condition);//array('email' => $data['email'], 'password' => $data['password']));
$query = $this->db->get();
/*echo $this->db->last_query();
die();*/ 
if ($query->num_rows() == 1) {
return $query->result();
//return $query->row()->id ;

//return $query->row();
} else {
return false;
}

}

    
}
