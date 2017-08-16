<?php
    class item_order extends CI_Model
    {
		public function item_orders() {
        
            
            $q = $this->db->get("order_item");
            if($q->num_rows() > 0)
            {
                return $q->result();
            }
            return array();
		}
		
		    }
?>