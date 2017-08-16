<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class welcome extends CI_Controller {

    public function index()
    {
        $this->load->view('header');
        $this->load->model('welcomes');
        $data['cat'] = $this->welcomes->get_categories();
        $this->load->view('nav',$data);
        $this->load->view('subnav');
        //$this->load->view('ucp/checkout');
        //$this->load->view('ucp/signup');
        //$this->load->view('ucp/slider');
		$data['images'] = $this->welcomes->all_data_show();
		$section = array();
			foreach($data['images'] as $abc){
			
		if(in_array($abc->cate_id,$section)){
		
		
		}else{
		$section[]=$abc->cate_id;
		
		}
		$items=array();
		foreach ($section as $sec)
		{
		$item2=array();
		foreach($data['images'] as $abc){
		if(($abc->cate_id)==$sec){
		$item2[]=$abc;
		
		}
		
		
		}
		$items[]=$item2;
		}

		}
		$data['all_data'] = $items;
		//print_r(	$data['all_data']);die;
	// echo '<pre>';print_r($items); echo '</pre>';die;
		
		
$data['cat_image'] = $this->welcomes->show_cat();
$data['cat_image1'] = $this->welcomes->show1_cat();
$data['cat_image2'] = $this->welcomes->show2_cat();
		$this->load->model('products');
		$dealp=$this->products->view_deal();
		
		
		$deali=$this->products->fetch_images1();
		//print_r($deali);die;
		 
		$dealpd=array();
		
		foreach($dealp as $item){
			
			$dimg=0;
			foreach($deali as $item1){
				
				if(($item1['p_id'])==($item->product_id)){
					$dimg=$item1['image'];
				}
			}
			$dealpro=$this->products->product_lists3($item->product_id);
			
			$dealpd[]=array(
			'product_id' => $item->product_id,
			'product_name' => isset($dealpro[0]) ? $dealpro[0]->product_name : '',
			'offer_price' => $item->offer_price,
			'image' => $dimg,
			);
		}
		
		
		$data['deal_product']=$dealpd; 


//print_r($data['cat_image']);die;
        $this->load->view('welcome_message',$data);
        // $this->load->view('banner_content');
        $this->load->view('footer_content');
        $this->load->view('footer');



    }

	public function home_aboutt()
    {
        $this->load->view('header');
        $this->load->model('welcomes');
        $data['cat'] = $this->welcomes->get_categories();
        $this->load->view('nav',$data);
		$this->load->view('home_about');
        $this->load->view('footer_content');
    }
 

 public function contact_us()
    {
        $this->load->view('header');
        $this->load->model('welcomes');
        $data['cat'] = $this->welcomes->get_categories();
        $this->load->view('nav',$data);
		$this->load->view('home_contact');
        $this->load->view('footer_content');
    }
 
    public function store()
    {
        $this->load->view('header');
        $this->load->view('navbar');
        $this->load->view('footer');
    }
    public function mobilerecharge()
    {
        $this->load->view('header');
        $this->load->view('mobilerecharge');
        $this->load->view('footer');

    }
    public function dth()
    {
        $this->load->view('header');
        $this->load->view('dth');
        $this->load->view('footer');

    }
    public function electricity()
    {
        $this->load->view('header');
        $this->load->view('electricity');
        $this->load->view('footer');

    }
    public function gas()
    {
        $this->load->view('header');
        $this->load->view('gas');
        $this->load->view('footer');

    }
//category page
    public function category()
    {
        $this->load->view('header');
        $this->load->model('welcomes');
        $data['cat'] = $this->welcomes->get_categories();
        $this->load->view('nav',$data);
        $this->load->model('welcomes');
        $data['sub'] = $this->welcomes->get_cats();
        $this->load->view('category',$data);
        $this->load->view('footer_content');
        $this->load->view('footer');
    }
//subcategory page
    public function subcategory()
    {
        $this->load->view('header');
        $this->load->model('welcomes');
        $data['cat'] = $this->welcomes->get_categories();
        $this->load->view('nav',$data);
        $this->load->model('welcomes');
        $data['sub'] = $this->welcomes->get_cats();
        $data['brand'] = $this->welcomes->get_brands();
        $data['size'] = $this->welcomes->get_sizes();
        $this->load->view('sub_category',$data);
        $this->load->view('footer_content');
        $this->load->view('footer');
    }

    public function p_view()
    {
        $this->load->view('header');
        $this->load->model('welcomes');
        $data['cat'] = $this->welcomes->get_categories();
        $this->load->view('nav',$data);
        $data['pro'] = $this->welcomes->fetch_product();
        $data['size'] = $this->welcomes->get_single_size();
        $this->load->view('s_p',$data);
        $this->load->view('footer_content');
        $this->load->view('footer');
    }
//Innerbcategory page
    public function innercategory()
    {
        $this->load->view('header');
        $this->load->model('welcomes');
        $data['cat'] = $this->welcomes->get_categories();
        $this->load->view('nav',$data);
        $this->load->model('welcomes');
        $data['sub'] = $this->welcomes->get_product();
        $data['get_s'] = $this->welcomes->get_single_cat();
        $this->load->view('inner_category',$data);
        $this->load->view('footer_content');
        $this->load->view('footer');
    }

    public function bus()
    {
        $this->load->view('header');
        $this->load->view('bus');
        $this->load->view('footer');
    }
    public function municipal()
    {
        $this->load->view('header');
        $this->load->view('municipal');
        $this->load->view('footer');
    }
    public function register()
    {
        $this->load->helper('form');
        $this->load->view('header');
        $this->load->view('register');
    }
    public function login()
    {
        $this->load->helper('form');
        $this->load->view('header');
        $this->load->view('login');
    }

    public function login_process()
    {
        $this->load->model('login_process');
        $this->load->library( array( 'form_validation', 'session' ) );
        // Validate the user can login

        $data['error'] = '';
        $this->form_validation->set_rules('email', 'email', 'required|valid_email');
        $this->form_validation->set_rules('password', 'password', 'required');

        if($this->input->post('submit')){
            if($this->form_validation->run() !== FALSE)
            {
                $data=array(
                    'email' => $this->input->post('email'),
                    'password' => $this->input->post('password'),
                );

                $result = $this->login_process->show_all_data($data);
                if(!empty($result)) {
                    echo json_encode(array('status' => "true", 'Id' => $result));
                } else {
                    echo json_encode(array('status' => "false", 'result' => array()));
                }

            }else {
                echo json_encode(array('status' => false, 'result' => array(), 'error' => validation_errors()));
            }
        }
        die;
    }
	
	public function add_to(){
		$this->load->view('header');
        $this->load->model('welcomes');
        $data['cat'] = $this->welcomes->get_categories();
        $data['cart'] = $this->welcomes->fetch_cart();
        $this->load->view('nav',$data);
        $this->load->view('atc',$data);
        $this->load->view('footer_content');
        $this->load->view('footer');
	}

    public function get_brand(){
        $this->load->model('welcomes');
        $data = $this->welcomes->get_brands();        
        if($data){
            $dat=array();
            foreach ($data as $key) {   
            $dat[] = array(
                'id'    => $key->id,
                'name'  => $key->name,
                );
            
        }
        $this->load->helper('json');
            echo json_return("true",$dat);
        }else{
            $this->load->helper('json');
            echo json_return("false","No brand available");
        }
    }

    public function get_size(){
        $this->load->model('welcomes');
        $data = $this->welcomes->get_sizes();        
        if($data){
            $dat=array();
            foreach ($data as $key) {   
            $dat[] = array(
                'id'    => $key->id,
                'name'  => $key->name,
                );
            
        }
        $this->load->helper('json');
            echo json_return("true",$dat);
        }else{
            $this->load->helper('json');
            echo json_return("false","No Size available");
        }
    }

     public function get_colour(){
        $this->load->model('welcomes');
        $data = $this->welcomes->get_color();        
        if($data){
            $dat=array();
            foreach ($data as $key) {   
            $dat[] = array(
                'id'    => $key->id,
                'name'  => $key->name,
                );
            
        }
        $this->load->helper('json');
            echo json_return("true",$dat);
        }else{
            $this->load->helper('json');
            echo json_return("false","No Size available");
        }
    }

    public function add_cart(){
    	if($this->session->userdata('id')){
    	$data = array(
    		'user_id'	=>	$this->input->post('user_id'),
    		'product_id'	=>	$this->input->post('product_id'),
            'price'    =>  $this->input->post('item_price'),
    		'quantity'	=>	$this->input->post('quantity'),
    		);
    	$this->load->model('welcomes');
    	$data = $this->welcomes->add_carts($data);
	    	if($data==true){
	    		redirect(base_url('welcome/add_to?msg=Product add in to cart successfully'));
	    	}else{
	    		redirect(base_url('welcome/add_to?msg=Product already added in cart'));
	    	}
    	}else{
    		redirect(base_url('?msg=please login to continue'));
    	}
    }

    public function del_cart(){
    	$this->load->model('welcomes');
    	$data = $this->welcomes->del_carts();
    	if($data==true){
    		redirect(base_url('welcome/add_to?msg=Deleted from cart'));
    	}

    }

}
/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */
