<?php

use Mpdf\Tag\Tr;

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
        $data['masuk'] = $this->db->query('SELECT SUM(nominal) AS jumlah FROM tbl_infaq')->row(); //masuk
        $data['keluar'] = $this->db->query('SELECT SUM(jumlah_pengajuan) AS maks FROM tbl_pengajuan WHERE status_pengajuan = 1')->row(); //pengeluaran
        $data['sisa'] = $data['masuk']->jumlah - $data['keluar']->maks; //sisa
        $data['chart2'] = $this->Infaq_model->chartKas();

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
        $data['judul'] = 'Data Kas';
        $data['masuk'] = $this->db->query('SELECT SUM(nominal) AS jumlah FROM tbl_infaq')->row(); //masuk
        $data['keluar'] = $this->db->query('SELECT SUM(jumlah_pengajuan) AS maks FROM tbl_pengajuan WHERE status_pengajuan = 1')->row(); //pengeluaran
        $data['sisa'] = $data['masuk']->jumlah - $data['keluar']->maks; //sisa

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
                'tanggal_pengajuan' => date('d-m-Y'),
                'status_pengajuan' => 0,
                'keterangan' => htmlspecialchars($this->input->post('keterangan', true)),
                'alasan_penolakan' => ' ',
                'periksa_oleh' => ' ',
                'tgl_acc' => ' '
            ];

            $this->db->insert('tbl_pengajuan', $data);
            $this->session->set_flashdata('pesan',  'pengeluaran berhasil diajukan! tunggu respon dari admin.');
            return redirect('bendahara/pengeluaran_kas');
        }
    }

    public function hapus_pengeluaran($id)
    {
        $where = array('id_pengajuan' => $id);
        $this->Infaq_model->hapus_pengajuan($where, 'tbl_pengajuan');
        $this->session->set_flashdata('pesan',  'pengeluaran berhasil dihapus');
        redirect('bendahara/pengeluaran_kas');
    }
    public function hapus_pemasukan($id)
    {
        $where = array('id_infaq' => $id);
        $this->Infaq_model->hapus_pemasukan($where, 'tbl_infaq');
        $this->session->set_flashdata('pesan', 'pemasukan berhasil dihapus');
        redirect('bendahara/kas');
    }
    public function pemasukan_kas()
    {
        $data['tbl_user'] = $this->db->get_where('tbl_user', ['email' =>
        $this->session->userdata('email')])->row_array();
        $data['judul'] = 'Pemasukan';
        $this->load->view('templates/header_user', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('bendahara/pemasukan_kas', $data);
        $this->load->view('templates/footer_user');
    }

    public function tambah_pemasukan()

    {
        $this->form_validation->set_rules('nama', 'Nama', 'required|trim', [
            'required' => 'Harap isi nama'
        ]);
        $this->form_validation->set_rules('nominal', 'Nominal', 'required|trim|integer', [
            'required' => 'Harap isi jumlah/nominal',
            'integer' => 'Harus angka'
        ]);
        $this->form_validation->set_rules('kategori', 'Kategori', 'required|trim', [
            'required' => 'Harap pilih kategori'
        ]);
        $this->form_validation->set_rules('keterangan', 'Keterangan', 'required|trim', [
            'required' => 'Harap isi keterangan'
        ]);

        if ($this->form_validation->run() == false) {
            $data['tbl_user'] = $this->db->get_where('tbl_user', ['email' =>
            $this->session->userdata('email')])->row_array();
            $data['judul'] = 'Pemasukan';
            $this->load->view('templates/header_user', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('bendahara/pemasukan_kas', $data);
            $this->load->view('templates/footer_user');
        } else {
            $data = [
                'nama' => htmlspecialchars($this->input->post('nama', true)),
                'nominal' => htmlspecialchars($this->input->post('nominal', true)),
                'keterangan' => htmlspecialchars($this->input->post('keterangan', true)),
                'tanggal' => date("Y-m-d H:i:s"),
                'kategori' => htmlspecialchars($this->input->post('kategori', true))
            ];

            $this->db->insert('tbl_infaq', $data);
            $this->session->set_flashdata('pesan',  'pemasukan kas berhasil ditambahkan!');
            return redirect('bendahara/kas');
        }
    }

    public function details_pemasukan($id)
    {
        $data['tbl_user'] = $this->db->get_where('tbl_user', ['email' =>
        $this->session->userdata('email')])->row_array();
        $data['judul'] = 'Detail Pemasukan Kas';
        $data['ifk'] = $this->Infaq_model->getKasId($id);
        $this->load->view('templates/header_user', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('bendahara/details_pemasukan', $data);
        $this->load->view('templates/footer_user');
    }
    public function edit_pemasukan($id)
    {
        $data['tbl_user'] = $this->db->get_where('tbl_user', ['email' =>
        $this->session->userdata('email')])->row_array();
        $data['judul'] = 'Edit Pengajuan Pengeluaran Kas';
        $data['ifk'] = $this->Infaq_model->getKasId($id);

        $this->load->view('templates/header_user', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('bendahara/edit_pemasukan', $data);
        $this->load->view('templates/footer_user');
    }

    public function update_pemasukan()
    {
        $id_infaq = $this->input->post('id_infaq');
        $nama = $this->input->post('nama');
        $nominal = $this->input->post('nominal');
        $keterangan = $this->input->post('keterangan');
        $kategori = $this->input->post('kategori');

        $this->db->set('kategori', $kategori);
        $this->db->set('keterangan', $keterangan);
        $this->db->set('nominal', $nominal);
        $this->db->set('nama', $nama);
        $this->db->where('id_infaq', $id_infaq);
        $this->db->update('tbl_infaq');

        $this->session->set_flashdata('pesan',  'pemasukan kas berhasil diupdate!');
        redirect('bendahara/kas');
    }
    public function print_pengajuan($id)
    {
        $data['tbl_user'] = $this->db->get_where('tbl_user', ['email' =>
        $this->session->userdata('email')])->row_array();
        $data['kukuk'] = $this->Infaq_model->getDetailsPengajuan($id);
        $mpdf = new \Mpdf\Mpdf(['mode' => 'utf-8', 'format' => 'A4-p']);
        $html = $this->load->view('bendahara/hasil_print_pengajuan', $data, TRUE);


        $mpdf = new \Mpdf\Mpdf(['mode' => 'utf-8', 'format' => 'A4-p']);
        $mpdf->autoScriptToLang = true;
        $mpdf->autoLangToFont = true;
        $mpdf->setAutoTopMargin = 'stretch';
        $mpdf->SetFooter('
		<span>Sistem Informasi Masjid Jami Assalam</span>');
        $mpdf->WriteHTML($html);
        $mpdf->Output();
    }

    public function print_semua_pemasukan()
    {
        $data['tbl_user'] = $this->db->get_where('tbl_user', ['email' =>
        $this->session->userdata('email')])->row_array();
        $data['pemasukan'] = $this->Infaq_model->getAllInfaq();
        $mpdf = new \Mpdf\Mpdf(['mode' => 'utf-8', 'format' => 'A4-p']);
        $html = $this->load->view('bendahara/hasil_print_semua_pemasukan', $data, TRUE);


        $mpdf = new \Mpdf\Mpdf(['mode' => 'utf-8', 'format' => 'A4-p']);
        $mpdf->autoScriptToLang = true;
        $mpdf->autoLangToFont = true;
        $mpdf->setAutoTopMargin = 'stretch';
        $mpdf->SetFooter('
		<span>Sistem Informasi Masjid Jami Assalam</span>');
        $mpdf->WriteHTML($html);
        $mpdf->Output();
    }
}
