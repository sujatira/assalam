<?php

class Infaq_model extends CI_Model
{
    public function getAllInfaq()
    {
        return $this->db->get('tbl_infaq')->result_array();
    }
}
