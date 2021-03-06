<?php

class User_model extends CI_Model
{
    public function getAllUser()
    {
        return $this->db->get('tbl_user')->result_array();
    }

    public function userEdit($where, $table)
    {
        return $this->db->get_where($table, $where);
    }

    public function userUpdate($where, $table, $data)
    {
        $this->db->where($where);
        $this->db->update($table, $data);
    }

    public function getUserId($id)
    {
        return $this->db->get_where('tbl_user', ['id_user' => $id])->row();
    }

    public function getUser($id)
    {
        $this->db->select('*');
        $this->db->from('tbl_user');
        $this->db->where('id_user', $id);

        return $this->db->get()->row();
    }

    public function getOleh($id)
    {
        return $this->db->get_where('tbl_user', ['id_user' => $id])->row();
    }

    public function numuser()
    {
        $query = $this->db->get('tbl_user');
        return $query->num_rows();
    }
    public function hapus_user($where, $table)
    {
        $this->db->where($where);
        $this->db->delete($table);
    }
    public function chartUser()
    {
        $query =  "SELECT sebagai, COUNT(id_user) as jumlah FROM tbl_user GROUP BY sebagai";
        $result = $this->db->query($query);
        return $result->result_array();
    }

    public function getBlok()
    {
        $id_user = $this->session->userdata('id_user');
        $blok = 1;

        $this->db->query("UPDATE `tbl_user` SET `status_blok` = $blok WHERE `tbl_user`.`id_user` = $id_user");
    }

    public function getUnblok()
    {
        $id_user = $this->session->userdata('id_user');
        $blok = 0;

        $this->db->query("UPDATE `tbl_user` SET `status_blok` = $blok WHERE `tbl_user`.`id_user` = $id_user");
    }
}
