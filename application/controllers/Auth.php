<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller {

    public function __construct() {
        parent::__construct();
        if ($this->session->userdata('status') == 'admin') {           
            redirect('admin');
        }elseif($this->session->userdata('status') == 'user'){
           redirect('user');
        }
        $this->load->library('form_validation');
        $this->load->model('Autentifikasi_model', 'auth');
    }

    public function index() {
        $this->form_validation->set_rules('username', 'Username', 'required|trim');
        $this->form_validation->set_rules('password', 'Password', 'required|trim');
        if ($this->form_validation->run() == false) {
            $data['title'] = 'Login';
            $this->load->view('templates/auth_header', $data);
            $this->load->view('auth/login');
            $this->load->view('templates/auth_footer');
        } else {
            $username = $this->input->post('username');
            $password = $this->input->post('password');
            $this->auth->checkUser($username, $password);
        }
    }

     public function blocked()
    {
        $this->load->view('templatesUser/header');
        $this->load->view('auth/blocked');
        $this->load->view('templatesUser/footer');
    }

}
