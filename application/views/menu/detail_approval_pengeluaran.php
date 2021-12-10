<div class="card-body card-shadow" style="max-width: 700px;">
  <div class="card">
    <h5 class="card-header bg-primary text-white">Details pengajuan pengeluaran kas Masjid Jami Assalam</h5>
    <div class="card-body">
      <form action="" method="post">
        <div class="form-group row">
          <label for="email" class="col-sm-2 col-form-label">Keperluan</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" id="keperluan" name="keperluan" value="" readonly>
          </div>
        </div>
        <div class="form-group row">
          <label for="email" class="col-sm-2 col-form-label">Jumlah</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" id="keperluan" name="keperluan" value="" readonly>
          </div>
        </div>
        <div class="form-group row">
          <label for="email" class="col-sm-2 col-form-label">Keterangan</label>
          <div class="col-sm-10">
            <textarea type="text" class="form-control" id="keperluan" name="keperluan" value="" readonly></textarea>
          </div>
        </div>
        <div class="form-group row">
          <label for="email" class="col-sm-2 col-form-label">Tanggal</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" id="keperluan" name="keperluan" value="<?= date('d F Y') ?>" readonly>
          </div>
        </div>
        <select name="status" class="form-group form-control">
          <option value="">Pilih</option>
          <option value="1">SETUJUI</option>
          <option value="2">TIDAK</option>
        </select>
        <button class="btn btn-primary" type="submit">Submit</button>
      </form>
    </div>
  </div>
</div>