<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class test extends MS_Controller
{
    public function update_im(){
        $this->load->model('tests');
        $this->tests->update_images();
    }

    public function d_c(){
        $this->load->model('tests');
        $this->tests->ExportCSV();
        redirect(basE_url('show_product/s_product'));
    }
}