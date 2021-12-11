<div class="card-body card-shadow" style="max-width: 700px;">
  <div class="card">
    <h5 class="card-header bg-primary text-white">Details pengajuan pengeluaran kas Masjid Jami Assalam</h5>
    <div class="card-body">
      <form action="<?= base_url('Menu/approve_pengajuan'); ?>" method="POST">
        <div class="form-group row">
          <div class="col-sm-10">
            <input type="hidden" name="id_pengajuan" class="form-control" value="<?= $details->id_pengajuan ?>">
          </div>
        </div>
        <div class="form-group row">
          <label class="col-sm-2 col-form-label">Keperluan</label>
          <div class="col-sm-10">
            <input type="text" name="nama_pengajuan" class="form-control" value="<?= $details->nama_pengajuan ?>" readonly>
          </div>
        </div>
        <div class="form-group row">
          <label class="col-sm-2 col-form-label">Jumlah</label>
          <div class="col-sm-10">
            <input type="text" name="jumlah_pengajuan" class="form-control" value="Rp. <?= number_format($details->jumlah_pengajuan)  ?>" readonly>
          </div>
        </div>
        <div class="form-group row">
          <label class="col-sm-2 col-form-label">Keterangan</label>
          <div class="col-sm-10">
            <textarea type="text" name="keterangan" class="form-control" value="<?= $details->keterangan ?>" readonly></textarea>
          </div>
        </div>
        <div class="form-group row">
          <label class="col-sm-2 col-form-label">Tanggal</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" name="tanggal_pengajuan" value="<?= date('d F Y') ?>" readonly>
          </div>
        </div>
        <select name="status_pengajuan" class="form-group form-control">
          <option value="">Pilih</option>
          <option value="1">SETUJUI</option>
          <option value="2">TIDAK</option>
        </select>
        <button class="btn btn-primary" type="submit">Submit</button>
      </form>
    </div>
  </div>
</div>