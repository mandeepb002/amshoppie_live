<?php
 
class Csv extends MS_Controller {
 
    function __construct() {
        parent::__construct();
        $this->load->model('csv_model');
        $this->load->library('csvimport');
    }
 
    function index() {
		//echo "dfghdfgh";die;
        $data['addressbook'] = $this->csv_model->get_addressbook();
		
        $this->load->view('csv/csvindex', $data);
    }
	function bulk() {
		//echo "dfghdfgh";die;
	
        $data['addressbook'] = $this->csv_model->get_addressbook();
		$this->load->view('seller/header');
$this->load->view('seller/nav');
        $this->load->view('csv/bulk_upload', $data);
		$this->load->view('seller/footer');
    }
 
    function importcsv() {
		//print_r($this->input->post());die;
        $data['addressbook'] = $this->csv_model->get_addressbook();
        $data['error'] = '';    //initialize image upload error array to empty
 
        $config['upload_path'] = './uploads/';
        $config['allowed_types'] = 'csv';
        $config['max_size'] = '1000';
		$config['allowed_types'] = 'csv';
		
        $this->load->library('upload', $config);
 
 
        // If upload failed, display error
        if (!$this->upload->do_upload()) {
            $data['error'] = $this->upload->display_errors();
 
            $this->load->view('csv/csvindex', $data);
        } else {
            $file_data = $this->upload->data();
            $file_path =  './uploads/'.$file_data['file_name'];
			$this->load->view('seller/header');
			
 
            if ($this->csvimport->get_array($file_path)) {
                $csv_array = $this->csvimport->get_array($file_path);
				//print_r($csv_array);die;
                foreach ($csv_array as $row) {
                    $insert_data = array(
                        'user_id'=>$row['user_id'],
                        'shop_id'=>$row['shop_id'],
                        'product_name'=>$row['product_name'],
                        'brand'=>$row['brand'],
						'image'=>$row['image'],
                        'quantity'=>$row['quantity'],
                        'category_name'=>$row['category_name'],
                        'status'=>$row['status'],
						'description'=>$row['description'],
                        'mer_sku'=>$row['mer_sku'],
                        'product_sku'=>$row['product_sku'],
                        'item_price'=>$row['item_price'],
						'price_d'=>$row['price_d'],
                        'weight'=>$row['weight'],
                        'country_code'=>$row['country_code'],
                        'shipping_fee'=>$row['shipping_fee'],
						'ship_in'=>$row['ship_in'],
                        'paid_by'=>$row['paid_by'],
                        'discount'=>$row['discount'],
                        'date'=>$row['date'],
						'commission_type'=>$row['commission_type'],
                        'deal_check'=>$row['deal_check'],
						'offer_price'=>$row['offer_price'],
                    );
                    $this->csv_model->insert_csv($insert_data);
                }
                $this->session->set_flashdata('success', 'Csv Data Imported Succesfully');
                redirect(base_url().'show_product/s_product');
                //echo "<pre>"; print_r($insert_data);
            } else 
                $data['error'] = "Error occured";
                $this->load->view('csv/csvindex', $data);
            }
			$this->load->view('seller/footer');
        } 
 
}
?>