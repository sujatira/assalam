<div class="row">
  <div class="col-md-8">
    <div class="card-body card-shadow">
      <div class="card">
        <h5 class="card-header bg-primary text-white">Details pengajuan pengeluaran kas Masjid Jami Assalam</h5>
        <div class="card-body bg-white">
          <form action="<?= base_url('Menu/approve_pengajuan'); ?>" method="POST">

            <?php if ($details->status_pengajuan == 1) { ?>
              <span class="badge badge-success">Pengajuan telah disetujui !</span> <a href="<?= base_url('bendahara/print_pengajuan/' . $details->id_pengajuan) ?>" class="badge badge-info"><i class="fas fa-arrow-circle-down"></i> Unduh berkas</a>
            <?php } else if ($details->status_pengajuan == 2) { ?>
              <span class="badge badge-danger">Pengajuan ditolak ! </span> <a href="" class="badge badge-info" type="button" data-toggle="modal" data-target="#alasan"> <i class="fas fa-eye"></i> Lihat alasan</a>
            <?php } else { ?>
              <span class="badge badge-warning text-dark"> Masih dalam proses peninjauan . . .</span>
            <?php } ?>

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
              <label class="col-sm-2 col-form-label">Harga (Rp)</label>
              <div class="col-sm-10">
                <input type="text" name="jumlah_pengajuan" class="form-control" value="Rp. <?= number_format($details->jumlah_pengajuan)  ?>" readonly>
              </div>
            </div>
            <div class="form-group row">
              <label class="col-sm-2 col-form-label">Keterangan</label>
              <div class="col-sm-10">
                <textarea type="text" name="keterangan" class="form-control" readonly><?= $details->keterangan ?></textarea>
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
              <select name="status_pengajuan" class="form-group form-control">
                <option value="">Pilih</option>
                <option value="1">SETUJUI</option>
                <option value="2">TIDAK</option>
              </select>
              <button class="btn btn-primary" type="submit"><i class="fas fa-check"> </i> Submit</button>
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

<!-- modal alasan -->
<div class="modal fade" id="alasan" tabindex="-1" aria-labelledby="alasan" aria-hidden="true">
  <div class="modal-dialog modal-sm">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="alasan">Alasan Penolakan</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body bg-gradient-danger text-white font-italic">
        <?= $alasan->alasan_penolakan ?>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary btn-sm" data-dismiss="modal">Ok</button>
      </div>
    </div>
  </div>
</div>