<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
	}
	public function index()

	{
		if ($this->session->userdata('email')) {
			redirect('user');
		}

		$this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email', [
			'valid_email' => 'Email harus valid!',
			'required' => 'Email tidak boleh kosong!'
		]);
		$this->form_validation->set_rules('password', 'Password', 'trim|required', [
			'required' => 'Password tidak boleh kosong!'
		]);

		if ($this->form_validation->run() == false) {
			$data['judul'] = 'Halaman Login';
			$this->load->view('templates/header_auth', $data);
			$this->load->view('auth/login');
			$this->load->view('templates/footer_auth');
		} else {
			//ketika validasi sukses
			$this->_login();
		}
	}

	private function _login()
	{
		$email = $this->input->post('email');
		$password = $this->input->post('password');
		// $id_user = $this->input->post('id_user');

		$tbl_user = $this->db->get_where('tbl_user', ['email' => $email])->row_array();

		if ($tbl_user) {
			//cek password
			if (password_verify($password, $tbl_user['password'])) {
				$data = [
					'id_user' => $tbl_user['id_user'],
					'email' => $tbl_user['email'],
					'role_id' => $tbl_user['role_id'],
					'nama' => $tbl_user['nama']
				];
				//seleksi masuk admin, bendahara, atau member
				$this->session->set_userdata($data);

				// var_dump($data);
				// die;

				if ($tbl_user['role_id'] == 1) {
					redirect('admin');
				} elseif ($tbl_user['role_id'] == 2) {
					redirect('bendahara');
				} else {
					redirect('user');
				};
			} else {
				$this->session->set_flashdata('pesan', '<div class="alert alert-andi alert-danger fade show" role="alert"><i class="fas fa-times-circle"></i> Password salah!
              </div>');
				redirect('auth');
			}
		} else {
			$this->session->set_flashdata('pesan', '<div class="alert alert-danger alert-andi fade show" role="alert"><i class="fas fa-times-circle"></i> Email tidak terdaftar!
          </div>');
			redirect('auth');
		}
	}

	public function daftar()

	{
		if ($this->session->userdata('email')) {
			redirect('user');
		}

		$this->form_validation->set_rules('name', 'Name', 'required|trim', [
			'required' => 'Nama tidak boleh kosong'
		]);
		$this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email|is_unique[tbl_user.email]', [
			'valid_email' => 'Email harus valid',
			'is_unique' => 'Email sudah terdaftar',
			'required' => 'Email tidak boleh kosong'
		]);
		$this->form_validation->set_rules('password1', 'Password', 'required|trim|min_length[8]|matches[password2]', [
			'matches' => 'Password tidak sama!',
			'min_length' => 'Password terlalu pendek',
			'required' => 'Password tidak boleh kosong'
		]);

		$this->form_validation->set_rules('password2', 'Password', 'required|trim|matches[password1]');
		if ($this->form_validation->run() == false) {
			$data['judul'] = 'Halaman Daftar';
			$this->load->view('templates/header_auth', $data);
			$this->load->view('auth/daftar');
			$this->load->view('templates/footer_auth');
			$this->session->set_flashdata('pesan2', '<div class="alert alert-danger alert-andi fade show" role="alert"><i class="fas fa-times-circle"></i> Daftar akun gagal!
            </div>');
		} else {
			$data = [
				'nama' => htmlspecialchars($this->input->post('name', true)),
				'email' => htmlspecialchars($this->input->post('email', true)),
				'password' => password_hash($this->input->post('password1'), PASSWORD_DEFAULT),
				'image' => 'default.jpg',
				'sebagai' => 'Member',
				'role_id' => 3, //ini adalah role_id user member
				'date_create' => time()
			];

			$this->db->insert('tbl_user', $data);
			$this->session->set_flashdata('pesan', '<div class="alert alert-andi alert-success alert-dismissible fade show" role="alert"><i class="fas fa-check-circle"></i> Akun berhasil didaftarkan. Silahkan login
          </div>');
			return redirect('auth');
		}
	}

	public function logout()
	{
		$this->session->unset_userdata('email');
		$this->session->unset_userdata('password');
		$this->session->unset_userdata('role_id');
		$this->session->set_flashdata('pesan', '<div class="alert alert-andi alert-info alert-dismissible fade show" role="alert"><i class="fas fa-check-circle"></i> Anda berhasil keluar!
      </div>');
		return redirect('auth');
	}

	public function error()
	{
		$data['judul'] = '404 Not Found';
		$this->load->view('templates/header_auth', $data);
		$this->load->view('auth/error');
		$this->load->view('templates/footer_auth');
	}
}
