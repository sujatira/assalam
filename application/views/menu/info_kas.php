<div class="container-fluid">
  <!-- Page Heading -->
  <div class="card">
    <h5 class="card-header bg-primary text-white"><i class="fas fa-fw fa-table"></i> Tabel daftar pemasukan kas</h5>
    <div class="card-body bg-white">
      <div class="table-responsive">
        <script src="https://cdn.datatables.net/v/bs-3.3.7/jq-2.2.4/jszip-3.1.3/pdfmake-0.1.27/dt-1.10.15/af-2.2.0/b-1.3.1/b-colvis-1.3.1/b-flash-1.3.1/b-html5-1.3.1/b-print-1.3.1/cr-1.3.3/fc-3.2.2/fh-3.1.2/kt-2.2.1/r-2.1.1/rg-1.0.0/rr-1.2.0/sc-1.4.2/se-1.2.2/datatables.js"></script>
        <table class="display table table-sm table-bordered table-striped" id="">
          <thead>
            <tr class="text-center">
              <th>No</th>
              <th>Nama</th>
              <th>Nominal</th>
              <th>Tanggal</th>
              <th>Kategori</th>
              <th>Keterangan</th>
              <th>Detail</th>
            </tr>
          </thead>
          <tbody>
            <?php
            $i = 1;
            foreach ($masuk as $m) :
            ?>
              <tr>
                <td class="text-center"><?= $i++ ?></td>
                <td><?= $m['nama']; ?></td>
                <td>Rp. <?= number_format($m['nominal'], 0);  ?></td>
                <td><?= $m['tanggal']; ?></td>
                <td><?= $m['kategori']; ?></td>
                <td>
                  <span class="d-inline-block text-truncate" style="max-width: 170px;">
                    <?= $m['keterangan']; ?>
                  </span>
                </td>
                <td class="text-center"><a href="<?= base_url('menu/details_pemasukan/' . $m['id_infaq']) ?>" class="btn btn-sm btn-info"><i class="fas fa-fw fa-eye"></i></a></td>
              </tr>
            <?php endforeach; ?>
          </tbody>
        </table>
        <script>
          $(document).ready(function() {
            $('table.display').DataTable();
          });
        </script>
      </div>
    </div>
  </div>
  <br>

  <div class="card">
    <h5 class="card-header bg-primary text-white"><i class="fas fa-fw fa-table"></i> Tabel daftar pengeluaran kas</h5>
    <div class="card-body bg-white">
      <div class="table-responsive">
        <table class="display table table-sm table-bordered table-striped" id="">
          <thead>
            <tr class="text-center">
              <th>No</th>
              <th>Nama Keperluan</th>
              <th>Nominal</th>
              <th>Tanggal Pengajuan</th>
              <th>Keterangan</th>
              <th>Status</th>
              <th>Detail</th>
            </tr>
          </thead>
          <tbody>
            <?php
            $a = 1;
            foreach ($keluar as $k) :
            ?>
              <tr>
                <td class="text-center"><?= $a++ ?></td>
                <td><?= $k['nama_pengajuan']; ?></td>
                <td>Rp. <?= number_format($k['jumlah_pengajuan'], 0); ?></td>
                <td><?= $k['tanggal_pengajuan']; ?></td>
                <td>
                  <span class="d-inline-block text-truncate" style="max-width: 170px;">
                    <?= $k['keterangan']; ?>
                  </span>
                </td>
                <td class="text-center">
                  <?php if ($k['status_pengajuan'] == 1) { ?>
                    <span class="badge badge-primary">Disetujui</span>
                  <?php } else if ($k['status_pengajuan'] == 2) { ?>
                    <span class="badge badge-danger">Ditolak</span>
                  <?php } else {  ?>
                    <span class="badge badge-warning text-dark">Belum diperiksa</span>
                  <?php } ?>
                </td>
                <td class="text-center">
                  <a href="<?= base_url('menu/detail_approval_pengeluaran/' . $k['id_pengajuan']) ?>" class="btn btn-info btn-sm"><i class="fas fa-fw fa-eye"></i></a>
                </td>
              </tr>
            <?php endforeach; ?>
          </tbody>
        </table>
      </div>
    </div>
  </div>