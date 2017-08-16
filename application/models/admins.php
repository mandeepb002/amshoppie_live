<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class admins extends CI_Model {

    public function logins($data) {
        $this->db->select('id, mobile, email ');
        $this->db->from('register');
        $this->db->where($data);
        $query = $this->db->get();
        if ($query->num_rows() == 1) {
            return $query->result();
        } else {
            return false;
        }
    }

    public function user_view($limit, $offset) {
        $condition = array(
            'usertype' => '1',
        );
        $this->db->select('*');
        $this->db->where($condition);
        $this->db->from('register');
        $this->db->limit($limit, $offset);
        $query = $this->db->get();
        if ($query->num_rows() > 0) {

            return $query->result();
        } else {
            return false;
        }
    }

    public function user_view_num() {
        $condition = array(
            'usertype' => '1',
        );
        $this->db->select('*');
        $this->db->where($condition);
        $this->db->from('register');
        $query = $this->db->get();
        if ($query->num_rows() > 0) {
            return $query->num_rows();
        } else {
            return false;
        }
    }

    /*     * **** Blocked Users ******* */

    public function block_users($limit, $offset) {
        $condition = array(
            'usertype' => '1',
            'status' => '2',
        );
        $this->db->select('*');
        $this->db->where($condition);
        $this->db->from('register');
        $this->db->limit($limit, $offset);
        $query = $this->db->get();
        if ($query->num_rows() > 0) {
            return $query->result();
        } else {
            return false;
        }
    }

    /*     * **** Blocked Users ******* */
    /*     * **** Blocked Users Num******* */

    public function block_users_num() {
        $condition = array(
            'usertype' => '1',
            'status' => '2',
        );
        $this->db->select('*');
        $this->db->where($condition);
        $this->db->from('register');

        $query = $this->db->get();
        if ($query->num_rows() > 0) {
            return $query->num_rows();
        } else {
            return false;
        }
    }

    /*     * **** Blocked Users Num******* */

    /*     * **** Active Users ******* */

    public function active_users($limit, $offset) {
        $condition = array(
            'usertype' => '1',
            'status' => '1',
        );
        $this->db->select('*');
        $this->db->where($condition);
        $this->db->from('register');
        $this->db->limit($limit, $offset);
        $query = $this->db->get();
        if ($query->num_rows() > 0) {
            return $query->result();
        } else {
            return false;
        }
    }

    /*     * **** Active Users ******* */

    /*     * **** Active Users ******* */

    public function active_users_num() {
        $condition = array(
            'usertype' => '1',
            'status' => '1',
        );
        $this->db->select('*');
        $this->db->where($condition);
        $this->db->from('register');
        $query = $this->db->get();
        if ($query->num_rows() > 0) {
            return $query->num_rows();
        } else {
            return false;
        }
    }

    /*     * **** Active Users ******* */

    /*     * **** Pending Users Model******* */

    public function pending_users($limit, $offset) {
        $condition = array(
            'usertype' => '1',
            'status' => '3',
        );
        $this->db->select('*');
        $this->db->where($condition);
        $this->db->from('register');
        $this->db->limit($limit, $offset);
        $query = $this->db->get();
        if ($query->num_rows() > 0) {
            return $query->result();
        } else {
            return false;
        }
    }

    /*     * **** Pending Users Model End******* */

    /*     * **** Pending Users Model******* */

    public function pending_users_num() {
        $condition = array(
            'usertype' => '1',
            'status' => '3',
        );
        $this->db->select('*');
        $this->db->where($condition);
        $this->db->from('register');
        $query = $this->db->get();
        if ($query->num_rows() > 0) {
            return $query->num_rows();
        } else {
            return false;
        }
    }

    /*     * **** Pending Users Model End******* */

    /*     * **** Single View Model******* */

    public function single_view($id) {

        $this->db->select('*');
        $this->db->where($id);
        $this->db->from('register');
        $query = $this->db->get();
        if ($query->num_rows() > 0) {
            return $query->result();
        } else {
            return false;
        }
    }

    /*     * **** Single View Model End******* */

    /*     * **** Single view additional Model******* */

    public function single_view_add($id) {
        $ids = array(
            'user_id' => $id['id'],
        );
        $this->db->select('*');
        $this->db->where($ids);
        $this->db->from('additional_user_info');
        $query = $this->db->get();
        if ($query->num_rows() > 0) {
            return $query->result();
        } else {
            return false;
        }
    }

    /*     * **** Pending Users Model End******* */

    /*     * **** Edit User Model******* */

    public function edit_user_model($data) {
        $id = array(
            'id' => $data['id'],
        );
        $update = array(
            'email' => $data['email'],
        );

        $this->db->where($id);
        $this->db->update('register', $update);

        $this->db->select('*');
        $this->db->where('user_id', $data['id']);
        $this->db->from('additional_user_info');
        $query1 = $this->db->get();
        if ($query1->num_rows() == 1) {
            $update1 = array(
                'name' => $data['name'],
                'gender' => $data['gender'],
                'dob' => $data['dob'],
            );
            $this->db->where('user_id', $data['id']);
            $this->db->update('additional_user_info', $update1);
            return true;
        } else {
            $insert = array(
                'user_id' => $data['id'],
                'name' => $data['name'],
                'gender' => $data['gender'],
                'dob' => $data['dob'],
            );
            $this->db->insert('additional_user_info', $insert);
            return true;
        }
    }

    /*     * **** Edit Users Model End******* */

    /*     * **********Check Active User ********** */

    public function check_users_active() {
        $query = $this->db->get('register');
        if ($query->num_rows() > 0) {
            return $query->result();
        }
    }

    /*     * **********Check Active User ********** */

    /*     * **********Make User Active & Block Start ********** */

    public function make_acs($data) {
        $condition = array(
            'status' => $data['status'],
        );
        $this->db->where('id', $data['id']);

        $this->db->update('register', $condition);
        if ($this->db->affected_rows('register') == 1) {
            return true;
        }
    }

    /*     * **********Make User Active & Block End ********** */

    /*     * **********Total products added by unique user Start ********** */

    public function total_products($id) {
        $this->db->select('*');
        $this->db->where('user_id', $id['id']);
        $this->db->from('product');
        $query = $this->db->get();
        if ($query->num_rows() > 0) {
            return $query->num_rows();
        } else {
            return false;
        }
    }

    /*     * **********Total products added by unique user End ********** */

    /*     * **********Total products added by unique user Start ********** */

    public function total_orders($id) {
        $this->db->select('*');
        $this->db->where('user_id', $id['id']);
        $this->db->from('orders');
        $query = $this->db->get();
        if ($query->num_rows() > 0) {
            return $query->num_rows();
        } else {
            return false;
        }
    }

    public function grand_total($id) {

        $this->db->select_sum('grand_total');
        $this->db->from('orders');
        $this->db->where('user_id', $id['id']);
        $query = $this->db->get();
        return $query->row()->grand_total;

//        $this->db->select('sum(grand_total)');
//        $this->db->where('user_id', $id['id']);
//        $this->db->from('orders');
//        $query = $this->db->get();
//        print_r($query);
//        die;
//        if ($query->num_rows() > 0) {
//            return $query;
//        } else {
//            return false;
//        }
    }

    /*     * **********Total products added by unique user End ********** */

    /*     * ********** Manage Category Model Start ********** */

    public function add_cat($data) {
        $this->db->insert('categories', $data);
        if ($this->db->affected_rows() == true) {
            return true;
        } else {
            return false;
        }
    }

    /*     * **********Manage Category Model Start End********** */

    /*     * ********** Delete Category Model Start ********** */

    public function delete_cats($data) {
        $condition = array(
            'parent_id' => $data['id'],
        );
        $this->db->select('parent_id');
        $this->db->where($condition);
        $this->db->from('categories');
        $query = $this->db->get();
        if ($query->result() == true) {
            return false;
        } else {
            $this->db->delete('categories', array('cat_id' => $data['id']));
            return true;
        }
    }

    /*     * **********Delete Category Model Start End********** */

    /*     * ********** Edit Category Model Start ********** */

    public function get_cats() {
        $this->db->select('*');
        $this->db->where('cat_id', $_GET['id']);
        $this->db->from('categories');
        $query = $this->db->get();
        if ($query->num_rows() > 0) {
            return $query->result();
        }
    }

    /*     * **********Edit Category Model Start End********** */

    /*     * ********** hit cats Category Model Start ********** */

    public function hit_cats($data) {
        $this->db->where('cat_id', $_GET['id']);
        $this->db->update('categories', $data);
        echo $this->db->last_query();
        return true;
    }

    /*     * **********Edit Category Model Start End********** */

    /*     * ********** Additional user details Model Start ********** */

    public function add_details() {

        $this->db->select('*');
        $this->db->where('user_id', $this->session->userdata('id'));
        $this->db->from('additional_user_info');
        $query = $this->db->get();
        if ($query->num_rows() > 0) {

            return $query->result();
        } else {
            return false;
        }
    }
	public function view_admins($data){
		
        $this->db->select('*');
        $this->db->from('additional_user_info');
        $this->db->where('user_id',$data);
        $query = $this->db->get();
       // if($query->num_rows()>0){
            return $query->row();
		//}else{
			//return false;
		//}
	}
    // add hompgae data
    public function add_hompages($data) {
        $this->db->insert('category', $data);
        if ($this->db->affected_rows() == true) {
            return true;
        } else {
            return false;
        }
    }

    //image add
    public function add_images($images_array, $idd) {
        //echo "<pre>";print_r($_POST);
        $result = false;
        if (!empty($images_array)) {
            $i = 1;
            $main = 0;
            foreach ($images_array as $image) {
                $new_image = 'main_image' . $i;
                //echo $_POST[$new_image]."<br>";
                if (isset($_POST[$new_image]) && !empty($_POST[$new_image])) {
                    $main = 1;
                } else {
                    $main = 0;
                }
                $con = array(
                    'image' => $image,
                    'cate_id' => $idd,
                    'main_image' => $main,
                );
                if ($this->db->insert('category_images', $con)) {
                    $result = true;
                }
                //echo $this->db->last_query();echo "<br>"; 
                $i++;
            }
            //die;
        }
        if ($result) {
            return true;
        } else {
            return false;
        }
    }

    /*     * **********Additional user details Model End********** */

    /*     * ***************Insert Coupon************************ */

    public function add_coupons($data) {
        $this->db->insert('coupon', $data);
        if ($this->db->affected_rows() == true) {
            return true;
        } else {
            return false;
        }
    }

    /*     * ***************Insert Coupon************************ */

    /*     * ***************fetch all Coupon************************ */

    public function coupons_list() {
        $query = $this->db->get('coupon');
        if ($query->num_rows > 0) {
            return $query->result();
        } else {
            return false;
        }
    }

    /*     * ***************fetch all Coupon************************ */

    /*     * ***************fetch all Coupon************************ */

    public function get_coupons() {
        $this->db->select('*');
        $this->db->from('coupon');
        $this->db->where('id', $_GET['id']);
        $query = $this->db->get();
        if ($query->num_rows() > 0) {
            return $query->result();
        } else {
            return false;
        }
    }

    /*     * ***************fetch all Coupon************************ */

    /*     * ***************Delete Coupon  Start************************ */

    public function delete_coupons() {
        $this->db->where('id', $_GET['id']);
        $this->db->delete('coupon');
        if ($this->db->affected_rows('coupon') == true) {
            return true;
        } else {
            return false;
        }
    }

    /*     * ***************Delete Coupon End************************ */

    public function edit_coupons($data) {

        $this->db->where('id', $_GET['id']);
        $this->db->update('coupon', $data);
        if ($this->db->affected_rows() == true) {
            return true;
        } else {
            return false;
        }
    }

    public function add_users($data) {
        $this->db->insert('register', $data);
        if ($this->db->affected_rows() == true) {
            return true;
        } else {
            return false;
        }
    }

    //delete done
    public function delete_homepage_details($id) {
        $this->db->where('id', $id);
        $this->db->delete('category');
        return true;
    }

    //edit homepage details

    public function edit_homepage_details1($id) {
        $condition = array(
            'id' => $id,
        );

        $this->db->select('*');
        $this->db->from('category');
        $this->db->where($condition);
        $query = $this->db->get();
        if ($query->num_rows() == 1) {
            return $query->result();
        } else {
            return false;
        }
    }

    //edit done

    public function edit_homepage_details2($data, $id) {
        $this->db->where('id', $id);
        $this->db->update('category', $data);

        return true;
    }

//view homepage  

    public function homepages_list() {
        $query = $this->db->get('category');
        if ($query->num_rows > 0) {
            return $query->result();
        } else {
            return false;
        }
    }

    public function select_category() {
        $this->db->select('*');
        $this->db->from('category');

        if ($query = $this->db->get()) {
            return $query->result();
        } else {
            return "Data Not Available";
        }
    }

    //single homepage data
    public function single_homepage_details($id) {
        $condition = array(
            'id' => $id,
        );
        $this->db->select('*');
        $this->db->from('category');
        $this->db->where($condition);
        $query = $this->db->get();
        if ($query->num_rows() == 1) {
            return $query->row();
        } else {
            return "False";
        }
    }

    public function add_comissions($data) {
        $this->db->insert('comission_sale', $data);
        if ($this->db->affected_rows() == true) {
            return true;
        } else {
            return false;
        }
    }

    public function sale_comission() {
        $query = $this->db->get('comission_sale');
        if ($query->num_rows() > 0) {
            return $query->result();
        } else {
            return false;
        }
    }

    public function edit_comissions() {
        $this->db->select('*');
        $this->db->from('comission_sale');
        $this->db->where('id', $_GET['id']);
        $query = $this->db->get();
        if ($query->num_rows() > 0) {
            return $query->result();
        } else {
            return false;
        }
    }
	public function edit_comissions1($id) {
        $this->db->select('*');
        $this->db->from('comission_sale');
        $this->db->where('id', $id);
        $query = $this->db->get();
        if ($query->num_rows() > 0) {
            return $query->result();
        } else {
            return false;
        }
    }

    public function edit_comissions_hit($data) {
        $this->db->where('id', $_GET['id']);
        $this->db->update('comission_sale', $data);
        if ($this->db->affected_rows() > 0) {
            return true;
        } else {
            return false;
        }
    }

    public function del_coms() {
        $this->db->where('id', $_GET['id']);
        $this->db->delete('comission_sale');
        if ($this->db->affected_rows() > 0) {
            return true;
        } else {
            return false;
        }
    }

}
