<?php

class Infaq_model extends CI_Model
{
    public function getAllInfaq()
    {
        return $this->db->get('tbl_infaq')->result_array();
    }
    public function getAllPengajuan()
    {
        return $this->db->get('tbl_pengajuan')->result_array();
    }
    public function getDetailsPengajuan($id)
    {
        $this->db->select('*');
        $this->db->from('tbl_pengajuan');
        $this->db->where('id_pengajuan', $id);

        return $this->db->get()->row();
    }
    public function hapus_pengajuan($where, $table)
    {
        $this->db->where($where);
        $this->db->delete($table);
    }
    public function hapus_pemasukan($where, $table)
    {
        $this->db->where($where);
        $this->db->delete($table);
    }
    public function getKasId($id)
    {
        $this->db->select('*');
        $this->db->from('tbl_infaq');
        $this->db->where('id_infaq', $id);

        return $this->db->get()->row();
    }
    public function getPengajuanApproved()
    {
        $this->db->select('*');
        $this->db->from('tbl_infaq');
        $this->db->where('status_pengajuan' == 1);

        return $this->db->get()->result_array();
    }
    public function chartKas()
    {
        $data = $this->getAllInfaq();
        // $query = "SELECT nominal, MONTHNAME(tanggal) as month, COUNT(id_infaq) as total FROM tbl_infaq GROUP BY MONTH(tanggal) ORDER BY MONTH(tanggal)";
        $query = "SELECT SUM(nominal) as jumlah, MONTHNAME(tanggal) as month, COUNT(id_infaq) as total FROM tbl_infaq GROUP BY MONTH(tanggal) ORDER BY MONTH(tanggal)";
        $result = $this->db->query($query);
        return $result->result_array();
    }
    public function getPengajuanBlmAcc()
    {
        $query = "SELECT * FROM `tbl_pengajuan` WHERE `status_pengajuan` = 0";
        $num = $this->db->query($query);
        return $num->num_rows();
    }
}
