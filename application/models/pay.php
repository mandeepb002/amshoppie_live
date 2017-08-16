<?php
if (!defined('BASEPATH'))exit('No direct script access allowed');
class pay extends CI_Model{

	public function fetch_carts(){
		$query = $this->db->query('SELECT * FROM  `cart` WHERE  `user_id` ='.$this->session->userdata('id'));
		
		if($query->num_rows()>0){
			return $query->result();
		}else{
			return false;
		}
	}

	public function insert_order($data){
		$query = $this->db->insert('orders',$data);
		if($query){
			$this->db->select('id');
			$this->db->from('orders');
			$this->db->where('user_id',$data['user_id']);
			$this->db->order_by("id", "desc");
			$this->db->limit('1');
			$query = $this->db->get();
			return $query->result_array();
		}
	}

	public function add_item($order_ids){
		$this->db->select('*');
		$this->db->from('cart');
		$this->db->where('user_id',$this->session->userdata('id'));
		$query = $this->db->get();
		if($query->num_rows()>0){
			$data = array();
			foreach ($query->result() as $row) {

				$data[] = array(
					'order_id'	=>	$order_ids,
					'product_id'	=>	$row->product_id,
					'quantity'	=>	$row->quantity,
					'rate'	=>	$row->price,
					'total'	=>	$row->quantity*$row->price,
					'order_item_status' => '1',
					);	
			}
			foreach ($data as $key) {
				$done = $this->db->insert('order_item',$key);	
				if($done){
					$this->db->where('user_id',$this->session->userdata('id'));
					$this->db->delete('cart');
					
					if($this->db->affected_rows()==true){
						return $order_ids;
					}else{
						return false;
					}

				}
			}
			
			
		}
	}
}