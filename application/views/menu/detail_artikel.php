<div class="section">
	<div class="section-header">
		<h2 class="text-center">Detail Artikel Dan Upproval Artikel</h2>
	</div>
</div>
<form method="POST" action="<?= base_url('Menu/approve'); ?>">
	<div class="row">
		<div class="col-md-12">

			<div class="card m-2 p-2">
				<div class="card-body">
					<div class="row mt-4">
						<?php
						foreach ($ar as $aa) : ?>
							<div class="col-lg">
								<img src="<?= base_url('assets/images/' . $aa->gambar) ?>" height="200px" width="300px" alt="">
							</div>
						<?php endforeach ?>
						<br>
					</div>
					<div class="row mt-4 ml-1">
						<div class="">
							<h3>Judul :</h3>
							<h4><?= $aa->judul ?></h4>
							<p><?= $aa->isi ?></p>
						</div>
					</div>
				</div>
				<br>
				<input type="hidden" value="<?= $aa->id_artikel ?>" name="id_artikel">
				<div class="col-lg-2">
					<select name="status" class="form-group form-control">
						<option value="">Select</option>
						<option value="1">YES</option>
						<option value="0">NO</option>
					</select>
					<button class="btn btn-primary" type="submit">GASSS</button>
				</div>
			</div>
		</div>
	</div>
	</div>
</form>