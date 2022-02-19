<form method="POST" action="<?= base_url('artikel/update_artikel'); ?>" enctype="multipart/form-data">
  <div class="row m-2">
    <div class="col-md-12">
      <div class="card bg-white">
        <div class="card-header bg-primary text-white"><i class="fas fa-fw fa-edit"></i> Edit Artikel</div>
        <div class="card-body">
          <div class="row">
            <?php
            foreach ($ar as $aa) : ?>
              <div class="col-lg text-center">
                <a href="<?= base_url('./assets/images/thumbnails/' . $aa->gambar) ?>" data-fancybox="galerry">
                  <img src="<?= base_url('./assets/images/artikel/' . $aa->gambar) ?>" title="Ini gambar artikel" alt="ini gambar artikel" class="img-thumbnail" style="width: 200px; height: 200px;">
                  <br>
                </a>
                <label for="" class="text-danger mt-3 font-italic">Untuk gambar isi belum bisa di edit !</label>
              </div>
            <?php endforeach ?>
            <input type="hidden" value="<?= $aa->id_artikel ?>" name="id_artikel">
          </div>
          <div class="form-group row m-3">
            <div class="col-sm-2">
              <img class="img-thumbnail img-fluid " src="<?= base_url('assets/images/thumbnails/' . $aa->tmb)  ?>" width="150px" alt="Gambar thumbnail">
            </div>
            <div class="col">
              <div class="input-group">
                <input type="file" class="custom-file-input" id="tmb" name="tmb" aria-describedby="tmb" value="<?= $aa->tmb ?> ">
                <label class="custom-file-label" for="tmb">Choose file</label>
                <small class="text-danger font-italic">*jika nama gambar tidak muncul klik simpan saja</small>
              </div>
            </div>
          </div>
          <div class="form-group row m-3">
            <label class="col-sm-2 col-form-label">Tanggal</label>
            <div class="col-sm-10">
              <input type="text" name="judul" class="form-control" value="<?= $aa->tanggal ?>" readonly>
            </div>
          </div>
          <div class="form-group row m-3">
            <label class="col-sm-2 col-form-label">Judul artikel</label>
            <div class="col-sm-10">
              <input type="text" name="judul" class="form-control" value="<?= $aa->judul ?>">
            </div>
          </div>
          <div class="form-group row m-3">
            <label class="col-sm-2 col-form-label">Isi artikel</label>
            <div class="col-sm-10">
              <textarea type="text" name="isi" class="form-control" style=" height: 200px;"><?= $aa->isi ?></textarea>
            </div>
          </div>
          <div class="form-group row m-3">
            <div class="col-sm-2">
            </div>
            <div class="col">
              <button class="btn btn-primary" type="submit"> <i class="fas fa-fw fa-check"></i>
                Simpan
              </button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</form>
<!-- modal alasan -->