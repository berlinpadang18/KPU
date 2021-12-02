<?php
function is_logged_in()
{
    $a = get_instance();
    if (!$a->session->userdata('email')) {
        redirect('auth');
    } else {
        $role_id = $a->session->userdata('role_id');
        $menu = $a->uri->segment(1);

        $query = $a->db->get_where('user_menu', ['menu' => $menu])->row_array();

        $menu_id = $query['id'];
        $userAccess = $a->db->get_where('user_access_menu', [
            'role_id' => $role_id,
            'menu_id' => $menu_id
        ]);
        if ($userAccess->num_rows() < 1) {
            redirect('auth/blocked');
        };
    };
}

function check_user($username, $password)
{
    $a = get_instance();

    if ($a->db->get_where('admin', ['username' => $username])->num_rows() == 1) {

        $user = $a->db->get_where('admin', ['username' => $username])->row_array();

        if (password_verify($password, $user['password'])) {
            $data = [
                'username' => $user['username'],
                'role_id' => $user['role_id'],
                'status' => 'admin'
            ];
            $a->session->set_userdata($data);
            redirect('admin');
        } else {
            $a->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
            Wrong password!
          </div>');
            redirect('auth');
        }
    } elseif ($a->db->get_where('guru', ['username' => $username])->num_rows() == 1) {


        $user = $a->db->get_where('guru', ['username' => $username])->row_array();

        if (password_verify($password, $user['password'])) {
            $data = [
                'username' => $user['username'],
                'role_id' => $user['role_id'],
                'status' => 'guru'
            ];
            $a->session->set_userdata($data);
            redirect('guru');
        } else {
            $a->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
            Wrong password!
          </div>');
            redirect('auth');
        }
    } elseif ($a->db->get_where('siswa', ['username' => $username])->num_rows() == 1) {


        $user = $a->db->get_where('siswa', ['username' => $username])->row_array();

        if (password_verify($password, $user['password'])) {

            $data = [
                'username' => $user['username'],
                'role_id' => $user['role_id'],
                'status' => 'siswa'
            ];
            $a->session->set_userdata($data);
            redirect('siswa');
        } else {

            $a->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
            Wrong password!
          </div>');

            redirect('auth');
        }
    }
}

function check_access($role_id, $menu_id)
{
    $a = get_instance();
    $a->db->where('role_id', $role_id);
    $a->db->where('menu_id', $menu_id);

    $result = $a->db->get('user_access_menu');
    if ($result->num_rows() > 0) {
        return "checked='checked'";
    }
}

function check_active_user($nama)
{
    $a = get_instance();
    $a->db->where('nama', $nama);

    $result = $a->db->get('siswa');
    if ($result->num_rows() > 0) {
        return "checked='checked'";
    }
}

function check_isActive($is_active)
{
    $a = get_instance();
    $a->db->where('is_active', $is_active);
    $result = $a->db->get('users');
    if ($result->num_rows() > 0) {
        return "checked='checked'";
    }
}

function sessionCheck($status)
{
    $a = get_instance();
    if ($status == 'admin') {

        return $a->db->get_where('admin', ['username' => $a->session->userdata('username')])->row_array();
    } elseif ($status == 'guru') {

        return $a->db->get_where('guru', ['username' => $a->session->userdata('username')])->row_array();
    } elseif ($status == 'siswa') {

        return $a->db->get_where('siswa', ['username' => $a->session->userdata('username')])->row_array();
    }
}

function adminAccess()
{
    $a = get_instance();
    return $a->db->get_where('admin', ['username' => $a->session->userdata('username')])->row_array();
}

function userCheck($username)
{
    $a = get_instance();
    if ($a->db->get_where('admin', ['username' => $username])) {

        return $a->db->get_where('admin', ['username' => $username])->row_array();

        //
    } elseif ($a->db->get_where('guru', ['username' => $username])) {

        return $a->db->get_where('guru', ['username' => $username])->row_array();

        //
    } elseif ($a->db->get_where('siswa', ['username' => $username])) {

        return $a->db->get_where('siswa', ['username' => $username])->row_array();

        //
    }
}