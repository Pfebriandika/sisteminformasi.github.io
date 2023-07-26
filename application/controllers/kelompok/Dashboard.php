<?php
defined('BASEPATH') or exit(' No Direct Script');
class Dashboard extends CI_Controller
{
    public function index()
    {
        $data['title'] = "Dashboard";
        $this->load->model('General_model');
        $this->load->model('Pekerja_model');
        $this->load->model('Admin_model');
        $data['navon'] = "dashboard";
        $data['controller'] = $this;
        $param = $this->session->userdata('employee_number');
        // $data['datapegawai'] = $this->Admin_model->getPegawaiDetail($param);

        $this->load->view('template/home/header', $data);
        $this->load->view('template/sidebar/sidebar_pekerja', $data);
        $this->load->view('v_dashboard');
    }
}
