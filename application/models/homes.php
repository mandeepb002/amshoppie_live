<?php
class homes extends CI_Model {
    public function ships(){
        $this->db->select('*');
        $this->db->from('add_address');
        $this->db->where('user_id', $this->session->userdata('id'));		
		//$this->db->where('user_id');
        $query = $this->db->get();
        if($query->num_rows()>0){
            return $query->result();
        }else{
            return false;
        }
    }

    public function order(){
        $this->db->select('*');
        $this->db->from('orders');
        //$this->db->where('user_id', $this->session->userdata('id'));
        $query = $this->db->get();
        if($query->num_rows()>0){
            return $query->result();
        }else{
            return false;
        }
    }
}