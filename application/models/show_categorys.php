<?php
    class show_categorys extends CI_Model
    {
		public function s_categorys() {
        
            
            $q = $this->db->get("category");
            if($q->num_rows() > 0)
            {
                return $q->result();
            }
            return array();
        }
    }
?>