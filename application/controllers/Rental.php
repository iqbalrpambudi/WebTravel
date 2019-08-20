<?php 
class Rental extends CI_Controller{
    public function index(){
        $this->load->model('Admin_model');
        $data['judul']='Rental Mobil';
        $data['mobil']=$this->Admin_model->getAllMobil();
        $data['datas']=$this->Admin_model->getData();
        $this->load->view('template/header',$data);
        $this->load->view('template/navbar');
        $this->load->view('rental-mobil');
        $this->load->view('template/footer');
    }
}
