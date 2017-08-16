<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class search extends MS_Controller {

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
	 public function search_detail(){
		 /*$this->load->view('seller/header');
		 $this->load->view('seller/nav');
		 
		 $this->load->view('seller/view_products1');
		 $this->load->view('seller/footer');*/
		 
		 $this->load->model("search_data");	
		 $data = array(
		 'product_name' => $this->input->post('product_name'),
		 
		 );
		 
		 $value=$this->search_data->serach_details($data);
		 if($value==true){ 
			$this->load->view('seller/header');
		    $this->load->view('seller/nav');
			$value['records']=$this->search_data->serach_details($data);			
			$this->load->view("seller/search_product",$value);
			$this->load->view('seller/footer');

			 }else{
				 echo "no";
				 }
		  
		
}
}

		