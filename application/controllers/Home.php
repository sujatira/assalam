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
        $data['tbl_user'] = $this->db->get_where('tbl_user', ['email' =>
        $this->session->userdata('email')])->row_array();
        $data['judul'] = 'Masjid Jami Assalam';
        $data['infaq'] = $this->Infaq_model->getAllInfaq();
        $this->load->view('templates/navbar', $data);
        $this->load->view('templates/header', $data);
        $this->load->view('home/index', $data);
        $this->load->view('templates/info_kas', $data);
        $this->load->view('templates/footer');
    }

    public function about()
    {
        $data['tbl_user'] = $this->db->get_where('tbl_user', ['email' =>
        $this->session->userdata('email')])->row_array();
        $data['judul'] = 'Masjid Jami Assalam';
        $this->load->view('templates/navbar', $data);
        $this->load->view('templates/header', $data);
        $this->load->view('home/about', $data);
        $this->load->view('templates/footer');
    }

    public function developer()


    {
        $data['tbl_user'] = $this->db->get_where('tbl_user', ['email' =>
        $this->session->userdata('email')])->row_array();
        $data['judul'] = 'Masjid Jami Assalam';
        // $this->load->view('templates/navbar', $data);
        $this->load->view('templates/header', $data);
        $this->load->view('home/developer', $data);
        // $this->load->view('templates/footer');
    }
}
