<?php

class Csv_model extends CI_Model {
    
    function __construct() {
        parent::__construct();
        
    }
    
    function get_addressbook() {     
        $query = $this->db->get('ciaddressimport');
        if ($query->num_rows() > 0) {
            return $query->result_array();
        } else {
            return FALSE;
        }
    }
    
    function insert_csv($data) {
		
        $this->db->insert('product',$data);
		$result = $this->db->get('product')->result();
		//print_r($result);die;
	if($result){
		
	$this->db->select('*');
	$this->db->from('product');   
	$this->db->limit(1);
	$this->db->order_by("id","desc");
	$query = $this->db->get();
	if($query->num_rows()==1){
		return $query->result();
		}else{
		return false;	
			}
		}
    }
}
/*END OF FILE*/

