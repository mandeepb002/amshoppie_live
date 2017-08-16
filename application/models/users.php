<?php

if (!defined('BASEPATH'))exit('No direct script access allowed');

class users extends CI_Model {

  public function register($data) {
	$this->db->insert('register',$data);

	$result = $this->db->get('register')->result();
   }
	
	public function register_users($data) 
	{
	$this->db->insert('register',$data);
	//prepare data for table 2
		$id = array(
	'user_id' => $this->db->insert_id(),
	);
	
//insert into table 2
		$this->db->insert('additional_user_info',$id);
	}
   
   //view page details
		public function view_pageses() {
			$this->db->select('*');
			$this->db->from('cms_pagges');
            $q = $this->db->get();
            if($q->num_rows() > 0)
            {
                return $q->result();
            }else{
				return false;
				}
            return array();
        }
		//total amount

			public function amount_total1(){
 $query = $this->db->query("SELECT SUM( total_amount ) AS amount
FROM orders ");
             return $query->row();
}
		public function amount_total2($id){
			$condition=array(
				'user_id'=>$id,
				);
		$this->db->select('total_amount');
		$this->db->from('orders');
		$this->db->where($condition);
		$query = $this->db->get();
		if ($query->num_rows() > 0) {
		return $query->row();
		} else {
		return false;
		}
        
}

		//delete  page done
			  public function delete_pages_details($id){
	   $this->db->where('id',$id);
	   $this->db->delete('cms_pagges');
	   return true;
	   }
		 //edit page details
	   
	 public function edit_page_details1($id){
	   		$condition=array(
				'id'=>$id,
				);

	$this->db->select('*');
	$this->db->from('cms_pagges');   
   	$this->db->where($condition);
	$query = $this->db->get();
	if($query->num_rows()==1){
		return $query->result();
		}else{
		return false;	
			}
   }
   //edit page done

public function edit_page_details2($data,$id){
		$this->db->where('id', $id);
		$this->db->update('cms_pagges', $data);

	echo $this->db->last_query();
	
		return true;

   }

		
		
   // banner insert details
   public function added_bnr($data) {
	$this->db->insert('banner',$data);

	$result = $this->db->get('banner')->result();
	return true;
   }
   // csm data insert details
   public function cms_pagges1($data) {
	$this->db->insert('cms_pagges',$data);

	$result = $this->db->get('cms_pagges')->result();
	return true;
   }
   
   //socail
   	public function social1($data){
		$this->db->select('*');
		$this->db->from('social');
		$this->db->where('user_id',$data['user_id']);
		$query = $this->db->get();
		if($query->num_rows()>0){
			$this->db->update('social',$data);
			$this->db->where('user_id',$data['user_id']);
			if($this->db->affected_rows()==true){
				return true;
				}else{
				return false;	
					}
			}else{
			$this->db->insert('social',$data);

			
			if($this->db->affected_rows()==true){
				return true;
				}else{
				return false;	
					}
					}
			}
			
   
   public function check_row($data){
	   //$condition = "mobile =" ."'". $data['mobile'] . "' AND " . "status ="."'". '3' . "'";
	   $condition = "mobile =" ."'". $data['mobile'] . "'";
	   $this->db->select('*');
		$this->db->from('register');
		$this->db->where($condition);
		$query = $this->db->get();
		if($query->num_rows()==1){
		return $query->num_rows();
		}else{
		return false;	
			}
	   }
	   
  public function select_mobile($data){
	$condition = "mobile =" ."'". $data['mobile'] . "'";
	$this->db->select('*');
	$this->db->from('register');
	$this->db->where($condition);
	$query = $this->db->get();
	
	if($query->num_rows()==1){
		return $query->result();
		}else{
		return false;	
			}
	  }
	
	
	
	  
	    public function mobile_data($mobile){
	//$condition = "mobile =" ."'". $data['mobile'] . "'";
	$this->db->select('*');
	$this->db->from('register');
	$this->db->where('mobile',$mobile);
	$query = $this->db->get();
	return $query->row();
		
	  }
	  
	  
	  
	  
	  
    public function otp_match($data){
	$condition = "mobile =" ."'". $data['mobile'] . "'AND" . "otp=" . "'" . $data['otp'] . "'";
	$this->db->select('*');
	$this->db->from('register');
	$this->db->where($condition);
	$query = $this->db->get();
	
	if($query->num_rows()==1){
		return true;
		}else{
		return false;	
			}
	  }
	  //track order
			public function track_orders() {
            $query = $this->db->get('orders');
			
            if($query->num_rows() > 0)
            {
                return $query->result();
            }else{
				return false;
				}
            return array();
        }
	//email record
		public function export_order($data) {
            $condition = "DATE BETWEEN '".$data['start']." 00:00:00' and '".$data['end']." 23:59:59'" ;
			
			$this->db->select('*');
			$this->db->from('register');
			$this->db->where($condition);
			$query = $this->db->get();
			
            if($query->num_rows() > 0)
            {
                return $query->result();
            }else{
				return false;
				}
            return array();
        }
	  
	  //single track order
	  public function show_tracks($id){
			$condition = array(
			'id' => $id,
			);
			$this->db->select('*');
			$this->db->from('orders');
			$this->db->where($condition);
			$query = $this->db->get();
			if($query->num_rows()==1){
				return $query->result();
				}else{
				return False;	
					}
			}
			//single track cancel
	  public function show_cancel_track($id){
			$condition = array(
			'id' => $id,
			);
			$this->db->select('*');
			$this->db->from('orders');
			$this->db->where($condition);
			$query = $this->db->get();
			if($query->num_rows()==1){
				return $query->result();
				}else{
				return False;	
					}
			}
			//single track shipped
	  public function show_shipped($id){
			$condition = array(
			'id' => $id,
			);
			$this->db->select('*');
			$this->db->from('orders');
			$this->db->where($condition);
			$query = $this->db->get();
			if($query->num_rows()==1){
				return $query->result();
				}else{
				return False;	
					}
			}
			//track rto
			public function track_rto(){
			$condition = array(
			'user_id' => $this->session->userdata('id'),
			'order_status' => '4',
			);
			$this->db->select('*');
			$this->db->where($condition);
			$this->db->from('orders');
			$query = $this->db->get();
			$this->db->last_query();
			if($query->num_rows()==1){
				return $query->result();
				}else{
				return False;	
					}
			}
		
		//track cancel
			public function track_cancel(){
			$condition = array(
			'user_id' => $this->session->userdata('id'),
			'order_status' => '6',
			);
			$this->db->select('*');
			$this->db->where($condition);
			$this->db->from('orders');
			$query = $this->db->get();
			$this->db->last_query();
			if($query->num_rows()==1){
				return $query->result();
				}else{
				return False;	
					}
			}
		
		//track shipped
		public function track_shipped(){
			$condition = array(
			'user_id' => $this->session->userdata('id'),
			'order_status' => '2',
			);
			$this->db->select('*');
			$this->db->where($condition);
			$this->db->from('orders');
			$query = $this->db->get();
			$this->db->last_query();
			if($query->num_rows()==1){
				return $query->result();
				}else{
				return False;	
					}
			}
			//single rto
	  public function show_rto($id){
			$condition = array(
			'id' => $id,
			);
			$this->db->select('*');
			$this->db->from('orders');
			$this->db->where($condition);
			$query = $this->db->get();
			if($query->num_rows()==1){
				return $query->result();
				}else{
				return False;	
					}
			}
			//single track deliverd
	  public function show_deliverd($id){
			$condition = array(
			'id' => $id,
			);
			$this->db->select('*');
			$this->db->from('orders');
			$this->db->where($condition);
			$query = $this->db->get();
			if($query->num_rows()==1){
				return $query->result();
				}else{
				return False;	
					}
			}
	//track deliverd
		public function track_deliverd(){
			$condition = array(
			'user_id' => $this->session->userdata('id'),
			'order_status' => '3',
			);
			$this->db->select('*');
			$this->db->where($condition);
			$this->db->from('orders');
			$query = $this->db->get();
			$this->db->last_query();
			if($query->num_rows()==1){
				return $query->result();
				}else{
				return False;	
					}
			}
	
		
   public function verify_otps($data){
	//$condition = "id =" ."'". $data['id'] . "' AND " . "otp ="."'". $data['otp'] . "'";
	$condition=array(
   'otp'=>$data['otp'],
   'id' =>$data['id'],
	);
	$this->db->select('*');
	$this->db->from('register');
	$this->db->where($condition);
	$query = $this->db->get();
	if($query->num_rows() == 1){
		return $query->result();
		}else{
			return false;
			}
	   }
	public function match_otps($data){
	$condition = "mobile =" ."'". $data['mobile'] . "' AND " . "otp ="."'". $data['otp'] . "'";
	$this->db->select('*');
	$this->db->from('register');
	$this->db->where($condition);
	$query = $this->db->get();
	if($query->num_rows() == 1){
		return $query->result();
		}else{
			return false;
			}
	   }
	   //additoanl_details
	    public function addition_details($data) {
	$this->db->insert('additional_user_info',$data);

	$result = $this->db->get('additional_user_info')->result();
	if($result){
		return "true";
		}else{
			return "false";
			}
   }
public function login($data){
	$condition = "mobile =" . "'" . $data['mobile'] . "' AND " . "password =" . "'" . $data['password'] . "'";
$this->db->select('*');
$this->db->from('register');
$this->db->where($condition);//array('email' => $data['email'], 'password' => $data['password']));
$query = $this->db->get();
/*echo $this->db->last_query();
die();*/ 
if ($query->num_rows() == 1) {
return $query->result();
//return $query->row()->id ;

//return $query->row();
} else {
return false;
}

}

public function fetch_userdetails($dats){
	$condition = "user_id =" . "'" . $dats[0]->id. "'" ;

$this->db->select('*');
$this->db->from('additional_user_info');
$this->db->where($condition);//array('email' => $data['email'], 'password' => $data['password']));
$query = $this->db->get();

if ($query->num_rows() == 1) {
return $query->result();

//return $query->row()->id ;

//return $query->row();
} else {
return false;
}

}

		public function change_password($data){
			$condition = array(
			'id' => $data['id'],
			'password' => $data['old_password'],
			);
		$this->db->select('id');
		$this->db->from('register');
		$this->db->where($condition);
		$query = $this->db->get();
		/*echo $this->db->last_query();
		die(); */
		if ($query->num_rows() == 1) {
		return true;
		} else {
		return false;
		}
			}
		
		public function update_password($data){
		$data1 = array(
			'password' => $data['password']
		);
		$this->db->where('id', $data['id']);
		$this->db->update('register', $data1);
		return true;
		}
		//warehouse details
		public function warehouse_detail($data){
			$this->db->insert('warehouse_details',$data);

	if($result = $this->db->get('warehouse_details')->result()){
		return true;
		}else{
				return false;
			}
			
}
public function select_id_warehouse($data){
				$this->db->select('id');
				$this->db->from('warehouse_details');
				$this->db->where(array('user_id' => $data['user_id']));
				$query = $this->db->get();
				if ($query->num_rows() == 1) {
				return true;
				} else {
				return false;
				}
				}
				public function update_warehouse($data){
		$data5 = array(
			'warehouse_name' => $data['warehouse_name'],
			'address' => $data['address'],
		    'city' => $data['city'],
			'state' => $data['state'],
			'pincode' => $data['pincode'],
		    'cst' => $data['cst'],
			'vat' => $data['vat'],
		);
		$this->db->where('user_id', $data['user_id']);
		$this->db->update('warehouse_details', $data5);
		return true;
		}
			
		//kyc details
		
		public function kyc_details($data){
			$this->db->insert('kyc_details',$data);

	if($result = $this->db->get('kyc_details')->result()){
		return true;
		}else{
				return false;
			}
			
}
public function select_id_kyc($data){
				$this->db->select('id');
				$this->db->from('kyc_details');
				$this->db->where(array('user_id' => $data['user_id']));
				$query = $this->db->get();
				if ($query->num_rows() == 1) {
				return true;
				} else {
				return false;
				}
				}
				public function update_kyc($data){
		$data4 = array(
			'pan_card_no' => $data['pan_card_no'],
			'vat_no' => $data['vat_no'],
			
		);
		$this->db->where('user_id', $data['user_id']);
		$this->db->update('kyc_details', $data4);
		return true;
		}
		
		
		//alternate address
		public function alter_address($data){
			$this->db->insert('alternate_details',$data);

	if($result = $this->db->get('alternate_details')->result()){
		return true;
		}else{
				return false;
			}
			
}
public function select_id_alter($data){
				$this->db->select('id');
				$this->db->from('alternate_details');
				$this->db->where(array('user_id' => $data['user_id']));
				$query = $this->db->get();
				if ($query->num_rows() == 1) {
				return true;
				} else {
				return false;
				}
				}
				public function update_alter_address($data){
		$data3 = array(
			'name' => $data['name'],
			'email_id' => $data['email_id'],
			'mobile_no' => $data['mobile_no'],
			'additional_info' => $data['additional_info'],
		);
		$this->db->where('user_id', $data['user_id']);
		$this->db->update('alternate_details', $data3);
		return true;
		}			
		
		
		
		//address details
		
		public function address_details1($data){
			$this->db->insert('address_details',$data);

	if($result = $this->db->get('address_details')->result()){
		return true;
		}else{
				return false;
			}
			
}
public function select_id_address($data){
				$this->db->select('id');
				$this->db->from('address_details');
				$this->db->where(array('user_id' => $data['user_id']));
				$query = $this->db->get();
				if ($query->num_rows() == 1) {
				return true;
				} else {
				return false;
				}
				}
				public function update_address($data){
		$data2 = array(
			'address' => $data['address'],
			'city' => $data['city'],
			'state' => $data['state'],
			'pincode' => $data['pincode'],
		);
		$this->db->where('user_id', $data['user_id']);
		$this->db->update('address_details', $data2);
		return true;
		}		
			
		//view bank details
		public function view_bank_details() {
			//$condition = array(
			//'user_id' => $this->session->userdata('id'),
			//;
			$this->db->select('*');
			$this->db->from('bank_details');
			//$this->db->where($condition);
            $q = $this->db->get();
            if($q->num_rows() > 0)
            {
                return $q->result();
            }else{
				return false;
				}
            return array();
        }
		//single bank details show
		public function single_bank_details($id){
			$condition = array(
			'id' => $id,
			);
			$this->db->select('*');
			$this->db->from('bank_details');
			$this->db->where($condition);
			$query = $this->db->get();
			if($query->num_rows()==1){
				return $query->result();
				}else{
				return "False";	
					}
			}
		
		
		//bank details
		
		public function bank_details($data){
			$this->db->insert('bank_details',$data);

			
			if($result = $this->db->get('bank_details')->result()){
				return true;
				}else{
				return false;	
					}
			}
			//delete done
			  public function delete_bank_details($id){
	   $this->db->where('id',$id);
	   $this->db->delete('bank_details');
	   return true;
	   }
	   //edit bank details
	   
	 public function edit_bank_details1($id){
	   		$condition=array(
				'id'=>$id,
				);

	$this->db->select('*');
	$this->db->from('bank_details');   
   	$this->db->where($condition);
	$query = $this->db->get();
	if($query->num_rows()==1){
		return $query->result();
		}else{
		return false;	
			}
   }
   //edit done
public function edit_bank_details2($data,$id){
		$this->db->where('id', $id);
		$this->db->update('bank_details', $data);

	//echo $this->db->last_query();die;
		return true;

   }


	   //inactive delete product
	   public function delete_inactive_products($id){
	   $this->db->where('id',$id);
	   $this->db->delete('product');
	   return true;
	   }

		public function select_id($data){
				$this->db->select('id');
				$this->db->from('bank_details');
				$this->db->where(array('user_id' => $data['user_id']));
				$query = $this->db->get();
				/*echo $this->db->last_query();
				die(); */
				if ($query->num_rows() == 1) {
				return true;
				} else {
				return false;
				}
				}
				
		public function update_bankd($data){
		$data1 = array(
			'benf_name' => $data['benf_name'],
			'ban' => $data['ban'],
			'ifsc' => $data['ifsc'],
			'bank_name' => $data['bank_name'],
			'branch_name' => $data['branch_name'],
		);
		$this->db->where('user_id', $data['user_id']);
		$this->db->update('bank_details', $data1);
		return true;
		}			
		
		public function get_user_info($idss){
			$condition = array(
			'id'=>$idss,
			); 
			$this->db->select('*');
			$this->db->from('register');
			$this->db->where($condition); 
			$query = $this->db->get();
			if ($query->num_rows() == 1) {
			return $query->result();
			}			
			}
		public function bank_detailss($data){
			$this->db->insert('bank_details',$data);

			$result = $this->db->get('register')->result();
			
			}	
		public function update_deviceid($t){
			$condition = array(
			'id'=>$t['id'],
			); 
			$de_id = array(
			'device_id' => $t['device_id'],
			);
			$this->db->where($condition);
		$this->db->update('register', $de_id);
		
			}
			
		public function check_udetail($data){
			$this->db->select('id');
			$this->db->from('additional_user_info');
			$this->db->where('user_id',$data['user_id']);
			$query = $this->db->get();
			
			if($query->num_rows()==1){
			return true;
			}else{
			return false;	
				}		
			}	
			//view coupn details
		public function view_participate() {
			$this->db->select('*');
			$this->db->from('coupon');
            $q = $this->db->get();
            if($q->num_rows() > 0)
            {
                return $q->result();
            }else{
				return false;
				}
            return array();
        }
//view banner
		public function view_banner() {
			$this->db->select('*');
			$this->db->from('banner');
            $q = $this->db->get();
            if($q->num_rows() > 0)
            {
                return $q->result();
            }else{
				return false;
				}
            return array();
        }
		
		//delete  banner done
			  public function delete_banner_details($id){
	   $this->db->where('id',$id);
	   $this->db->delete('banner');
	   return true;
	   }
	   //edit banner details
	   
	 public function edit_banners_details1($id){
	   		$condition=array(
				'id'=>$id,
				);

	$this->db->select('*');
	$this->db->from('banner');   
   	$this->db->where($condition);
	$query = $this->db->get();
	if($query->num_rows()==1){
		return $query->result();
		}else{
		return false;	
			}
   }
   //edit banner done

public function edit_banners_details2($data,$id){
		$this->db->where('id', $id);
		$this->db->update('banner', $data);

	//echo $this->db->last_query();die;
		return true;

   }

		//update detail	
		public function update_udetails($data){
			$condition = array(
			'user_id'=>$data['user_id'],
			); 
			
			$this->db->select('*');
			$this->db->where($condition);
			$this->db->update('additional_user_info', $data);
			
			return true;			
			}	
		public function update_reguser($data){
			$condition = array(
			'id'=>$data['id'],
			); 
			$sata = array(
			'email' => $data['email'],
			);
			
			$this->db->select('*');
			$this->db->where($condition);
			$this->db->update('register', $sata);
			return true;			
			}	
			
			
		public function update_udetailss($data){
			$condition = array(
			'user_id'=>$data['id'],
			); 
			$pata = array(
			'name' => $data['name'],
			'gender' => $data['gender'],
			'dob' => $data['dob'],
			);
			$this->db->select('*');
			$this->db->where($condition);
			$this->db->update('additional_user_info', $pata);
			
			return true;			
			}	
		public function get_otp($data){
			$condition = array(
			'id'=>$data['id'],
			); 
				$this->db->select('*');
				$this->db->from('register');
				$this->db->where($condition);
				$query = $this->db->get();
				if ($query->num_rows() == 1) {
				return $query->result();
				} else {
				return false;
				}
			}	
			
		public function update_reguserr($data){
			$condition = array(
			'id'=>$data['id'],
			); 
			$sata = array(
			'mobile' => $data['mobile'],
			'email' => $data['email'],
			);
			
			$this->db->select('*');
			$this->db->where($condition);
			$this->db->update('register', $sata);
			return true;			
			}	
		public function check_mobile($data){
			$condition = array(
			'mobile'=>$data['mobile'],
			); 
		
				$this->db->select('*');
				$this->db->from('register');
				$this->db->where($condition);
				$query = $this->db->get();
				if ($query->num_rows() == 1) {
				return true;
				} else {
				return false;
				}	
		}	
	//COuntry List Start
		public function country_lists(){
		$this->db->select('*');
		$this->db->from('countries');
		$query = $this->db->get();
		//echo $this->db->last_query();
		//print_r($query);
		//die();
		if ($query->num_rows() == true) {
				return $query->result();
				}	
		}
		//action pending(sale)
		public function action_view_pending(){
			$condition = array(
			'user_id' => $this->session->userdata('id'),
			'order_status' => '7',
			);
			$this->db->select('*');
			$this->db->from('orders');
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
		//single details show action pending
		public function show_action_details($id){
			$condition = array(
			'id' => $id,
			);
			$this->db->select('*');
			$this->db->from('orders');
			$this->db->where($condition);
			$query = $this->db->get();
			if($query->num_rows()==1){
				return $query->result();
				}else{
				return "False";	
					}
			}
				
	//State List Start
		public function state_lists($data){
		$this->db->select('*');
		$this->db->from('states');
		$this->db->where($data);
		$query = $this->db->get();
		//echo $this->db->last_query();
		//print_r($query);
		//die();
		if ($query->num_rows() == true) {
				return $query->result();
				}else{
				return false;	
					}	
		}
	
	//City List Start
		public function city_lists($data){
		$this->db->select('*');
		$this->db->from('cities');
		$this->db->where($data);
		$query = $this->db->get();
		if ($query->num_rows() == true) {
				return $query->result();
				}else{
				return false;	
					}	
		}
		
		/*****************Insert Address*******/
		public function delivery_addresss($data){
			$this->db->insert('delivery_address',$data);
			if($this->db->affected_rows()==1){
			return true;
			}else{
				return false;
				}
			}
		//check delivery address start		
		public function check_del_address($data){
			$this->db->select('id');
			$this->db->from('delivery_address');
			$this->db->where('user_id', $data['user_id']);
			$query = $this->db->get();
			if($query->num_rows()==1){
				return true;
				}else{
				return false;	
					}
			}
		//check delivery address end
		
		//Update delivery address start		
		public function update_del_address($data){
			$condition = array(
			'user_id'=>$data['user_id'],
			); 
			$this->db->select('*');
			$this->db->where($condition);
			$this->db->update('delivery_address', $data);
			return true;
			}
		//Update delivery address end
		
		public function uploads($data){
			$this->db->insert('profile_image',$data);
			
			return true;
			}
			
		//
		// public function update_imgs($data){
			// $con = array(
			 //'image' => $data['image'],
			 //);
			 //$this->db->select('*');
			 //$this->db->from('profile_image');
			 //$this->db->where('user_id', $data['user_id']);
			 //$query = $this->db->get();
			 //if($query->num_rows()>0){
				//if(unlink('uploads/'.$query->result()[0]->image)){
					//
					 //$this->db->where('user_id', $data['user_id']);
					//$this->db->update('profile_image', $con);
					//if($this->db->affected_rows()==true){
				//		return true;
					//}else{
						//return false;
					//}
			//	}
			 //}
			 
	//	 }
		public function fetch_pimages($data){
		$this->db->select('*');
		$this->db->where($data);
		$this->db->from('profile_image');
		$query = $this->db->get();
		if($query->num_rows() > 0){
			return $query->result();
			}else{
			return false;	
			}
			}
		
		
		
		public function add_addresss($data){
			$this->db->insert('add_address',$data);
			if($this->db->affected_rows()==true){
				return true;
			}else{
				return false;
			}
		}
		
		/********* view add address*********/
		
		public function add_view(){
			$query=$this->db->get('add_address');
		    return $query->result();
		}
		
		/********* close view add address*********/
		public function delete_address($data){
			$this->db->where('id',$data['id']);
			$this->db->delete('add_address',$data);
			return true;
		}
		
		public function edit_views($id){
	   		$condition=array(
				'id'=>$id,
				);
			$this->db->select('*');
			$this->db->from('add_address');   
			$this->db->where($condition);
			$query = $this->db->get();
			if($query->num_rows()==1){
			return $query->result();
			}else{
			return false;	
				}
			}
			
		public function edit_update($data){
	   	$condition=array(
				'id'=>$data['id'],
				);
		$this->db->where($condition);
		$query = $this->db->update('add_address',$data);
		if($this->db->affected_rows()==true){
		return $query;
		}else{
		return false;	
			}
			}
		

		//public function edit_views($data){
		//$this->db->select('*');
		//$this->db->from('add_address');
		//$this->db->where('id',$data['id']);
		//$query = $this->db->get();
		//return true;
		//}

		public function total_registered(){
			$this->db->select('*');
            $this->db->from('register');
            $this->db->where('usertype',1);
            $query = $this->db->get();
            if($query->num_rows()>0){
            	return $query->num_rows();
			}else{
            	return false;
			}
		}

    public function total_blocked(){
		    $condition = array(
		        'usertype'  =>  1,
                'status'    =>  2,
            );
        $this->db->select('*');
        $this->db->from('register');
        $this->db->where($condition);
        $query = $this->db->get();
        if($query->num_rows()>0){
            return $query->num_rows();
        }else{
            return false;
        }
    }

    public function total_active(){
        $condition = array(
            'usertype'  =>  1,
            'status'    =>  1,
        );
        $this->db->select('*');
        $this->db->from('register');
        $this->db->where($condition);
        $query = $this->db->get();
        if($query->num_rows()>0){
            return $query->num_rows();
        }else{
            return false;
        }
    }

    public function total_pending(){
        $condition = array(
            'usertype'  =>  1,
            'status'    =>  3,
        );
        $this->db->select('*');
        $this->db->from('register');
        $this->db->where($condition);
        $query = $this->db->get();
        if($query->num_rows()>0){
            return $query->num_rows();
        }else{
            return false;
        }
    }

    public function total_seller(){
        $condition = array(
            'usertype'  =>  2,
        );
        $this->db->select('*');
        $this->db->from('register');
        $this->db->where($condition);
        $query = $this->db->get();
        if($query->num_rows()>0){
            return $query->num_rows();
        }else{
            return false;
        }
    }


    public function total_blocked_seller(){
        $condition = array(
            'usertype'  =>  2,
            'status' => 2,
        );
        $this->db->select('*');
        $this->db->from('register');
        $this->db->where($condition);
        $query = $this->db->get();
        if($query->num_rows()>0){
            return $query->num_rows();
        }else{
            return false;
        }
    }

    public function total_active_seller(){
        $condition = array(
            'usertype'  =>  2,
            'status' => 1,
        );
        $this->db->select('*');
        $this->db->from('register');
        $this->db->where($condition);
        $query = $this->db->get();
        if($query->num_rows()>0){
            return $query->num_rows();
        }else{
            return false;
        }
    }

    public function total_pending_seller(){
        $condition = array(
            'usertype'  =>  2,
            'status' => 3,
        );
        $this->db->select('*');
        $this->db->from('register');
        $this->db->where($condition);
        $query = $this->db->get();
        if($query->num_rows()>0){
            return $query->num_rows();
        }else{
            return false;
        }
    }

    public function total_sub_a(){
        $condition = array(
            'usertype'  =>  4,

        );
        $this->db->select('*');
        $this->db->from('register');
        $this->db->where($condition);
        $query = $this->db->get();
        if($query->num_rows()>0){
            return $query->num_rows();
        }else{
            return false;
        }
    }

    public function total_product(){

        $this->db->select('*');
        $this->db->from('product');
        $query = $this->db->get();
        if($query->num_rows()>0){
            return $query->num_rows();
        }else{
            return false;
        }
    }
	
	public function total_product1($data){
		$condition=array(
			'user_id'=>$data,
		);
		
        $this->db->select('*');
        $this->db->from('product');
		$this->db->where($condition);
        $query = $this->db->get();
        if($query->num_rows()>0){
            return $query->num_rows();
        }else{
            return false;
        }
    }
	
	public function bank_total(){

        $this->db->select('*');
        $this->db->from('bank_details');
        $query = $this->db->get();
        if($query->num_rows()>0){
            return $query->num_rows();
        }else{
            return false;
        }
    }
	public function bank_total1($data){
		$condition=array(
			'user_id'=>$data,
		);
        $this->db->select('*');
        $this->db->from('bank_details');
		$this->db->where($condition);
        $query = $this->db->get();
		
        if($query->num_rows()>0){
            return $query->num_rows();
        }else{
            return false;
        }
    }
	
	  public function view_editprofile(){
		  $id = $this->session->userdata('id');
		$q = $this->db->query(" SELECT * FROM register AS r LEFT JOIN additional_user_info AS a ON(r.id = a.user_id) where r.id=$id");
        if($q->num_rows()>0){
            return $q->result();
        }else{
            return false;
        }
    }

		
	public function edit_profile_user($data){
			//echo '<pre>';
			//print_r($data);
			//die();
			$name=$data['name'];
			$lastname=$data['lastname'];
			$bio=$data['bio'];
			$dob=$data['dob'];
			$gender=$data['gender'];
			$email=$data['email'];
			$password=$data['password'];
			$id=$data['id'];
			$city=$data['city'];
			$this->db->query("UPDATE additional_user_info t1 
						JOIN register t2 ON (t1.user_id = t2.id) 
						SET t1.name = '$name', 
						t1.lastname = '$lastname', 
						t1.bio = '$bio', 
						t1.dob = '$dob', 
						t1.gender = '$gender', 
						t1.city = '$city', 
						t2.email = '$email'
						WHERE t1.user_id = '$id'");
			if($this->db->affected_rows() == true){
				return true;
			}else{
				return false;
			}
		}
	public function check_subscribe_user(){
		$condition = array(
		'user_id'=>$this->session->userdata('id'),
		);
		$this->db->select('*');
		$this->db->from('subscribe_comission');
		$this->db->where($condition);
		$query = $this->db->get();
		if($query->num_rows()>0){ 
			return true;
		}else{
			return false;
		}
		
	}
		/*public function edit_profile_user($data){
	   	$condition=array(
				'user_id'=>$data['id'],
				);
		$this->db->where($condition);
		$query = $this->db->update('additional_user_info',$data);
		if($this->db->affected_rows()==true){
		return true;
		}else{
		return false;	
			}
			}*/
}