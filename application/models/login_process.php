<?php

if (!defined('BASEPATH'))exit('No direct script access allowed');

class login_process extends CI_Model {

public function show_all_data($data) {
	//SELECT * FROM `table name` WHERE `username`='$username' and `password`='$paswword'
	$email=$data['email'];
	$password=$data['password'];
     $password=md5($password);
$this->db->select('*');
$this->db->from('user');
$this->db->where(array('email' => $email, 'password' => $password));
$result = $this->db->get()->result();
//echo $this->db->last_query();
   foreach($result as $row){
		$id=$row->id;
	}
//echo $this->db->last_query();
   if($result)
   {
        return $id;

    }
    else
    {
         return false;
    }
}
}
?>