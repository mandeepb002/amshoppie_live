
<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class fetch_api extends MS_Controller {

	 public function fetch1(){
		 $data = array(
		 'id' => $this->input->post('id'),
		 );
		
		 $this->load->model('fetch');
		 $datx=$this->fetch->fetch_details($data);
		 print_r($datx);
	 }
}