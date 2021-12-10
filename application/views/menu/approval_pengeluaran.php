  <!-- Begin Page Content -->
  <!-- Page Heading -->
  <div class="card-body card-shadow">
    <div class="card">
      <h5 class="card-header bg-primary text-white">Tabel approval pengeluaran kas Masjid Jami Assalam</h5>
      <div class="card-body">
        <div class="table-responsive">
          <?= $this->session->flashdata('pesan');  ?>
          <table class="table table-bordered table-striped table-sm" id="dataTable" width="100%">
            <thead class="text-center">
              <tr>
                <th scope="col">No</th>
                <th scope="col">Nama</th>
                <th scope="col">Jumlah</th>
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
                  <td class="col-4 text-text-truncate"><?= $a['nama_pengajuan']; ?>
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
                  <td class=""> <?= $a['keterangan'] ?></td>
                  <td class="text-center">
                    <a href="" class="text-danger"><i class="fas fa-trash-alt"></i></a>
                    <a href="<?= base_url('menu/detail_approval_pengeluaran') ?>" class="text-info"><i class="fas fa-eye"></i></a>
                  </td>
                </tr>
              <?php endforeach; ?>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
  <!-- End of Main Content -->