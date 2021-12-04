<div class="card-body card-shadow">
  <h2 class="h3 mb-3 text-gray-800"><?= $judul; ?></h2>
  <div class="card">
    <h5 class="card-header bg-primary text-white">Tabel pengajuan pengeluaran Masjid Jami Assalam</h5>
    <div class="card-body">
      <div class="table-responsive">
        <table class="table table-bordered table-striped table-sm" id="dataTable">

          <thead>
            <tr>
              <th>No</th>
              <th>Nama pengajuans</th>
              <th>Jumlah</th>
              <th>Tanggal</th>
              <th>Status</th>
              <th>Keterangan</th>
            </tr>
          </thead>
          <tbody>
            <?php $i = 1;
            foreach ($infak as $ifk) :
            ?>
              <tr>
                <td><?= $i++; ?></td>
                <td><?= $ifk['nama_pengajuan'] ?></td>
                <td><?= $ifk['jumlah_pengajuan'] ?></td>
                <td><?= $ifk['tanggal_pengajuan'] ?></td>
                <td> <?php if ($ifk['status_pengajuan'] == 0) { ?>
                    <span class="badge badge-warning text-dark">Menunggu</span>
                  <?php } else if ($ifk['status_pengajuan'] == 1) { ?>
                    <span class="badge badge-primary">Diterima</span>
                  <?php } else { ?>
                    <span class="badge badge-danger">Ditolak</span>
                  <?php } ?>

                <td><?= $ifk['keterangan'] ?></td>
              </tr>
          </tbody>
        <?php endforeach; ?>

        </table>

      </div>
    </div>
  </div>
</div>