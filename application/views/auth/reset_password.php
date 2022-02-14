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
              <h3>Ganti Password</h3>
            </div>
            <?= $this->session->flashdata('pesan'); ?>
            <!-- pesan flash data -->
            <form class="user" method="POST" action="<?= base_url('auth/reset_password'); ?>">
              <div class="row form-group">
                <input type="text" class="form-control bg-gradient-dark form-control-user" placeholder="<?= $tbl_user['email'] ?>" readonly>
              </div>
              <div class="row form-group">
                <input type="password" class="form-control form-control-user" id="current_password" name="current_password" placeholder="Masukan password yang dulu">
                <small class="text-left text-danger"><?= form_error('current_password') ?></small>
              </div>
              <div class="row form-group">
                <input type="password" class="form-control form-control-user" id="new_password1" name="new_password1" placeholder="Masukan password baru">
                <small class="text-left text-danger"><?= form_error('new_password1') ?></small>
              </div>
              <div class="row form-group">
                <input type="password" class="form-control form-control-user" id="new_password2" name="new_password2" placeholder="Uangi password baru">
                <small class="text-left text-danger"><?= form_error('new_password2') ?></small>
              </div>
              <div class="row">
                <button type="submit" class="btn btn-user btn-primary"> <i class="fas fa-fw fa-check"></i> Simpan</button>
                <!-- <a href="<?= base_url('home'); ?>" class="text-white btn btn-user btn-info mt-3"> <i class="fas fa-fw fa-home"></i> Home</a> -->
              </div>
          </div>

          </form>
        </div>
      </div>
    </div>
    <div class="copyright text-center my-auto text-white">
      <span>Copyright &copy; Jami-Assalam 2021 - <?= date('Y'); ?></span>
    </div>
  </div>
</div>
</div>