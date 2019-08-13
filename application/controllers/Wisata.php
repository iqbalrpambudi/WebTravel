<?php 
class Wisata extends CI_Controller{
    public function index(){
        $data['judul']='Tempat Wisata';
        $this->load->view('template/header',$data);
        $this->load->view('template/navbar');
        $this->load->view('tempat-wisata');
        $this->load->view('template/footer');
    }
}
