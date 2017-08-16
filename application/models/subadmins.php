<?php
if (!defined('BASEPATH'))exit('No direct script access allowed');
class subadmins extends CI_Model
{
    public function add_users($data){
        $this->db->insert('register',$data);
        if($this->db->affected_rows('register')==TRUE){
            return true;
        }else{
            return false;
        }
    }
	public function add_permission($data){
		$this->db->insert('permission',$data);
        if($this->db->affected_rows('permission')==TRUE){
            return true;
		}else{
				return false;
		}
	}

    public function view_users( $limit , $offset){
        $this->db->select('*');
        $this->db->from('register');
        $this->db->where('usertype',4);
        $this->db->limit( $limit , $offset);
        $query = $this->db->get();
        if($query->num_rows()>0){
            return $query->result();
        }else{
            return false;
        }
    }

	 public function view_users_num(){

        $this->db->select('*');

        $this->db->from('register');

        $this->db->where('usertype',4);



        $query = $this->db->get();

        if($query->num_rows()>0){

            return $query->num_rows();

        }else{

            return false;

        }

    }


	public function view_users1(){
        $this->db->select('*');
        $this->db->from('register');
        $this->db->where('usertype',4);
        $query = $this->db->get();
        if($query->num_rows()>0){
            return $query->result();
		}else{
			return false;
		}
	}
	public function view_permission($data){
		
        $this->db->select('*');
        $this->db->from('permission');
        $this->db->where('user_id',$data);
        $query = $this->db->get();
        if($query->num_rows()>0){
            return $query->result();
		}else{
			return false;
		}
	}

    
}