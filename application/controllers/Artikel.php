<?php
defined('BASEPATH') or exit('No direct script access allowed');


class Artikel extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Artikel_model');
        $this->load->model('User_model');
        $this->load->model('Infaq_model');
    }

    public function index()
    {

        $data['judul'] = 'Artikel';
        $data['approved'] = $this->Artikel_model->get_artikel_approved();
        $data['infaq'] = $this->Infaq_model->getAllInfaq();
        $data['tbl_user'] = $this->db->get_where('tbl_user', ['email' =>
        $this->session->userdata('email')])->row_array();
        $this->load->view('templates/navbar', $data);
        $this->load->view('templates/header', $data);
        $this->load->view('artikel/index', $data);
        $this->load->view('templates/info_kas', $data);
        $this->load->view('templates/footer');
    }

    public function artikel_detail($id)
    {
        $data['judul'] = 'Detail Artikel';
        $data['userartikel'] = $this->Artikel_model->getDetailArtikel($id);
        $data['artikel'] = $this->Artikel_model->getAllArtikel();
        $data['infaq'] = $this->Infaq_model->getAllInfaq();
        $data['tmbl'] = $this->Artikel_model->get_tmb($id);
        $this->load->view('templates/header', $data);
        $this->load->view('templates/navbar', $data);
        $this->load->view('templates/sidebar_artikel', $data);
        $this->load->view('artikel/artikel_detail', $data);
        $this->load->view('templates/isi_artikel', $data);
        $this->load->view('templates/info_kas', $data);
        $this->load->view('templates/footer');
    }
    public function detail_user($id)
    {
        $data['tbl_user'] = $this->db->get_where('tbl_user', ['email' =>
        $this->session->userdata('email')])->row_array();
        $data['userid'] = $this->User_model->getUserId($id);
        $data['judul'] = 'Detail User';
        $this->load->view('templates/header_user', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('menu/detail_user', $data);
        $this->load->view('templates/footer_user');
    }

    public function oleh($id)
    {
        $data['userid'] = $this->User_model->getUserId($id);
        $data['judul'] = 'Detail User';

        // var_dump($data);
        // die;

        $this->load->view('templates/header', $data);
        $this->load->view('artikel/oleh', $data);
        $this->load->view('templates/footer');
    }
}
