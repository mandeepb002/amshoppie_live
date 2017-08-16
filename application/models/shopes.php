<?php

if (!defined('BASEPATH'))exit('No direct script access allowed');

class shopes extends CI_Model {

  //insert shop details
   // banner insert details
   public function shopes_detailss($data) {
	$this->db->insert('shope',$data);

	$result = $this->db->get('shope')->result();
	return true;
   }
//shop add seller
public function seller_shop(){
	
		$query = $this->db->get('shope');
		return $query->result();
	}
	public function seller_shop1(){
		$condition = array(
			'user_id' => $this->session->userdata('id'),
			);
			$this->db->select('*');
			$this->db->from('shope');
			$this->db->where($condition);
		$q = $this->db->get();
            if($q->num_rows() > 0)
            {
                return $q->result();
            }else{
				return false;
				}
            return array();
        }
   //shop detail
    public function view_shop_details() {
			$condition = array(
			'user_id' => $this->session->userdata('id'),
			);
			$this->db->select('*');
			$this->db->from('shope');
			$this->db->where($condition);
            $q = $this->db->get();
            if($q->num_rows() > 0)
            {
                return $q->result();
            }else{
				return false;
				}
            return array();
        }
		//single shop detail
		
	public function single_shop_details($id){
			$condition = array(
			'id' => $id,
			);
			$this->db->select('*');
			$this->db->from('shope');
			$this->db->where($condition);
			$query = $this->db->get();
			if($query->num_rows()==1){
				return $query->row();
				}else{
				return "False";	
					}
			}
			//edit bank details
	   
	 public function edit_shop_details1($id){
	   		$condition=array(
				'id'=>$id,
				);

	$this->db->select('*');
	$this->db->from('shope');
	   
   	$this->db->where($condition);
	$query = $this->db->get();
	if($query->num_rows()==1){
		return $query->result();
		}else{
		return false;	
			}
   }
   
   //Check user id for shop details exist in database
   public function check_suid($data){
	   $condition = array(
	   'user_id' => $data['user_id'],
	   );
	   $this->db->select('*');
	$this->db->from('shope');
   	$this->db->where($condition);
	$query = $this->db->get();
	if($query->num_rows()==1){
		return $query->result();
		}else{
		return false;	
			}
	   }
   //edit done
   

public function edit_shop_details2($data){
	$conndition = array(
	'id' => $data['id'],
	);
	$this->db->where($conndition);
		$this->db->update('shope',$data);
	
		return true;

   }
//delete shop detail
public function delete_shop_details($id){
	   $this->db->where('id',$id);
	   $this->db->delete('shope');
	   return true;
	   }

}