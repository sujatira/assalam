<?php
defined('BASEPATH') or exit('No direct script access allowed');


class Kajian extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Infaq_model');
    }
    public function index()
    {
        $data['judul'] = 'Kajian';
        $data['infaq'] = $this->Infaq_model->getAllInfaq();
        $data['tbl_user'] = $this->db->get_where('tbl_user', ['email' =>
        $this->session->userdata('email')])->row_array();

        $this->load->view('templates/navbar', $data);
        $this->load->view('templates/header', $data);
        $this->load->view('kajian/index', $data);
        $this->load->view('templates/footer');
    }
}
