<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Simple_login
{

    // SET SUPER GLOBAL
    var $CI = NULL;
    public function __construct()
    {
        $this->CI = &get_instance();
        $this->CI->load->model('Pegawai_model');
    }

    public function login($username, $password)
    {

        $query  = $this->CI->db->query("SELECT * FROM db_user where username = ? and status_user='1' ", array($username));
        $_result = $query->result();
        if ($query->num_rows() == 1) {

            $query  = $this->CI->db->query("SELECT * FROM db_user where username = ? and password = ? and status_user='1' ", array($username, $password));
            $_result = $query->result();
            $cek_login = $query->num_rows();

            if ($cek_login == 1) {
                if ($_result[0]->role == 'admin') {
                    $this->CI->session->set_userdata('nama', 'Admin SENA');
                } else {
                    $query  = $this->CI->db->query("
                                SELECT * FROM db_pegawai 
                                where employee_number = ? ", array($_result[0]->username));
                    $_results = $query->result();

                    $this->CI->session->set_userdata('employee_number', $_result[0]->employee_number);
                    // $this->CI->session->set_userdata('nama', $_results[0]->full_name);
                }

                $this->CI->session->set_userdata('username', $_result[0]->username);
                $this->CI->session->set_userdata('role', $_result[0]->role);
                $this->CI->session->set_userdata('id', $_result[0]->id);

                if ($_result[0]->role == "pemimpin_apel") {
                    redirect(site_url('apel/Dashboard'));
                }
                if ($_result[0]->role == "pemimpin_kelompok") {
                    redirect(site_url('kelompok/Dashboard'));
                }
            } else {
                $this->CI->session->set_flashdata('msg', 'usernamepasswordsalah');
                redirect(site_url('login'));
            }
        } else {
            $this->CI->session->set_flashdata('msg', 'usernamepasswordsalah');
            redirect(site_url('login'));
        }
        return false;
    }

    /**
     * Cek session login, jika tidak ada, set notifikasi dalam flashdata, lalu dialihkan ke halaman
     * login
     * 
     */
    public function cek_login()
    {
        //cek session username
        if ($this->CI->session->userdata('username') == '' or $this->CI->session->userdata('username') == NULL) {
            //set notifikasi
            $this->CI->session->set_flashdata('gagal', 'Anda belum login');
            //alihkan ke halaman login
            redirect(site_url('Login'));
        }
    }

    /**
     * Hapus session, lalu set notifikasi kemudian di alihkan
     * ke halaman login
     */
    public function logout()
    {
        $this->CI->session->unset_userdata('username');
        $this->CI->session->unset_userdata('id_login');
        $this->CI->session->unset_userdata('id');
        $this->CI->session->unset_userdata('nama');
        $this->CI->session->unset_userdata('role');
        $this->CI->session->set_flashdata('logout', 'Anda berhasil logout');
        $this->CI->session->sess_destroy();
        redirect(site_url('login'));
    }
}
