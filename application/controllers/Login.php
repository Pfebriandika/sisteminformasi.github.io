<?php defined('BASEPATH') or exit('No direct script access allowed');

class Login extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->library('Simple_login');
    }
    public function index()
    {
        if ($this->session->userdata('role') == 'pemimpin_apel') redirect(site_url('apel/Dashboard'));
        else if ($this->session->userdata('role') == 'pemimpin_kelompok') redirect(site_url('kelompok/Dashboard'));


        if ($this->input->post('login')) {
            $username = $this->input->post('username');
            $password = $this->input->post('password');

            $this->simple_login->login($username, md5(base_en_pass($password)));
        } else {
            $this->load->view('template/login/header');
            $this->load->view('template/login/v_login');
            $this->load->view('template/login/footer');
        }
    }
    public function logout()
    {
        // var_dump('expression');
        $this->simple_login->logout();
    }
}
