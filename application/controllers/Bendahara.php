<?php
defined('BASEPATH') or exit('No direct script access allowed');


class Bendahara extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Infaq_model');
        cek_login();
    }

    public function index()
    {
        $data['tbl_user'] = $this->db->get_where('tbl_user', ['email' =>
        $this->session->userdata('email')])->row_array();
        $data['judul'] = 'Dashboard Bendahara';
        $this->load->view('templates/header_user', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('bendahara/index', $data);
        $this->load->view('templates/footer_user');
    }

    public function kas()
    {
        $data['tbl_user'] = $this->db->get_where('tbl_user', ['email' =>
        $this->session->userdata('email')])->row_array();
        $data['infaq'] = $this->Infaq_model->getAllInfaq();
        $data['judul'] = 'Kelola Data Kas';
        $this->load->view('templates/header_user', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('bendahara/kas', $data);
        $this->load->view('templates/footer_user');
    }

    public function pengeluaran_kas()
    {
        $data['tbl_user'] = $this->db->get_where('tbl_user', ['email' =>
        $this->session->userdata('email')])->row_array();
        $data['infak'] = $this->Infaq_model->getAllPengajuan();
        $data['judul'] = 'Pengeluaran';
        $this->load->view('templates/header_user', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('bendahara/pengeluaran_kas', $data);
        $this->load->view('templates/footer_user');
    }
    public function pengajuan_pengeluaran_kas()
    {
        $data['tbl_user'] = $this->db->get_where('tbl_user', ['email' =>
        $this->session->userdata('email')])->row_array();

        $data['judul'] = 'Pengajuan pengeluaran kas';
        $this->load->view('templates/header_user', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('bendahara/pengajuan_pengeluaran_kas', $data);
        $this->load->view('templates/footer_user');
    }
}
