<?php

class Books extends MS_Controller
{

public function books_page()
     {

          // Datatables Variables
          $draw = intval($this->input->get("draw"));
          $start = intval($this->input->get("start"));
          $length = intval($this->input->get("length"));

		 	$this->load->model("pagination_model");
          $books = $this->pagination_model->get_product();

          $data = array();

          foreach($books->result() as $r) {

               $data[] = array(
                    $r->user_id,
                    $r->product_name,
                    $r->description,
                    $r->status,
                    $r->quantity
               );
          }

          $output = array(
               "draw" => $draw,
                 "recordsTotal" => $books->num_rows(),
                 "recordsFiltered" => $books->num_rows(),
                 "data" => $data
            );
          echo json_encode($output);
          
     }
}