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
        $this->load->model('Infaq_model');
    }

    public function index()
    {
        $data['tbl_user'] = $this->db->get_where('tbl_user', ['email' =>
        $this->session->userdata('email')])->row_array();
        $data['judul'] = 'Dashboard';
        $data['adapengajuan'] = $this->Infaq_model->getAllPengajuan();
        $data['jumlahartikel'] = $this->Artikel_model->numartikel();
        $data['jumlahuser'] = $this->User_model->numuser();
        $data['masuk'] = $this->db->query('SELECT SUM(nominal) AS jumlah FROM tbl_infaq')->row(); //masuk
        $data['keluar'] = $this->db->query('SELECT SUM(jumlah_pengajuan) AS maks FROM tbl_pengajuan WHERE status_pengajuan = 1')->row(); //pengeluaran
        $data['sisa'] = $data['masuk']->jumlah - $data['keluar']->maks; //sisa
        $data['chart'] = $this->User_model->chartUser();
        $data['chart2'] = $this->Infaq_model->chartKas();
        $data['blmacc'] = $this->Infaq_model->getPengajuanBlmAcc();
        $data['blmacc2'] = $this->Artikel_model->getArtikelBlmAcc();

        $this->load->view('templates/header_user', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('admin/index', $data);
        $this->load->view('templates/footer_user');
    }
}
