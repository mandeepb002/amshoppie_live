<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class item_order1 extends MS_Controller {

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
public function item_detail(){
		   $this->load->model('orders_item_details');
        // Validate the user can login
	$this->load->library('form_validation');

         /* Set validation rule for name field in the form */
		 $this->form_validation->set_rules('order_id', 'order_id', 'required');
		  $this->form_validation->set_rules('product_id', 'product_id', 'required|trim|xss_clean|is_unique[review.product_id]');
		 $this->form_validation->set_rules('quantity', 'quantity', 'required');
         $this->form_validation->set_rules('rate', 'rate', 'required');
		 $this->form_validation->set_rules('total', 'total', 'required');
		 $this->form_validation->set_rules('order_item_status', 'order_item_status', 'required');
		 $data=array(
		 'order_id' => $this->input->post('order_id'),
		 'product_id' => $this->input->post('product_id'),	 
		 'quantity' => $this->input->post('quantity'),
		'rate' => $this->input->post('rate'),
		'total' => $this->input->post('total'),
		'order_item_status' => $this->input->post('order_item_status'),
		  );
		  if ($this->form_validation->run() == FALSE) {
                         
			 $d=validation_errors();
                         $x=str_replace("<p>","",$d);
                         $x1=str_replace("</p>","",$x);
                         $x2=str_replace("\n","",$x1);
			 $this->load->helper('json');
                         echo json_return("false",$x2);
                   }
		else{
			$datx=$this->orders_item_details->item_details($data);

          	    $this->load->helper('json');
                         echo json_return("true",$datx);
	 	}
}
}