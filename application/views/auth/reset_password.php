<body style="background: url('https://www.sirclo.com/file/2019/01/Ayo-Meraup-Keuntungan-Besar-di-Bulan-Ramadhan-Dengan-5-Cara-Ampuh-Ini.jpg'); background-position: center; background-size: cover;"></body>
<div class="container">
  <!-- Outer Row -->
  <div class="row justify-content-center">
    <div class="col-lg-5">
      <div class="card my-5" style="background-color: rgba(0, 0, 0, 0.7); box-shadow: 0px 5px 20px black;">
        <div class="card-body p-0">
          <!-- Nested Row within Card Body -->
          <div class="row p-5 text-center text-white">
            <div class="mb-3">
              <h3>Reset Password</h3>
            </div>
            <!-- pesan flash data -->
            <?= $this->session->flashdata('pesan'); ?>
            <form class="user" method="POST" action="<?= base_url('auth/reset_password'); ?>">

              <div class="row form-group">
                <input type="password" class="form-control form-control-user" id="password" name="password" placeholder="Masukan password yang dulu">
                <small class="text-left text-danger"><?= form_error('password') ?></small>
              </div>
              <div class="row form-group">
                <input type="password" class="form-control form-control-user" id="password2" name="password2" placeholder="Masukan password baru">
                <small class="text-left text-danger"><?= form_error('password') ?></small>
              </div>
              <div class="row form-group">
                <input type="password" class="form-control form-control-user" id="newpassword" name="newpassword" placeholder="Uangi password baru">
                <small class="text-left text-danger"><?= form_error('password') ?></small>
              </div>
              <div class="row">
                <button type="submit" class="btn btn-user btn-primary"> <i class="fas fa-fw fa-sign-in-alt"></i> Reset</button>
                <a href="<?= base_url('home'); ?>" class="text-white btn btn-user btn-info mt-3"> <i class="fas fa-fw fa-home"></i> Home</a>
                <div class="text-center mt-3">
                  <a class="text-white" href="<?= base_url('auth/daftar'); ?>">Belum punya akun? Silahkan Daftar</a>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>