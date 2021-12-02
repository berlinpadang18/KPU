<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller {

    public function __construct() {
        parent::__construct();
        if ($this->session->userdata('status') != 'admin') {
            if ($data) {
                # code...
                redirect('auth/blocked', $data);
            } else {
                $data = '';
                redirect('auth/blocked', $data);
            }
        }
        $this->load->model('Autentifikasi_model', 'auth');
        $this->load->model('Admin_model', 'admin');
        $this->load->library('excel');
        
    }

    public function index() {
        $data['title'] = 'Dashboard';
        $data['sidebar'] = 'Administrator';
        $data['user'] = $this->auth->sessionCheck($this->session->userdata('status'));
        $data['bar'] = $this->admin->bar();
        $data['invalid'] = $this->admin->get_count_invalid();
        $data['valid'] = $this->admin-> get_count_valid();
        $this->load->view('templatesAdmin/header', $data);
        $this->load->view('templatesAdmin/sidebar', $data);
        $this->load->view('templatesAdmin/topbar', $data);
        $this->load->view('admin/index', $data);
        $this->load->view('templatesAdmin/footer', $data);
    }

    //CHART PRESIDEN
    public function chartPresiden() {
        $data['title'] = 'Dashboard';
        $data['sidebar'] = 'Administrator';
        $data['user'] = $this->auth->sessionCheck($this->session->userdata('status'));
        $data['bar'] = $this->admin->bar();
        $this->load->view('templatesAdmin/header', $data);
        $this->load->view('templatesAdmin/sidebar', $data);
        $this->load->view('templatesAdmin/topbar', $data);
        $this->load->view('admin/chartPresiden', $data);
        $this->load->view('templatesAdmin/footer', $data);
    }

    //CHART BEM
    public function chartBEMFST() {
        $data['title'] = 'Dashboard';
        $data['sidebar'] = 'Administrator';
        $data['user'] = $this->auth->sessionCheck($this->session->userdata('status'));
        $data['bar'] = $this->admin->bar();
        $this->load->view('templatesAdmin/header', $data);
        $this->load->view('templatesAdmin/sidebar', $data);
        $this->load->view('templatesAdmin/topbar', $data);
        $this->load->view('admin/chartBEMFST', $data);
        $this->load->view('templatesAdmin/footer', $data);
    }

    public function chartBEMFFarmasi() {
        $data['title'] = 'Dashboard';
        $data['sidebar'] = 'Administrator';
        $data['user'] = $this->auth->sessionCheck($this->session->userdata('status'));
        $data['bar'] = $this->admin->bar();
        $this->load->view('templatesAdmin/header', $data);
        $this->load->view('templatesAdmin/sidebar', $data);
        $this->load->view('templatesAdmin/topbar', $data);
        $this->load->view('admin/chartBEMFFarmasi', $data);
        $this->load->view('templatesAdmin/footer', $data);
    }

    public function chartBEMFPsikologi() {
        $data['title'] = 'Dashboard';
        $data['sidebar'] = 'Administrator';
        $data['user'] = $this->auth->sessionCheck($this->session->userdata('status'));
        $data['bar'] = $this->admin->bar();
        $this->load->view('templatesAdmin/header', $data);
        $this->load->view('templatesAdmin/sidebar', $data);
        $this->load->view('templatesAdmin/topbar', $data);
        $this->load->view('admin/chartBEMFPsikologi', $data);
        $this->load->view('templatesAdmin/footer', $data);
    }

    public function chartBEMFEkonomi() {
        $data['title'] = 'Dashboard';
        $data['sidebar'] = 'Administrator';
        $data['user'] = $this->auth->sessionCheck($this->session->userdata('status'));
        $data['bar'] = $this->admin->bar();
        $this->load->view('templatesAdmin/header', $data);
        $this->load->view('templatesAdmin/sidebar', $data);
        $this->load->view('templatesAdmin/topbar', $data);
        $this->load->view('admin/chartBEMFEkonomi', $data);
        $this->load->view('templatesAdmin/footer', $data);
    }

    public function chartBEMFKIP() {
        $data['title'] = 'Dashboard';
        $data['sidebar'] = 'Administrator';
        $data['user'] = $this->auth->sessionCheck($this->session->userdata('status'));
        $data['bar'] = $this->admin->bar();
        $this->load->view('templatesAdmin/header', $data);
        $this->load->view('templatesAdmin/sidebar', $data);
        $this->load->view('templatesAdmin/topbar', $data);
        $this->load->view('admin/chartBEMFKIP', $data);
        $this->load->view('templatesAdmin/footer', $data);
    }

    public function chartBEMFTeologi() {
        $data['title'] = 'Dashboard';
        $data['sidebar'] = 'Administrator';
        $data['user'] = $this->auth->sessionCheck($this->session->userdata('status'));
        $data['bar'] = $this->admin->bar();
        $this->load->view('templatesAdmin/header', $data);
        $this->load->view('templatesAdmin/sidebar', $data);
        $this->load->view('templatesAdmin/topbar', $data);
        $this->load->view('admin/chartBEMFTeologi', $data);
        $this->load->view('templatesAdmin/footer', $data);
    }

    //CHART HM FST
    public function chartHMInformatika() {
        $data['title'] = 'Dashboard';
        $data['sidebar'] = 'Administrator';
        $data['user'] = $this->auth->sessionCheck($this->session->userdata('status'));
        $data['bar'] = $this->admin->bar();
        $this->load->view('templatesAdmin/header', $data);
        $this->load->view('templatesAdmin/sidebar', $data);
        $this->load->view('templatesAdmin/topbar', $data);
        $this->load->view('admin/chartHMInformatika', $data);
        $this->load->view('templatesAdmin/footer', $data);
    }

    public function chartHMTeknikElektro() {
        $data['title'] = 'Dashboard';
        $data['sidebar'] = 'Administrator';
        $data['user'] = $this->auth->sessionCheck($this->session->userdata('status'));
        $data['bar'] = $this->admin->bar();
        $this->load->view('templatesAdmin/header', $data);
        $this->load->view('templatesAdmin/sidebar', $data);
        $this->load->view('templatesAdmin/topbar', $data);
        $this->load->view('admin/chartHMTeknikElektro', $data);
        $this->load->view('templatesAdmin/footer', $data);
    }

    public function chartHMTeknikMesin() {
        $data['title'] = 'Dashboard';
        $data['sidebar'] = 'Administrator';
        $data['user'] = $this->auth->sessionCheck($this->session->userdata('status'));
        $data['bar'] = $this->admin->bar();
        $this->load->view('templatesAdmin/header', $data);
        $this->load->view('templatesAdmin/sidebar', $data);
        $this->load->view('templatesAdmin/topbar', $data);
        $this->load->view('admin/chartHMTeknikMesin', $data);
        $this->load->view('templatesAdmin/footer', $data);
    }

    public function chartHMMatematikaMurni() {
        $data['title'] = 'Dashboard';
        $data['sidebar'] = 'Administrator';
        $data['user'] = $this->auth->sessionCheck($this->session->userdata('status'));
        $data['bar'] = $this->admin->bar();
        $this->load->view('templatesAdmin/header', $data);
        $this->load->view('templatesAdmin/sidebar', $data);
        $this->load->view('templatesAdmin/topbar', $data);
        $this->load->view('admin/chartHMMatematikaMurni', $data);
        $this->load->view('templatesAdmin/footer', $data);
    }

    //CHART HM FKIP
    public function chartHMPendEkonomi_Akuntansi() {
        $data['title'] = 'Dashboard';
        $data['sidebar'] = 'Administrator';
        $data['user'] = $this->auth->sessionCheck($this->session->userdata('status'));
        $data['bar'] = $this->admin->bar();
        $this->load->view('templatesAdmin/header', $data);
        $this->load->view('templatesAdmin/sidebar', $data);
        $this->load->view('templatesAdmin/topbar', $data);
        $this->load->view('admin/chartHMPendEkonomi_Akuntansi', $data);
        $this->load->view('templatesAdmin/footer', $data);
    }

    public function chartHMPendMatematika() {
        $data['title'] = 'Dashboard';
        $data['sidebar'] = 'Administrator';
        $data['user'] = $this->auth->sessionCheck($this->session->userdata('status'));
        $data['bar'] = $this->admin->bar();
        $this->load->view('templatesAdmin/header', $data);
        $this->load->view('templatesAdmin/sidebar', $data);
        $this->load->view('templatesAdmin/topbar', $data);
        $this->load->view('admin/chartHMPendMatematika', $data);
        $this->load->view('templatesAdmin/footer', $data);
    }

    public function chartHMPendBiologi() {
        $data['title'] = 'Dashboard';
        $data['sidebar'] = 'Administrator';
        $data['user'] = $this->auth->sessionCheck($this->session->userdata('status'));
        $data['bar'] = $this->admin->bar();
        $this->load->view('templatesAdmin/header', $data);
        $this->load->view('templatesAdmin/sidebar', $data);
        $this->load->view('templatesAdmin/topbar', $data);
        $this->load->view('admin/chartHMPendBiologi', $data);
        $this->load->view('templatesAdmin/footer', $data);
    }

    public function chartHMPendFisika() {
        $data['title'] = 'Dashboard';
        $data['sidebar'] = 'Administrator';
        $data['user'] = $this->auth->sessionCheck($this->session->userdata('status'));
        $data['bar'] = $this->admin->bar();
        $this->load->view('templatesAdmin/header', $data);
        $this->load->view('templatesAdmin/sidebar', $data);
        $this->load->view('templatesAdmin/topbar', $data);
        $this->load->view('admin/chartHMPendFisika', $data);
        $this->load->view('templatesAdmin/footer', $data);
    }

    public function chartHMHIMKA() {
        $data['title'] = 'Dashboard';
        $data['sidebar'] = 'Administrator';
        $data['user'] = $this->auth->sessionCheck($this->session->userdata('status'));
        $data['bar'] = $this->admin->bar();
        $this->load->view('templatesAdmin/header', $data);
        $this->load->view('templatesAdmin/sidebar', $data);
        $this->load->view('templatesAdmin/topbar', $data);
        $this->load->view('admin/chartHMHIMKA', $data);
        $this->load->view('templatesAdmin/footer', $data);
    }

    public function chartHMPSEJ() {
        $data['title'] = 'Dashboard';
        $data['sidebar'] = 'Administrator';
        $data['user'] = $this->auth->sessionCheck($this->session->userdata('status'));
        $data['bar'] = $this->admin->bar();
        $this->load->view('templatesAdmin/header', $data);
        $this->load->view('templatesAdmin/sidebar', $data);
        $this->load->view('templatesAdmin/topbar', $data);
        $this->load->view('admin/chartHMPSEJ', $data);
        $this->load->view('templatesAdmin/footer', $data);
    }

    public function chartHMPBI() {
        $data['title'] = 'Dashboard';
        $data['sidebar'] = 'Administrator';
        $data['user'] = $this->auth->sessionCheck($this->session->userdata('status'));
        $data['bar'] = $this->admin->bar();
        $this->load->view('templatesAdmin/header', $data);
        $this->load->view('templatesAdmin/sidebar', $data);
        $this->load->view('templatesAdmin/topbar', $data);
        $this->load->view('admin/chartHMPBI', $data);
        $this->load->view('templatesAdmin/footer', $data);
    }

    public function chartHMPBSI() {
        $data['title'] = 'Dashboard';
        $data['sidebar'] = 'Administrator';
        $data['user'] = $this->auth->sessionCheck($this->session->userdata('status'));
        $data['bar'] = $this->admin->bar();
        $this->load->view('templatesAdmin/header', $data);
        $this->load->view('templatesAdmin/sidebar', $data);
        $this->load->view('templatesAdmin/topbar', $data);
        $this->load->view('admin/chartHMPBSI', $data);
        $this->load->view('templatesAdmin/footer', $data);
    }

    public function chartHMPGSD() {
        $data['title'] = 'Dashboard';
        $data['sidebar'] = 'Administrator';
        $data['user'] = $this->auth->sessionCheck($this->session->userdata('status'));
        $data['bar'] = $this->admin->bar();
        $this->load->view('templatesAdmin/header', $data);
        $this->load->view('templatesAdmin/sidebar', $data);
        $this->load->view('templatesAdmin/topbar', $data);
        $this->load->view('admin/chartHMPGSD', $data);
        $this->load->view('templatesAdmin/footer', $data);
    }
    
    public function chartHMJPMIPA() {
        $data['title'] = 'Dashboard';
        $data['sidebar'] = 'Administrator';
        $data['user'] = $this->auth->sessionCheck($this->session->userdata('status'));
        $data['bar'] = $this->admin->bar();
        $this->load->view('templatesAdmin/header', $data);
        $this->load->view('templatesAdmin/sidebar', $data);
        $this->load->view('templatesAdmin/topbar', $data);
        $this->load->view('admin/chartHMJPMIPA', $data);
        $this->load->view('templatesAdmin/footer', $data);
    }

    //CHART HM SASTRA
    public function chartHMSejarah() {
        $data['title'] = 'Dashboard';
        $data['sidebar'] = 'Administrator';
        $data['user'] = $this->auth->sessionCheck($this->session->userdata('status'));
        $data['bar'] = $this->admin->bar();
        $this->load->view('templatesAdmin/header', $data);
        $this->load->view('templatesAdmin/sidebar', $data);
        $this->load->view('templatesAdmin/topbar', $data);
        $this->load->view('admin/chartHMSejarah', $data);
        $this->load->view('templatesAdmin/footer', $data);
    }

    public function chartHMSASING() {
        $data['title'] = 'Dashboard';
        $data['sidebar'] = 'Administrator';
        $data['user'] = $this->auth->sessionCheck($this->session->userdata('status'));
        $data['bar'] = $this->admin->bar();
        $this->load->view('templatesAdmin/header', $data);
        $this->load->view('templatesAdmin/sidebar', $data);
        $this->load->view('templatesAdmin/topbar', $data);
        $this->load->view('admin/chartHMSASING', $data);
        $this->load->view('templatesAdmin/footer', $data);
    }

    public function chartHMSASINDO() {
        $data['title'] = 'Dashboard';
        $data['sidebar'] = 'Administrator';
        $data['user'] = $this->auth->sessionCheck($this->session->userdata('status'));
        $data['bar'] = $this->admin->bar();
        $this->load->view('templatesAdmin/header', $data);
        $this->load->view('templatesAdmin/sidebar', $data);
        $this->load->view('templatesAdmin/topbar', $data);
        $this->load->view('admin/chartHMSASINDO', $data);
        $this->load->view('templatesAdmin/footer', $data);
    }

    //CHART HM EKONOMI
    public function chartHMEkonomi() {
        $data['title'] = 'Dashboard';
        $data['sidebar'] = 'Administrator';
        $data['user'] = $this->auth->sessionCheck($this->session->userdata('status'));
        $data['bar'] = $this->admin->bar();
        $this->load->view('templatesAdmin/header', $data);
        $this->load->view('templatesAdmin/sidebar', $data);
        $this->load->view('templatesAdmin/topbar', $data);
        $this->load->view('admin/chartHMEkonomi', $data);
        $this->load->view('templatesAdmin/footer', $data);
    }

    public function chartHMAkuntansi() {
        $data['title'] = 'Dashboard';
        $data['sidebar'] = 'Administrator';
        $data['user'] = $this->auth->sessionCheck($this->session->userdata('status'));
        $data['bar'] = $this->admin->bar();
        $this->load->view('templatesAdmin/header', $data);
        $this->load->view('templatesAdmin/sidebar', $data);
        $this->load->view('templatesAdmin/topbar', $data);
        $this->load->view('admin/chartHMAkuntansi', $data);
        $this->load->view('templatesAdmin/footer', $data);
    }

    public function chartHMManajemen() {
        $data['title'] = 'Dashboard';
        $data['sidebar'] = 'Administrator';
        $data['user'] = $this->auth->sessionCheck($this->session->userdata('status'));
        $data['bar'] = $this->admin->bar();
        $this->load->view('templatesAdmin/header', $data);
        $this->load->view('templatesAdmin/sidebar', $data);
        $this->load->view('templatesAdmin/topbar', $data);
        $this->load->view('admin/chartHMManajemen', $data);
        $this->load->view('templatesAdmin/footer', $data);
    }
    
    public function chartDPMFarmasi() {
        $data['title'] = 'Dashboard';
        $data['sidebar'] = 'Administrator';
        $data['user'] = $this->auth->sessionCheck($this->session->userdata('status'));
        $data['bar'] = $this->admin->bar();
        $this->load->view('templatesAdmin/header', $data);
        $this->load->view('templatesAdmin/sidebar', $data);
        $this->load->view('templatesAdmin/topbar', $data);
        $this->load->view('admin/chartDPMFarmasi', $data);
        $this->load->view('templatesAdmin/footer', $data);
    }

    public function chartDPMPsikologi() {
        $data['title'] = 'Dashboard';
        $data['sidebar'] = 'Administrator';
        $data['user'] = $this->auth->sessionCheck($this->session->userdata('status'));
        $data['bar'] = $this->admin->bar();
        $this->load->view('templatesAdmin/header', $data);
        $this->load->view('templatesAdmin/sidebar', $data);
        $this->load->view('templatesAdmin/topbar', $data);
        $this->load->view('admin/chartDPMPsikologi', $data);
        $this->load->view('templatesAdmin/footer', $data);
    }
    
    public function profile() {
        $data['title'] = 'Profile';
        $data['sidebar'] = 'Administrator';
        $data['user'] = $this->auth->sessionCheck($this->session->userdata('status'));
        $this->load->view('templatesAdmin/header', $data);
        $this->load->view('templatesAdmin/sidebar', $data);
        $this->load->view('templatesAdmin/topbar', $data);
        $this->load->view('admin/profile', $data);
        $this->load->view('templatesAdmin/footer', $data);
    }

    public function changePassword() {
        $data['title'] = 'Change Password';
        $data['sidebar'] = 'Administrator';
        $data['user'] = $this->auth->sessionCheck($this->session->userdata('status'));

        $this->form_validation->set_rules('current_password', 'Current Password', 'required|trim');
        $this->form_validation->set_rules(
                'password1', 'New Password', 'required|trim|min_length[3]|matches[password2]', [
            'matches' => 'Password dont match!',
            'min_length' => 'Password to short!'
                ]
        );
        $this->form_validation->set_rules(
                'password2', 'Confirm New Password', 'required|trim|min_length[3]|matches[password1]', [
            'matches' => 'Password dont match!',
            'min_length' => 'Password to short!'
                ]
        );

        if ($this->form_validation->run() == false) {
            # code...
            $this->load->view('templatesAdmin/header', $data);
            $this->load->view('templatesAdmin/sidebar', $data);
            $this->load->view('templatesAdmin/topbar', $data);
            $this->load->view('admin/changepassword', $data);
            $this->load->view('templatesAdmin/footer', $data);
        } else {
            $currentPass = $this->input->post('current_password');
            $Pass = $this->input->post('password1');
            if (!password_verify($currentPass, $data['user']['pass'])) {
                $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
                Wrong Current Password! </div>');
                redirect('admin/changepassword');
            } else {
                if ($currentPass == $Pass) {
                    $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
                New password cannot be the same as current password! </div>');
                    redirect('admin/changepassword');
                } else {
                    $newPass = password_hash($Pass, PASSWORD_DEFAULT);
                    $this->db->set('pass', $newPass);
                    $this->db->where('user', $data['user']['user']);
                    $this->db->update('admin');
                    $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
                    Your Password has been updated! </div>');
                    redirect('admin/profile');
                }
            }
        }
    }

    public function user() {
        $data['title'] = 'Mahasiswa';
        $data['sidebar'] = 'Administrator';
        $data['user'] = $this->auth->sessionCheck($this->session->userdata('status'));
        $data['data'] = $this->admin->allUser();
        $data['dataInvalid'] = $this->admin->invalidMahasiswa();
        $this->load->view('templatesAdmin/header', $data);
        $this->load->view('templatesAdmin/sidebar', $data);
        $this->load->view('templatesAdmin/topbar', $data);
        $this->load->view('admin/user', $data);
        $this->load->view('templatesAdmin/footer', $data);
    }

    public function invalidMahasiswa() {
        $data['title'] = 'Mahasiswa yang belum memilih';
        $data['sidebar'] = 'Administrator';
        $data['user'] = $this->auth->sessionCheck($this->session->userdata('status'));
        $data['dataInvalid'] = $this->admin->invalidMahasiswa();
        $this->load->view('templatesAdmin/header', $data);
        $this->load->view('templatesAdmin/sidebar', $data);
        $this->load->view('templatesAdmin/topbar', $data);
        $this->load->view('admin/invalidMahasiswa', $data);
        $this->load->view('templatesAdmin/footer', $data);
    }

    public function validMahasiswa() {
        $data['title'] = 'Mahasiswa yang sudah memilih';
        $data['sidebar'] = 'Administrator';
        $data['user'] = $this->auth->sessionCheck($this->session->userdata('status'));
        $data['data'] = $this->admin->allUser();
        $data['dataValid'] = $this->admin->validMahasiswa();
        $this->load->view('templatesAdmin/header', $data);
        $this->load->view('templatesAdmin/sidebar', $data);
        $this->load->view('templatesAdmin/topbar', $data);
        $this->load->view('admin/validMahasiswa', $data);
        $this->load->view('templatesAdmin/footer', $data);
    }

    public function admin() {
        $data['title'] = 'Admin';
        $data['sidebar'] = 'Administrator';
        $data['user'] = $this->auth->sessionCheck($this->session->userdata('status'));
        $data['data'] = $this->admin->allAdmin();
        $this->load->view('templatesAdmin/header', $data);
        $this->load->view('templatesAdmin/sidebar', $data);
        $this->load->view('templatesAdmin/topbar', $data);
        $this->load->view('admin/admin', $data);
        $this->load->view('templatesAdmin/footer', $data);
    }

     public function changeName($id) {
        $data['title'] = 'Change Name';
        $data['sidebar'] = 'Administrator';
        $data['user'] = $this->auth->sessionCheck($this->session->userdata('status'));
        $this->form_validation->set_rules('username', 'Username', 'required|trim');
        $this->form_validation->set_rules('nama', 'Nama', 'required|trim');
        
        if ($this->form_validation->run() == false) {
            # code...
            $this->load->view('templatesAdmin/header', $data);
            $this->load->view('templatesAdmin/sidebar', $data);
            $this->load->view('templatesAdmin/topbar', $data);
            $this->load->view('admin/changeName', $data);
            $this->load->view('templatesAdmin/footer', $data);
        } else {

            $user = $this->input->post('username');
            $nama = $this->input->post('nama'); 

            $this->db->set('user', $user);
            $this->db->set('nama', $nama);
            $this->db->where('id', $id);
            $this->db->update('admin');
            $data = [
                'username' => $user
            ];
            $this->session->set_userdata($data);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
            Your Name has been updated! </div>');
            redirect('admin/profile');
                
        }
    }

    public function kadidat() {
        $data['title'] = 'Kadidat';
        $data['sidebar'] = 'Administrator';
        $data['user'] = $this->auth->sessionCheck($this->session->userdata('status'));
        $data['data'] = $this->admin->kadidat();
        $this->load->view('templatesAdmin/header', $data);
        $this->load->view('templatesAdmin/sidebar', $data);
        $this->load->view('templatesAdmin/topbar', $data);
        $this->load->view('admin/kadidat', $data);
        $this->load->view('templatesAdmin/footer', $data);
    }

    public function screening() {
        $data['title'] = 'Screening';
        $data['sidebar'] = 'Administrator';
        $data['user'] = $this->auth->sessionCheck($this->session->userdata('status'));
        $this->load->view('templatesAdmin/header', $data);
        $this->load->view('templatesAdmin/sidebar', $data);
        $this->load->view('templatesAdmin/topbar', $data);
        $this->load->view('admin/screening', $data);
        $this->load->view('templatesAdmin/footer', $data);
    }

    public function screeningpresiden() {
        $data['title'] = 'Screening Presiden';
        $data['sidebar'] = 'Administrator';
        $data['user'] = $this->auth->sessionCheck($this->session->userdata('status'));
        $this->db->distinct();
        $this->db->select('nama');
        $data['presiden'] = $this->db->get('presiden')->result_array();
        $this->load->view('templatesAdmin/header', $data);
        $this->load->view('templatesAdmin/sidebar', $data);
        $this->load->view('templatesAdmin/topbar', $data);
        $this->load->view('admin/screeningpresiden', $data);
        $this->load->view('templatesAdmin/footer', $data);
    }

    public function screeninggubernur() {
        $data['title'] = 'Screening Gubernur';
        $data['sidebar'] = 'Administrator';
        $data['user'] = $this->auth->sessionCheck($this->session->userdata('status'));
        $this->db->distinct();        
        $this->db->select('nama');
        $data['gubernur'] = $this->db->get('gubernur')->result_array();
        $this->load->view('templatesAdmin/header', $data);
        $this->load->view('templatesAdmin/sidebar', $data);
        $this->load->view('templatesAdmin/topbar', $data);
        $this->load->view('admin/screeninggubernur', $data);
        $this->load->view('templatesAdmin/footer', $data);
    }

    public function screeninghimpunan() {
        $data['title'] = 'Screening Himpunan';
        $data['sidebar'] = 'Administrator';
        $data['user'] = $this->auth->sessionCheck($this->session->userdata('status'));
        $this->db->distinct();
        $this->db->select('nama');
        $data['himpunan'] = $this->db->get('himpunan')->result_array();
        $this->load->view('templatesAdmin/header', $data);
        $this->load->view('templatesAdmin/sidebar', $data);
        $this->load->view('templatesAdmin/topbar', $data);
        $this->load->view('admin/screeninghimpunan', $data);
        $this->load->view('templatesAdmin/footer', $data);
    }

    public function alasanCalon()
    {
        $id =  $_GET['id'];
        $cek = $_GET['user'];
        if ($cek == 'presiden') {
            // die;
            $presiden = $this->db->get_where('presiden',['id'=>$id])->result_array();
            $data['title'] = 'Alasan Calon Presiden '.$presiden[0]['nama'];
            $data['sidebar'] = 'Administrator';
            $data['user'] = $this->auth->sessionCheck($this->session->userdata('status'));
            $this->db->select('idUser,alasan');
            $this->db->where('nama',$presiden[0]['nama']);
            $data['data'] = $this->db->get('presiden')->result_array();
            $data['jenis'] = $cek;
            $this->load->view('templatesAdmin/header', $data);
            $this->load->view('templatesAdmin/sidebar', $data);
            $this->load->view('templatesAdmin/topbar', $data);
            $this->load->view('admin/alasanCalon', $data);
            $this->load->view('templatesAdmin/footer', $data);
        }elseif($cek == 'gubernur'){
            $gubernur = $this->db->get_where('gubernur',['id'=>$id])->result_array();
            $data['title'] = 'Alasan Calon Gubernur '.$gubernur[0]['nama'];
            $data['sidebar'] = 'Administrator';
            $data['user'] = $this->auth->sessionCheck($this->session->userdata('status'));
            $this->db->select('idUser,alasan');
            $this->db->where('nama',$gubernur[0]['nama']);
            $data['data'] = $this->db->get('gubernur')->result_array();
            $data['jenis'] = $cek;
            $this->load->view('templatesAdmin/header', $data);
            $this->load->view('templatesAdmin/sidebar', $data);
            $this->load->view('templatesAdmin/topbar', $data);
            $this->load->view('admin/alasanCalon', $data);
            $this->load->view('templatesAdmin/footer', $data);
        }elseif($cek =='himpunan'){
            $himpunan = $this->db->get_where('himpunan',['id'=>$id])->result_array();
            $data['title'] = 'Alasan Calon Himpunan '.$himpunan[0]['nama'];
            $data['sidebar'] = 'Administrator';
            $data['user'] = $this->auth->sessionCheck($this->session->userdata('status'));
            $this->db->select('idUser,alasan');
            $this->db->where('nama',$himpunan[0]['nama']);
            $data['data'] = $this->db->get('himpunan')->result_array();
            $data['jenis'] = $cek;
            $this->load->view('templatesAdmin/header', $data);
            $this->load->view('templatesAdmin/sidebar', $data);
            $this->load->view('templatesAdmin/topbar', $data);
            $this->load->view('admin/alasanCalon', $data);
            $this->load->view('templatesAdmin/footer', $data);
        }
    }

    public function editAdmin($id) {
        $data['title'] = 'Change Password';
        $data['sidebar'] = 'Administrator';

        $data['user'] = $this->auth->sessionCheck($this->session->userdata('status'));
        $data['admin'] = $this->admin->getAdmin($id);
        //    var_dump($data['user']);die;
        // $this->form_validation->set_rules('name', 'Username', 'required|trim');
        $this->form_validation->set_rules('current_password', 'Current Password', 'required|trim');
        $this->form_validation->set_rules(
                'password1', 'New Password', 'required|trim|min_length[3]|matches[password2]', [
            'matches' => 'Password dont match!',
            'min_length' => 'Password to short!'
                ]
        );
        $this->form_validation->set_rules(
                'password2', 'Confirm New Password', 'required|trim|min_length[3]|matches[password1]', [
            'matches' => 'Password dont match!',
            'min_length' => 'Password to short!'
                ]
        );

        if ($this->form_validation->run() == false) {
            # code...
            $this->load->view('templatesAdmin/header', $data);
            $this->load->view('templatesAdmin/sidebar', $data);
            $this->load->view('templatesAdmin/topbar', $data);
            $this->load->view('admin/editAdmin', $data);
            $this->load->view('templatesAdmin/footer', $data);
        } else {

            $user = $this->input->post('username');
            // var_dump($user);die;
            $currentPass = $this->input->post('current_password');
            $Pass = $this->input->post('password1');
            if (!password_verify($currentPass, $data['admin'][0]['pass'])) {
                $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
                Wrong Current Password! </div>');
                redirect('admin/admin');
            } else {
                if ($currentPass == $Pass) {
                    $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
                New password cannot be the same as current password! </div>');
                    redirect('admin/admin');
                } else {
                    $newPass = password_hash($Pass, PASSWORD_DEFAULT);
                    $this->db->set('pass', $newPass);
                    $this->db->set('user', $user);
                    $this->db->where('id', $id);
                    $this->db->update('admin');
                    $data = [
                        'username' => $user
                    ];
                    $this->session->set_userdata($data);
                    $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
                    Your Password has been updated! </div>');
                    redirect('admin/admin');
                }
            }
        }
    }

    public function resetPasswordUser($id) {
        
        $user = $this->admin->getUser($id);
        $newPass = md5($user['nim']);
        $this->db->set('password', $newPass);
        $this->db->where('id', $id);
        $this->db->update('user');
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
        Password ' . $user['nim'] . ' has been reset! </div>');
        redirect('admin/user');
    }

    public function deleteUser($id) {
        $this->db->where('id', $id);
        $this->db->delete('user');
        $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
        Mahasiswa berhasil dihapus! </div>');
        redirect('admin/user');
    }

    public function tambahAdmin() {
        $nama = $this->input->post('nama');
        $username = $this->input->post('username');
        $password = $this->input->post('password');
        $mail = $this->input->post('mail');

        if ($nama == '' || $username == '' || $password == '' || $mail == '') {
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
            Data Kosong! </div>');
            redirect('admin/admin');
        } else {
            if ($this->auth->cekAdmin($username) == 0) {
                # code...
                $data = ['nama' => $nama, 'user' => $username, 'pass' => password_hash($password, PASSWORD_DEFAULT), 'mail' => $mail, 'role' => 1];
                $this->db->insert('admin', $data);
                redirect('admin/admin');
            } else {
                $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
            Username sudah ada! </div>');
                redirect('admin/admin');
            }
        }
    }

    public function deleteAdmin($id) {
        $this->db->where('id', $id);
        $this->db->delete('admin');
        redirect('admin/admin');
    }

    public function importMahasiswa() {
        set_time_limit(0);
        $options = ['cost' => 10];
        if (isset($_FILES["file"]["name"])) {
            $countfiles = count($_FILES["file"]["name"]);

            for ($iii = 0; $iii < $countfiles; $iii++) {

                $path = $_FILES["file"]["tmp_name"][$iii];
                $object = PHPExcel_IOFactory::load($path);

                foreach ($object->getWorksheetIterator() as $worksheet) {
                    $highestRow = $worksheet->getHighestRow();
                    $highestColumn = $worksheet->getHighestColumn();
                    $num = 1;
                    for ($row = 2; $row <= $highestRow; $row++) {
                        $nim = $worksheet->getCellByColumnAndRow(0, $row)->getValue();
                        $nama = $worksheet->getCellByColumnAndRow(1, $row)->getValue();
                        $fakultas = $worksheet->getCellByColumnAndRow(2, $row)->getValue();
                        $prodi = $worksheet->getCellByColumnAndRow(3, $row)->getValue();
                        if (strlen($nim) == 9) {
                            if ($this->db->get_where('user', ['nim' => $nim])->num_rows() == 0) {
                                $data[] = array('nim' => $nim, 'nama' => $nama, 'fakultas' => $fakultas,
                                    'prodi' => $prodi, 'status' => 1, 'statusBEMF' => 1, 'statusHM' => 1, 'password' => password_hash($nim, PASSWORD_DEFAULT, $options));
                                $num++;
                            }
                        }
                    }
                }
            }
            if ($data) {
                $this->db->insert_batch('user', $data);
                $this->session->set_flashdata('message', '<div class="alert alert-success" role="success">
                            ' . $num . ' Data mahasiswa berhasil di import!</div>');
            } else {
                $this->session->set_flashdata('message', '<div class="alert alert-danger" role="danger">
                            Data mahasiswa sudah di import!</div>');
            }
        }
        redirect('admin/user');
    }

    public function calon() {
        $data['title'] = 'Calon';
        $data['sidebar'] = 'Administrator';
        $data['user'] = $this->auth->sessionCheck($this->session->userdata('status'));
        $data['data'] = $this->admin->getCalon();
        $this->load->view('templatesAdmin/header', $data);
        $this->load->view('templatesAdmin/sidebar', $data);
        $this->load->view('templatesAdmin/topbar', $data);
        $this->load->view('admin/calon', $data);
        $this->load->view('templatesAdmin/footer', $data);
    }

    public function detailCalon($id) {
        $data['title'] = 'Detail Calon';
        $data['sidebar'] = 'Administrator';
        $data['user'] = $this->auth->sessionCheck($this->session->userdata('status'));
        $data['data'] = $this->admin->calonCari($id);
        $data['fakult'] = $this->db->get('fakultas')->result();
        $this->load->view('templatesAdmin/header', $data);
        $this->load->view('templatesAdmin/sidebar', $data);
        $this->load->view('templatesAdmin/topbar', $data);
        $this->load->view('admin/detailCalon', $data);
        $this->load->view('templatesAdmin/footer', $data);
    }

    public function hapusCalon($id) {
        $this->db->where('id', $id);
        $this->db->delete('calon');
        redirect('admin/calon');
    }

    public function editCalon($id) {
        $data['title'] = 'Edit Calon';
        $data['sidebar'] = 'Administrator';
        $data['user'] = $this->auth->sessionCheck($this->session->userdata('status'));
        $data['data'] = $this->admin->calonCari($id);
        $data['fakult'] = $this->db->get('fakultas')->result();
        // var_dump( $data['data']);die;
        $this->form_validation->set_rules('nama1', 'Nama Ketua', 'required|trim');
        $this->form_validation->set_rules('nama2', 'Nama Wakil', 'required|trim');
        $this->form_validation->set_rules('fakultas1', 'Fakultas Ketua', 'required|trim');
        $this->form_validation->set_rules('fakultas2', 'Fakultas Wakil', 'required|trim');
        $this->form_validation->set_rules('organisasi', 'Organisasi', 'required|trim');
        $this->form_validation->set_rules('visi', 'Visi', 'required|trim');
        $this->form_validation->set_rules('misi', 'Misi', 'required|trim');
        if ($this->form_validation->run() == false) {
            $this->load->view('templatesAdmin/header', $data);
            $this->load->view('templatesAdmin/sidebar', $data);
            $this->load->view('templatesAdmin/topbar', $data);
            $this->load->view('admin/editCalon', $data);
            $this->load->view('templatesAdmin/footer', $data);
        } else {

            $ketua = $this->input->post('nama1');
            $wakil = $this->input->post('nama2');
            $fakultasketua = $this->input->post('fakultas1');
            $fakultaswakil = $this->input->post('fakultas2');
            $organisasi = $this->input->post('organisasi');
            $visi = $this->input->post('visi');
            $misi = $this->input->post('misi');
            $upload = $_FILES['image']['name'];
           // var_dump( $upload);die;

            if ($upload) {
                $config['upload_path'] = base_url().'assets/img/calon';
                $config['allowed_types'] = 'gif|jpg|png|jfif|jpeg';
                $config['max_size'] = '10240';
                $this->load->library('upload', $config);
                if ($this->upload->do_upload('image')) {
                    $newImage = $this->upload->data('file_name');
                    $this->db->set('foto', $newImage);
                }
            }
            $this->db->set('ketua', $ketua);
            $this->db->set('wakil', $wakil);
            $this->db->set('fakultasketua', $fakultasketua);
            $this->db->set('fakultaswakil', $fakultaswakil);
            $this->db->set('organisasi', $organisasi);
            $this->db->set('visi', $visi);
            $this->db->set('misi', $misi);
            $this->db->where('id', $id);
            $this->db->update('calon');
            redirect('admin/calon');
        }
    }

    public function addCalonPresiden() {
        $data['title'] = 'Tambah Calon Presiden';
        $data['sidebar'] = 'Administrator';
        $data['user'] = $this->auth->sessionCheck($this->session->userdata('status'));
        $data['data'] = $this->admin->allUser();


        $this->form_validation->set_rules('nama1', 'Nama Ketua', 'required');
        $this->form_validation->set_rules('nama2', 'Nama Wakil', 'required');
        $this->form_validation->set_rules('fakultas1', 'Fakultas Ketua', 'required|trim');
        $this->form_validation->set_rules('fakultas2', 'Fakultas Wakil', 'required|trim');
        $this->form_validation->set_rules('visi', 'Visi', 'required|trim');
        $this->form_validation->set_rules('misi', 'Misi', 'required|trim');

        if ($this->form_validation->run() == false) {
            $this->load->view('templatesAdmin/header', $data);
            $this->load->view('templatesAdmin/sidebar', $data);
            $this->load->view('templatesAdmin/topbar', $data);
            $this->load->view('admin/addCalonPresiden', $data);
            $this->load->view('templatesAdmin/footer', $data);
        } else {
            $ketua = $this->input->post('nama1');
            $wakil = $this->input->post('nama2');
            $fakultasketua = $this->input->post('fakultas1');
            $fakultaswakil = $this->input->post('fakultas2');
            $query1 = "SELECT * FROM user WHERE nama LIKE '" . $ketua . "' AND fakultas LIKE '" . $fakultasketua . "'";
            $cekKetua = $this->db->query($query1);
            if ($cekKetua->num_rows() > 0) {
                $query2 = "SELECT * FROM user WHERE nama LIKE '" . $wakil . "' AND fakultas LIKE '" . $fakultaswakil . "'";
                $cekWakil = $this->db->query($query2);
                if ($cekWakil->num_rows() > 0) {
                    $visi = $this->input->post('visi');
                    $misi = $this->input->post('misi');
                    $upload = $_FILES['image']['name'];
                    if ($upload) {
                        $config['upload_path'] = './assets/img/calon';
                        $config['allowed_types'] = 'gif|jpg|png|jpeg';
                        $config['max_size'] = '5000';
                        $this->load->library('upload', $config);
                        if ($this->upload->do_upload('image')) {
                            $newImage = $this->upload->data('file_name');
                            $this->db->set('foto', $newImage);
                        }
                    }
                    $Ketua = $cekKetua->result_array();
                    $Wakil = $cekWakil->result_array();
                    $this->db->set('ketua', $Ketua[0]['nama']);
                    $this->db->set('wakil', $Wakil[0]['nama']);
                    $this->db->set('fakultasketua', $fakultasketua);
                    $this->db->set('fakultaswakil', $fakultaswakil);
                    $this->db->set('organisasi', "BEMU");
                    $this->db->set('visi', $visi);
                    $this->db->set('misi', $misi);
                    $this->db->set('hasil', 0);
                    $this->db->insert('calon');
                    redirect('admin/calon');
                } else {
                    $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
                    Nama Wakil tidak terdapat di user! </div>');
                    redirect('admin/addCalonPresiden');
                }
            } else {
                $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
                    Nama Ketua tidak terdapat di user! </div>');
                redirect('admin/addCalonPresiden');
            }
        }
    }

    public function fakultasPresiden() {
        $fakultas = $this->input->post('id');
        $data = $this->db->query("SELECT fakultas FROM fakultas WHERE fakultas NOT LIKE '" . $fakultas . "'")->result();
        $newdata = array();
        $index = 0;
        foreach ($data as $row) {
            $newdata[$index++] = $row;
        }
        echo json_encode($newdata);
    }

    public function addCalonGubernur() {
        $data['title'] = 'Tambah Calon Gubernur';
        $data['sidebar'] = 'Administrator';
        $data['user'] = $this->auth->sessionCheck($this->session->userdata('status'));
        $data['data'] = $this->admin->allUser();


        $this->form_validation->set_rules('nama1', 'Nama Ketua', 'required|trim');
        $this->form_validation->set_rules('nama2', 'Nama Wakil', 'required|trim');
        $this->form_validation->set_rules('fakultas1', 'Fakultas Ketua', 'required|trim');
        $this->form_validation->set_rules('visi', 'Visi', 'required|trim');
        $this->form_validation->set_rules('misi', 'Misi', 'required|trim');

        if ($this->form_validation->run() == false) {
            $this->load->view('templatesAdmin/header', $data);
            $this->load->view('templatesAdmin/sidebar', $data);
            $this->load->view('templatesAdmin/topbar', $data);
            $this->load->view('admin/addCalonGubernur', $data);
            $this->load->view('templatesAdmin/footer', $data);
        } else {

            $ketua = $this->input->post('nama1');
            $wakil = $this->input->post('nama2');
            $fakultasketua = $this->input->post('fakultas1');
            $fakultaswakil = $this->input->post('fakultas1');
            $query1 = "SELECT * FROM user WHERE nama LIKE '" . $ketua . "' AND fakultas LIKE '" . $fakultasketua . "'";
            $cekKetua = $this->db->query($query1);
            if ($cekKetua->num_rows() > 0) {
                $query2 = "SELECT * FROM user WHERE nama LIKE '" . $wakil . "' AND fakultas LIKE '" . $fakultaswakil . "'";
                $cekWakil = $this->db->query($query2);
                if ($cekWakil->num_rows() > 0) {
                    $visi = $this->input->post('visi');
                    $misi = $this->input->post('misi');
                    $upload = $_FILES['image']['name'];
                    if ($upload) {
                        $config['upload_path'] = './assets/img/calon';
                        $config['allowed_types'] = 'gif|jpg|png';
                        $config['max_size'] = '2048';
                        $this->load->library('upload', $config);
                        if ($this->upload->do_upload('image')) {
                            $newImage = $this->upload->data('file_name');
                            $this->db->set('foto', $newImage);
                        }
                    }
                    $Ketua = $cekKetua->result_array();
                    $Wakil = $cekWakil->result_array();
                    $this->db->set('ketua', $Ketua[0]['nama']);
                    $this->db->set('wakil', $Wakil[0]['nama']);
                    $this->db->set('fakultasketua', $fakultasketua);
                    $this->db->set('fakultaswakil', $fakultaswakil);
                    $this->db->set('organisasi', "BEMF");
                    $this->db->set('visi', $visi);
                    $this->db->set('misi', $misi);
                    $this->db->set('hasil', 0);
                    $this->db->insert('calon');
                    redirect('admin/calon');
                } else {
                    $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
                    Nama Wakil tidak terdapat di user! </div>');
                    redirect('admin/addCalonGubernur');
                }
            } else {
                $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
                    Nama Ketua tidak terdapat di user! </div>');
                redirect('admin/addCalonGubernur');
            }
        }
    }

    public function addCalonHM() {
        $data['title'] = 'Tambah Calon Himpunan';
        $data['sidebar'] = 'Administrator';
        $data['user'] = $this->auth->sessionCheck($this->session->userdata('status'));
        $data['data'] = $this->admin->allUser();


        $this->form_validation->set_rules('nama1', 'Nama Ketua', 'required|trim');
        $this->form_validation->set_rules('nama2', 'Nama Wakil', 'required|trim');
        $this->form_validation->set_rules('fakultas1', 'Fakultas Ketua', 'required|trim');
        $this->form_validation->set_rules('prodi', 'Prodi', 'required|trim');
        $this->form_validation->set_rules('visi', 'Visi', 'required|trim');
        $this->form_validation->set_rules('misi', 'Misi', 'required|trim');

        if ($this->form_validation->run() == false) {
            $this->load->view('templatesAdmin/header', $data);
            $this->load->view('templatesAdmin/sidebar', $data);
            $this->load->view('templatesAdmin/topbar', $data);
            $this->load->view('admin/addCalonHM', $data);
            $this->load->view('templatesAdmin/footer', $data);
        } else {
            $ketua = $this->input->post('nama1');
            $wakil = $this->input->post('nama2');
            $fakultasketua = $this->input->post('fakultas1');
            $fakultaswakil = $this->input->post('fakultas1');
            $prodi = $this->input->post('prodi');
            $query1 = "SELECT * FROM user WHERE nama LIKE '" . $ketua . "' AND fakultas LIKE '" . $fakultasketua . "' 
            AND prodi LIKE '" . $prodi . "'";
            $cekKetua = $this->db->query($query1);
            if ($cekKetua->num_rows() > 0) {
                $query2 = "SELECT * FROM user WHERE nama LIKE '" . $wakil . "' AND fakultas LIKE '" . $fakultaswakil . "' 
            AND prodi LIKE '" . $prodi . "'";
                $cekWakil = $this->db->query($query2);
                if ($cekWakil->num_rows() > 0) {
                    $visi = $this->input->post('visi');
                    $misi = $this->input->post('misi');
                    $upload = $_FILES['image']['name'];
                    if ($upload) {
                        $config['upload_path'] = './assets/img/calon';
                        $config['allowed_types'] = 'gif|jpg|png|jpeg';
                        $config['max_size'] = '2048';
                        $this->load->library('upload', $config);
                        if ($this->upload->do_upload('image')) {
                            $newImage = $this->upload->data('file_name');
                            $this->db->set('foto', $newImage);
                        }
                    }
                    $Ketua = $cekKetua->result_array();
                    $Wakil = $cekWakil->result_array();
                    $this->db->set('ketua', $Ketua[0]['nama']);
                    $this->db->set('wakil', $Wakil[0]['nama']);
                    $this->db->set('fakultasketua', $fakultasketua);
                    $this->db->set('fakultaswakil', $fakultaswakil);
                    $this->db->set('organisasi', "HM");
                    $this->db->set('prodiketua', $prodi);
                    $this->db->set('prodiwakil', $prodi);
                    $this->db->set('visi', $visi);
                    $this->db->set('misi', $misi);
                    $this->db->set('hasil', 0);
                    $this->db->insert('calon');
                    redirect('admin/calon');
                } else {
                    $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
                    Nama Wakil tidak terdapat di user! </div>');
                    redirect('admin/addCalonHM');
                }
            } else {
                $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
                    Nama Ketua tidak terdapat di user! </div>');
                redirect('admin/addCalonHM');
            }
        }
    }
    
    public function addCalonJPMIPA() {
        $data['title'] = 'Tambah Calon JPMIPA';
        $data['sidebar'] = 'Administrator';
        $data['user'] = $this->auth->sessionCheck($this->session->userdata('status'));
        $data['data'] = $this->admin->allUser();


        $this->form_validation->set_rules('nama1', 'Nama Ketua', 'required|trim');
        $this->form_validation->set_rules('nama2', 'Nama Wakil', 'required|trim');
        $this->form_validation->set_rules('fakultas1', 'Fakultas Ketua', 'required|trim');
        $this->form_validation->set_rules('prodi1', 'Prodi Ketua', 'required|trim');
        $this->form_validation->set_rules('prodi2', 'Prodi Wakil', 'required|trim');
        $this->form_validation->set_rules('visi', 'Visi', 'required|trim');
        $this->form_validation->set_rules('misi', 'Misi', 'required|trim');

        if ($this->form_validation->run() == false) {
            $this->load->view('templatesAdmin/header', $data);
            $this->load->view('templatesAdmin/sidebar', $data);
            $this->load->view('templatesAdmin/topbar', $data);
            $this->load->view('admin/addCalonJPMIPA', $data);
            $this->load->view('templatesAdmin/footer', $data);
        } else {
            $ketua = $this->input->post('nama1');
            $wakil = $this->input->post('nama2');
            $fakultasketua = $this->input->post('fakultas1');
            $fakultaswakil = $this->input->post('fakultas1');
            $prodiketua = $this->input->post('prodi1');
            $prodiwakil = $this->input->post('prodi2');
            $query1 = "SELECT * FROM user WHERE nama LIKE '" . $ketua . "' AND fakultas LIKE '" . $fakultasketua . "' 
            AND prodi LIKE '" . $prodiketua . "'";
            $cekKetua = $this->db->query($query1);
            if ($cekKetua->num_rows() > 0) {
                $query2 = "SELECT * FROM user WHERE nama LIKE '" . $wakil . "' AND fakultas LIKE '" . $fakultaswakil . "' 
            AND prodi LIKE '" . $prodiwakil . "'";
                $cekWakil = $this->db->query($query2);
                if ($cekWakil->num_rows() > 0) {
                    $visi = $this->input->post('visi');
                    $misi = $this->input->post('misi');
                    $upload = $_FILES['image']['name'];
                    if ($upload) {
                        $config['upload_path'] = './assets/img/calon';
                        $config['allowed_types'] = 'gif|jpg|png|jpeg';
                        $config['max_size'] = '2048';
                        $this->load->library('upload', $config);
                        if ($this->upload->do_upload('image')) {
                            $newImage = $this->upload->data('file_name');
                            $this->db->set('foto', $newImage);
                        }
                    }
                    $Ketua = $cekKetua->result_array();
                    $Wakil = $cekWakil->result_array();
                    $this->db->set('ketua', $Ketua[0]['nama']);
                    $this->db->set('wakil', $Wakil[0]['nama']);
                    $this->db->set('fakultasketua', $fakultasketua);
                    $this->db->set('fakultaswakil', $fakultaswakil);
                    $this->db->set('organisasi', "JPMIPA");
                    $this->db->set('prodiketua', $prodiketua);
                    $this->db->set('prodiwakil', $prodiwakil);
                    $this->db->set('visi', $visi);
                    $this->db->set('misi', $misi);
                    $this->db->set('hasil', 0);
                    $this->db->insert('calon');
                    redirect('admin/calon');
                } else {
                    $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
                    Nama Wakil tidak terdapat di user! </div>');
                    redirect('admin/addCalonJPMIPA');
                }
            } else {
                $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
                    Nama Ketua tidak terdapat di user! </div>');
                redirect('admin/addCalonJPMIPA');
            }
        }
    }

    public function prodi() {
        $fakultas = $this->input->post('id');
        $data = $this->db->query("SELECT nama_prodi FROM prodi WHERE id_fakultas_fk LIKE (SELECT id_fakultas FROM fakultas WHERE fakultas LIKE '" . $fakultas . "')")->result();
        $newdata = array();
        $index = 0;
        foreach ($data as $row) {
            $newdata[$index++] = $row;
        }
        echo json_encode($newdata);
    }

    public function addKadidat() {

        $nim = $this->input->post('nim');
        $cek = $this->db->query("SELECT * FROM user WHERE nim LIKE '$nim'")->result_array();
        $cekkandidat = $this->db->query("SELECT * FROM dt_kandidat WHERE nim LIKE '$nim'")->result_array();
        // print_r($cek);die;
        if ($cek) {
            if (!$cekkandidat) {
                $dataset = ['nama' => $cek[0]['nama'],
                    'nim' => $nim,
                    'fakultas' => $cek[0]['fakultas'],
                    'prodi' => $cek[0]['prodi']
                ];
                // print_r($dataset);die;
                $this->db->insert('dt_kandidat', $dataset);
                $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
                    Berhasil! </div>');
                redirect('admin/kadidat');
            } else {
                $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
               Mahasiswa sudah terdaftar! </div>');
                redirect('admin/kadidat');
            }
        } else {
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
                Nama tidak Tersedia! </div>');
            redirect('admin/kadidat');
        }
    }

    public function detailKadidat($id) {
        $data['title'] = 'Detail Kandidat';
        $data['sidebar'] = 'Administrator';
        $data['user'] = $this->auth->sessionCheck($this->session->userdata('status'));
        $data['kandidat'] = $this->db->get_where('dt_kandidat', ['id' => $id])->result_array();
        $this->load->view('templatesAdmin/header', $data);
        $this->load->view('templatesAdmin/sidebar', $data);
        $this->load->view('templatesAdmin/topbar', $data);
        $this->load->view('admin/detailKadidat', $data);
        $this->load->view('templatesAdmin/footer', $data);
    }

    public function deleteKadidat($id) {
        $this->db->where('id', $id);
        $this->db->delete('dt_kandidat');
        $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
                Kandidat Terhapus! </div>');
        redirect('admin/kadidat');
    }

    public function logout() {
        // 'username' => $user['user'],
        //         'role_id' => $user['role'],
        //         'status' => 'admin'
        $this->session->unset_userdata('username');
        $this->session->unset_userdata('role');
        $this->session->unset_userdata('status');
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
        You have been logged out!
      </div>');
        redirect('auth');
    }

}
