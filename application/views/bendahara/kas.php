<div class="container">
	<div class="row mx-1">
		<div class="mr-auto">
			<h1>Kelola data kas</h1>
		</div>
		<div class="mt-3">
			<a class="btn btn-primary btn-sm mb-3" href="<?= base_url('bendahara/pemasukan_kas') ?>"><i class="fas fa-fw fa-plus-square"></i> Pemasukan</a>
			<a class="btn btn-primary btn-sm mb-3" href="<?= base_url('bendahara/pengeluaran_kas') ?>"><i class="fas fa-fw fa-minus-square"></i> Pengeluaran</a>
			<!-- <a class="btn btn-primary btn-sm mb-3"><i class="fas fa-hand-holding-usd"></i> Pengajuan</a> -->
			<a class="btn btn-info mb-3 btn-sm"><i class="fas fa-fw fa-print"></i> Cetak</a>
		</div>
	</div>
	<div class="card">
		<h5 class="card-header bg-primary text-white"><i class="fas fa-fw fa-table"></i> Tabel data kas Masjid Jami Assalam</h5>
		<div class="card-body bg-white">
			<div class="table-responsive">
				<table class="table table-striped table-bordered table-sm first" id="dataTable" style="width: 100%;">
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
								<td>
									<span class="d-inline-block text-truncate" style="max-width: 170px;">
										<?= $ifq['keterangan']; ?>
									</span>
								</td>
								<td class="text-center"><?= $ifq['tanggal']; ?></td>
								<td class="text-center"><?= $ifq['bukti']; ?></td>
								<td class="text-center">
									<a href="#" class="btn btn-danger btn-sm"><i class="fas fa-trash-alt"></i></a>
									<a href="<?= base_url('bendahara/edit_pemasukan/' . $ifq['id_infaq']) ?>" class="btn btn-success btn-sm"><i class="fas fa-edit"></i></a>
									<a href="<?= base_url('bendahara/details_pemasukan/' . $ifq['id_infaq']) ?>" class="btn btn-primary btn-sm"><i class="fas fa-eye"></i></a>
								</td>
							</tr>
						<?php endforeach; ?>
					</tbody>
				</table>
			</div>
		</div>
	</div>

	<div class="card text-white bg-info mt-3 mb-3" style="max-width: 450px;">
		<div class="card-header bg-primary"><strong><i class="fas fa-fw fa-info"></i> Total Keuangan Masjid Jami Assalam</strong></div>
		<div class="card-body">
			<h1 class="card-title">Rp. <?= number_format($sisa); ?>,- </h1>
			<p class="card-text">Total keuangan adalah jumlah dari seluruh pemasukan dikurangi pengeluaran, yang dijumlahkan secara realtime oleh sistem</p>
		</div>
	</div>
</div>