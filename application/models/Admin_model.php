<?php
class Admin_model extends CI_Model
{
    function getPegawaitypeAbsen($param)
    {
        $query_text = "SELECT
                            a.*
                        FROM
                            db_pegawai_piket a
                            LEFT JOIN db_user b ON a.id_pemimpin_kelompok = b.id 
                        WHERE
                            b.id = ? 
                            AND a.tgl_absen = CURDATE()";
        return $query = $this->db->query($query_text, array($param))->result_array();
    }


    public function input_data($data, $table)
    {
        $this->db->insert($table, $data);
    }

    public function getdata($table)
    {
        return $this->db->get($table);
    }

    function delete_data($where, $table)
    {
        $this->db->where($where);
        $this->db->delete($table);
    }

    function edit_data($where, $data, $table)
    {
        $this->db->where($where);
        $this->db->update($table, $data);
    }

    function allabsen()
    {
        $query_text = "SELECT 
        *
        FROM db_pegawai_piket
        where 
        date=CURDATE() and time_in is not null and time_out is not null";
        return $query = $this->db->query($query_text)->result_array();
    }

    function rangeabsen($date, $status)
    {
        $query_text = "SELECT 
                            * 
                        FROM db_pegawai_piket
                        where 
                        tgl_absen = ? AND status_piket = ?";
        return $this->db->query($query_text, array($date, $status))->result_array();
    }
    function getloadmastergrup()
    {
        $query_text = "SELECT 
                            a.*,
                            b.tanggal 
                        FROM db_master_group_piket a
                        LEFT JOIN db_master_jadwal_piket b ON a.group_piket = b.piket";
        return $this->db->query($query_text, array())->result_array();
    }
    function getloadpiket()
    {
        $query_text = "SELECT 
                            * 
                        FROM db_master_jadwal_piket a";
        return $this->db->query($query_text, array())->result_array();
    }

    function getdatafollowup($piket)
    {
        $query_text = "SELECT *
                        FROM db_master_group_piket
                        ORDER BY 
                          CASE 
                            WHEN group_piket = ? THEN 0 
                            ELSE 1 
                          END,
                          group_piket";
        return $this->db->query($query_text, array($piket))->result_array();
    }
}
