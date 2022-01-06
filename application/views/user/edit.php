<div class="container">
  <div class="card">
    <div class="card-header bg-primary text-white">
      <?= $judul; ?>
    </div>
    <div class="card-body bg-white">
      <div class="row">
        <div class="col-md-6">
          <div class="card mb-3 mr-auto" style="max-width: 540px;">
            <div class="row no-gutters bg-light">
              <div class="col-md-4">
                <img src="<?= base_url('assets/images/profile/') . $tbl_user['image']; ?>" width="200px">
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
        </div>
        <div class="col-md-6">
          <div class="row">
            <!-- <div class="col-lg-6"> -->
            <form action="<?= base_url('user/edit'); ?>" method="POST" enctype="multipart/form-data">
              <div class="form-group row">
                <label for="email" class="col-sm-2 col-form-label">Email</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" id="email" name="email" value="<?= $tbl_user['email'] ?>" readonly>
                </div>
              </div>
              <div class="form-group row">
                <label for="nama" class="col-sm-2 col-form-label">Nama</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" id="nama" name="nama" value="<?= $tbl_user['nama'] ?>">
                  <input type="hidden" class="form-control" id="id" name="id" value="<?= $tbl_user['id_user'] ?>">
                  <?= form_error('nama', '<small class=text-danger pl-3">', '</small>'); ?>
                </div>
              </div>
              <div class="form-group row">
                <div class="col-sm-2">Gambar</div>
                <div class="col-sm-10">
                  <div class="row">
                    <div class="col-sm-3">
                      <img src="<?= base_url('./assets/images/profile/') . $tbl_user['image']; ?>" class="img-thumbnail">
                    </div>
                    <div class="col-sm-9">
                      <div class="custom-file">
                        <input type="file" class="custom-file-input" id="image" name="image">
                        <label class="custom-file-label" for="image">Pilih gambar</label>
                        <small class="text-danger font-italic">*jika string/nama file tidak muncul langsung simpan saja</small>
                      </div>
                    </div>
                  </div>
                  <button type="submit" class="btn btn-primary mt-2"><i class="fas fa-check"></i> Simpan</button>
                </div>
              </div>
          </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>