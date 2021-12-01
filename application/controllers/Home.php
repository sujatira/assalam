<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Infaq_model');
    }
    public function index()
    {
        $data['judul'] = 'Masjid Jami Assalam';
        $data['infaq'] = $this->Infaq_model->getAllInfaq();
        $this->load->view('templates/header', $data);
        $this->load->view('home/index', $data);
        $this->load->view('templates/footer');
    }
}
