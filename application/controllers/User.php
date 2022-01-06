<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        cek_login();
        $this->load->model('User_model');
        $this->load->helper('url');
    }

    public function index()
    {
        $data['judul'] = 'Profil Saya';
        $data['tbl_user'] = $this->db->get_where('tbl_user', ['email' =>
        $this->session->userdata('email')])->row_array();

        $this->load->view('templates/header_user', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('user/index', $data);
        $this->load->view('templates/footer_user');
    }


    public function edit()
    {
        $data['judul'] = 'Edit Profile';
        $data['tbl_user'] = $this->db->get_where('tbl_user', ['email' =>
        $this->session->userdata('email')])->row_array();
        $this->form_validation->set_rules('nama', 'Full Name', 'required|trim');

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header_user', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('user/edit', $data);
            $this->load->view('templates/footer_user');
        } else {
            $nama = $this->input->post('nama');
            $email = $this->input->post('email');
            $upload_image = $_FILES['image'];
            if ($upload_image) {
                $config['allowed_types'] = 'gif|jpg|jpeg|png';
                $config['max_size'] = '2048';
                $config['upload_path'] = './assets/images/profile/';
                $this->load->library('upload', $config);
                if ($this->upload->do_upload('image')) {
                    $new_image = $this->upload->data('file_name');
                    $this->db->set('image', $new_image);
                } else {
                    echo $this->upload->display_errors();
                }
            }


            $this->db->set('nama', $nama);
            $this->db->where('email', $email);
            $this->db->update('tbl_user');
            $this->session->set_flashdata('pesan', 'berhasil di update');
            return redirect('user');
        }
    }

    // public function update($id)
    // {

    //     $data['judul'] = 'Edit Profile';
    //     $data['tbl_user'] = $this->db->get_where('tbl_user', ['email' =>
    //     $this->session->userdata('email')])->row_array();
    //     $this->form_validation->set_rules('name', 'Full Name', 'required|trim');
    //     $data['user'] = $this->User_model->userUpdate();

    //     if ($this->form_validation->run() == false) {

    //         $this->load->view('templates/header_user', $data);
    //         $this->load->view('templates/sidebar', $data);
    //         $this->load->view('templates/topbar', $data);
    //         $this->load->view('user/edit', $data);
    //         $this->load->view('templates/footer_user');
    //     } else {

    //         $id = $this->input->post('id');
    //         $nama = $this->input->post('nama');
    //         $email = $this->input->post('email');

    //         $data = array(
    //             'nama' => $nama,
    //             'email' => $email
    //         );

    //         $where = array(
    //             'id' => $id
    //         );
    //     }

    //     $this->session->set_flashdata('pesan', '<div class="alert alert-andi alert-success alert-dismissible fade show" role="alert"><i class="fas fa-check-circle"></i> Data berhasil di edit!</div>');
    //     return redirect('user/index');
    // }
}
