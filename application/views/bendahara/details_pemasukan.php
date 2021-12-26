<div class="row">
  <div class="col-md-8">
    <div class="card-body card-shadow">
      <div class="card">
        <h5 class="card-header bg-primary text-white">Details pemasukan kas Masjid Jami Assalam</h5>
        <div class="card-body">
          <div class="form-group row">
            <div class="col-sm-10">
              <input type="hidden" name="id_infaq" class="form-control" value="<?= $details->id_infaq ?>">
            </div>
          </div>
          <div class="form-group row">
            <label class="col-sm-2 col-form-label">Nama</label>
            <div class="col-sm-10">
              <input type="text" name="nama" class="form-control" value="" readonly>
            </div>
          </div>
          <div class="form-group row">
            <label class="col-sm-2 col-form-label">Nominal (Rp)</label>
            <div class="col-sm-10">
              <input type="text" name="nominal" class="form-control" value="Rp. " readonly>
            </div>
          </div>
          <div class="form-group row">
            <label class="col-sm-2 col-form-label">Keterangan</label>
            <div class="col-sm-10">
              <textarea type="text" name="keterangan" class="form-control" readonly></textarea>
            </div>
          </div>
          <div class="form-group row">
            <label class="col-sm-2 col-form-label">Tanggal</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" name="tanggal" value="" readonly>
            </div>
          </div>
          <div class="form-group row">
            <label class="col-sm-2 col-form-label">Bukti</label>
            <div class="col-sm-10">
              <img class="img-thumbnail" src="" alt="">
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="col-md-4">
    <img src="https://cdn-icons-png.flaticon.com/512/3163/3163207.png" class="img-fluid" alt="">
  </div>
</div>