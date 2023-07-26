<?php
defined('BASEPATH') or exit(' No Direct Script');
class Dashboard extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        date_default_timezone_set("Asia/Jakarta");
        $this->simple_login->cek_login();
        $this->load->model('General_model');
        $this->load->model('Admin_model');
        $this->session->sess_expiration = '4200';
        if (!$this->session->userdata('role') and strtoupper($this->session->userdata('role')) != 'admin') redirect(base_url());
    }

    public function index()
    {
        $data['navon'] = "dashboard";
        $data['title'] = "Dashboard";
        $data['controller'] = $this;

        $this->load->view('template/home/header', $data);
        $this->load->view('template/sidebar/sidebar_admin', $data);
        $this->load->view('v_dashboardv2', $data);
    }

    // Edit Password
    public function Password()
    {
        $param = $this->session->userdata('employee_number');
        $data['title'] = "Setting Password";
        $data['pegawai_type'] = $this->Admin_model->getPegawaiType();
        $data['datatraining'] = $this->Admin_model->getPegawaiTraining($param);
        $data['navon'] = "password";
        $data['controller'] = $this;


        $this->load->view('template/home/header', $data);
        $this->load->view('template/sidebar/sidebar_admin', $data);
        $this->load->view('admin/v_edit_password', $data);
    }

    public function gantiPassword()
    {
        $passBaru = $this->input->post('passBaru');

        $data = array('password' => md5(base_en_pass($passBaru)));
        $where = array('id' => $this->session->userdata('id'));

        $this->Admin_model->edit_data($where, $data, 'db_user');
        $this->session->set_flashdata('msg', 'success');

        redirect(base_url() . "admin/Dashboard");
    }
}
