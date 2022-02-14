<div class="container-fluid row">
  <div class="col-lg-6">
    <div class="card">
      <h5 class="card-header bg-primary text-white"> <i class="fas fa-fw fa-lock"></i> Reset Password</h5>
      <div class="card-body bg-white">
        <form action="<?= base_url('user/reset_password');  ?>" method="POST">
          <div class="form-group">
            <input type="text" class="form-control" placeholder="<?= $tbl_user['email'] ?>" readonly>
          </div>
          <div class="form-group">
            <input type="password" class="form-control" placeholder="Masukkan password yang dulu">
          </div>
          <div class="form-group">
            <input type="password" class="form-control" placeholder="Masukkan password baru">
          </div>
          <div class="form-group">
            <input type="password" class="form-control" placeholder="Ulangi password baru">
          </div>

          <div class="form-group">
            <button class="btn btn-primary" type="submit"> <i class="fas fa-fw fa-check"></i> Simpan</button>
          </div>
        </form>
      </div>
    </div>
  </div>
  <div class="col-lg-6 text-center justify-content-center">
    <img src="https://cdn-icons-png.flaticon.com/512/5617/5617976.png" width="300px" class="img-fluid">
  </div>
</div>