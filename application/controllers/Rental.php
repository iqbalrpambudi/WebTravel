<?php 
class Rental extends CI_Controller{
    public function index(){
        $data['judul']='Rental Mobil';
        $this->load->view('template/header',$data);
        $this->load->view('template/navbar');
        $this->load->view('rental-mobil');
        $this->load->view('template/footer');
    }
}
