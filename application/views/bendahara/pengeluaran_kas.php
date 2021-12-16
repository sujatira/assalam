<div class="card-body card-shadow">
  <div class="row mx-1">
    <div class="mr-auto">
      <h1>Pengeluaran data kas</h1>
    </div>
    <div class="mt-3">
      <a class="btn btn-primary btn-sm mb-3" href="<?= base_url('bendahara/pengajuan_pengeluaran_kas') ?>"><i class="fas fa-plus-square"></i> Ajukan pengeluaran</a>
      <a class="btn btn-info mb-3 btn-sm"><i class="fas fa-print"></i> Cetak</a>
    </div>
  </div>
  <div class="card">
    <h5 class="card-header bg-primary text-white">Tabel pengajuan pengeluaran kas Masjid Jami Assalam</h5>
    <div class="card-body">
      <div class="table-responsive">
        <table class="table table-bordered table-striped table-sm" id="dataTable">
          <thead class="text-center">
            <tr>
              <th>No</th>
              <th>Nama pengajuan</th>
              <th>Jumlah</th>
              <th>Tanggal</th>
              <th>Status</th>
              <th>Keterangan</th>
              <th>Aksi</th>
            </tr>
          </thead>
          <tbody>
            <?php $i = 1;
            foreach ($infak as $ifk) :
            ?>
              <tr>
                <td class="text-center"><?= $i++; ?></td>
                <td><?= $ifk['nama_pengajuan'] ?></td>
                <td class="text-center">Rp. <?= number_format($ifk['jumlah_pengajuan']) ?>,-</td>
                <td class="text-center"><?= date('d F Y', $ifk['tanggal_pengajuan']) ?></td>
                <td class="text-center"> <?php if ($ifk['status_pengajuan'] == 0) { ?>
                    <span class="badge badge-warning text-dark">Menunggu</span>
                  <?php } else if ($ifk['status_pengajuan'] == 1) { ?>
                    <span class="badge badge-primary">Diterima</span>
                  <?php } else { ?>
                    <span class="badge badge-danger">Ditolak</span>
                  <?php } ?>
                <td><?= $ifk['keterangan'] ?></td>
                <td class="text-center">
                  <a href="" class="text-danger"><i class="fas fa-trash-alt"></i></a>
                  <?php if ($ifk['status_pengajuan'] == 1) { ?>
                    <a href=""><i class="fas fa-print"></i></a>
                  <?php } ?>
                </td>
              </tr>
          </tbody>
        <?php endforeach; ?>
        </table>
      </div>
    </div>
  </div>
</div>