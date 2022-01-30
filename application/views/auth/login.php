<body style="background: url('assets/images/img3.jpg'); background-position: center; background-size: cover;"></body>
<div class="container">
  <!-- Outer Row -->
  <div class="row justify-content-center">
    <div class="col-lg-5">
      <div class="card my-5" style="background-color: rgba(0, 0, 0, 0.7); box-shadow: 0px 5px 20px black;">
        <div class="card-body p-0">
          <!-- Nested Row within Card Body -->
          <div class="row p-5 text-center text-white">
            <div class="mb-3">
              <h3>Halaman Login</h3>
            </div>
            <!-- pesan flash data -->
            <?= $this->session->flashdata('pesan'); ?>
            <form class="user" method="POST" action="<?= base_url('Auth'); ?>">
              <div class="row form-group">
                <input type="text" class="form-control form-control-user" id="email" name="email" placeholder="emailkamu@mail.com" value="<?= set_value('email'); ?>">
                <small class="text-left text-danger"><?= form_error('email'); ?></small>
              </div>
              <div class="row form-group">
                <input type="password" class="form-control form-control-user" id="password" name="password" placeholder="**********************">
                <small class="text-left text-danger"><?= form_error('password') ?></small>
              </div>
              <div class="row">
                <button type="submit" class="btn btn-user btn-primary"> <i class="fas fa-fw fa-sign-in-alt"></i> Login</button>
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