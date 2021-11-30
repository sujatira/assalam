<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        cek_login();
        $this->load->model('Artikel_model');
        $this->load->model('User_model');
    }

    public function index()
    {
        $data['tbl_user'] = $this->db->get_where('tbl_user', ['email' =>
        $this->session->userdata('email')])->row_array();
        $data['judul'] = 'Dashboard';
        $data['jumlahartikel'] = $this->Artikel_model->numartikel();
        $data['jumlahuser'] = $this->User_model->numuser();

        // var_dump($a);
        // die;



        $this->load->view('templates/header_user', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('admin/index', $data);
        $this->load->view('templates/footer_user');
    }
}
