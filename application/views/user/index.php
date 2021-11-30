<div id="wrapper">
  <!-- Begin Page Content -->
  <div class="container-fluid">
    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?= $judul; ?></h1>

    <div class="row">
      <div class="col-lg-6">
        <?= $this->session->flashdata('pesan'); ?>
      </div>
    </div>

    <div class="card mb-3 mr-auto" style="max-width: 540px;">
      <div class="row no-gutters">
        <div class="col-md-4">
          <img src="<?= base_url('assets/images/profile/') . $tbl_user['image']; ?>">
        </div>
        <div class="col-lg-7 ml-auto bg-secondary">
          <div class="card-body text-white">
            <h5 class="card-title"><?= $tbl_user['nama']; ?></h5>
            <p class="card-text"><?= $tbl_user['email']; ?></p>
            <p class="card-text" class="text-muted">Bergabung sejak <?= date('d F Y', $tbl_user['date_create']); ?></p>
            <p class="card-text">Sebagai <?= $tbl_user['sebagai']; ?></p>
          </div>
        </div>
      </div>
    </div>
    <a href="<?= base_url('user/edit') ?>" class="btn btn-primary fas fa-edit"> Edit profile</a>
  </div>

</div>
<!-- End of Main Content -->
</div>