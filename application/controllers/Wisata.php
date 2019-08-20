<?php 
class Wisata extends CI_Controller{
    public function index(){
        $this->load->model('Admin_model');
        $data['judul']='Tempat Wisata';
        $data['lokasi']=$this->Admin_model->getAllLokasi();
        $data['distict']=$this->Admin_model->selectDistictLokasi();
        $data['datas']=$this->Admin_model->getData();
        $this->load->view('template/header',$data);
        $this->load->view('template/navbar');
        $this->load->view('tempat-wisata');
        $this->load->view('template/footer');
    }
}
