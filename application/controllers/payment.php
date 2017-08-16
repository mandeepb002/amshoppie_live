<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class payment extends CI_Controller {
	public function index(){
		$this->load->model('welcomes');
		$data['cart'] = $this->welcomes->fetch_cart();
		$this->load->view('header');
		$this->load->model('welcomes');
		$data['ship'] = $this->welcomes->ship_address();
		$this->load->view('payment',$data);
		$this->load->view('footer');
		
		//foreach ($data['cart'] as $key) {
			
	//	}
	}

	public function pay(){

		$this->load->model('pay');
		$data = $this->pay->fetch_carts();
		if($data==true){
		$data = array(
			'total_amount'	=>	$this->input->post('total_amount'),
			'user_id'	=>	$this->input->post('user_id'),
			'order_status'	=> '1',
			);

		$order_id = $this->pay->insert_order($data);
		foreach ($order_id as $order_ids) {
			$dataa = $this->pay->add_item($order_ids['id']);	
			if($dataa){
				redirect(base_url('payment/done/'.$dataa));
			}
		}
		}else{
			redirect(base_url('welcome/add_to?msg=Your cart is empty'));
		}

	}

	public function done(){
		$this->load->view('header');
		$this->load->view('done');
		$this->load->view('footer');
	}
}