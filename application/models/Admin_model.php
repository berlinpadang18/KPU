<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Admin_model extends CI_Model {

    public function allUser() {
        return $this->db->get('user')->result_array();
    }

    public function allAdmin() {
        return $this->db->get('admin')->result_array();
    }

    public function getUser($id) {
        return $this->db->get_where('user', ['id' => $id])->row_array();
    }

    public function getCalon() {
        return $this->db->get('calon')->result_array();
    }
    

    public function getCalonFakultas($fakultas) {
        $this->db->like('fakultasketua', $fakultas);
        $this->db->like('fakultaswakil', $fakultas);
        return $this->db->get('calon')->result_array();
    }
    public function getCalonHM($hm) {
        $this->db->like('prodiketua', $hm);
        return $this->db->get('calon')->result_array();
    }

    public function getCalonJPMIPA() {
        $this->db->like('organisasi', 'JPMIPA');
        return $this->db->get('calon')->result_array();
    }

    public function calonCari($id) {
        $this->db->where('id', $id);
        $this->db->from('calon');
        return $this->db->get()->result_array();
    }

    public function bar() {
        $this->db->select('ketua, wakil , hasil');
        $this->db->from('calon');
        return $this->db->get()->result();
    }

    public function kadidat() {
        return $this->db->get('dt_kandidat')->result_array();
    }

    public function screening() {
        return $this->db->get_where('presiden')->row_array();
        # code...
    }

    public function getAdmin($id) {
        $this->db->where('id', $id);
        return $this->db->get('admin')->result_array();
    }

    public function getPresiden() {
        $this->db->distinct();
        $this->db->get('presiden')->result_array();
    }

    public function get_count_invalid(){
        $sql = "SELECT count(if(statusBEMF= 1, statusBEMF, NULL) AND if(statusHM= 1, statusHM, NULL) AND if(status= 1, status, NULL) AND if(statusJPMIPA= 1, statusJPMIPA, NULL)) as invalid FROM user WHERE `fakultas` in ('Sastra', 'Psikologi','Keguruan dan Ilmu Pendidikan')";
        $result = $this->db->query($sql);
        return $result->row();
    }

    public function get_count_valid(){
        $sql = "SELECT count(if(statusBEMF= 0, statusBEMF, NULL) AND if(statusHM= 0, statusHM, NULL) AND if(status= 0, status, NULL) AND if(statusJPMIPA= 0, statusJPMIPA, NULL)) as valid FROM user WHERE `fakultas` in ('Sastra', 'Psikologi','Keguruan dan Ilmu Pendidikan')";
        $result = $this->db->query($sql);
        return $result->row();
    }

    public function invalidMahasiswa() {
        $where = "(status='1' AND statusBEMF='1' AND statusHM='1' AND statusJPMIPA='1') AND `fakultas` IN ('Sastra', 'Psikologi','Keguruan dan Ilmu Pendidikan')";
        return $this->db->get_where('user', $where)->result_array();
    }

    public function validMahasiswa() {
        $where = "(status='0' OR statusBEMF='0' OR statusHM='0' OR statusJPMIPA='0') AND `fakultas` IN ('Sastra', 'Psikologi','Keguruan dan Ilmu Pendidikan')";
        return $this->db->get_where('user', $where)->result_array();
    }


}
