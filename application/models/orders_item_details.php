<?php

if (!defined('BASEPATH'))exit('No direct script access allowed');

class orders_item_details extends CI_Model {
public function item_details($data) {
	$this->db->insert('order_item',$data);

	$result = $this->db->get('order_item')->result();
	if($result){
		return true;
		}else{
			return false;
			}
   }
}