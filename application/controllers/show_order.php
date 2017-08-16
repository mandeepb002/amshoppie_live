<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class show_order extends MS_Controller {

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
	  public function s_order() {
	 $this->load->view('seller/header');
	 $this->load->view('seller/nav');
    $this->load->model("view_orders");
    $data['records'] = $this->view_orders->s_orders();
    $this->load->view("seller/payment",$data);
	$this->load->view('seller/footer');
	  }
	public function payment_order(){
	
				$this->load->view('seller/header');
		  $this->load->view('seller/nav');
		  $this->load->model('view_orders');

			//$this->load->view("seller/single_product_details_show",$data);
			
			
			$id = $this->input->get('id');
			if(!empty($id)){
				$data['records'] = $this->view_orders->payment_order_details($id);
				//print_r($data);
				//die();
		$this->load->view("seller/single_payment_order",$data);
		$this->load->view('seller/footer');
				}
	}
			public function action_panding(){
						$this->load->view('seller/header');
						$this->load->view('seller/nav');
						
						$this->load->view('seller/footer');
			}
	}
	
