<?php
defined('BASEPATH') or exit('No direct script access allowed');


class Artikel extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Artikel_model');
        $this->load->model('User_model');
    }

    public function index()
    {

        $data['judul'] = 'Artikel';
        $data['approved'] = $this->Artikel_model->get_artikel_approved();

        $this->load->view('templates/header', $data);
        $this->load->view('artikel/index', $data);
        $this->load->view('templates/footer');
    }
}
