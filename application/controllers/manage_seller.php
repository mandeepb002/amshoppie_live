<?php
class manage_seller extends MS_Controller{
/************************TOTAL SELLER START*********************************/
public function total_seller(){
    $this->load->model('manage_seller_model');
    $this->load->library('pagination');
    $config = array(
        'base_url' => base_url('manage_seller/total_seller'),
        'per_page' => 10,
        'total_rows' => $this->manage_seller_model->seller_view_num(),
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
			$data['records'] = $this->manage_seller_model->seller_view($config['per_page'], $this->uri->segment(3));
			//$data['record'] = $this->admins->check_users_active();
			$this->load->view('admin/user/users',$data);
			$this->load->view('admin/footer');
			}
/**************************TOTAL SELLER END**********************************/			


/***********Total Blocked SELLER View Start*********/	
	public function block_seller(){
        $this->load->model('manage_seller_model');
        $this->load->library('pagination');
        $config = array(
            'base_url' => base_url('manage_seller/block_seller'),
            'per_page' => 10,
            'total_rows' => $this->manage_seller_model->block_sellers_num(),
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
			$data['records'] = $this->manage_seller_model->block_sellers($config['per_page'], $this->uri->segment(3));
			$this->load->view('admin/user/users',$data);
			$this->load->view('admin/footer');
			}

	/*********Total Blocked SELLER View End***********/	

	/***********Total Active Seller View Start*********/	
	public function active_seller(){
        $this->load->model('manage_seller_model');
        $this->load->library('pagination');
        $config = array(
            'base_url' => base_url('manage_seller/active_seller'),
            'per_page' => 10,
            'total_rows' => $this->manage_seller_model->active_seller_num(),
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
			$data['records'] = $this->manage_seller_model->active_seller_model($config['per_page'], $this->uri->segment(3));
			$this->load->view('admin/user/users',$data);
			$this->load->view('admin/footer');
			}

	/*********Total Active Seller View End***********/	
	
	/***********Total Pending Seller View Start*********/	
	public function pending_seller(){
        $this->load->model('manage_seller_model');
        $this->load->library('pagination');
        $config = array(

            'base_url' => base_url('manage_seller/pending_seller'),
            'per_page' => 10,
            'total_rows' => $this->manage_seller_model->pending_seller_num(),
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
			$this->load->view('admin/header');

			$this->load->view('seller/nav');
			$data['records'] = $this->manage_seller_model->pending_seller_model($config['per_page'], $this->uri->segment(3));
			$this->load->view('admin/user/users',$data);
			$this->load->view('admin/footer');
			}

	/*********Total Pending Seller View End***********/

	public function coupon_opt(){
	    $data = array(
	        'user_id'   =>  $this->session->userdata('id'),
            'coupon_id'   =>  $_GET['cp'],
        );
        $this->load->model('manage_seller_model');
        $data = $this->manage_seller_model->coupon_opts($data);
        if($data==true){
            redirect(base_url('seller/parti?msg=coupon opted'));
        }
    }

}