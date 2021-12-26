<?php
defined('BASEPATH') or exit('No direct script access allowed');


class Bendahara extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Infaq_model');
        cek_login();
    }

    public function index()
    {
        $data['tbl_user'] = $this->db->get_where('tbl_user', ['email' =>
        $this->session->userdata('email')])->row_array();
        $data['judul'] = 'Dashboard Bendahara';
        $this->load->view('templates/header_user', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('bendahara/index', $data);
        $this->load->view('templates/footer_user');
    }

    public function kas()
    {
        $data['tbl_user'] = $this->db->get_where('tbl_user', ['email' =>
        $this->session->userdata('email')])->row_array();
        $data['infaq'] = $this->Infaq_model->getAllInfaq();
        $data['judul'] = 'Kelola Data Kas';
        $this->load->view('templates/header_user', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('bendahara/kas', $data);
        $this->load->view('templates/footer_user');
    }

    public function pengeluaran_kas()
    {
        $data['tbl_user'] = $this->db->get_where('tbl_user', ['email' =>
        $this->session->userdata('email')])->row_array();
        $data['infak'] = $this->Infaq_model->getAllPengajuan();
        $data['judul'] = 'Pengeluaran';
        $this->load->view('templates/header_user', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('bendahara/pengeluaran_kas', $data);
        $this->load->view('templates/footer_user');
    }
    public function pengajuan_pengeluaran_kas()
    {

        $this->form_validation->set_rules('keperluan', 'Keperluan', 'required|trim', [
            'required' => 'Harap isi keperluan'
        ]);
        $this->form_validation->set_rules('jumlah', 'Jumlah', 'required|trim|integer', [
            'required' => 'Harap isi jumlah',
            'integer' => 'Harus angka'
        ]);
        $this->form_validation->set_rules('keterangan', 'Keterangan', 'required|trim', [
            'required' => 'Harap isi keterangan'
        ]);

        if ($this->form_validation->run() == false) {

            $data['tbl_user'] = $this->db->get_where('tbl_user', ['email' =>
            $this->session->userdata('email')])->row_array();
            $data['judul'] = 'Pengajuan pengeluaran kas';
            $this->load->view('templates/header_user', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('bendahara/pengajuan_pengeluaran_kas', $data);
            $this->load->view('templates/footer_user');
        } else {
            $data = [
                'nama_pengajuan' => htmlspecialchars($this->input->post('keperluan', true)),
                'jumlah_pengajuan' => htmlspecialchars($this->input->post('jumlah', true)),
                'tanggal_pengajuan' => time(),
                'status_pengajuan' => 0,
                'keterangan' => htmlspecialchars($this->input->post('keterangan', true))
            ];

            $this->db->insert('tbl_pengajuan', $data);
            return redirect('bendahara/pengeluaran_kas');
        }
    }

    public function proses_pengajuan()

    {
        $data = [
            'nama_pengajuan' => htmlspecialchars($this->input->post('keperluan', true)),
            'jumlah_pengajuan' => htmlspecialchars($this->input->post('jumlah', true)),
            'tanggal_pengajuan' => time(),
            'status_pengajuan' => 0,
            'keterangan' => htmlspecialchars($this->input->post('keterangan', true))
        ];

        $this->db->insert('tbl_pengajuan', $data);
        return redirect('bendahara/pengeluaran_kas');
    }
    public function hapus_pengeluaran($id)
    {
        $where = array('id_pengajuan' => $id);
        $this->Infaq_model->hapus_pengajuan($where, 'tbl_pengajuan');
        $this->session->set_flashdata('hapus',  '<div class="alert alert-success fade show" role="alert"><i class="fas fa-check"></i> Data pengajuan berhasil dihapus</div>');
        redirect('bendahara/pengeluaran_kas');
    }
    public function pemasukan_kas()
    {
        $data['tbl_user'] = $this->db->get_where('tbl_user', ['email' =>
        $this->session->userdata('email')])->row_array();
        $data['judul'] = 'Pemasukan Kas';
        $this->load->view('templates/header_user', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('bendahara/pemasukan_kas', $data);
        $this->load->view('templates/footer_user');
    }

    public function details_pemasukan()
    {
        $data['tbl_user'] = $this->db->get_where('tbl_user', ['email' =>
        $this->session->userdata('email')])->row_array();
        $data['judul'] = 'Pemasukan Kas';
        $this->load->view('templates/header_user', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('bendahara/details_pemasukan', $data);
        $this->load->view('templates/footer_user');
    }
    public function edit_pemasukan()
    {
        $data['tbl_user'] = $this->db->get_where('tbl_user', ['email' =>
        $this->session->userdata('email')])->row_array();
        $data['judul'] = 'Pemasukan Kas';
        $this->load->view('templates/header_user', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('bendahara/edit_pemasukan', $data);
        $this->load->view('templates/footer_user');
    }
}
