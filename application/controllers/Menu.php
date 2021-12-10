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
		cek_login();
		$data['tbl_user'] = $this->db->get_where('tbl_user', ['email' =>
		$this->session->userdata('email')])->row_array();
		$data['artikel'] = $this->Artikel_model->getAllArtikel();
		$data['user'] = $this->User_model->getAllUser();

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

	public function proses_tambah()
	{
		extract($_POST);
		extract($_FILES);

		$file_name2         = $_FILES['gambar_judul']['name'];
		move_uploaded_file($_FILES['gambar_judul']['tmp_name'], 'assets/images/thumbnails/' . $file_name2);

		$date = time();
		// $data['user'] = $this->User_model->getOleh($id);
		$id_user = $this->session->userdata('id_user');
		$nama = $this->session->userdata('nama');
		$this->db->query("INSERT INTO `tbl_artikel`(`id_user`,`judul`,`isi`,`status`,`tanggal`,`tmb`,`oleh`) VALUES ('$id_user','$judul', '$isi','0', '$date','$file_name2','$nama')");
		$id_artikel = $this->db->insert_id();

		foreach ($_FILES['gambar']['name'] as $idx2 => $row2) {

			$file_name1         = $row2;
			$this->db->query(" INSERT INTO `tbl_gambar`(`id_artikel`, `gambar`) VALUES ('$id_artikel','$file_name1') ");
			move_uploaded_file($_FILES['gambar']['tmp_name'][$idx2], 'assets/images/artikel/' . $file_name1);
		}

		$this->session->set_flashdata('pesan', '<div class="alert alert-success fade show" role="alert"><i class="fas fa-check"></i> Artikel berhasil ditambahkan</div>');
		echo json_encode(["success" => true, "message" => "Berhasil di simpan"]);
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
	public function detail_user($id)
	{
		cek_login();
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
	public function approval_pengeluaran()

	{
		$this->load->model('Infaq_model');
		cek_login();
		$data['judul'] = 'Approval Keuangan';
		$data['tbl_user'] = $this->db->get_where('tbl_user', ['email' =>
		$this->session->userdata('email')])->row_array();
		$data['infak'] = $this->Infaq_model->getAllPengajuan();


		$data['user'] = $this->User_model->getAllUser();
		$this->load->view('templates/header_user', $data);
		$this->load->view('templates/sidebar', $data);
		$this->load->view('templates/topbar', $data);
		$this->load->view('menu/approval_pengeluaran', $data);
		$this->load->view('templates/footer_user');
	}
	public function detail_approval_pengeluaran()
	{
		$data['judul'] = 'Detail Approval Keuangan';
		$data['tbl_user'] = $this->db->get_where('tbl_user', ['email' =>
		$this->session->userdata('email')])->row_array();

		$this->load->view('templates/header_user', $data);
		$this->load->view('templates/sidebar', $data);
		$this->load->view('templates/topbar', $data);
		$this->load->view('menu/detail_approval_pengeluaran', $data);
		$this->load->view('templates/footer_user');
	}
}
