			<h3 class="border-bottom">
				Dari Masjid Jami Assalam untuk jamaah
			</h3>
			<article class="blog-post">
				<h2 class="blog-post-title"><?= $userartikel->judul; ?></h2>
				<p><?= $userartikel->isi ?></p>
				<p class="blog-post-meta caption-top"><?= date('d F Y', $userartikel->tanggal) ?> Oleh
					<a href="<?= base_url('artikel/oleh/' . $userartikel->id_user) ?>"> <?= $userartikel->oleh ?></a>
				</p>
				<?php foreach ($this->Artikel_model->get_gambar($userartikel->id_artikel) as $aa) : ?>
					<a href="">
						<img src="<?= base_url('assets/images/artikel/' . $aa->gambar) ?>" data-fancybox="galerry" alt="ini gambar artikel" class="mb-1 img-thumbnail" style="width: 30%; height: 150px;" title="Ini gambar artikel">
					</a>
				<?php endforeach ?>
			</article>
			</div>
			</div>