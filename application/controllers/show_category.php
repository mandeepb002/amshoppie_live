<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class show_category extends MS_Controller {

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
	  public function s_category() {
	
    $this->load->model("show_categorys");
    $data['records'] = $this->show_categorys->s_categorys();
    $this->load->view("view_category",$data);
}
}