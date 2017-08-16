<?php
class categoryy extends CI_Model{
	public function show_main_cats(){

	    $this->db->select('*');
        $this->db->from('categories');
        $this->db->where('parent_id','0');
        $query = $this->db->get();
        if($query->num_rows()>0){
            return $query->result();
        }else{
            return false;
        }
    }

    public function show_subs($data){
	    $this->db->select('*');
        $this->db->from('categories');
        $this->db->where($data);
        $query = $this->db->get();
        if($query->num_rows()>0){
            return $query->result();
        }else{
            return false;
        }
    }
			}