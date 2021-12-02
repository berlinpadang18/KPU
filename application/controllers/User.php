<?php

defined('BASEPATH') or exit('No direct script access allowed');

class User extends CI_Controller {

    public function __construct() {
        parent::__construct();
        if ($this->session->userdata('status') != 'user') {
            if ($data) {
                # code...
                redirect('auth/blocked', $data);
            } else {
                $data = '';
                redirect('auth/blocked', $data);
            }
        }
        $this->load->library('form_validation');
        $this->load->model('Admin_model', 'admin');
    }

    public function index() {
        $data['title'] = 'E-Vote Sanata Dharma';
        $data['user'] = $this->db->get_where('user', ['nim' => $this->session->userdata('nim')])->row_array();
        $data['data'] = $this->admin->getCalon();
        $data['bemf'] = $this->admin->getCalonFakultas($data['user']['fakultas']);
        $data['hm'] = $this->admin->getCalonHM($data['user']['prodi']);
        $data['jpmipa'] = $this->admin->getCalonJPMIPA();
        $this->load->view('templatesUser/header', $data);
        $this->load->view('templatesUser/sidebar', $data);
        $this->load->view('templatesUser/topbar', $data);
        $this->load->view('user/index', $data);
        $this->load->view('templatesUser/footer', $data);
    }

    public function profile() {
        $data['title'] = 'Profile';
        $data['user'] = $this->db->get_where('user', ['nim' => $this->session->userdata('nim')])->row_array();
        $this->load->view('templatesUser/header', $data);
        $this->load->view('templatesUser/sidebar', $data);
        $this->load->view('templatesUser/topbar', $data);
        $this->load->view('user/profile', $data);
        $this->load->view('templatesUser/footer', $data);
    }

    public function logout() {
        $this->session->unset_userdata('nim');
        $this->session->unset_userdata('role_id');
        $this->session->unset_userdata('status');
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
        You have been logged out!
      </div>');
        redirect('auth');
    }

    public function edit() {
        $data['title'] = 'Edit Profile';
        $data['user'] = $this->db->get_where('user', ['nim' => $this->session->userdata('nim')])->row_array();

        $this->form_validation->set_rules('nama', 'Name', 'required');

        if ($this->form_validation->run() == false) {
            $this->load->view('templatesUser/header', $data);
            $this->load->view('templatesUser/sidebar', $data);
            $this->load->view('templatesUser/topbar', $data);
            $this->load->view('user/edit', $data);
            $this->load->view('templatesUser/footer', $data);
        } else {
            $email = $this->input->post('nim');
            $name = $this->input->post('name');

            $this->db->set('name', $name);
            $this->db->where('email', $email);
            $this->db->update('users');
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
            Your Profile has been updated! </div>');
            redirect('user');
        }
    }

