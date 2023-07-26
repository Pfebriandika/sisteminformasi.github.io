<?php
defined('BASEPATH') or exit(' No Direct Script');

class Absensi extends CI_Controller
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
        $data['title'] = "Absensi";
        $data['navon'] = "absence";
        $data['controller'] = $this;
        $paramid = $this->session->userdata('id');
        $param = $this->session->userdata('employee_number');
        $data['valueabsen'] = $this->Pegawai_model->getketabsen($param);
        // $data['sisacuti'] = $this->Pegawai_model->getCutiSisa($param);
        // $data['datacuti'] = $this->Admin_model->getPegawaiCuti($param);
        // $data['datapegawai'] = $this->Admin_model->getPegawaiDetail($param);
        $data['dataloadmaster'] = $this->Admin_model->getloadpiket();
        // $data['dataother'] = $this->Admin_model->getPegawaiother($param);
        $data['typeabsen'] = $this->Admin_model->getPegawaitypeAbsen($paramid);

        if ($data['typeabsen'] = '') {
            $dateabs = '0';
        } else {
            $dateabs = $data['typeabsen'];
        }
        $data['dateabsen'] = $dateabs;
        // var_dump($dateabs);
        // die;

        $this->load->view('template/home/header', $data);
        $this->load->view('template/sidebar/sidebar_pekerja', $data);
        // $this->load->view('kelompok/piket/v_group_piket', $data);
        $this->load->view('kelompok/piket/v_piket', $data);
    }
    // }

    public function addPiket()
    {
        $paramid = $this->session->userdata('id');
        $tgl_absen = $this->input->post('tgl_absen');
        $group_piket = $this->input->post('group_piket');
        $nama = $this->input->post('nama');
        $jabatan = $this->input->post('jabatan');
        $status_piket = $this->input->post('status_piket');
        $notes = $this->input->post('keterangan');

        $brp_nama = count($nama);
        for ($i = 0; $i < $brp_nama; $i++) {
            $data[$i] = array(
                'id_pemimpin_kelompok'  => $paramid,
                'nama'                  => $nama[$i],
                'jabatan'               => $jabatan[$i],
                'status_piket'          => $status_piket[$i],
                'keterangan'            => htmlentities($notes[$i]),
                'tgl_absen'             => $tgl_absen[$i],
                'group_piket'           => $group_piket[$i],
            );

            $this->Admin_model->input_data($data[$i], 'db_pegawai_piket');
        }

        $data1 = array(
            'status'      => '1',
        );

        $where1 = array(
            'id' =>  $this->input->post('id_parem'),
        );

        $this->Admin_model->edit_data($where1, $data1, 'db_master_jadwal_piket');

        $this->session->set_flashdata('msg', '1');
        redirect(base_url() . "kelompok/Absensi");
    }

    // public function load()
    // {
    //     $event_data = $this->Admin_model->getloadmastergrup();
    //     foreach ($event_data->result_array() as $row) {
    //         $data[] = array(
    //             'id'        => $row['id'],
    //             'nama'     => $row['nama'],
    //             'jabatan'    => $row['jabatan'],
    //             'group_piket' => $row['group_piket']
    //         );
    //     }
    //     echo json_encode($data);
    // }

    public function ModalFollowUp()
    {
        $id = $this->input->post('id');
        $tanggal = $this->input->post('tanggal');
        $piket = $this->input->post('piket');
        $data['dataid'] = $id;
        $data['datatanggal'] = $tanggal;
        $data['dataup'] = $this->Admin_model->getdatafollowup($piket);

        $this->load->view('kelompok/piket/v_modal_action', $data);
    }
}
