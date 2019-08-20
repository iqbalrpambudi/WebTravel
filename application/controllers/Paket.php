<?php 
class Paket extends CI_Controller{
    public function index(){
        $this->load->model('Admin_model');
        $data['judul']='Paket Wisata';
        $data['paket']=$this->Admin_model->getAllPaket();
        $data['lokasi']=$this->Admin_model->getAllLokasi();
        $data['distict']=$this->Admin_model->selectDistictLokasi();
        $data['datas']=$this->Admin_model->getData();
        $this->load->view('template/header',$data);
        $this->load->view('template/navbar');
        $this->load->view('paket-wisata');
        $this->load->view('template/footer');
    }
}
