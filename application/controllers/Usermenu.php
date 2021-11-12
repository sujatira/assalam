<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Usermenu extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        // cek_login2();
        $this->load->model('Artikel_model');
        $this->load->model('User_model');
    }
    public function index()
    {
        $data['tbl_user'] = $this->db->get_where('tbl_user', ['email' =>
        $this->session->userdata('email')])->row_array();
        //$data['menu'] = $this->db->get('tbl_user')->result_array();
        $data['artikel'] = $this->Artikel_model->getAllArtikel();
        $data['user'] = $this->User_model->getAllUser();

        // var_dump($data);
        // die;

        $data['judul'] = 'Artikel';
        $this->load->view('templates/header_user', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('menu/index', $data);
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
    // public function proses_tambah()
    // {
    //     extract($_POST);
    //     extract($_FILES);

    //     $date = date("Y-m-d");
    //     $this->db->query("INSERT INTO `tbl_artikel`(`judul`,`isi`,`status`,`tanggal`) VALUES ('$judul', '$isi','0', '$date')");
    //     $id_artikel = $this->db->insert_id();
    //     // var_dump($id_artikel);
    //     // die();

    //     foreach ($_FILES['gambar']['name'] as $idx2 => $row2) {

    //         $file_name1         = $row2;
    //         $this->db->query(" INSERT INTO `tbl_gambar`(`id_artikel`, `gambar`) VALUES ('$id_artikel','$file_name1') ");
    //         move_uploaded_file($_FILES['gambar']['tmp_name'][$idx2], 'assets/images/' . $file_name1);
    //     }
    //     $this->session->set_flashdata('pesan', '<div class="alert alert-success fade show" role="alert"><i class="fas fa-check"></i> Artikel berhasil ditambahkan</div>');
    //     echo json_encode(["success" => true, "message" => "Berhasil di simpan"]);
    //     // redirect('menu');
    // }
}
