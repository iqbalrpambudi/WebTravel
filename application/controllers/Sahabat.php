<?php 
class Sahabat extends CI_Controller{
    public function index(){
        $this->load->model('Admin_model');
        $data['judul']='Sahabat';
        $data['testimoni']=$this->Admin_model->getAllTestimoni();
        $this->load->view('template/header',$data);
        $this->load->view('template/navbar');
        $this->load->view('sahabat');
        $this->load->view('template/footer');
    }
}
