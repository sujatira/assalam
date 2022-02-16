<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('User_model');
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
		$this->load->model('User_model');
		$email = $this->input->post('email');
		$password = $this->input->post('password');
		$tbl_user = $this->db->get_where('tbl_user', ['email' => $email])->row_array();

		if ($tbl_user) {
			//cek password
			// if (password_verify($password, $tbl_user['password'])) {
			// 	$data = [
			// 		'id_user' => $tbl_user['id_user'],
			// 		'email' => $tbl_user['email'],
			// 		'role_id' => $tbl_user['role_id'],
			// 		'nama' => $tbl_user['nama']
			// 	];
			// 	//seleksi masuk admin, bendahara, atau member
			// 	$this->session->set_userdata($data);

			// 	// var_dump($data);
			// 	// die;

			// 	if ($tbl_user['role_id'] == 1) {
			// 		redirect('admin');
			// 	} elseif ($tbl_user['role_id'] == 2) {
			// 		redirect('bendahara');
			// 	} else {
			// 		redirect('user');
			// 	};
			// } else {
			// 	$this->session->set_flashdata('pesan', '<div class="alert alert-andi alert-danger fade show" role="alert"><i class="fas fa-times-circle"></i> Password salah!
			//         </div>');
			// 	redirect('auth');
			// }
			if (password_verify($password, $tbl_user['password'])) {
				$data = [
					'id_user' => $tbl_user['id_user'],
					'email' => $tbl_user['email'],
					'role_id' => $tbl_user['role_id'],
					'nama' => $tbl_user['nama'],
					'status_blok' => $tbl_user['status_blok']
				];
				$this->session->set_userdata($data);

				$status = $this->session->userdata('status_blok');

				if ($status == 0) {
					if ($tbl_user['role_id'] == 1) {
						redirect('admin');
					} elseif ($tbl_user['role_id'] == 2) {
						redirect('bendahara');
					} else {
						redirect('user');
					}
				} else {
					session_unset();
					$data = [
						'id_user' => $tbl_user['id_user'],
						'email' => $tbl_user['email'],
						// 'role_id' => $tbl_user['role_id'],
						// 'nama' => $tbl_user['nama'],
						'status_blok' => $tbl_user['status_blok']
					];
					$this->session->set_userdata($data);

					$this->load->view('templates/header_auth', $data);
					$this->load->view('auth/reset_password', $data);
					$this->load->view('templates/footer_auth');

					$this->session->set_flashdata('pesan', '<div class="alert alert-andi alert-danger fade show" role="alert"><i class="fas fa-times-circle"></i> Akun anda telah diblokir, silahkan reset password!
					</div>');
					redirect('auth/reset_password');
				}
				//jika user gagal masuk selama 3 kali atau lebih
			} elseif (isset($_SESSION['auth'])) {
				if ($_SESSION['auth'] > 3 || $_SESSION['auth'] == 3) {
					$_SESSION['auth'] = 4;
					//menyimpan data akun yang akan diblokir, saya perlu id nya saja
					$data = [
						'id_user' => $tbl_user['id_user']
					];
					$this->session->set_userdata($data);
					//sesudah data di set lalu di ubah status bloknya menjadi 1
					$this->User_model->getBlok();
					$this->session->set_flashdata('pesan', '<div class="alert alert-andi alert-danger fade show" role="alert"><i class="fas fa-times-circle"></i> Karena melebihi tiga kali salah, Akun anda diblokir!
					</div>');
					redirect('auth');
				} else {
					//session "auth" ditambah 1
					$_SESSION['auth'] = $_SESSION['auth'] + 1;
					//jalankan function login()
					$this->session->set_flashdata('pesan', '<div class="alert alert-andi alert-danger fade show" role="alert"><i class="fas fa-times-circle"></i> Password salah!
					</div>');
					redirect('auth');
				}
			} else {
				//tentukan dulu session "auth"nya jadi 1
				$_SESSION['auth'] = 1;
				//jalankan function login()
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
				'date_create' => time(),
				'status_blok' => 0
			];

			$this->db->insert('tbl_user', $data);
			$this->session->set_flashdata('pesan', '<div class="alert alert-andi alert-success alert-dismissible fade show" role="alert"><i class="fas fa-check-circle"></i> Akun berhasil didaftarkan. Silahkan login
          </div>');
			return redirect('auth');
		}
	}

	public function reset_password()
	{
		$data['tbl_user'] = $this->db->get_where('tbl_user', ['email' =>
		$this->session->userdata('email')])->row_array();
		$data['judul'] = 'Ganti Password';

		// var_dump($data);
		// die;

		$this->form_validation->set_rules('current_password', 'Current Password', 'required|trim', [
			'required' => 'Password tidak boleh kosong'
		]);
		$this->form_validation->set_rules('new_password1', 'New Password', 'required|trim|min_length[8]|matches[new_password2]', [
			'matches' => 'Password tidak sama!',
			'min_length' => 'Password terlalu pendek',
			'required' => 'Password tidak boleh kosong'
		]);
		$this->form_validation->set_rules('new_password2', 'Confirm New Password', 'required|trim|min_length[8]|matches[new_password1]', [
			'matches' => 'Password tidak sama!',
			'min_length' => 'Password terlalu pendek',
			'required' => 'Password tidak boleh kosong'
		]);


		if ($this->form_validation->run() == false) {

			$this->load->view('templates/header_auth', $data);
			$this->load->view('auth/reset_password', $data);
			$this->load->view('templates/footer_auth');
		} else {
			$current_password = $this->input->post('current_password');
			$new_password = $this->input->post('new_password1');


			if (!password_verify($current_password, $data['tbl_user']['password'])) {
				$this->session->set_flashdata('pesan', '<div class="alert alert-andi alert-danger fade show" role="alert"><i class="fas fa-times-circle"></i> Masukkan password yang dulu! </div>');
				redirect('auth/reset_password');
			} else {
				if ($current_password ==  $new_password) {
					$this->session->set_flashdata('pesan', '<div class="alert alert-andi alert-danger fade show" role="alert"><i class="fas fa-times-circle"></i> Password baru tidak boleh sama dengan password dulu!
					</div>');
					redirect('auth/reset_password');
				} else {
					$password_hash = password_hash($new_password, PASSWORD_DEFAULT);
					$this->User_model->getUnblok();
					$this->db->set('password', $password_hash);
					$this->db->where('email', $this->session->userdata('email'));
					$this->db->update('tbl_user');

					session_unset();
					$this->session->set_flashdata('pesan', '<div class="alert alert-andi alert-success fade show" role="alert"><i class="fas fa-fw fa-check"></i> Password sudah dirubah!
					</div>');
					redirect('auth');
				}
			}
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
