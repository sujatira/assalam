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
        $data['tbl_user'] = $this->db->get_where('tbl_user', ['email' =>
        $this->session->userdata('email')])->row_array();
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

        $this->load->view('templates/header', $data);
        $this->load->view('artikel/oleh', $data);
        $this->load->view('templates/footer');
    }
    public function detail($id)
    {
        $data['tbl_user'] = $this->db->get_where('tbl_user', ['email' =>
        $this->session->userdata('email')])->row_array();
        $data['artikel'] = $this->Artikel_model->getAllArtikel();
        $data['ar'] = $this->Artikel_model->get_artikel($id);

        $data['judul'] = 'Detail Artikel';
        $this->load->view('templates/header_user', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('menu/detail_artikel', $data);
        $this->load->view('templates/footer_user');
    }
    public function edit_artikel($id)
    {
        $data['judul'] = 'Edit  Artikel';
        $data['tbl_user'] = $this->db->get_where('tbl_user', ['email' =>
        $this->session->userdata('email')])->row_array();
        $data['artikel'] = $this->Artikel_model->getAllArtikel();
        $data['ar'] = $this->Artikel_model->get_artikel($id);

        $this->load->view('templates/header_user', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('menu/edit_artikel', $data);
        $this->load->view('templates/footer_user');
    }

    public function update_artikel()
    {

        $id_artikel = $this->input->post('id_artikel');
        $judul = $this->input->post('judul');
        $isi = $this->input->post('isi');
        $edit = 'Telah diedit';
        $upload_image = $_FILES['tmb'];

        if ($upload_image) {
            $config['allowed_types'] = 'gif|jpg|jpeg|png';
            $config['max_size'] = '2048';
            $config['upload_path'] = './assets/images/thumbnails/';
            $this->load->library('upload', $config);
            if ($this->upload->do_upload('tmb')) {
                $new_image = $this->upload->data('file_name');
                $this->db->set('image', $new_image);
            } else {
                echo $this->upload->display_errors();
            }
        }

        $this->db->query("UPDATE `tbl_artikel` SET `judul`='$judul', `isi`='$isi',`edit`='$edit', `tmb`='$new_image'  WHERE `tbl_artikel`.`id_artikel`='$id_artikel'");
        $this->session->set_flashdata('pesan', 'artikel berhasil diedit!');
        return redirect('artikel/detail/' . $id_artikel);
        // return header('Location: ' . $_SERVER['HTTP_REFERER']);
    }
}
