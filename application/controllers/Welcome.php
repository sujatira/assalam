<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Welcome extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Infaq_model');
		$this->load->model('Artikel_model');
	}
	public function index()
	{
		$data['tbl_user'] = $this->db->get_where('tbl_user', ['email' =>
		$this->session->userdata('email')])->row_array();
		$data['judul'] = 'Masjid Jami Assalam';
		$data['infaq'] = $this->Infaq_model->getAllInfaq();
		$data['approved'] = $this->Artikel_model->get_artikel_approved();
		$this->load->view('templates/header_baru', $data);
		$this->load->view('welcome/index', $data);
		$this->load->view('templates/footer_baru.php');
	}

	public function artikel_detail($id)
	{
		$data['tbl_user'] = $this->db->get_where('tbl_user', ['email' =>
		$this->session->userdata('email')])->row_array();
		$data['judul'] = 'Detail Artikel';
		$data['approved'] = $this->Artikel_model->get_artikel_approved();
		$data['userartikel'] = $this->Artikel_model->getDetailArtikel($id);
		$data['tmbl'] = $this->Artikel_model->get_tmb($id);

		$this->load->view('welcome/artikel_detail', $data);
		$this->load->view('templates/footer_baru.php');
	}
	public function informasi()
	{
		$data['tbl_user'] = $this->db->get_where('tbl_user', ['email' =>
		$this->session->userdata('email')])->row_array();
		$data['judul'] = 'Informasi';
		$data['approved'] = $this->Artikel_model->get_artikel_approved();


		$this->load->view('welcome/informasi', $data);
		$this->load->view('templates/footer_baru.php');
	}
}
