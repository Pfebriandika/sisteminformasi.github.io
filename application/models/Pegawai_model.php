<?php
class Pegawai_model extends CI_Model
{
    function getTimesheet()
    {
        // $query_text="SELECT a.*,b.project, c.disciplines activity
        //             FROM 
        //             db_timesheet a, db_project b , db_master_disciplines c 
        //             where a.project=b.id and a.employee_number=? 
        //             and a.id_activity=c.id
        //             order by tanggal desc";

        $query_text = "with tmp as (
                            SELECT 
                            a.employee_number,a.tanggal,
                            a.durasi,
                            a.project id_project,
                            b.project project_name, d.full_name,a.status
                            FROM 
                            db_timesheet a, db_project b , db_pegawai d
                            where a.project=b.id 
                            and a.id_pegawai=d.id
                            order by tanggal desc
                        ),tmp2 as (
                            SELECT a.* FROM tmp a
                        ),tmp3 as (
                            SELECT 
                            employee_number, full_name, tanggal,id_project,project_name,  sum(durasi) durasi,sum(status) status
                            FROM tmp2
                            GROUP BY employee_number,tanggal,project_name
                        )
                        SELECT * FROM tmp3 where employee_number=? order by tanggal desc";

        return $query = $this->db->query($query_text, array($this->session->userdata('employee_number')))->result_array();
    }


    function getTimesheetExist($data)
    {
        $query_text = "SELECT * FROM db_timesheet 
                     where employee_number=?
                     and tanggal=?
                     and project=?";
        return $query = $this->db->query($query_text, array($data['employee_number'], $data['tanggal'], $data['project']))->num_rows();
    }

    function getTimesheetStatus($data)
    {
        $query_text = "SELECT status FROM db_timesheet 
                     where employee_number=?
                     and tanggal=?
                     and project=?";
        return $query = $this->db->query($query_text, array($data['employee_number'], $data['tanggal'], $data['project']))->result_array();
    }

    function insertTimesheet($data)
    {
        $output = $this->db->insert('db_timesheet', $data);
        return $output;
    }

    function updateTimesheet($data)
    {
        $param = array(
            'employee_number' => $data['employee_number'],
            'tanggal' => $data['tanggal'],
            'id_pegawai' => $data['id_pegawai'],
            'project' => $data['project']
        );
        $update = array('durasi' => $data['durasi']);
        $this->db->where($param);
        $output = $this->db->update('db_timesheet', $update);
        return $output;
    }

    function getProjectPegawai()
    {
        $query_text = "SELECT a.*, b.project ,b.id project_id
                        FROM db_project_assign a, db_project b
                        where 
                        a.id_project=b.id
                        and SYSDATE() between a.tanggal_mulai and a.tanggal_akhir
                        and a.employee_number=?";
        return $query = $this->db->query($query_text, array($this->session->userdata('employee_number')))->result_array();
    }

    function getProjectPegawaiByNipg($nipg)
    {

        $query_text = "SELECT a.*,b.project NamaProject FROM v_timesheet_detail a,db_project b WHERE a.project = b.id AND employee_number = ?";
        // $query_text="SELECT a.*, b.project ,b.id project_id
        //                 FROM db_project_assign a, db_project b
        //                 where 
        //                 a.id_project=b.id
        //                 and SYSDATE() between a.tanggal_mulai and a.tanggal_akhir
        //                 and a.employee_number=?";
        return $query = $this->db->query($query_text, array($nipg))->result_array();
    }

    function getTimesheetSingle($employee_number, $date, $project)
    {
        $query_text = "SELECT a.*,b.project NamaProject
        FROM db_timesheet a,db_project 
        where a.employee_number = ? and 
        a.tanggal = ? and 
        a.project = ? and 
        a.project = b.id";

        return $this->db->query($query_text, array($employee_number, $date, $project))->result_array();
    }

    function getTimesheetPending($employee, $project)
    {
        $query_text = "SELECT count(*) jumlah FROM db_timesheet where employee_number=? and project=? and status=0";
        return $query = $this->db->query($query_text, array($employee, $project))->first_row();
    }
    function getTimesheetDetail($employee)
    {
        $query_text = "SELECT a.*,b.project NamaProject FROM v_timesheet_detail a,db_project b WHERE a.project = b.id AND employee_number = ?";
        return $this->db->query($query_text, array($employee))->result_array();
    }

    function getTimesheetSubordinate()
    {
        $employee_number = $this->session->userdata('employee_number');
        $query_text = "with tmp1 as (
                        SELECT 
                        id_project
                        FROM db_project_assign a , db_master_jabatan b
                        where SYSDATE() between a.tanggal_mulai and a.tanggal_akhir
                        and a.id_jabatan=b.id
                        and upper(b.jabatan) like upper('%PRO%MANAGER%')
                        and a.employee_number=?
                    )
                    select 
                    a.*, b.full_name, c.jabatan, d.project project_name
                    from db_project_assign a, db_pegawai b, db_master_jabatan c, db_project d 
                    where id_project in (select * from tmp1)
                    and a.id_pegawai=b.id
                    and a.id_jabatan=c.id
                    and a.id_project=d.id
                    and a.employee_number !=?";
        return $query = $this->db->query($query_text, array($employee_number, $employee_number))->result_array();
    }

    function getTimesheetSubordinateDetail($param)
    {
        $param = explode('#', $param);
        $query_text = "SELECT a.*,b.project NamaProject 
                     FROM v_timesheet_subordinate a,db_project b 
                     WHERE a.project = b.id AND employee_number = ?
                     and a.project=?
                     order by a.weeks desc";
        return $query = $this->db->query($query_text, array($param[0], $param[1]))->result_array();
    }


    // Absence Module
    function getDataAttendanceToday($id)
    {
        date_default_timezone_set("Asia/Bangkok");
        // $id = $this->session->userdata('employee_number');
        $date = date("Y-m-d");
        $query = $this->db->query("SELECT * FROM db_pegawai_piket 
                                 WHERE nipg_pegawai=? and date=? order by date desc", array($id, $date));
        return $query->result_array();
    }

    function absent_update($data, $id)
    {
        $this->db->where('id', $id);
        $output = $this->db->update('db_pegawai_piket', $data);
        return $output;
    }

    function absent_insert($data)
    {
        $output = $this->db->insert('db_pegawai_piket', $data);
        return $output;
    }
    // End Absence Module

    function getalltimesheet_activity()
    {
        $employee_number = $this->session->userdata('employee_number');
        return $query = $this->db->query("with parent as (
                                            SELECT * FROM db_master_disciplines where parent is null 
                                        ), child as (
                                            SELECT * FROM db_master_disciplines where parent is not null
                                        ), employee as (
                                            select distinct id_disciplines from db_project_assign where employee_number=? limit 1 
                                        )
                                        select a.id, b.id id_parent, b.disciplines parent, a.disciplines
                                        from child a LEFT JOIN parent b ON (a.parent=b.id or a.parent in (71,77))
                                        INNER JOIN employee c ON b.id = c.id_disciplines", array($employee_number))->result_array();
    }

    // public function getCutiSisa($tabletype, $nipg, $type)
    // {
    //     $query = "SELECT
    //     a.*,
    //     b.cuti_type,
    //     c.cuti_tahunan,
    //     c.cuti_besar,
    //     (c.cuti_tahunan)-SUM(a.total_cuti) sisa_cuti_besar,
    //     ((c.cuti_tahunan)+(c.cuti_besar))-SUM(a.total_cuti) sisa_all_cuti
    // FROM
    //     db_pegawai_cuti a 
    //     LEFT JOIN db_pegawai_special_information b ON a.employee_number = b.employee_number
    //     LEFT JOIN db_master_cuti_type c ON b.cuti_type = c.id
    // WHERE
    //     a.employee_number='400003'
    //     and a.periode=YEAR(NOW()) 
    // ";
    //     return $this->db->query($query, array($tabletype, $type, $nipg))->result_array();
    // }
    function getCutiSisa($param)
    {
        $query_text = "SELECT
            a.*,
            b.cuti_type,
            c.cuti_tahunan,
            c.cuti_besar,
            (c.cuti_tahunan)+(c.cuti_besar) all_cuti,
            (c.cuti_tahunan)-SUM(a.total_cuti) sisa_cuti_besar,
            ((c.cuti_tahunan)+(c.cuti_besar))-SUM(a.total_cuti) sisa_all_cuti
        FROM
            db_pegawai_cuti a 
            LEFT JOIN db_pegawai_special_information b ON a.employee_number = b.employee_number
            LEFT JOIN db_master_cuti_type c ON b.cuti_type = c.id
        WHERE
            a.employee_number=?
            and a.periode=YEAR(NOW())";
        return $query = $this->db->query($query_text, array($param))->result_array();
    }

    function getketabsen($param)
    {
        $query_text = "SELECT
                            a.*,
                            c.tanggal
                        FROM
                            db_master_group_piket a 
                            LEFT JOIN db_user b ON a.id_pemimpin_k = b.id
                            LEFT JOIN db_master_jadwal_piket c ON a.group_piket = c.piket
                        WHERE
                            a.id_pemimpin_k=?
	                    			and c.tanggal = '2023-06-23'";
        return $query = $this->db->query($query_text, array($param))->result_array();
    }
}
