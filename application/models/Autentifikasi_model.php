<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Autentifikasi_model extends CI_Model {

    public function checkUser($username, $password) {
        // var_dump($this->db->get_where('user', ['nim' => $username])->num_rows());die;

        if ($this->db->get_where('admin', ['user' => $username])->num_rows() == 1) {
            $user = $this->db->get_where('admin', ['user' => $username])->row_array();
            if (password_verify($password, $user['pass'])) {
                $data = [
                    'username' => $user['user'],
                    'role_id' => $user['role'],
                    'status' => 'admin'
                ];
                $this->session->set_userdata($data);

                redirect('admin');
            } else {
                $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
                Wrong password!
                </div>');
                redirect('auth');
            }
        } elseif ($this->db->get_where('user', ['nim' => $username])->num_rows() == 1) {
            $user = $this->db->get_where('user', ['nim' => $username])->row_array();
           
            if (md5($password) == $user['password']) {

                $data = [
                    'nim' => $user['nim'],
                    'role_id' => $user['role'],
                    'status' => 'user'
                ];
                $this->session->set_userdata($data);
                redirect('user');
            } else {
                $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
                Wrong password!
                </div>');
                redirect('auth');
            }
        } else {
            redirect('auth');
        }
    }

    public function sessionCheck($status) {
        if ($status == 'admin') {

            return $this->db->get_where('admin', ['user' => $this->session->userdata('username')])->row_array();
        } elseif ($status == 'user') {
            return $this->db->get_where('user', ['nim' => $this->session->userdata('username')])->row_array();
        }
    }

    function is_logged_in() {
        if (!$this->session->userdata('nim')) {
            redirect('auth');
        } else {
            $role_id = $this->session->userdata('role_id');

            if ($role_id != 1) {
                redirect('auth/blocked');
            };
        };
    }

    public function cekAdmin($username) {

        return $this->db->get_where('admin', ['user' => $username])->num_rows();
    }

    public function getCalonbyId($id) {
        $this->db->where('id',$id);
        return $this->db->get('calon')->result_array();
    }

}
