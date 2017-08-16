<?php

if (!defined('BASEPATH'))exit('No direct script access allowed');

class home_model extends CI_Model {
	public function home_register($data){
		$this->db->insert('register',$data);
	    if($this->db->affected_rows() == true){
		return true;
	}else{
		return false;
	}

}
	/*public function login($data){
		$condition= "mobile=" . "'" . $data['mobile'] . "'AND" . "password=" . "'" . $data['password'] . "'" . "usertype=" . "'" . "1";
		$this->db->select('*');
		$this->db->from('register',$condition);
		$query=$this->db->get();
		if($query->num_rows() == 1){
			$this->db
			return $query->result;
		}else{
			return false;
		}
		
}*/
}