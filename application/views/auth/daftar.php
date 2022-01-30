<body style="background: url('../assets/images/img2.jpg'); background-position: center; background-size: cover;"></body>
<div class="container">
  <!-- Outer Row -->
  <div class="row justify-content-center">
    <div class="col-lg-7">
      <div class="card my-5" style="background-color: rgba(0, 0, 0, 0.7); box-shadow: 0px 5px 15px black;">
        <div class="card-body p-0">
          <!-- Nested Row within Card Body -->
          <div class="row p-5 text-center text-white">
            <div class="mb-2">
              <h3>Halaman Daftar Akun</h3>
            </div>
            <!-- pesan flash data -->
            <div><?= $this->session->flashdata('pesan2'); ?></div>
            <form class="user" method="POST" action="<?= base_url('auth/daftar') ?>">
              <div class="form-group">
                <input type="text" class="form-control form-control-user" id="name" name="name" placeholder="Nama Lengkap" value="<?= set_value('name') ?>">
                <small class="text-left text-danger"><?= form_error('name') ?></small>
              </div>
              <div class="form-group">
                <input type="text" class="form-control form-control-user" id="email" name="email" placeholder="Alamat Email" value="<?= set_value('email') ?>">
                <small class="text-left text-danger"><?= form_error('email') ?></small>
              </div>
              <div class="row form-group">
                <div class="col-sm-6 mb-3 mb-sm-0">
                  <input type="password" class="form-control form-control-user" id="password1" name="password1" placeholder="Masukan Password 8 karakter">
                  <small class="text-left text-danger"><?= form_error('password1') ?></small>
                </div>
                <div class="col-sm-6">
                  <input type="password" class="form-control form-control-user" id="password2" name="password2" placeholder="Masukan Ulang Password">
                </div>
              </div>
              <button href="<?= base_url('auth') ?>" type="submit" class="btn btn-primary btn-user btn-block"> <i class="fas fa-fw fa-user-plus"></i>
                Daftar
              </button>
              <a href="<?= base_url('home') ?>" class="btn btn-info btn-user btn-block mt-3"> <i class="fas fa-fw fa-home"></i>
                Home
              </a>
              <div class="text-center mt-3"><a class="text-white" href="<?= base_url('auth') ?>">Sudah punya akun? Silahkan Login</a></div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>