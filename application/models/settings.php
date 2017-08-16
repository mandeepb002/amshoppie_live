<?php

if (!defined('BASEPATH'))exit('No direct script access allowed');

class settings extends CI_Model
{
    public function comissions(){
        $query = $this->db->get('comission');
        if($query->num_rows()>1){
            return $query->result();
        }else{
            return false;
        }
    }

    public function comission_id(){
        $this->db->select('*');
        $this->db->from('comission');
        $this->db->where('id',$_GET['id']);
        $query = $this->db->get();
        if($query->num_rows()>0){
            return $query->result();
        }else{
            return false;
        }
    }

    public function update_com($data){
        $this->db->where('id',$_GET['id']);
        $this->db->update('comission',$data);
        if($this->db->affected_rows()==true){
            return true;
        }else{
            return false;
        }
    }

    public function fetch_slider_image(){
        $this->db->select('*');
        $this->db->from('front_slider');
        $this->db->where('status',1);
        $query = $this->db->get();
        if($query->num_rows()>0){
            return $query->result();
        }else{
            return false;
        }
    }
}