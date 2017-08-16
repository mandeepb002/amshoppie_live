<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class pagination extends MS_Controller
{

    public function __construct() {
        Parent::__construct();
        $this->load->model("pagination_model");
    }

     public function index()
     {
          $this->load->view("seller/pagination", array());

     }

}
?>