<?php
    class view_orders extends CI_Model
    {
		public function s_orders() {
        
            
            $q = $this->db->get("orders");
            if($q->num_rows() > 0)
            {
                return $q->result();
            }
            return array();
        }
		public function payment_order_details($id){
			$condition = array(
			'id' => $id,
			);
			$this->db->select('*');
			$this->db->from('orders');
			$this->db->where($condition);
			$query = $this->db->get();
			if($query->num_rows()==1){
				return $query->result();
				}else{
				return "False";	
					}
			}
		
    }
?>