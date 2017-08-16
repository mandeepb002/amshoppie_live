<?php
class subadmin extends MS_Controller
{
    public function add_user(){
        $this->load->view('seller/header');
        $this->load->view('seller/nav');
        $this->load->view('subadmin/add_user');
        $this->load->view('seller/footer');
    }

    public function add_hit(){
        $this->load->library('form_validation');

        $this->form_validation->set_rules('mobile', 'Mobile Number', 'trim|required|numeric|min_length[10]|is_unique[register.mobile]');
        $this->form_validation->set_rules('email', 'Email', 'trim|valid_email|required|is_unique[register.email]');
        $this->form_validation->set_rules('password', 'Password', 'required|trim');

        if($this->form_validation->run()==TRUE){
            $string = '0123456789';
            $string_shuffled = str_shuffle($string);
            $otp = substr($string_shuffled, 1, 4);			echo $this->session->userdata('id');die;
            $data = array(
                'country_code' => $this->input->post('country_code'),
                'mobile' => $this->input->post('mobile'),
                'email' => $this->input->post('email'),
                'password' => $this->input->post('password'),
                'usertype' => 4,
                'status' => 1,
                'otp' => $otp,								'add_by' => $this->session->userdata('id'),
            );
                $this->load->model('subadmins');
                $data = $this->subadmins->add_users($data);
                redirect(base_url('subadmin/subadmin_list'));
        }else{
            $this->load->view('seller/header');
            $this->load->view('seller/nav');
            $this->load->view('subadmin/add_user');
            $this->load->view('seller/footer');
        }
    }

    public function view_subadmin(){
        $this->load->model('subadmins');
        $this->load->view('seller/header');
        $this->load->library('pagination');
        $config = array(
            'base_url' => base_url('subadmin/view_subadmin'),
            'per_page' => 10,
            'total_rows' => $this->subadmins->view_users_num(),
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
        $this->load->view('seller/nav');

        $data['records'] = $this->subadmins->view_users($config['per_page'], $this->uri->segment(3));
        $this->load->view('admin/user/users',$data);
        $this->load->view('seller/footer');
    }


}