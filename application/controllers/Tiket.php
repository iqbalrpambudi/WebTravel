<?php 
class Tiket extends CI_Controller{
    public function index(){
        $this->load->model('Admin_model');
        $data['judul']='Tiket Pesawat';
        $data['datas']=$this->Admin_model->getData();
        $this->load->view('template/header',$data);
        $this->load->view('template/navbar');
        $this->load->view('tiket-pesawat');
        $this->load->view('template/footer');
    }
}
