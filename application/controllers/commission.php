<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class commission extends MS_Controller {

    public function add_commission() {
        $id = $_GET['id'];
        $this->load->model('commission_model');
        $this->load->model('settings');
        $this->load->model("users");
        $data['bank_details'] = $this->users->view_bank_details();
        $data['commission'] = $this->commission_model->comissions($id);
        $data['tp_based_commission'] = $this->commission_model->cal_tp_comissions($id);
        $data['seller_invoice_data'] = $this->commission_model->seller_invoice_data();
        $data['cal_commission'] = $this->commission_model->cal_comissions($id);
        $data['grand_total'] = $this->commission_model->grand_total($id);

        $this->load->view('commission/add_commission', $data);
    }

    public function save_bank_details() {
        $this->load->model('commission_model');
        $bank_id = $_POST['bank_id'];
        $invoice_amount = $_POST['invoice_amount'];
        $result = $this->commission_model->save_bank_details($bank_id, $invoice_amount);
        echo json_encode($result);
        exit;
    }

}
