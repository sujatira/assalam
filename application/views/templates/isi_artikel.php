		<h3 class="border-bottom">
			Dari Masjid Jami Assalam untuk jamaah
		</h3>
		<article class="blog-post">
			<h2 class="blog-post-title"><?= $userartikel->judul; ?></h2>
			<p class="blog-post-meta caption-top"><?= date('d F Y', $userartikel->tanggal) ?> Oleh
				<a href="<?= base_url('artikel/oleh/' . $userartikel->id_user) ?>"> <?= $userartikel->oleh ?>
				</a>
			</p>
			<p><?= $userartikel->isi ?></p>
			<?php foreach ($this->Artikel_model->get_gambar($userartikel->id_artikel) as $aa) : ?>
				<a href="">
					<img src="<?= base_url('assets/images/artikel/' . $aa->gambar) ?>" data-fancybox="galerry" alt="ini gambar artikel" class="mb-1 img-thumbnail" style="width: 30%; height: 150px;" title="Ini gambar artikel">
				</a>
			<?php endforeach ?>
			<div class="card">
				<h6 class="card-header text-white" style="background-color: darkslategrey;">Tabel Infak</h1>
					<div class="card-body">
						<div class="table-responsive">
							<table class="table table-striped table-sm" id="dataTable">
								<thead class="text-center">
									<tr>
										<th>No</th>
										<th>Nama</th>
										<th>Nominal</th>
										<th>Tanggal</th>
									</tr>
								<tbody>
									<?php $i = 1;
									foreach ($infaq as $ifq) : ?>
										<tr>
											<td class="text-center"><?= $i++; ?></td>
											<td><?= $ifq['nama']; ?></td>
											<td class="text-center">Rp. <?= number_format($ifq['nominal']); ?></td>
											<td class="text-center"><?= $ifq['tanggal']; ?></td>
										</tr>
									<?php endforeach; ?>
								</tbody>
								</thead>
							</table>
						</div>
					</div>
			</div>
		</article>
		</div>
		<div class="col-md-4">
		</div>
		</div>