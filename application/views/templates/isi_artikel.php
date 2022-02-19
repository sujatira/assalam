			<h4 class="border-bottom">
				Dari Masjid Jami Assalam untuk jamaah
			</h4>
			<article class="blog-post">
				<h2 class="blog-post-title"><strong><?= $userartikel->judul; ?></strong></h2>
				<p><?= $userartikel->isi ?></p>
				<div>
					<badge class="badge badge-info blog-post-meta caption-top"><?= $userartikel->tanggal ?></badge>
					<badge class="badge badge-warning">
						<a class="text-dark" href="<?= base_url('artikel/oleh/' . $userartikel->id_user) ?>"> <?= $userartikel->oleh ?></a>
					</badge>
					<badge class="badge badge-secondary"><?= $userartikel->edit ?></badge>
				</div>
				<?php foreach ($this->Artikel_model->get_gambar($userartikel->id_artikel) as $aa) : ?>
					<a href="">
						<img src="<?= base_url('assets/images/artikel/' . $aa->gambar) ?>" data-fancybox="galerry" alt="ini gambar artikel" class="mb-1 img-thumbnail" style="width: 30%; height: 150px;" title="Ini gambar artikel">
					</a>
				<?php endforeach ?>
			</article>
			</div>
			</div>