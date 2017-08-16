<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class show_product extends MS_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -  
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in 
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
	 
	
	  public function s_product() 
	  {
		  	$this->load->model("view_products");
		  	$this->load->library('pagination');
			$config = array(
			'base_url' => base_url('show_product/s_product'),
			'per_page' => 10,
			'total_rows' => $this->view_products->total_re(), 
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
		    
		 //  $data['user_type'] = $this->view_products->user_type();
		//  echo '<pre>'; print_r($data['user_type']); echo '</pre>'; die;
			$data['records'] = $this->view_products->s_products($config['per_page'], $this->uri->segment(3));
			//print_r($data['records']);
			$data['rec'] = $this->view_products->inactive_products();
			$data['unapproved']= $this->view_products->unapproved($config['per_page'], $this->uri->segment(3));
			
			//$data['all'] = $this->view_products->all_shope();
			//print_r($data['all']);die;
			$this->load->view("seller/view_product1",$data);
			$this->load->view('seller/footer');
      }
	 //paginations
	  
 
    
//product detail
	  
	public function product_detail()
	{
	
				$this->load->view('seller/header');
		  $this->load->view('seller/nav');
		  $this->load->model('view_products');

			//$this->load->view("seller/single_product_details_show",$data);
			
			
			$id = $this->input->get('id');
			if(!empty($id)){
				$data['records'] = $this->view_products->show_details($id);
				//print_r($data);
				//die();
		$this->load->view("seller/single_product_details_show",$data);
		$this->load->view('seller/footer');
				}
			
				}
   	public function change_p_status(){
        $data = array(
        'status' => $_GET['status'],    
        );
        $this->load->model('products');
        $data = $this->products->change_pstatus($data);
        if($data==true){
            redirect(base_url('show_product/s_product?msg=Updated successfully'));
        }
    }		
}
