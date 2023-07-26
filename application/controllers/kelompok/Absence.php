<?php
defined('BASEPATH') or exit(' No Direct Script');

class Absence extends CI_Controller
{
  public function __construct()
  {
    parent::__construct();
    date_default_timezone_set("Asia/Jakarta");
    $this->simple_login->cek_login();
    $this->load->model('Pegawai_model');
    $this->load->model('Admin_model');
    $this->load->model('Pekerja_model');
    $this->load->model('General_model');
    $this->session->sess_expiration = '4200';
    if (!$this->session->userdata('role') and strtoupper($this->session->userdata('role')) != 'employee') redirect(base_url());
  }
  public function index()
  {
    $data['datatime'] = $this->Pegawai_model->getTimesheet();
    $data['project'] = $this->Pegawai_model->getProjectPegawai();
    $data['data_absen'] = $this->Pegawai_model->getDataAttendanceToday($this->session->userdata('employee_number'));
    $data['activity'] = $this->Admin_model->getalltimesheet_activity();
    $data['navon'] = "absence";
    $data['title'] = "Absence";
    $data['controller'] = $this;
    $param = $this->session->userdata('employee_number');
    // $data['datapegawai'] = $this->Admin_model->getPegawaiDetail($param);
    // var_dump($this->session->userdata('nip'));die;
    $this->load->view('template/home/header', $data);
    $this->load->view('template/sidebar/sidebar_pekerja', $data);
    $this->load->view('employee/absence/v_absence', $data);
    //$this->load->view('employee/absence/v_maps', $data);

  }
}
