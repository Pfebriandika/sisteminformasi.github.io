<?php
class General_model extends CI_Model
{
    function where_id($table, $where, $id)
    {
        return $this->db->query("SELECT * FROM $table where $where = '$id'")->result_array();
    }

    public function getdata($table)
    {
        return $this->db->get($table)->result_array();
    }

    public function GetdataDESC($table, $param)
    {
        $this->db->from($table);
        $this->db->order_by($param, "DESC");
        $query = $this->db->get();
        return $query->result_array();
    }


    // function get_id($old, $new)
    // {
    //     return $this->db->query(
    //         "SELECT id FROM db_requestadmin where dataold=? and datanew=? order by id desc limit 1",
    //         array($old, $new)
    //     )->result_array();
    // }
    // function get_addid($old)
    // {
    //     return $this->db->query(
    //         "SELECT id FROM db_requestadmin where dataold is null and datanew=? order by id desc limit 1",
    //         array($old)
    //     )->result_array();
    // }

    // function get_iddelete($old)
    // {
    //     return $this->db->query(
    //         "SELECT id FROM db_requestadmin where dataold=? and datanew is null order by id desc limit 1",
    //         array($old)
    //     )->result_array();
    // }

    public function genyear($table, $date1, $date2)
    {
        return $this->db->query("SELECT * FROM $table WHERE LEFT(tgl_lahir,4) BETWEEN $date1 AND $date2")->result_array();
    }
}
