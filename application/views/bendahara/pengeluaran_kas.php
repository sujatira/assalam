<div class="card-body card-shadow">
  <a class="btn btn-primary mb-3" href="<?= base_url('bendahara/pengajuan_pengeluaran_kas') ?>"><i class="fas fa-fw fa-plus-square"></i> Ajukan pengeluaran</a>
  <a class="btn btn-secondary mb-3 " href="<?= base_url('bendahara/print_pengeluaran') ?>"><i class="fas fa-fw fa-print"></i> Cetak</a>
  <div class="card bg-white">
    <h5 class="card-header bg-primary text-white"><i class="fas fa-fw fa-table"></i> Tabel pengajuan pengeluaran kas Masjid Jami Assalam</h5>
    <div class="card-body">
      <div class="table-responsive">
        <?= $this->session->flashdata('hapus');  ?>
        <table class="table table-bordered table-striped table-sm" id="dataTable" width="100%">
          <thead class="text-center">
            <tr>
              <th scope="col">No</th>
              <th scope="col">Nama Keperluan</th>
              <th scope="col">Harga (Rp)</th>
              <th scope="col">Tanggal</th>
              <th scope="col">Status</th>
              <th scope="col">Keterangan</th>
              <th scope="col">Aksi</th>
            </tr>
          </thead>
          <tbody>
            <?php
            $i = 1;
            foreach ($infak as $a) : ?>
              <tr>
                <td class="text-center"><?= $i++ ?></td>
                <td class=""><?= $a['nama_pengajuan']; ?>
                <td class="">Rp. <?= number_format($a['jumlah_pengajuan']) ?></td>
                <td class="text-center"><?= date('d F Y', $a['tanggal_pengajuan']); ?></td>
                <td class="text-center"> <?php if ($a['status_pengajuan'] == 1) { ?>
                    <span class="badge badge-primary">Di Izinkan</span>
                  <?php } else if ($a['status_pengajuan'] == 2) { ?>
                    <span class="badge badge-danger">Di Tolak</span>
                  <?php } else { ?>
                    <span class="badge badge-warning text-dark">Menunggu</span>
                  <?php } ?>
                </td>
                <td>
                  <span class="d-inline-block text-truncate" style="max-width: 200px;">
                    <?= $a['keterangan'] ?>
                  </span>
                </td>
                <td class="text-center">
                  <a data-target="#modalHapus" data-toggle="modal" type="button" href="<?= base_url('bendahara/hapus_pengeluaran/' . $a['id_pengajuan']) ?>" class="btn btn-danger btn-sm"><i class="fas fa-fw fa-trash"></i></a>
                  <a href="<?= base_url('menu/detail_approval_pengeluaran/' . $a['id_pengajuan']) ?>" class="btn btn-info btn-sm"><i class="fas fa-fw fa-eye"></i></a>
                  <?php if ($a['status_pengajuan'] == 1) { ?>
                    <a href="<?= base_url('bendahara/print_pengajuan/' . $a['id_pengajuan']) ?>" class="btn btn-primary btn-sm"><i class="fas fa-fw fa-print"></i></a>
                  <?php } ?>
                </td>
              </tr>
            <?php endforeach; ?>
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>
<!-- modal hapus -->
<div class="modal fade" tabindex="-1" id="modalHapus" data-backdrop="static" data-keyboard="false">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Hapus data pengajuan kas</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <p>Yakin ingin menghapus data pengajuan kas ini?</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Tidak</button>
        <a type="button" class="btn btn-danger" href="<?= base_url('bendahara/hapus_pengeluaran/' . $a['id_pengajuan']) ?>">Ya hapus</a>
      </div>
    </div>
  </div>
</div>