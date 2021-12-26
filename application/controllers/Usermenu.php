<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Usermenu extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Artikel_model');
        $this->load->model('User_model');
    }
    public function index()
    {
        $id = $this->session->userdata('id_user');
        $data['tbl_user'] = $this->db->get_where('tbl_user', ['email' =>
        $this->session->userdata('email')])->row_array();
        $data['artikel'] = $this->Artikel_model->getSawareh($id);
        $data['user'] = $this->User_model->getAllUser();


        // var_dump($id);
        // die;

        $data['judul'] = 'Artikel';
        $this->load->view('templates/header_user', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('usermenu/index', $data);
        $this->load->view('templates/footer_user');
    }

    public function tambah()
    {
        $data['tbl_user'] = $this->db->get_where('tbl_user', ['email' =>
        $this->session->userdata('email')])->row_array();
        $data['artikel'] = $this->Artikel_model->getAllArtikel();

        $data['judul'] = 'Tambah Artikel';
        $this->load->view('templates/header_user', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('usermenu/tambah', $data);
        $this->load->view('templates/footer_user');
    }

    public function hapus_artikel($id)
    {
        $where = array('id_artikel' => $id);
        $this->Artikel_model->hapus_artikel($where, 'tbl_artikel');
        $this->session->set_flashdata('pesan', 'artikel berhasil dihapus');
        redirect('usermenu');
    }
}
