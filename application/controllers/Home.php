<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Home extends CI_Controller{

    public function index(){
        $this->load->model('Admin_model');
        $data['judul']='Home';
        $data['mobil']=$this->Admin_model->getAllMobil();
        $data['paket']=$this->Admin_model->getAllPaket();
        $data['lokasi']=$this->Admin_model->getAllLokasi();
        $data['testimoni']=$this->Admin_model->getAllTestimoni();
        $data['distict']=$this->Admin_model->selectDistictLokasi();
        $data['datas']=$this->Admin_model->getData();
        $this->load->view('template/header',$data);
        $this->load->view('template/navbar');
        $this->load->view('home');
        $this->load->view('template/footer');
    }
}
