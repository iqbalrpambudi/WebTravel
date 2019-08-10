<?php 
class Paket extends CI_Controller{
    public function index(){
        $data['judul']='Paket Wisata';
        $this->load->view('template/header',$data);
        $this->load->view('template/navbar');
        $this->load->view('paket-wisata');
        $this->load->view('template/footer');
    }
}
