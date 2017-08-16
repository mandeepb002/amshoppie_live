<?php
    class view_products extends CI_Model
    {
		
		public function s_products($limit, $offset ) {
			if(in_array($this->session->userdata('usertype'), array(3, 4))) {
				$condition = array(
				
					'status' => '1',
				);
			} else {
				$condition = array(
					'user_id' => $this->session->userdata('id'),
					'status' => '1',
				);
			}
			
			//print_r($condition);
			$this->db->select('*');
			$this->db->from('product');
			$this->db->where($condition);
			//$this->db->or_where($condition);
			$this->db->limit( $limit, $offset );
            $q = $this->db->get();
            if($q->num_rows() > 0)
            {
                return $q->result();
            }else{
				return false;
				}
            return array();
        }
		public function unapproved($limit, $offset ) {
			if(in_array($this->session->userdata('usertype'), array(3, 4))) {
				$condition = array(
				
					'status' => '7',
				);
			} else {
				$condition = array(
					'user_id' => $this->session->userdata('id'),
					'status' => '7',
				);
			}
			
			//print_r($condition);
			$this->db->select('*');
			$this->db->from('product');
			$this->db->where($condition);
			//$this->db->or_where($condition);
			$this->db->limit( $limit, $offset );
            $q = $this->db->get();
            if($q->num_rows() > 0)
            {
                return $q->result();
            }else{
				return false;
				}
            return array();
        }
		
		
		
		
		public function inactive_products() {
			$condition = array(
			'user_id' => $this->session->userdata('id'),
			'status' => '2',
			);
			$this->db->select('*');
			$this->db->from('product');
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
		
		
		public function show_details($id){
			$condition = array(
			'id' => $id,
			);
			$this->db->select('*');
			$this->db->from('product');
			$this->db->where($condition);
			$query = $this->db->get();
			if($query->num_rows()==1){
				return $query->result();
				}else{
				return "False";	
					}
			}
			public function edit_products($id) {
			$condition = array(
			'user_id' => $this->session->userdata('id'),
			);
			$this->db->select('id', $id);
			$this->db->from('product');
			$this->db->where($condition);
            $q = $this->db->get();
            if($q->num_rows() > 0)
            {
                return $q->result();
            }
            return array();
        }
		//activ pagination
		public function total_re(){
			$con = array(
			'user_id' => $this->session->userdata('id'),
			'status' => 1,
			);
			$this->db->select('*');
			$this->db->from('product');
			$this->db->where($con);
	
			$query = $this->db->get();
			return $query->num_rows();
			}
			
		    }
?>