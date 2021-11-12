<?php
defined('BASEPATH') or exit('No direct script access allowed');


class Kajian extends CI_Controller
{
    public function index()
    {
        $data['judul'] = 'Kajian';
        $this->load->view('templates/header', $data);
        $this->load->view('kajian/index', $data);
        $this->load->view('templates/footer');
    }
}
