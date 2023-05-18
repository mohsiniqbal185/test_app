<?php 

class Printreport extends CI_Controller{
    public function index(){
        $formData = $this->input->post();
        $data['formdata']=$formData;
        $this->load->helper('url');
        $this->load->view('reportpdf',$data);
    }
}


?>