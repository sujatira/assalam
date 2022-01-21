<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Menu extends CI_Controller
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

		$file_name2 = $_FILES['gambar_judul']['name'];
		move_uploaded_file($_FILES['gambar_judul']['tmp_name'], 'assets/images/thumbnails/' . $file_name2);
		// $date = time();
		// $id_user = $this->session->userdata('id_user');
		// $nama = $this->session->userdata('nama');

		$isi = $_POST['konten'];


		$data = [
			'id_user' => ($this->session->userdata('id_user')),
			'judul' => ($this->input->post('judul')),
			'status' => 0,
			'isi' => $isi,
			'tanggal' => time(),
			'tmb' => $file_name2,
			'oleh' => ($this->session->userdata('nama'))
		];

		$this->db->insert('tbl_artikel', $data);

		// $this->db->query("INSERT INTO `tbl_artikel`(`id_user`,`judul`,`status`,`isi`,`tanggal`,`tmb`,`oleh`) VALUES ('$id_user','$judul','0','$isi','$date','$file_name2','$nama')");

		$id_artikel = $this->db->insert_id();

		foreach ($_FILES['gambar']['name'] as $idx2 => $row2) {

			$file_name1         = $row2;
			$this->db->query(" INSERT INTO `tbl_gambar`(`id_artikel`, `gambar`) VALUES ('$id_artikel','$file_name1') ");
			move_uploaded_file($_FILES['gambar']['tmp_name'][$idx2], 'assets/images/artikel/' . $file_name1);
		}

		$this->session->set_flashdata('pesan', 'artikel berhasil di tambahkan');
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
		$alasan_penolakan =	$this->input->post('alasan_penolakan');
		$acc = time();
		$oleh = $this->session->userdata('nama');

		$this->db->query("UPDATE `tbl_artikel` SET `status`='$status' WHERE `id_artikel`='$id_artikel'");

		if ($status == 1) {
			$this->session->set_flashdata('pesan', 'artikel di izinkan !');
			$this->db->query("UPDATE `tbl_artikel` SET `tanggal_acc`='$acc' WHERE `id_artikel`='$id_artikel'");
			$this->db->query("UPDATE `tbl_artikel` SET `periksa_oleh`='$oleh' WHERE `id_artikel`='$id_artikel'");
		} else if ($status == 2) {
			$this->session->set_flashdata('pesan', 'artikel TIDAK di izinkan !');
			$this->db->query("UPDATE `tbl_artikel` SET `alasan_penolakan`='$alasan_penolakan' WHERE `id_artikel`='$id_artikel'");
		} else {
			$this->session->set_flashdata('pesan', 'artikel diabaikan !');
		}
		return redirect('menu/index');
	}

	public function tolak_artikel()
	{
		$id_artikel = $this->input->post('id_artikel');
		$status = $this->input->post('status');

		$this->db->query("UPDATE `tbl_artikel` SET `status`='$status' WHERE `id_artikel`='$id_artikel'");
		$this->session->set_flashdata('pesan', 'artikel TIDAK diizinakan');
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
	public function detail_approval_pengeluaran($id)
	{
		$data['judul'] = 'Detail Approval Keuangan';
		$data['tbl_user'] = $this->db->get_where('tbl_user', ['email' =>
		$this->session->userdata('email')])->row_array();
		$data['details'] = $this->Infaq_model->getDetailsPengajuan($id);
		$data['kasid'] = $this->Infaq_model->getKasId($id);


		// var_dump($data);
		// die;

		$this->load->view('templates/header_user', $data);
		$this->load->view('templates/sidebar', $data);
		$this->load->view('templates/topbar', $data);
		$this->load->view('menu/detail_approval_pengeluaran', $data);
		$this->load->view('templates/footer_user');
	}

	public function approve_pengajuan()

	{
		$id_pengajuan = $this->input->post('id_pengajuan');
		$status_pengajuan = $this->input->post('status_pengajuan');

		// var_dump($id_pengajuan);
		// die;

		$this->db->query("UPDATE `tbl_pengajuan` SET `status_pengajuan`='$status_pengajuan'  WHERE `id_pengajuan`='$id_pengajuan' ");
		return redirect('menu/approval_pengeluaran');
	}

	public function hapus_artikel($id)
	{
		$where = array('id_artikel' => $id);
		$this->Artikel_model->hapus_artikel($where, 'tbl_artikel');
		$this->session->set_flashdata('pesan', 'artikel berhasil dihapus');
		redirect('menu');
	}

	public function hapus_user($id)
	{
		$where = array('id_user' => $id);
		$this->User_model->hapus_user($where, 'tbl_user');
		$this->session->set_flashdata('pesan', 'user berhasil dihapus');
		redirect('menu/user');
	}

	public function hapus_pengeluaran($id)
	{
		$where = array('id_pengajuan' => $id);
		$this->Infaq_model->hapus_pengajuan($where, 'tbl_pengajuan');
		$this->session->set_flashdata('pesan', 'pengajuan/pengeluaran berhasil dihapus');
		redirect('menu/approval_pengeluaran');
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

	public function info_kas()
	{
		$data['judul'] = 'Info Kas';
		$data['tbl_user'] = $this->db->get_where('tbl_user', ['email' =>
		$this->session->userdata('email')])->row_array();

		$this->load->view('templates/header_user', $data);
		$this->load->view('templates/sidebar', $data);
		$this->load->view('templates/topbar', $data);
		$this->load->view('menu/info_kas', $data);
		$this->load->view('templates/footer_user');
	}
}
