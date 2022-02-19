<div class="row">
  <div class="col-md-8">
    <div class="card-body card-shadow">
      <div class="card">
        <h5 class="card-header bg-primary text-white">Details pemasukan kas Masjid Jami Assalam</h5>
        <div class="card-body bg-white">
          <form action="<?= base_url('bendahara/update_pemasukan') ?>" method="POST">
            <div class="form-group row bg-white">
              <div class="col-sm-10">
                <input type="hidden" name="id_infaq" class="form-control" value="<?= $ifk->id_infaq ?>">
              </div>
            </div>
            <div class="form-group row">
              <label class="col-sm-2 col-form-label">Nama</label>
              <div class="col-sm-10">
                <input type="text" name="nama" class="form-control" value="<?= $ifk->nama ?>">
              </div>
            </div>
            <div class="form-group row">
              <label class="col-sm-2 col-form-label">Nominal (Rp)</label>
              <div class="col-sm-10">
                <input type="text" name="nominal" class="form-control" value="<?= $ifk->nominal ?>">
              </div>
            </div>
            <div class="form-group row">
              <label class="col-sm-2 col-form-label">Keterangan</label>
              <div class="col-sm-10">
                <textarea type="text" name="keterangan" class="form-control"><?= $ifk->keterangan ?></textarea>
              </div>
            </div>
            <div class="form-group row">
              <label class="col-sm-2 col-form-lbel">Kategori</label>
              <div class="col-sm-10">
                <select class="custom-select form-control" name="kategori" id="kategori">
                  <option value="<?= $ifk->kategori ?>"><?= $ifk->kategori ?></option>
                  <option value="Dari kotak amal">Dari kotak amal</option>
                  <option value="Dari kotak parkir">Dari kotak parkir</option>
                  <option value="Dari jemaah">Dari jemaah</option>
                </select>
              </div>

            </div>
            <div class="form-group row">
              <label class="col-sm-2 col-form-label">Tanggal</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" name="tanggal" value="<?= $ifk->tanggal ?>" disabled>
              </div>
            </div>
            <!-- <div class="form-group row">
              <label class="col-sm-2 col-form-label">Bukti</label>
              <div class="col-sm-10">
                <img class="img-thumbnail" src="" alt="">
              </div>
            </div> -->
            <button type="submit" class="btn btn-primary"> <i class="fas fa-check"></i> Simpan</button>
          </form>
        </div>
      </div>
    </div>
  </div>
  <div class="col-md-4">
    <img src="https://cdn-icons-png.flaticon.com/512/3163/3163207.png" class="img-fluid" alt="">
  </div>
</div>