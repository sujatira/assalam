<div class="row bg-light">
  <div class="col-md-8">
    <div class="container">
      <div class="card bg-white" style="max-width: 700px;">
        <div class="card-header bg-primary text-white">
          <?= $judul; ?>
        </div>
        <div class="card-body">
          <!-- Page Heading -->
          <div class="row">
            <div class="col-lg-6">
              <div class="flash-data" data-flashdata="<?= $this->session->flashdata('pesan'); ?>"></div>
            </div>
          </div>
          <div class="card mb-3 mr-auto" style="max-width: 540px;">
            <div class="row no-gutters bg-light">
              <div class="col-md-4">
                <img src="<?= base_url('assets/images/profile/') . $tbl_user['image']; ?>" width="200px" height="200px">
              </div>
              <div class="col-lg-7 ml-auto bg-light">
                <div class="card-body bg-light">
                  <h5 class="card-title"><?= $tbl_user['nama']; ?></h5>
                  <p class="card-text"><?= $tbl_user['email']; ?></p>
                  <p class="card-text" class="text-muted">Bergabung sejak <?= date('d F Y', $tbl_user['date_create']); ?></p>
                  <p class="card-text">Sebagai <?= $tbl_user['sebagai']; ?></p>
                </div>
              </div>
            </div>
          </div>
          <a href="<?= base_url('user/edit') ?>" class="btn btn-primary"> <i class="fas fa-edit"></i> Edit Profil</a>
        </div>
      </div>
    </div>
  </div>
  <div class="col-md-4">
    <img src="https://cdn-icons.flaticon.com/png/512/4335/premium/4335543.png?token=exp=1640194929~hmac=e423254ba50020e950ffe79f7274a3a7" class="img-fluid" width="400px" alt="">
  </div>
</div>