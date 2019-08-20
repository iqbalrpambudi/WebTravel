<?php 
class Rohani extends CI_Controller{
    public function index(){
        $this->load->model('Admin_model');
        $data['judul']='Wisata Rohani';
        $data['rohani']=$this->Admin_model->getAllPaketRohani();
        $data['datas']=$this->Admin_model->getData();
        $this->load->view('template/header',$data);
        $this->load->view('template/navbar');
        $this->load->view('wisata-rohani');
        $this->load->view('template/footer');
    }
}
