<?php
    class show_registers extends CI_Model
    {
		public function s_registers() {
        
            
            $q = $this->db->get("register");
            if($q->num_rows() > 0)
            {
                return $q->result();
            }
            return array();
        }
    }
?>