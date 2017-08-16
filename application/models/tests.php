<?php
class tests extends CI_Model{
    public function update_images(){
        $con = array(
            'image' => 'uploads/almirah.jpg'
        );
        $this->db->update('categories',$con);
    }

    function ExportCSV()
    {
        $this->load->dbutil();
        $this->load->helper('file');
        $this->load->helper('download');
        $delimiter = ",";
        $newline = "\r\n";
        $filename = "filename_you_wish.csv";
        $query = "SELECT * FROM `product` limit 2";
        $result = $this->db->query($query);
        $data = $this->dbutil->csv_from_result($result, $delimiter, $newline);
        force_download($filename, $data);
    }
}