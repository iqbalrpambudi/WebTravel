<?php 
class Rohani extends CI_Controller{
    public function index(){
        $data['judul']='Wisata Rohani';
        $this->load->view('template/header',$data);
        $this->load->view('template/navbar');
        $this->load->view('wisata-rohani');
        $this->load->view('template/footer');
    }
}
