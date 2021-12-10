<div class="container">
  <div class="card" style="max-width: 700px;">
    <div class="card-header bg-primary text-white">
      <?= $judul; ?>
    </div>
    <div class="card-body">
      <!-- Page Heading -->
      <div class="row">
        <div class="col-lg-6">
          <?= $this->session->flashdata('pesan'); ?>
        </div>
      </div>
      <div class="card mb-3 mr-auto" style="max-width: 540px;">
        <div class="row no-gutters">
          <div class="col-md-4">
            <img src="<?= base_url('assets/images/profile/') . $tbl_user['image']; ?>" width="200px">
          </div>
          <div class="col-lg-7 ml-auto">
            <div class="card-body">
              <h5 class="card-title"><?= $tbl_user['nama']; ?></h5>
              <p class="card-text"><?= $tbl_user['email']; ?></p>
              <p class="card-text" class="text-muted">Bergabung sejak <?= date('d F Y', $tbl_user['date_create']); ?></p>
              <p class="card-text">Sebagai <?= $tbl_user['sebagai']; ?></p>
            </div>
          </div>
        </div>
      </div>
      <a href="<?= base_url('user/edit') ?>" class="btn btn-primary"> Edit profile</a>
    </div>
  </div>
</div>




<!-- End of Main Content -->