<div class="row mb-3">
	<div class="col-md-8">
		<h3 class="mb-3 pb-3 border-bottom">
			Dari Masjid Jami Assalam untuk jamaah
		</h3>
		<article class="blog-post">
			<h2 class="blog-post-title"> <?= $userartikel->judul; ?></h2>
			<?php foreach ($artikel as $ar) : ?>
			<p class="blog-post-meta caption-top"><?= date('d F Y', $userartikel->tanggal) ?> Oleh <a href=""> <?= $this->User_model->getUser($ar->id_user)->nama ?></a></p>
			<p><?= $userartikel->isi ?></p>
			<?php foreach ($this->Artikel_model->get_gambar($userartikel->id_artikel) as $aa) : ?>
				<img src="<?= base_url('assets/images/' . $aa->gambar) ?>" alt="" width="330px" height="200px" class="mb-1">
			<?php endforeach ?>
			<div class="card">
				<h6 class="card-header">Tabel Infak</h1>
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
		<div class="position-sticky" style="top: 2rem;">
			<div class="p-4 mb-3 bg-light rounded">
				<h4 class="fst-italic">About</h4>
				<p class="mb-0">Customize this section to tell your visitors a little bit about your publication, writers, content, or something else entirely. Totally up to you.</p>
			</div>

			<div class="p-4">
				<h4 class="fst-italic">Archives</h4>
				<ol class="list-unstyled mb-0">
					<li><a href="#">March 2021</a></li>
					<li><a href="#">February 2021</a></li>
					<li><a href="#">January 2021</a></li>
					<li><a href="#">December 2020</a></li>
					<li><a href="#">November 2020</a></li>
					<li><a href="#">October 2020</a></li>
					<li><a href="#">September 2020</a></li>
					<li><a href="#">August 2020</a></li>
					<li><a href="#">July 2020</a></li>
					<li><a href="#">June 2020</a></li>
					<li><a href="#">May 2020</a></li>
					<li><a href="#">April 2020</a></li>
				</ol>
			</div>

			<div class="p-4">
				<h4 class="fst-italic">Elsewhere</h4>
				<ol class="list-unstyled">
					<li><a href="#">GitHub</a></li>
					<li><a href="#">Twitter</a></li>
					<li><a href="#">Facebook</a></li>
				</ol>
			</div>
		</div>
	</div>
</div>