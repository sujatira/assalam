<form method="POST" action="<?= base_url('Menu/approve'); ?>">
	<div class="row">
		<div class="col-md-12">
			<div class="card">
				<div class="card-header bg-primary text-white">Detail Artikel</div>
				<div class="card-body">
					<div class="row">
						<?php
						foreach ($ar as $aa) : ?>
							<div class="col-lg text-center">
								<a href="<?= base_url('assets/images/artikel/' . $aa->gambar) ?>" data-fancybox="galerry">
									<img src="<?= base_url('assets/images/artikel/' . $aa->gambar) ?>" height="200px" width="300px" title="Ini gambar artikel" alt="ini gambar artikel">
								</a>
							</div>
						<?php endforeach ?>
						<input type="hidden" value="<?= $aa->id_artikel ?>" name="id_artikel">
					</div>
					<div class="form-group row m-3">
						<label class="col-sm-2 col-form-label">Status artikel</label>
						<div class="col">
							<?php if ($aa->status == 1) { ?>
								<button class="btn btn-success" disabled>Artikel di setujui <i class="fas fa-check"></i></button>
							<?php } else if ($aa->status == 2) { ?>
								<button class="btn btn-danger" disabled>Tidak di setujui <i class="fas fa-exclamation-triangle"></i></button>
								<a href="" type="button" data-toggle="modal" data-target="#alasan" class="btn btn-info"><i class="fas fa-eye"></i> Lihat alasan</a>
							<?php } else { ?>
								<button class="btn btn-warning text-dark" type="button" disabled>
									<span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span>
									Artikel sedang dalam peninjauan . . .
								</button>
							<?php } ?>

						</div>
						<a href="" class="btn btn-primary mr-3"><i class="fas fa-edit"></i>
							Edit artikel
						</a>
					</div>
					<div class="form-group row m-3">
						<label class="col-sm-2 col-form-label">Judul artikel</label>
						<div class="col-sm-10">
							<input type="text" name="judul" class="form-control" value="<?= $aa->judul ?>" readonly>
						</div>
					</div>
					<div class="form-group row m-3">
						<label class="col-sm-2 col-form-label">Isi artikel</label>
						<div class="col-sm-10">
							<textarea type="text" name="isi" class="form-control" readonly style=" height: 200px;"><?= $aa->isi ?></textarea>
						</div>
					</div>
					<?php if ($this->session->userdata('role_id') == 1) { ?>
						<div class="form-group row m-3">
							<label class="col-sm-2 col-form-label">Tindak lanjut</label>
							<div class="col-sm-8">
								<input value="<?= $aa->alasan_penolakan ?>" type="text" name="alasan_penolakan" id="alasan_penolakan" class="form-control" placeholder="tulis alasan jika artikel ini ditolak">
							</div>
							<div class="col-sm-2">
								<select name="status" class="form-group form-control mt-auto">
									<option value="">Pilih</option>
									<option value="1">SETUJUI</option>
									<option value="2">TIDAK</option>
								</select>
								<button class="btn btn-primary" type="submit"><i class="fas fa-check"></i> Submit</button>
							</div>
						</div>
					<?php } ?>
				</div>
			</div>
		</div>
	</div>
</form>

<!-- modal alasan -->
<div class="modal fade" id="alasan" tabindex="-1" aria-labelledby="alasan" aria-hidden="true">
	<div class="modal-dialog modal-sm">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="alasan">Alasan Penolakan</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body bg-gradient-danger text-white font-italic">
				<?= $aa->alasan_penolakan ?>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-primary btn-sm" data-dismiss="modal">Ok</button>
			</div>
		</div>
	</div>
</div>