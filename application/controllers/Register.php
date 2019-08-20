<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Register extends CI_Controller{

    public function __construct(){
        parent::__construct();
        $this->load->library('form_validation');
    }

    public function index(){
        $this->load->view('login/register');
    }

    public function daftar(){ 
        $this->form_validation->set_rules('username','Username','required|trim');
        $this->form_validation->set_rules('password','Password','required|trim');
        if ($this->form_validation->run()==false){
            $this->load->view('login/register');
        }
        else {
        $data =[
            'id'        => 1,
            'username'  => htmlspecialchars($this->input->post('username',true)),
            'password'  => password_hash($this->input->post('password'),PASSWORD_DEFAULT),
            'is_active' => 1
        ];

        $this->db->insert('users',$data);
        $this->session->set_flashdata('message','<div class="alert alert-success" role="alert">Data telah dibuat !</div>');
        redirect('login');
        }
    
    }
}
