<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class admin extends MS_Controller {

    public function index()
    {

/*        $this->load->view('admin/header');
        $this->load->view('seller/nav');
        $this->load->view('admin/index');
        $this->load->view('admin/footer');*/
    if($this->session->userdata('id')==true){
        redirect(base_url('seller'));
    }else{
        redirect(base_url('admin/login'));
    }
    }

    /*********Loin View Start********/
    public function login(){
        $this->load->view('admin/header');
        $this->load->view('seller/login');
        $this->load->view('admin/footer');
    }
    /***********Login View End*********/

    /***********Login Action Start*********/
    public function logina(){
        $this->load->library('form_validation');
        $this->form_validation->set_rules('mobile', 'Mobile', 'trim|required');
        $this->form_validation->set_rules('password', 'Password', 'trim|required');
        $this->form_validation->set_rules('password');
        if ($this->form_validation->run() == TRUE)
        {
            $data = array(
                'mobile'	=>	$this->input->post('mobile'),
                'password'	=>	md5($this->input->post('password')),
                'usertype' =>  '3',
            );

            $this->load->model('admins');

            $fdata=$this->admins->logins($data);
            if($fdata==true){
                $see = array(
                    'id' => $fdata[0]->id,
                    'mobile' => $fdata[0]->mobile,
                    'email' =>	$fdata[0]->email,
                );
                $this->session->set_userdata($see);
                //echo '<pre>'; print_r($this->session->userdata('id'));exit;
                if($this->session->userdata('id')==true){
                    $url=base_url().'admin';
                    redirect($url);
                }else{
                    $url=base_url().'admin/login';
                    redirect($url);
                }

            }else{
                $url = base_url().'admin/login?msg=Please enter valid Password';
                redirect($url);
            }
        }

    }
    /***********Login Action End*********/

    /***********Logout Start*********/
    public function logout(){
        $this->session->unset_userdata('id');
        $this->session->sess_destroy();
        if($this->session->userdata('id')==true){
            $url=base_url().'admin';
        }else{
            $url=base_url().'admin/login';
            redirect($url);
        }
    }

    /***********Logout End*********/

    /***********Total Users View Start*********/
    public function user(){
        $this->load->model('admins');
        $this->load->library('pagination');
        $config = array(
            'base_url' => base_url('admin/user'),
            'per_page' => 10,
            'total_rows' => $this->admins->user_view_num(),
            'full_tag_open' => "<ul class='pagination'>",
            'full_tag_close' => "</ul>",
            'next_tag_open' => '<li>',
            'next_tag_close' => '</li>',
            'prev_tag_open' => '<li>',
            'prev_tag_close' => '</li>',
            'num_tag_open' => '<li>',
            'num_tag_close' => '</li>',
            'cur_tag_open' => '<li class="active"><a>',
            'cur_tag_close' => '</a></li>',
        );
        $this->pagination->initialize($config);

        $this->load->view('seller/header');

        $this->load->view('seller/nav');
        $data['records'] = $this->admins->user_view($config['per_page'], $this->uri->segment(3));
        $data['record'] = $this->admins->check_users_active();
        $this->load->view('admin/user/users',$data);
        $this->load->view('admin/footer');
    }

    /*********Total Users View End***********/

    /***********Total Blocked Users View Start*********/
    public function block_user(){
        $this->load->model('admins');
        $this->load->library('pagination');
        $config = array(
            'base_url' => base_url('admin/block_user'),
            'per_page' => 10,
            'total_rows' => $this->admins->block_users_num(),
            'full_tag_open' => "<ul class='pagination'>",
            'full_tag_close' => "</ul>",
            'next_tag_open' => '<li>',
            'next_tag_close' => '</li>',
            'prev_tag_open' => '<li>',
            'prev_tag_close' => '</li>',
            'num_tag_open' => '<li>',
            'num_tag_close' => '</li>',
            'cur_tag_open' => '<li class="active"><a>',
            'cur_tag_close' => '</a></li>',
        );
        $this->load->view('seller/header');
        $this->pagination->initialize($config);

        $this->load->view('seller/nav');
        $data['records'] = $this->admins->block_users($config['per_page'], $this->uri->segment(3));
        $this->load->view('admin/user/users',$data);
        $this->load->view('admin/footer');
    }

    /*********Total Blocked Users View End***********/

    /***********Total Active Users View Start*********/
    public function active_user(){
        $this->load->model('admins');
        $this->load->library('pagination');
        $config = array(
            'base_url' => base_url('admin/active_user'),
            'per_page' => 10,
            'total_rows' => $this->admins->active_users_num(),
            'full_tag_open' => "<ul class='pagination'>",
            'full_tag_close' => "</ul>",
            'next_tag_open' => '<li>',
            'next_tag_close' => '</li>',
            'prev_tag_open' => '<li>',
            'prev_tag_close' => '</li>',
            'num_tag_open' => '<li>',
            'num_tag_close' => '</li>',
            'cur_tag_open' => '<li class="active"><a>',
            'cur_tag_close' => '</a></li>',
        );
        $this->load->view('seller/header');
        $this->pagination->initialize($config);
        $this->load->view('seller/nav');
        $data['records'] = $this->admins->active_users($config['per_page'], $this->uri->segment(3));
        $this->load->view('admin/user/users',$data);
        $this->load->view('admin/footer');
    }

    /*********Total Active Users View End***********/

    /***********Total Pending Users View Start*********/
    public function pending_user(){
        $this->load->model('admins');
        $this->load->library('pagination');
        $config = array(
            'base_url' => base_url('admin/pending_user'),
            'per_page' => 10,
            'total_rows' => $this->admins->pending_users_num(),
            'full_tag_open' => "<ul class='pagination'>",
            'full_tag_close' => "</ul>",
            'next_tag_open' => '<li>',
            'next_tag_close' => '</li>',
            'prev_tag_open' => '<li>',
            'prev_tag_close' => '</li>',
            'num_tag_open' => '<li>',
            'num_tag_close' => '</li>',
            'cur_tag_open' => '<li class="active"><a>',
            'cur_tag_close' => '</a></li>',
        );
        $this->load->view('seller/header');
        $this->pagination->initialize($config);

        $this->load->view('seller/nav');
        $data['records'] = $this->admins->pending_users($config['per_page'], $this->uri->segment(3));
        $this->load->view('admin/user/users',$data);
        $this->load->view('admin/footer');
    }

    /*********Total Pending Users View End***********/

    /***********Total Active Users View Start*********/
    public function detail_user(){

        $this->load->view('admin/header');
        $this->load->model('admins');
        $this->load->view('seller/nav');
        $id = array(
            'id' => $_GET['id'],
        );

        $data['record'] = $this->admins->single_view_add($id);
        $data['records'] = $this->admins->single_view($id);
        $data['recordss'] = $this->admins->total_products($id);
        $data['total_order'] = $this->admins->total_orders($id);
        $data['grand_total'] = $this->admins->grand_total($id);
        $this->load->view('admin/user/register_detail',$data);
        $this->load->view('admin/footer');
    }

    /*********Total Active Users View End***********/

    /***********Edit Users View Start*********/
    public function edit_user(){
        $this->load->view('admin/header');
        $this->load->model('admins');
        $this->load->view('seller/nav');
        $id = array(
            'id' => $_GET['id'],
        );
        $data['record'] = $this->admins->single_view_add($id);
        $data['records'] = $this->admins->single_view($id);
        $this->load->view('admin/user/edit_user',$data);
        $this->load->view('admin/footer');
    }

    /*********Edit User View End***********/

    /***********Edit Users Action Start*********/
    public function eedit_user(){
        if(!$this->input->post('dob')){
            $dob = $this->input->post('dobs');
        }else{
            $dob = $this->input->post('dob');
        }
        $data = array(
            'id' => $this->input->get('id'),
            'email' => $this->input->post('email'),
            'name' => $this->input->post('name'),
            'gender' => $this->input->post('gender'),
            'dob' => $dob,
        );
        $this->load->model('admins');
        $data1 = $this->admins->edit_user_model($data);
        if($data1==1){
            $url = base_url()."admin/edit_user?id=".$_GET['id']."&msg=Updated Successfully";
            redirect($url);
        }
    }

    /*********Edit User Action End***********/

    /*****************Make Active Block******/
    public function make_ac(){
        if(!empty($_GET['status'])&&!empty($_GET['id'])){
            $data = array(
                'id' => $_GET['id'],
                'status' => $_GET['status'],
            );
            $this->load->model('admins');
            $dataa = $this->admins->make_acs($data);
            if($dataa==1){
                //$url = base_url('admin/user');
                $url = $_SERVER['HTTP_REFERER'];
                redirect($url);
            }
        }else{
            $url = base_url('admin/user');
            redirect($url);
        }
    }
    /*****************Make Active Block******/

    /*****************Manage Categories Start******/
    public function manage_category(){
        $this->load->view('seller/header');
        $this->load->view('seller/nav');
        $this->load->model('manage_seller_model');
        $data['record'] = $this->manage_seller_model->get_categories();
        $this->load->view('admin/manage_categories',$data);
        $this->load->view('seller/footer');
    }
    /*****************Manage Categories End******/

    /*****************Add Categories Start******/
    public function add_category(){
        $this->load->library('form_validation');
        $this->form_validation->set_rules('parent_id', 'Parent ID', 'required');
        if ($this->form_validation->run() == TRUE)
        {
            $data = array(
                'parent_id' => $this->input->post('parent_id'),
                'cat_name' => $this->input->post('cat_name'),
				 'commission' => $this->input->post('commission'),
            );
            $this->load->model('admins');
            $data = $this->admins->add_cat($data);
            if($data==true){
                $url = base_url('admin/manage_category?msg=Category Added Successfully');
                redirect($url);
            }
        }
    }
    /*****************Add Categories End******/

    /*****************Manage Categories Start******/
    public function cat_list(){

        $this->load->view('seller/header');
        $this->load->view('seller/nav');
        $this->load->model('manage_seller_model');
        $data['record'] = $this->manage_seller_model->get_categories();
        $this->load->view('admin/cat_list',$data);
        $this->load->view('seller/footer');
    }
    /*****************Manage Categories End******/

    /*****************Delete Categories Start******/
    public function delete_cat(){
        $data = array(
            'id' => $_GET['id'],
        );
        $this->load->model('admins');
        $data = $this->admins->delete_cats($data);
        if($data==true){
            redirect(base_url('admin/cat_list?msg=Category deleted successfully'));
        }else{
            redirect(base_url('admin/cat_list?msg=You can not delete a parent category'));
        }

    }
    /*****************Delete Categories End******/

    /*****************Edit Categories Start******/
    public function edit_cat(){
        $this->load->view('seller/header');
        $this->load->view('seller/nav');
        $this->load->model('admins');
        $data['record']=$this->admins->get_cats();
        $this->load->view('admin/edit_cat',$data);
        $this->load->view('seller/footer');

    }
    /*****************Edit Categories End******/

    /*****************Hit Edit Categories Start******/
    public function hit_cat(){
        $this->load->library('form_validation');
        $this->form_validation->set_rules('cat_name', 'Category Name', 'trim|required');
        if($this->form_validation->run()==true){
            $data = array(
                'cat_name' => $this->input->post('cat_name'),
            );
            $this->load->model('admins');
            $dataa = $this->admins->hit_cats($data);
            if($dataa==true){
                redirect(base_url('admin/cat_list?msg=Category edited successfully'));
            }

        }else{
            $this->load->view('seller/header');
            $this->load->view('seller/nav');
            $this->load->model('admins');
            $data['record']=$this->admins->get_cats();
            $this->load->view('admin/edit_cat',$data);
            $this->load->view('seller/footer');
        }
    }
    /*****************Hit Edit Categories End******/

    /*************************Add Coupon Start**************************************/
    public function add_coupon(){

        $this->load->view('seller/header');
        $this->load->view('seller/nav');
        $this->load->view('admin/add_coupon');
        $this->load->view('seller/footer');
    }
    /*************************Add Coupon End**************************************/


    /*************************Add Coupon Action Start**************************************/
    public function add_coupon_hit(){
        $config = array(
            'upload_path' => './coupon/',
            'allowed_types' => 'gif|jpg|png',
        );
        $this->load->library('upload', $config);

        $this->load->library('form_validation');
        $this->form_validation->set_rules('name', 'Coupon Name', 'required');
        $this->form_validation->set_rules('description', 'coupon description', 'required');
        $this->form_validation->set_rules('type', 'coupon type', 'required|callback_select_validate');
        $this->form_validation->set_rules('code', 'coupon code', 'required');
        $this->form_validation->set_rules('min_pur', 'MInimum Purchease', 'required|trim');
        $this->form_validation->set_rules('value', 'coupon value', 'required');
        $this->form_validation->set_rules('start', 'coupon start date', 'required');
        $this->form_validation->set_rules('end', 'coupon end date', 'required');
        if ($this->form_validation->run() == true && $this->upload->do_upload()){
            $data = array(
                'name' => $this->input->post('name'),
                'description' => $this->input->post('description'),
                'type' => $this->input->post('type'),
                'minimum_purchase' => $this->input->post('min_pur'),
                'value' => $this->input->post('value'),
                'code' => $this->input->post('code'),
                'start' => $this->input->post('start'),
                'end' => $this->input->post('end'),
                'image' => $this->input->post('userfile'),
                'status' => '1',
            );
            $image = $this->upload->data();
            $image_path = $image['raw_name'].$image['file_ext'];
            $data['image'] = $image_path;
            $this->load->model('admins');
            $data = $this->admins->add_coupons($data);
            if($data==true){
                redirect(base_url('admin/coupon_list?msg=Coupon added successfully'));
            }else{
                redirect(base_url('admin/coupon_list?msg=Some error please try again'));
            }
        }else{
            $this->load->view('seller/header');
            $this->load->view('seller/nav');
            $this->load->view('admin/add_coupon');
            $this->load->view('seller/footer');
        }
    }
    /*************************Add Coupon Action End**************************************/

    /*************************Add Coupon Start**************************************/
    public function coupon_list(){

        $this->load->view('seller/header');
        $this->load->view('seller/nav');
        $this->load->model('admins');
        $data['record'] =  $this->admins->coupons_list();
        $this->load->view('admin/coupon_list',$data);
        $this->load->view('seller/footer');
    }
    /*************************Add Coupon End**************************************/

    /*************************Edit Coupon Start**************************************/
    public function edit_coupon(){

        $this->load->view('seller/header');
        $this->load->view('seller/nav');
        $this->load->model('admins');
        $data['record'] = $this->admins->get_coupons();
        $this->load->view('admin/edit_coupon',$data);
        $this->load->view('seller/footer');
    }
    /*************************Add Coupon End**************************************/
    /**************************Edit Coupon STart**************************************/
    public function edit_coupon_hit(){
        $data = array(
            'name' => $this->input->post('name'),
            'description' => $this->input->post('description'),
            'type' => $this->input->post('type'),
            'minimum_purchase' => $this->input->post('min_pur'),
            'value' => $this->input->post('value'),
            'code' => $this->input->post('code'),
            'start' => $this->input->post('start'),
            'end' => $this->input->post('end'),
            'image' => $this->input->post('userfile'),
            'status' => '1',
        );

        $this->load->model('admins');
        $data = $this->admins->edit_coupons($data);
        var_dump($data);
    }
    /***************************End edit coupon Hit**********************************/

    /*************************Delete Coupon Start**************************************/
    public function delete_coupon(){
        $this->load->model('admins');
        $data = $this->admins->delete_coupons();
        if($data==true){
            $url = 'coupon/'.$_GET['img'];
            if(unlink($url)) {
                redirect(base_url('admin/coupon_list?msg=Coupon deleted Successfully'));
            }
        }else{
            redirect(base_url('admin/coupon_list?msg=Some error'));
        }
    }
    /*************************Delete Coupon End**************************************/

    public function add_user(){
        $this->load->view('seller/header');
        $this->load->view('seller/nav');
        $this->load->view('admin/add_user');
        $this->load->view('seller/footer');
    }

    public function add_user_hit(){
        $this->load->library('form_validation');
        $this->form_validation->set_rules('mobile', 'Mobile', 'required|trim|min_length[10]|max_length[10]|regex_match[/^[0-9]{10}$/]|is_unique[register.mobile]');
        $this->form_validation->set_rules('email', 'Email', 'required|trim|is_unique[register.email]');
        $this->form_validation->set_rules('password', 'Password', 'required|trim|min_length[8]');
        $this->form_validation->set_rules('cpassword', 'Confirm Password', 'required|trim|min_length[8]');
        $string = '0123456789';
        $string_shuffled = str_shuffle($string);
        $otp = substr($string_shuffled, 1, 4);
        if ($this->form_validation->run() == TRUE)
        {
            $data = array(
                'country_code'  => '91',
                'mobile' => $this->input->post('mobile'),
                'email' => $this->input->post('email'),
                'password' => md5($this->input->post('password')),
                'usertype'  => 1,
                'status'  => 1,
                'add_by' => $this->session->userdata('id'),
                'otp'   => $otp,
            );



            $this->load->model('admins');
            $data = $this->admins->add_users($data);
            if($data==true){
                redirect(base_url('admin/user?msg=User added Successfully'));
            }else{
                redirect(base_url('admin/add_user_hit?msg=Some error try again later'));
            }
        }else{
        $this->load->view('seller/header');
        $this->load->view('seller/nav');
        $this->load->view('admin/add_user');
        $this->load->view('seller/footer');
        }
    }

    public function add_seller(){
        $this->load->view('seller/header');
        $this->load->view('seller/nav');
        $this->load->view('admin/add_seller');
        $this->load->view('seller/footer');
    }
	
    public function add_seller_hit(){
        $this->load->library('form_validation');
        $this->form_validation->set_rules('mobile', 'Mobile', 'required|trim|is_unique[register.mobile]|min_length[10]');
        $this->form_validation->set_rules('email', 'Email', 'required|trim|is_unique[register.email]');
        $this->form_validation->set_rules('password', 'Password', 'required|trim|min_length[8]');
        $string = '0123456789';
        $string_shuffled = str_shuffle($string);
        $otp = substr($string_shuffled, 1, 4);
        if ($this->form_validation->run() == TRUE)
        {
            $data = array(
                'country_code'  => '91',
                'mobile' => $this->input->post('mobile'),
                'email' => $this->input->post('email'),
                'password' => md5($this->input->post('password')),
                'usertype'  => 2,
                'status'  => 1,
                'add_by' => $this->session->userdata('id'),
                'otp' => $otp,
            );



            $this->load->model('admins');
            $data = $this->admins->add_users($data);
            if($data==true){
                redirect(base_url('manage_seller/total_seller?msg=Seller added Successfully'));
            }else{
                redirect(base_url('admin/add_seller?msg=Some error try again later'));
            }
        }else{
            $this->load->view('seller/header');
            $this->load->view('seller/nav');
            $this->load->view('admin/add_seller');
            $this->load->view('seller/footer');
        }
    }

    public function add_subadmin_hit(){
        $this->load->library('form_validation');
        $this->form_validation->set_rules('mobile', 'Mobile', 'required|trim|is_unique[register.mobile]|min_length[10]');
        $this->form_validation->set_rules('email', 'Email', 'required|trim|is_unique[register.email]');
        $this->form_validation->set_rules('password', 'Password', 'required|trim|min_length[8]');
        $string = '0123456789';
        $string_shuffled = str_shuffle($string);
        $otp = substr($string_shuffled, 1, 4);
		
        if ($this->form_validation->run() == TRUE)
        {
            $data = array(
                'country_code'  => '91',
                'mobile' => $this->input->post('mobile'),
                'email' => $this->input->post('email'),
                'password' => md5($this->input->post('password')),
                'usertype'  => 4,
                'status'  => 1,
                'add_by' => $this->session->userdata('id'),
                'otp' => $otp,
            );
			//print_r($this->input->post());die;
				if($this->input->post('manage_user')){
					$manage_user = 1;
				}else{
					$manage_user = 0;
				}
				if($this->input->post('manage_seller')){
					$manage_seller = 1;
				}else{
					$manage_seller = 0;
				}
				if($this->input->post('manage_subadmin')){
					$manage_subadmin = 1;
				}else{
					$manage_subadmin = 0;
				}
				if($this->input->post('manage_categories')){
					$manage_categories = 1;
				}else{
					$manage_categories = 0;
				}
				if($this->input->post('manage_Product')){
					$manage_Product = 1;
				}else{
					$manage_Product = 0;
				}
				if($this->input->post('manage_commission')){
					$manage_commission = 1;
				}else{
					$manage_commission = 0;
				}
				if($this->input->post('commission_in_sale')){
					$commission_in_sale = 1;
				}else{
					$commission_in_sale = 0;
				}
				if($this->input->post('my_sale')){
					$my_sale = 1;
				}else{
					$my_sale = 0;
				}
				if($this->input->post('my_site')){
					$my_site = 1;
				}else{
					$my_site = 0;
				}
				if($this->input->post('shop_details')){
					$shop_details = 1;
				}else{
					$shop_details = 0;
				}
				if($this->input->post('manage_coupons')){
					$manage_coupons = 1;
				}else{
					$manage_coupons = 0;
				}
				if($this->input->post('bank_details')){
					$bank_details = 1;
				}else{
					$bank_details = 0;
				}
				if($this->input->post('participate_in_sale')){
					$participate_in_sale = 1;
				}else{
					$participate_in_sale = 0;
				}
				if($this->input->post('payment_history')){
					$payment_history = 1;
				}else{
					$payment_history = 0;
				}
				if($this->input->post('settings')){
					$settings = 1;
				}else{
					$settings = 0;
				}
				if($this->input->post('set_homepage')){
					$set_homepage = 1;
				}else{
					$set_homepage = 0;
				}
				
				
			
			
			//print_r($data1);die;



            $this->load->model('admins');
           
			$data = $this->admins->add_users($data);
			$this->load->model('subadmins');
			$dat= $this->subadmins->view_users1();
			foreach($dat as $sub){
				if($sub->mobile == ($this->input->post('mobile'))){
					$user_id=$sub->id;
					
				}
				
			}
			$data1 = array(
			'user_id' => $user_id,
			'manage_user'  => $manage_user,
			'manage_user'  => $manage_user,
			'manage_seller'  =>  $manage_seller,
			'manage_subadmin'  => $manage_subadmin,
			'manage_categories'  => $manage_categories,
			'manage_Product'  => $manage_Product,
			'manage_commission'  => $manage_commission,
			'commission_in_sale'  => $commission_in_sale,
			'my_sale'  => $my_sale,
			'my_site'  => $my_site,
			'shop_details'  => $shop_details,
			'manage_coupons'  => $manage_coupons,
			'bank_details'  => $bank_details,
			'participate_in_sale'  => $participate_in_sale,
			'payment_history'  => $payment_history,
			'settings'  => $settings,
			'set_homepage'  => $set_homepage,
			);
			$dat= $this->subadmins->add_permission($data1);
			//print_r($data1);die;
			
            if($data==true){
				if($dat==true){
					redirect(base_url('subadmin/view_subadmin?msg=Subadmin added Successfully'));
				}else{
					redirect(base_url('subadmin/view_subadmin?msg=Subadmin added but Permission not set Successfully'));
				}
                redirect(base_url('subadmin/view_subadmin?msg=Subadmin added Successfully'));
            }else{
                redirect(base_url('subadmin/add_user?msg=Some error try again later'));
            }
        }else{
            $this->load->view('seller/header');
            $this->load->view('seller/nav');
            $this->load->view('subadmin/add_user');
            $this->load->view('seller/footer');
        }
    }

    public function add_comission(){
        $this->load->view('seller/header');
        $this->load->view('seller/nav');        
        $this->load->view('seller/add_comission');      
        $this->load->view('seller/footer'); 
        }   

    public function add_comission_hit(){
		
		if($this->input->post('platformcheck')){
			$platformcheck = 1;
		}else{
			$platformcheck = 0;
		}
		if($this->input->post('marketingcheck')){
			$marketingcheck = 1;
		}else{
			$marketingcheck = 0;
		}
		if($this->input->post('objectivecheck')){
			$objectivecheck = 1;
		}else{
			$objectivecheck = 0;
		}
		if($this->input->post('ostcheck')){
			$ostcheck = 1;
		}else{
			$ostcheck = 0;
		}
		if($this->input->post('alafscheck')){
			$alafscheck = 1;
		}else{
			$alafscheck = 0;
		}
		if($this->input->post('opaccheck')){
			$opaccheck = 1;
		}else{
			$opaccheck = 0;
		}
		if($this->input->post('kcscheck')){
			$kcscheck = 1;
		}else{
			$kcscheck = 0;
		}
		if($this->input->post('lokcheck')){
			$lokcheck = 1;
		}else{
			$lokcheck = 0;
		}
		if($this->input->post('plokcheck')){
			$plokcheck = 1;
		}else{
			$plokcheck = 0;
		}
		if($this->input->post('ppipmcheck')){
			$ppipmcheck = 1;
		}else{
			$ppipmcheck = 0;
		}
		if($this->input->post('ppikeapmcheck')){
			$ppikeapmcheck = 1;
		}else{
			$ppikeapmcheck = 0;
		}
		if($this->input->post('epmcheck')){
			$epmcheck = 1;
		}else{
			$epmcheck = 0;
		}
		if($this->input->post('emapmcheck')){
			$emapmcheck = 1;
		}else{
			$emapmcheck = 0;
		}
		if($this->input->post('fhkkwcheck')){
			$fhkkwcheck = 1;
		}else{
			$fhkkwcheck = 0;
		}
		if($this->input->post('omscheck')){
			$omscheck = 1;
		}else{
			$omscheck = 0;
		}
		$optarr=$this->input->post('newopthead');
		$valarr=$this->input->post('newopt');
		
		for($i=0;$i< sizeof($optarr);$i++){
			$addopt[]=array(
			'name' => $optarr[$i],
			'value' => $valarr[$i],
			);
		}
		$myJSON = json_encode($addopt);
		
			
        $data = array(
        'name' => $this->input->post('name'),
        'platform' => $this->input->post('platform'),
        'marketing' => $this->input->post('marketing'),
        'objective' => $this->input->post('objective'),
        'ost' => $this->input->post('ost'),
        'alafs' => $this->input->post('alafs'),
        'opac' => $this->input->post('opac'),
        'kcs' => $this->input->post('kcs'),
        'lok' => $this->input->post('lok'),
        'plok' => $this->input->post('plok'),
        'ppipm' => $this->input->post('ppipm'),
        'ppikeapm' => $this->input->post('ppikeapm'),
        'epm' => $this->input->post('epm'),
        'emapm' => $this->input->post('emapm'),
        'fhkkw' => $this->input->post('fhkkw'),
        'oms' => $this->input->post('oms'),
		'platformcheck' => $platformcheck,
		'marketingcheck' => $marketingcheck,
		'objectivecheck' => $objectivecheck,
		'ostcheck' => $ostcheck,
		'alafscheck' => $alafscheck,
		'opaccheck' => $opaccheck,
		'kcscheck' => $kcscheck,
		'lokcheck' => $lokcheck,
		'plokcheck' => $plokcheck,
		'ppipmcheck' => $ppipmcheck,
		'ppikeapmcheck' => $ppikeapmcheck,
		'epmcheck' => $epmcheck,
		'emapmcheck' => $emapmcheck,
		'fhkkwcheck' => $fhkkwcheck,
		'omscheck' => $omscheck,
		'json' => $myJSON,
        );
		
		
        $this->load->model('admins');
        $data = $this->admins->add_comissions($data);    
        if($data==true){
            redirect(base_url('admin/comission_list?msg=Comission Added Successfully'));
        }
    }

        public function comission_list(){
		
		//$this->session->set_userdata('permission' => $dataa1);
		
        $this->load->model('admins');
        $data['record'] = $this->admins->sale_comission();    
        $this->load->view('seller/header');
        $this->load->view('seller/nav');        
        $this->load->view('seller/comission_list',$data);      
        $this->load->view('seller/footer'); 
        }

        public function edit_comission(){
        $this->load->model('admins');
        $data['record'] = $this->admins->edit_comissions();    
        $this->load->view('seller/header');
        $this->load->view('seller/nav');        
        $this->load->view('seller/edit_comission',$data);      
        $this->load->view('seller/footer'); 
        }

        public function edit_comission_hit(){
			if($this->input->post('platformcheck')){
			$platformcheck = 1;
			}else{
				$platformcheck = 0;
			}
			if($this->input->post('marketingcheck')){
				$marketingcheck = 1;
			}else{
				$marketingcheck = 0;
			}
			if($this->input->post('objectivecheck')){
				$objectivecheck = 1;
			}else{
				$objectivecheck = 0;
			}
			if($this->input->post('ostcheck')){
				$ostcheck = 1;
			}else{
				$ostcheck = 0;
			}
			if($this->input->post('alafscheck')){
				$alafscheck = 1;
			}else{
				$alafscheck = 0;
			}
			if($this->input->post('opaccheck')){
				$opaccheck = 1;
			}else{
				$opaccheck = 0;
			}
			if($this->input->post('kcscheck')){
				$kcscheck = 1;
			}else{
				$kcscheck = 0;
			}
			if($this->input->post('lokcheck')){
				$lokcheck = 1;
			}else{
				$lokcheck = 0;
			}
			if($this->input->post('plokcheck')){
				$plokcheck = 1;
			}else{
				$plokcheck = 0;
			}
			if($this->input->post('ppipmcheck')){
				$ppipmcheck = 1;
			}else{
				$ppipmcheck = 0;
			}
			if($this->input->post('ppikeapmcheck')){
				$ppikeapmcheck = 1;
			}else{
				$ppikeapmcheck = 0;
			}
			if($this->input->post('epmcheck')){
				$epmcheck = 1;
			}else{
				$epmcheck = 0;
			}
			if($this->input->post('emapmcheck')){
				$emapmcheck = 1;
			}else{
				$emapmcheck = 0;
			}
			if($this->input->post('fhkkwcheck')){
				$fhkkwcheck = 1;
			}else{
				$fhkkwcheck = 0;
			}
			if($this->input->post('omscheck')){
				$omscheck = 1;
			}else{
				$omscheck = 0;
			}
			$this->load->model('admins');
			$data['record'] = $this->admins->edit_comissions();
			
			$edc=$data['record'][0];
			
			
			
			
			
			
			
			
			$optarr=$this->input->post('newopthead');
			//print_r($optarr);die;
			$k=sizeof($optarr);
			
			$valarr=$this->input->post('newopt');
			if(!empty($optarr)){
			for($i=0;$i<$k;$j++,$i++){
			$addopt[$i]=array(
			'name' => $optarr[$i],
			'value' => $valarr[$i],
			);
			}
		}
		
		//print_r($addopt);die;
		
		if(!empty($addopt)){
		$myJSON = json_encode($addopt);
		}else{
			$myJSON=$addopt;
		}
		
			
            $data = array(
            'name' => $this->input->post('name'),
            'platform' => $this->input->post('platform'),
            'marketing' => $this->input->post('marketing'),
            'objective' => $this->input->post('objective'),
            'ost' => $this->input->post('ost'),
            'alafs' => $this->input->post('alafs'),
            'opac' => $this->input->post('opac'),
            'kcs' => $this->input->post('kcs'),
            'lok' => $this->input->post('lok'),
            'plok' => $this->input->post('plok'),
            'ppipm' => $this->input->post('ppipm'),
            'ppikeapm' => $this->input->post('ppikeapm'),
            'epm' => $this->input->post('epm'),
            'emapm' => $this->input->post('emapm'),
            'fhkkw' => $this->input->post('fhkkw'),
            'oms' => $this->input->post('oms'),
			'platformcheck' => $platformcheck,
			'marketingcheck' => $marketingcheck,
			'objectivecheck' => $objectivecheck,
			'ostcheck' => $ostcheck,
			'alafscheck' => $alafscheck,
			'opaccheck' => $opaccheck,
			'kcscheck' => $kcscheck,
			'lokcheck' => $lokcheck,
			'plokcheck' => $plokcheck,
			'ppipmcheck' => $ppipmcheck,
			'ppikeapmcheck' => $ppikeapmcheck,
			'epmcheck' => $epmcheck,
			'emapmcheck' => $emapmcheck,
			'fhkkwcheck' => $fhkkwcheck,
			'omscheck' => $omscheck,
			'json' => $myJSON,
            );

            $this->load->model('admins');
        $data = $this->admins->edit_comissions_hit($data);    
            redirect(base_url('admin/comission_list?msg=Comission Edited Successfully'));
        }

        public function del_com(){
            $this->load->model('admins');
            $data = $this->admins->del_coms($data);    
            redirect(base_url('admin/comission_list?msg=Comission Deleted Successfully'));   
        }
			
		

        public function deleteoption(){
			$name=$this->input->get('name');
			$id=$this->input->get('id');
			$this->load->model('admins');
			$data['record'] = $this->admins->edit_comissions1($id);
			$dat=$data['record'][0];
			$addopt=json_decode($dat->json);
			$newopt=array();
			foreach($addopt as $option){
				if(($option->name)==$name){
					
				}else{
					$newopt[]=$option;
				}
			}	
		if(!empty($newopt)){
			$dat->json=json_encode($newopt);
		}else{
			$dat->json=' ' ;
		}
		$this->admins->edit_comissions_hit($dat);
		//echo $dat->json;
			
			
			//print_r($this->admins->edit_comissions1($id));

			
			redirect(base_url('admin/edit_comission?id='.$id));
			//$addopt=$data['record'];
			//echo $name;
			//echo $id;
            
        }
}
