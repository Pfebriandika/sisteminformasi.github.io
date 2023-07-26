<?php
defined('BASEPATH') or exit(' No Direct Script');

class Absen extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        date_default_timezone_set("Asia/Jakarta");
        $this->simple_login->cek_login();
        $this->load->model('Admin_model');
        $this->load->model('General_model');
        $this->session->sess_expiration = '4200';
        if (!$this->session->userdata('role') and strtoupper($this->session->userdata('role')) != 'pemimpin_apel') redirect(base_url());
    }

    public function index()
    {
        $data['navon'] = "absen";
        $data['title'] = "Absen";
        $data['controller'] = $this;
        // $data['datapegawai'] = $this->Admin_model->getPegawaiNew('active');
        // $data['dataabsen'] = $this->Admin_model->getAllAbsen();

        $data['start'] = $this->input->post('start');
        // $data['rangeabsen'] = $this->Admin_model->rangeabsen($data['start'], $data['end']);
        // var_dump($data['rangeabsen']);
        // die;

        $this->load->view('template/home/header', $data);
        $this->load->view('template/sidebar/sidebar_admin', $data);
        $this->load->view('apel/v_absenAll', $data);
        $this->load->view('template/home/footerabsen', $data);
    }

    public function filter()
    {
        $data['navon'] = "absen";
        $data['title'] = "Absen";
        $data['controller'] = $this;
        $iduser = $this->session->userdata('id');

        // $data['dataperperiode'] = $this->Admin_model->getAbsenperPeriode($iduser);
        // $data['dataabsen'] = $this->Admin_model->getAllAbsen($iduser);

        $tanggal = $this->input->post('tanggal');
        $pikethadir = $this->Admin_model->rangeabsen($tanggal, 'Piket Hadir');
        $cadanganpiket = $this->Admin_model->rangeabsen($tanggal, 'Cadangan Piket');
        $lepaspiket = $this->Admin_model->rangeabsen($tanggal, 'Lepas Piket');
        $tidakhadir = $this->Admin_model->rangeabsen($tanggal, 'Tidak Hadir');


        $data['datapikethadir'] = count($pikethadir);
        $data['datacadangan'] = count($cadanganpiket);
        $data['datalepaspiket'] = count($lepaspiket);
        $data['datatidakhadir'] = count($tidakhadir);
        $data['tanggalfilter'] = $tanggal;
        $data['statushadir'] = 'Piket Hadir';
        $data['statuscadangan'] = 'Cadangan Piket';
        $data['statuslepas'] = 'Lepas Piket';
        $data['statustidakhadir'] = 'Tidak Hadir';

        $this->load->view('template/home/header', $data);
        $this->load->view('template/sidebar/sidebar_admin', $data);
        $this->load->view('apel/v_absenAllFilter', $data);
        $this->load->view('template/home/footerabsen', $data);
    }

    public function ModalDetail()
    {
        $parent = $this->input->post('parent');
        // $username = $this->session->userdata('username');
        // $id_param = $this->Admin_proyek_model->getidparam($username);
        // $param = $id_param[0]['id_proyek'];

        // if ($parent == '') {
        //     $parentid = $id;
        // } else {
        //     $parentid = $parent;
        // }

        // $data['iddata'] = $id;
        $data['datatipe'] = $this->input->post('tipe');
        $data['datadetail'] = $this->Admin_model->rangeabsen($parent, $data['datatipe']);
        // $data['dataup'] = $this->Admin_proyek_model->getdatafollowup($parentid, $parentid, $param);

        $this->load->view('apel/v_modal_detail_absen', $data);
    }
}
