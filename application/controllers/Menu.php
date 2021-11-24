<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Menu extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Artikel_model');
        $this->load->model('User_model');
    }
    public function index()
    {
        // cek_login();
        $data['tbl_user'] = $this->db->get_where('tbl_user', ['email' =>
        $this->session->userdata('email')])->row_array();
        $data['artikel'] = $this->Artikel_model->getAllArtikel();
        $data['user'] = $this->User_model->getAllUser();


        // var_dump($id);
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
        $this->load->view('menu/tambah', $data);
        $this->load->view('templates/footer_user');
    }

    // public function tambah_artikel()
    // {
    //     if ($this->session->userdata('email')) {
    //         redirect('user');
    //     }

    //     $date = date("Y-m-d");

    //     $this->form_validation->set_rules('judul', 'required', ['required' => 'Judul harus di isi']);
    //     $this->form_validation->set_rules('isi', 'required', ['required' => 'Isi artikel harus di isi']);

    //     $data = [
    //         'judul' => htmlspecialchars($this->input->post('judul', true)),
    //         'isi' => htmlspecialchars($this->input->post('isi', true)),
    //         'status' => 0,
    //         'tanggal' => $date,
    //         'oleh' => $this->db->get_where('tbl_user', ['nama'])
    //     ];
    //     $this->db->insert('tbl_artikel', $data);

    //     extract($_POST);
    //     extract($_FILES);

    //     foreach ($_FILES['gambar']['name'] as $idx2 => $row2) {

    //         $file_name1         = $row2;
    //         $this->db->query(" INSERT INTO `tbl_gambar`(`id_artikel`, `gambar`) VALUES ('$id_artikel','$file_name1') ");
    //         move_uploaded_file($_FILES['gambar']['tmp_name'][$idx2], 'assets/images/' . $file_name1);

    //         $this->session->set_flashdata('pesan', '<div class="alert alert-andi alert-success fade show" role="alert"><i class="fas fa-check"></i> Artikel berhasil ditambahkan</div>');
    //         echo json_encode(["success" => true, "message" => "Berhasil di simpan"]);
    //         redirect('menu');
    //     }

    //     $this->session->set_flashdata('pesan', '<div class="alert alert-andi alert-success alert-dismissible fade show" role="alert"><i class="fas fa-check-circle"></i>Artikel berhasil ditambahkan
    //     </div>');
    //     return redirect('menu');
    // }

    public function proses_tambah()
    {
        extract($_POST);
        extract($_FILES);
        // $tmb = $thumbnails;
        // var_dump($tmb);
        // die;



        $date = date("Y-m-d");
        // $data['user'] = $this->User_model->getOleh($id);
        $id_user = $this->session->userdata('id_user');
        $this->db->query("INSERT INTO `tbl_artikel`(`id_user`,`judul`,`isi`,`status`,`tanggal`) VALUES ('$id_user','$judul', '$isi','0', '$date')");
        $id_artikel = $this->db->insert_id();

        // var_dump($id_user);
        // die();


        // move_uploaded_file($_FILES['thumbnails']['tmp_name'], 'assets/images/thumbnails' . $tmb);


        foreach ($_FILES['gambar']['name'] as $idx2 => $row2) {

            $file_name1         = $row2;
            $this->db->query(" INSERT INTO `tbl_gambar`(`id_artikel`, `gambar`) VALUES ('$id_artikel','$file_name1') ");
            move_uploaded_file($_FILES['gambar']['tmp_name'][$idx2], 'assets/images/' . $file_name1);
        }


        // $upload_image = $_FILES['tmb'];
        // if ($upload_image) {
        //     $config['allowed_types'] = 'gif|jpg|jpeg|png';
        //     $config['max_size'] = '3048';
        //     $config['upload_path'] = './assets/images/thumbnails/';

        //     $this->load->library('upload', $config);
        //     if ($this->upload->do_upload('tmb')) {
        //         $new_image = $this->upload->data('file_name');
        //         // $this->db->set('tmb', $new_image);
        //     } else {
        //         echo $this->upload->display_errors();
        //     }
        // }


        $this->session->set_flashdata('pesan', '<div class="alert alert-success fade show" role="alert"><i class="fas fa-check"></i> Artikel berhasil ditambahkan</div>');
        echo json_encode(["success" => true, "message" => "Berhasil di simpan"]);
        // redirect('menu/index');
    }

    public function detail($id)
    {
        $data['tbl_user'] = $this->db->get_where('tbl_user', ['email' =>
        $this->session->userdata('email')])->row_array();
        $data['artikel'] = $this->Artikel_model->getAllArtikel();
        $data['ar'] = $this->Artikel_model->get_artikel($id);

        // var_dump($id);
        // die;


        $data['judul'] = 'Detail Artikel';
        $this->load->view('templates/header_user', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('menu/detail_artikel', $data);
        $this->load->view('templates/footer_user');
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

    public function approve()
    {
        $id_artikel = $this->input->post('id_artikel');
        $status = $this->input->post('status');


        $this->db->query("UPDATE `tbl_artikel` SET `status`='$status' WHERE `id_artikel`='$id_artikel'");
        return redirect('menu/index');
    }

    public function user()
    {
        $data['judul'] = 'List Akun';
        $data['tbl_user'] = $this->db->get_where('tbl_user', ['email' =>
        $this->session->userdata('email')])->row_array();


        $data['user'] = $this->User_model->getAllUser();
        $this->load->view('templates/header_user', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('menu/user', $data);
        $this->load->view('templates/footer_user');
    }
}
