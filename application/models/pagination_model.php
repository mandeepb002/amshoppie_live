<?php

class pagination_model extends CI_Model
{

     public function get_product()
     {
          return $this->db->get("product");
     }

}

?>