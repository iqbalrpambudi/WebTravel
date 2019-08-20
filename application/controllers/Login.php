<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Login extends CI_Controller{

    public function __construct(){
        parent::__construct();
        $this->load->library('form_validation');
    }

    public function index(){
        $this->load->view('login/login');
    }

    public function login(){ 
        $this->form_validation->set_rules('username','Username','required|trim');
        $this->form_validation->set_rules('password','Password','required|trim');
        if ($this->form_validation->run()==false){
            $this->session->set_flashdata('error','<div class="alert alert-danger" role="alert">Login Salah</div>');
            redirect('login');
        }
        else {
        $this->_auth();
        }
    }
    private function _auth(){
        $username   = $this->input->post('username');
        $password   = $this->input->post('password');
        $user = $this->db->get_where('users',['username' => $username])->row_array();
        if ($user) {
            if ($user['is_active']==1) {
                if (password_verify($password,$user['password'])) {
                    $data = [
                        'username'  =>$username
                    ];
                    $this->session->set_userdata($data);
                    redirect('admin');
                }else{
                    $this->session->set_flashdata('message','<div class="alert alert-danger" role="alert">Password Salah</div>');
                    redirect('login');
                }
            }
            else {
                $this->session->set_flashdata('message','<div class="alert alert-danger" role="alert">Login gagal, Username tidak terdaftar</div>');
                redirect('login');
            }
        }
        else {
            $this->session->set_flashdata('message','<div class="alert alert-danger" role="alert">Login gagal, Username tidak terdaftar</div>');
            redirect('login');
        }
    }
    
}
    