    public function changepassword() {
        $data['title'] = 'Change Passowrd';
        $data['user'] = $this->db->get_where('user', ['nim' => $this->session->userdata('nim')])->row_array();

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
            $this->load->view('templatesUser/header', $data);
            $this->load->view('templatesUser/sidebar', $data);
            $this->load->view('templatesUser/topbar', $data);
            $this->load->view('user/changepassword', $data);
            $this->load->view('templatesUser/footer', $data);
        } else {
            $currentPass = $this->input->post('current_password');
            $Pass = $this->input->post('password1');
            if (md5($currentPass) !=  $data['user']['password']) {
                $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
                Wrong Current Password! </div>');
                redirect('user/changepassword');
            } else {
                if ($currentPass == $Pass) {
                    $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
                New password cannot be the same as current password! </div>');
                    redirect('user/changepassword');
                } else {
                    $newPass = md5($Pass);
                    $this->db->set('password', $newPass);
                    $this->db->where('nim', $data['user']['nim']);
                    $this->db->update('user');
                    $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
                    Your Password has been updated! </div>');
                    redirect('user');
                }
            }
        }
    }

    public function pilihBemu($id) {
        $id = urldecode($id);
        $id = explode(' - ',$id);
        // print_r($id);die;
        $this->db->where('ketua', $id[0]);
        $this->db->where('wakil', $id[1]);
        $this->db->from('calon');
        $calon = $this->db->get()->result_array();
        $org = $calon[0]['organisasi'];

        $hasil = $calon[0]['hasil'] + 1;
        $this->db->set('hasil', $hasil);
        $this->db->where('id', $calon[0]['id']);
        $this->db->update('calon');
        if (strcasecmp($org, 'BEMU') == 0) {
            # code...
            $this->db->set('status', 0);
            $this->db->where('nim', $this->session->userdata('nim'));
            $this->db->update('user');
        } elseif (strcasecmp($org, 'BEMF') == 0) {
            # code...
            $this->db->set('statusBEMF', 0);
            $this->db->where('nim', $this->session->userdata('nim'));
            $this->db->update('user');
        }  elseif (strcasecmp($org, 'JPMIPA') == 0) {
            # code...
            $this->db->set('statusJPMIPA', 0);
            $this->db->where('nim', $this->session->userdata('nim'));
            $this->db->update('user');
        }  else {
            $this->db->set('statusHM', 0);
            $this->db->where('nim', $this->session->userdata('nim'));
            $this->db->update('user');
        }
        redirect('user');
    }

    public function screening() {
        $data['title'] = 'Screening';
        $data['user'] = $this->db->get_where('user', ['nim' => $this->session->userdata('nim')])->row_array();

        // $this->form_validation->set_rules('nama', 'Name', 'required');

        if ($this->form_validation->run() == false) {
            $this->load->view('templatesUser/header', $data);
            $this->load->view('templatesUser/sidebar', $data);
            $this->load->view('templatesUser/topbar', $data);
            $this->load->view('user/screening', $data);
            $this->load->view('templatesUser/footer', $data);
        } else {
            $email = $this->input->post('nim');
            $name = $this->input->post('name');

            $this->db->set('name', $name);
            $this->db->where('email', $email);
            $this->db->update('users');
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
            Your Profile has been updated! </div>');
            redirect('user');
        }
    }

    public function screeningpresiden() {
        $data['title'] = 'Screening Presiden';
        $data['user'] = $this->db->get_where('user', ['nim' => $this->session->userdata('nim')])->row_array();
        $cek = $this->db->query(" SELECT * FROM presiden WHERE idUser LIKE '" . $data['user']['id'] . "'")->num_rows();
        if ($cek == 0) {
            $this->form_validation->set_rules('nama', 'Nama', 'required');
            $this->form_validation->set_rules('fakultas', 'Fakultas', 'required');
            $this->form_validation->set_rules('prodi', 'Prodi', 'required');
            $this->form_validation->set_rules('angkatan', 'Angkatan', 'required');
            $this->form_validation->set_rules('alasan', 'Alasan', 'required');

            if ($this->form_validation->run() == false) {
                $this->load->view('templatesUser/header', $data);
                $this->load->view('templatesUser/sidebar', $data);
                $this->load->view('templatesUser/topbar', $data);
                $this->load->view('user/screeningpresiden', $data);
                $this->load->view('templatesUser/footer', $data);
            } else {
                $nama = $this->input->post('nama');
                $fakultas = $this->input->post('fakultas');
                $prodi = $this->input->post('prodi');
                $angkatan = $this->input->post('angkatan');
                $alasan = $this->input->post('alasan');

                $cek = $this->db->query("SELECT * FROM user WHERE nama LIKE '$nama' AND fakultas LIKE '$fakultas' AND  prodi LIKE '$prodi' ")->result_array();
                if ($cek) {
                    $dataset = ['nama' => $cek[0]['nama'],
                        'fakultas' => $cek[0]['fakultas'],
                        'prodi' => $cek[0]['prodi'],
                        'angkatan' => $angkatan,
                        'alasan' => $alasan,
                        'idUser' => $data['user']['id']
                    ];
                    // print_r($dataset);die;
                    $this->db->insert('presiden', $dataset);
                    $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
                Berhasil! </div>');

                    redirect('user/screening');
                } else {
                    $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
                Nama tidak Tersedia! </div>');

                    redirect('user/screeningpresiden');
                }
            }
        } else {
            redirect('user/screening');
        }
    }

    public function screeninggubernur() {
        $data['title'] = 'Screening Gubernur';
        $data['user'] = $this->db->get_where('user', ['nim' => $this->session->userdata('nim')])->row_array();
        $cek = $this->db->query(" SELECT * FROM gubernur WHERE idUser LIKE '" . $data['user']['id'] . "'")->num_rows();
        if ($cek == 0) {
            $this->form_validation->set_rules('nama', 'Nama', 'required');
            $this->form_validation->set_rules('fakultas', 'Fakultas', 'required');
            $this->form_validation->set_rules('prodi', 'Prodi', 'required');
            $this->form_validation->set_rules('angkatan', 'Angkatan', 'required');
            $this->form_validation->set_rules('alasan', 'Alasan', 'required');

            if ($this->form_validation->run() == false) {
                $this->load->view('templatesUser/header', $data);
                $this->load->view('templatesUser/sidebar', $data);
                $this->load->view('templatesUser/topbar', $data);
                $this->load->view('user/screeninggubernur', $data);
                $this->load->view('templatesUser/footer', $data);
            } else {
                $nama = $this->input->post('nama');
                $fakultas = $this->input->post('fakultas');
                $prodi = $this->input->post('prodi');
                $angkatan = $this->input->post('angkatan');
                $alasan = $this->input->post('alasan');
                $cek = $this->db->query("SELECT * FROM user WHERE nama LIKE '$nama' AND fakultas LIKE '$fakultas' AND  prodi LIKE '$prodi' ")->result_array();
                if ($cek) {
                    $dataset = ['nama' => $cek[0]['nama'],
                        'fakultas' => $cek[0]['fakultas'],
                        'prodi' => $cek[0]['prodi'],
                        'angkatan' => $angkatan,
                        'alasan' => $alasan,
                        'idUser' => $data['user']['id']
                    ];

                    $this->db->insert('gubernur', $dataset);
                    $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
                Berhasil! </div>');

                    redirect('user/screening');
                } else {
                    $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
                Nama tidak Tersedia! </div>');
                    redirect('user/screeninggubernur');
                }
            }
        } else {
            redirect('user/screening');
        }
    }

    public function screeninghimpunan() {
        $data['title'] = 'Screening Himpunan';
        $data['user'] = $this->db->get_where('user', ['nim' => $this->session->userdata('nim')])->row_array();
        $cek = $this->db->query(" SELECT * FROM himpunan WHERE idUser LIKE '" . $data['user']['id'] . "'")->num_rows();
        if ($cek == 0) {
            $this->form_validation->set_rules('nama', 'Nama', 'required');
            $this->form_validation->set_rules('fakultas', 'Fakultas', 'required');
            $this->form_validation->set_rules('prodi', 'Prodi', 'required');
            $this->form_validation->set_rules('angkatan', 'Angkatan', 'required');
            $this->form_validation->set_rules('alasan', 'Alasan', 'required');

            if ($this->form_validation->run() == false) {
                $this->load->view('templatesUser/header', $data);
                $this->load->view('templatesUser/sidebar', $data);
                $this->load->view('templatesUser/topbar', $data);
                $this->load->view('user/screeninghimpunan', $data);
                $this->load->view('templatesUser/footer', $data);
            } else {
                $nama = $this->input->post('nama');
                $fakultas = $this->input->post('fakultas');
                $prodi = $this->input->post('prodi');
                $angkatan = $this->input->post('angkatan');
                $alasan = $this->input->post('alasan');

                $cek = $this->db->query("SELECT * FROM user WHERE nama LIKE '$nama' AND fakultas LIKE '$fakultas' AND  prodi LIKE '$prodi' ")->result_array();
                if ($cek) {
                    $dataset = ['nama' => $cek[0]['nama'],
                        'fakultas' => $cek[0]['fakultas'],
                        'prodi' => $cek[0]['prodi'],
                        'angkatan' => $angkatan,
                        'alasan' => $alasan,
                        'idUser' => $data['user']['id']
                    ];
                    // print_r($dataset);die;
                    $this->db->insert('himpunan', $dataset);
                    $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
                Berhasil! </div>');
                    redirect('user/screening');
                } else {
                    $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
                Nama tidak Tersedia! </div>');
                    redirect('user/screeninghimpunan');
                }
            }
        } else {
            redirect('user/screening');
        }
    }

    public function kadidat() {
        $data['title'] = 'Kandidat Terpilih';
        $data['user'] = $this->db->get_where('user', ['nim' => $this->session->userdata('nim')])->row_array();
        $cek = $this->db->query("SELECT * FROM dt_kandidat WHERE nim LIKE '" . $this->session->userdata('nim') . "'");
        $data['kadidat'] = $cek->result_array();
        if ($cek->num_rows() > 0) {
            $this->form_validation->set_rules('email', 'Email', 'required');
            $this->form_validation->set_rules('visi', 'Visi', 'required');
            $this->form_validation->set_rules('misi', 'Misi', 'required');
            $this->form_validation->set_rules('nowa', 'No WA', 'required');
            if ($this->form_validation->run() == false) {

                // var_dump($this->form _validation->run());die;
                $this->load->view('templatesUser/header', $data);
                $this->load->view('templatesUser/sidebar', $data);
                $this->load->view('templatesUser/topbar', $data);
                $this->load->view('user/daftarKadidat', $data);
                $this->load->view('templatesUser/footer', $data);
            } else {
                $nama = $this->input->post('nama');
                $nim = $this->input->post('nim');
                $fakultas = $this->input->post('fakultas');
                $email = $this->input->post('email');
                $visi = $this->input->post('visi');
                $misi = $this->input->post('misi');
                $nowa = $this->input->post('nowa');
                $upload = $_FILES['image']['name'];
                if ($upload) {
                    $config['upload_path'] = './assets/img/kandidat';
                    $config['allowed_types'] = 'gif|jpg|png';
                    $config['max_size'] = '2048';
                    $this->load->library('upload', $config);
                    if ($this->upload->do_upload('image')) {
                        $newImage = $this->upload->data('file_name');
                        $this->db->set('foto', $newImage);
                    }
                }
                $this->db->set('nama', $nama);
                $this->db->set('fakultas', $fakultas);
                $this->db->set('email', $email);
                $this->db->set('visi', $visi);
                $this->db->set('misi', $misi);
                $this->db->set('nowa', $nowa);
                $this->db->where('nim', $nim);
                $this->db->update('dt_kandidat');
                $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
                Berhasil! </div>');
                redirect('user');
            }
        } else {
            redirect('user');
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

}
