  <div class="card-body card-shadow" style="max-width: 700px;">
    <div class="card">
      <h5 class="card-header bg-primary text-white">Form pengajuan pengeluaran kas Masjid Jami Assalam</h5>
      <div class="card-body">
        <form action="" method="post">
          <div class="input-group input-group-sm mb-3">
            <div class="input-group-prepend">
              <span class="input-group-text" id="nama_pengajuan">Keperluan </span>
            </div>
            <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
          </div>
          <div class="input-group input-group-sm mb-3">
            <div class="input-group-prepend">
              <span class="input-group-text" id="jumlah_pengajuan">Jumlah (Rp)</span>
            </div>
            <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
          </div>
          <div class="input-group input-group-sm mb-3">
            <div class="input-group-prepend">
              <span class="input-group-text" id="keterangan">Keterangan</span>
            </div>
            <textarea class="form-control" aria-label="With textarea"></textarea>
          </div>
          <div class="input-group input-group-sm mb-3">
            <div class="input-group-prepend">
              <span class="input-group-text" id="tanggal_pengajuan">Tanggal</span>
            </div>
            <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" readonly value="<?= date('d F Y') ?>">
          </div>
          <a href="" class="btn btn-primary btn-sm" type="post"> <i class="fas fa-check-square"></i> Ajukan</a>
        </form>
      </div>
    </div>
  </div>