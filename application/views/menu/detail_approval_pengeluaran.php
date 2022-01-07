<div class="row">
  <div class="col-md-8">
    <div class="card-body card-shadow">
      <div class="card">
        <h5 class="card-header bg-primary text-white"><i class="fas fa-fw fa-info-circle"></i> Details pengajuan pengeluaran kas Masjid Jami Assalam</h5>
        <div class="card-body bg-white">
          <form action="<?= base_url('Menu/approve_pengajuan'); ?>" method="POST">
            <div class="form-group row">
              <div class="col-sm-10">
                <input type="hidden" name="id_pengajuan" class="form-control" value="<?= $details->id_pengajuan ?>">
              </div>
            </div>
            <div class="form-group row">
              <label class="col-sm-2 col-form-label">Status</label>
              <div class="col-sm-10">
                <?php if ($details->status_pengajuan == 1) { ?>
                  <button class="btn btn-primary btn-sm" disabled><i class="fas fa-fw fa-check"></i> Pengajuan telah disetujui</button> <a href="<?= base_url('bendahara/print_pengajuan/' . $details->id_pengajuan) ?>" class="btn btn-info btn-sm"><i class="fas fa-arrow-circle-down"></i> Unduh berkas</a>
                <?php } else if ($details->status_pengajuan == 2) { ?>
                  <button class="btn btn-danger btn-sm" type="button" disabled> <i class="fas fa-fw fa-exclamation-triangle"></i> Pengajuan ditolak !</button>
                  <a class="btn btn-info btn-sm" type="button" disabled data-toggle="popover" title="Alasan penolakan pengajuan" data-content="<?= $details->alasan_penolakan ?>"><i class=" fas fa-fw fa-info-circle"></i> Lihat alasan</a>
                <?php } else { ?>
                  <button class="btn btn-warning text-dark btn-sm" type="button" disabled>
                    <span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"> </span>
                    Pengajuan masih dalam proses peninjauan...
                  </button>
                <?php } ?>
              </div>
            </div>
            <div class="form-group row">
              <label class="col-sm-2 col-form-label">Keperluan</label>
              <div class="col-sm-10">
                <input type="text" name="nama_pengajuan" class="form-control mt-2" value="<?= $details->nama_pengajuan ?>" readonly>
              </div>
            </div>
            <div class="form-group row">
              <label class="col-sm-2 col-form-label">Harga (Rp)</label>
              <div class="col-sm-10">
                <input type="text" name="jumlah_pengajuan" class="form-control" value="Rp. <?= number_format($details->jumlah_pengajuan)  ?>" readonly>
              </div>
            </div>
            <div class="form-group row">
              <label class="col-sm-2 col-form-label">Keterangan</label>
              <div class="col-sm-10">
                <textarea style="height: 300px;" type="text" name="keterangan" class="form-control" readonly><?= $details->keterangan ?></textarea>
              </div>
            </div>
            <!-- <?php if ($details->status_pengajuan == 2) { ?>
              <div class="form-group row">
                <label class="col-sm-2 col-form-label">Alasan Penolakan</label>
                <div class="col-sm-10">
                  <textarea type="text" name="keterangan" class="form-control bg-danger text-white font-italic" readonly><?= $details->alasan_penolakan ?></textarea>
                </div>
              </div>
            <?php } ?> -->
            <div class="form-group row">
              <label class="col-sm-2 col-form-label">Tanggal</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" name="tanggal_pengajuan" value="<?= date('d F Y', $details->tanggal_pengajuan) ?>" readonly>
              </div>
            </div>
            <?php if ($this->session->userdata('role_id') == 1) { ?>

              <div class="form-group row">
                <label class="col-sm-2 col-form-label">Alasan Penolakan</label>
                <div class="col-sm-10">
                  <textarea type="text" class="form-control" name="tanggal_pengajuan"><?= $details->alasan_penolakan ?></textarea>
                  <small class="text-danger font-italic"> *Mohon tulis alasan jika pengajuan ini ditolak</small>
                </div>
              </div>

              <select name="status_pengajuan" class="form-group form-control">
                <option value="">Pilih</option>
                <option value="1">SETUJUI</option>
                <option value="2">TIDAK</option>
              </select>
              <button class="btn btn-primary" type="submit"><i class="fas fa-fw fa-check"> </i> Submit</button>
            <?php } ?>
          </form>
        </div>
      </div>
    </div>
  </div>
  <div class="col-md-4">
    <img src="https://cdn-icons-png.flaticon.com/512/3163/3163207.png" class="img-fluid" alt="">
  </div>
</div>