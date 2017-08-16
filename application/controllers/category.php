<?php
class category extends MS_Controller{
	public function show_main_cat(){
        $this->load->model('categoryy');
        $data = $this->categoryy->show_main_cats();
        if($data==true){
            $this->load->helper('json');
            echo json_return('true',$data);
        }else{
            $this->load->helper('json');
            echo json_return('false',"No data found");
        }
    }

    public function show_sub(){
	    $data = array(
	        'parent_id' => $this->input->post('id'),
        );
        $this->load->model('categoryy');
        $data = $this->categoryy->show_subs($data);
        if($data==true){
            $this->load->helper('json');
            echo json_return('true',$data);
        }else{
            $this->load->helper('json');
            echo json_return('false',"No data found");
        }

    }




	}
