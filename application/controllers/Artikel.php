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

        $this->load->view('templates/header', $data);
        $this->load->view('artikel/index', $data);
        $this->load->view('templates/footer');
    }

    public function artikel_detail($id)
    {
        $data['judul'] = 'Detail Artikel';
        $data['userartikel'] = $this->Artikel_model->getDetailArtikel($id);
        $data['infaq'] = $this->Infaq_model->getAllInfaq();
        $data['tmbl'] = $this->Artikel_model->get_tmb($id);

        $this->load->view('templates/header', $data);
        $this->load->view('artikel/artikel_detail', $data);
        $this->load->view('templates/isi_artikel');
        $this->load->view('templates/footer');
    }
}
