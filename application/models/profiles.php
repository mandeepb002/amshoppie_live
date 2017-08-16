<?php

if (!defined('BASEPATH'))exit('No direct script access allowed');

class profiles extends CI_Model {

//view bank details
		public function view_profile_details() {
			
			$condition = array(
			'user_id' => $this->session->userdata('id'),
			);
			
			$this->db->select('*');
			$this->db->from('additional_user_info');
			$this->db->where($condition);
            $q = $this->db->get();
			//echo "dfhd";die;
			//print_r($q->result());die;
            if($q->num_rows() > 0)
            {
                return $q->result();
            }else{
				return false;
				}
            return array();
        }
		
		//edit bank details
	   
	 public function edit_profiles_details1($id){
	   		$condition=array(
				'user_id' => $this->session->userdata('id'),
				);

	$this->db->select('*');
	$this->db->from('additional_user_info');   
   	$this->db->where($condition);
	$query = $this->db->get();
	if($query->num_rows()==1){
		return $query->row_array();
		}else{
		return false;	
			}
   }
   //Check user id for profile details exist in database
   public function check_suid($id){
	   $condition = array(
	   'user_id' => $id,
	   );
	   $this->db->select('*');
	$this->db->from('additional_user_info');
   	$this->db->where($condition);
	$query = $this->db->get();
	if($query->num_rows()==1){
		return $query->result();
		}else{
		return false;	
			}
	   }
   //edit done
public function edit_profiles_details2($data,$id){
		$check = $this->check_suid($id);
		//echo "<pre>";print_r($check);print_r($data);
		if(!$check) {
			$data['user_id'] = $id;
			$this->db->insert('additional_user_info', $data);
			//echo $this->db->last_query();die;
			if($this->db->affected_rows('additional_user_info')==TRUE){
				return true;
			}else{
				return false;
			}
		} else {
			$this->db->where('user_id', $id);
			$this->db->update('additional_user_info', $data);
		}

	//echo $this->db->last_query();die;
		return true;

   }
}
?>