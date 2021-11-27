<div class="container">
    <div>
        <h1>Kelola data infak</h1>
        <div class="">
            <a class="btn btn-primary mb-3"><i class="fas fa-plus-square"></i> Pemasukan</a>
            <a class="btn btn-primary mb-3"><i class="fas fa-minus-square"></i> Pengeluaran</a>
            <a class="btn btn-primary mb-3"><i class="fas fa-hand-holding-usd"></i> Pengajuan</a>
            <a class="btn btn-info mb-3"><i class="fas fa-print"></i> Cetak</a>

            <div class="mr-lg-auto">
            </div>
        </div>

        <table class="table table-bordered table-hover table-striped" id="dataTable" width="100%">
            <caption class="bi bi-list-check caption-top"> Daftar donatur Infaq Masjid Jami Assalam</caption>
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>Nominal</th>
                    <th>Keterangan</th>
                    <th>Tanggal</th>
                </tr>
            <tbody>
                <?php $i = 1;
                foreach ($infaq as $ifq) : ?>
                    <tr>
                        <td><?= $i++; ?></td>
                        <td><?= $ifq['nama']; ?></td>
                        <td>Rp. <?= number_format($ifq['nominal']); ?></td>
                        <td><?= $ifq['keterangan']; ?></td>
                        <td><?= $ifq['tanggal']; ?></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
            </thead>
        </table>
    </div>
</div>