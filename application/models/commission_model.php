<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class commission_model extends CI_Model {

    public function grand_total($id) {

        $this->db->select_sum('grand_total');
        $this->db->from('orders');
        $this->db->where('user_id', $id);
        $query = $this->db->get();
        return $query->row()->grand_total;
    }

    public function comissions($id) {
        $row = $this->db->query("SELECT B.platform, B.marketing, (B.platform + B.marketing
) AS total FROM `subscribe_comission` JOIN `comission_sale` AS B ON ( B.id = subscribe_comission.plan_id AND subscribe_comission.user_id =$id ) JOIN product C ON ( C.user_id = subscribe_comission.user_id AND C.`commission_type` =2)JOIN orders D ON ( D.product_id = C.id)");
        if ($row->num_rows() > 0) {
            return $row->row()->total;
        }
    }

    public function cal_tp_comissions($id) {
        $row = $this->db->query("SELECT grand_total as cal_tp_based_commission FROM `orders` join `product` as A on (A.id=orders.product_id and A.user_id=orders.user_id and A.`user_id`=$id and A.commission_type=1)");
        if ($row->num_rows() > 0) {
            return $row->row()->cal_tp_based_commission;
        }
    }

    public function cal_comissions($id) {
        $row = $this->db->query("SELECT grand_total as cal_commission FROM `orders` join `product` as A on (A.id=orders.product_id and A.user_id=orders.user_id and A.`user_id`=$id and A.commission_type=2)");
        if ($row->num_rows() > 0) {
            return $row->row()->cal_commission;
        }
    }

    public function save_bank_details($bank_id, $amount) {
        $this->db->select('user_id');
        $this->db->from('bank_details');
        $this->db->where('id', $bank_id);
        $bankid = $this->db->get();
        $varUserID = $bankid->row();
        $seller_id = isset($varUserID->user_id) && !empty($varUserID) ? $varUserID->user_id : '';

        $send_by_id = $this->session->userdata('user_id');
        $status = 1;
        $date = date('Y-m-d');
        $data = array('seller_id' => $seller_id,
            'send_by_id' => $send_by_id,
            'amount' => $amount,
            'status' => '1',
            'date' => $date
        );
        $InsertQuery = $this->db->insert('seller_invoice', $data);
        $result = $this->db->get('seller_invoice')->result();
        return $result;

    }

    public function seller_invoice_data() {

        $this->db->select('*');
        $this->db->from('seller_invoice');
        $query = $this->db->get();
        return $query->result();
    }

}
