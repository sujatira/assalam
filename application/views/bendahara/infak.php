<div class="container">
    <div>
        <h1>Kelola data infak</h1>
        <div class="">
            <a class="btn btn-primary mb-3"><i class="fas fa-plus-square"></i> Pemasukan</a>
            <a class="btn btn-primary mb-3"><i class="fas fa-minus-square"></i> Pengeluaran</a>
            <a class="btn btn-primary mb-3"><i class="fas fa-hand-holding-usd"></i> Pengajuan</a>
            <a class="btn btn-info mb-3"><i class="fas fa-print"></i> Cetak</a>
        </div>
        <table class="table table-bordered table-striped" id="dataTable" style="width: 100%;">
            <thead class="text-center">
                <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>Nominal</th>
                    <th>Keterangan</th>
                    <th>Tanggal</th>
                    <th>Bukti</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php $i = 1;
                foreach ($infaq as $ifq) : ?>
                    <tr>
                        <td class="text-center"><?= $i++; ?></td>
                        <td><?= $ifq['nama']; ?></td>
                        <td>Rp. <?= number_format($ifq['nominal']); ?></td>
                        <td><?= $ifq['keterangan']; ?></td>
                        <td class="text-center"><?= $ifq['tanggal']; ?></td>
                        <td class="text-center"><?= $ifq['bukti']; ?></td>
                        <td class="text-center">
                            <a href="#" class="text-danger"><i class="fas fa-trash-alt"></i></a>
                            <a href="#" class="text-success"><i class="fas fa-edit"></i></a>
                            <a href="#" class="text-primary"><i class="fas fa-eye"></i></a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>

        <div class="card text-white bg-info mt-3 mb-3" style="max-width: 50%;">
            <div class="card-header bg-dark"><strong>Total Keuangan Masjid Jami Assalam</strong></div>
            <div class="card-body">
                <h1 class="card-title">Rp. 50.000.000,- </h1>
                <p class="card-text">Total keuangan adalah jumlah dari seluruh pemasukan dan pengeluaran, yang dijumlahkan secara realtime leh sistem</p>
            </div>
        </div>
    </div>
</div>