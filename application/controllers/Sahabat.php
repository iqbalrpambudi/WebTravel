<?php 
class Sahabat extends CI_Controller{
    public function index(){
        $data['judul']='Sahabat';
        $this->load->view('template/header',$data);
        $this->load->view('template/navbar');
        $this->load->view('sahabat');
        $this->load->view('template/footer');
    }
}
