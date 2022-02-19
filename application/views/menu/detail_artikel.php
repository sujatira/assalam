<div class="flash-data" data-flashdata="<?= $this->session->flashdata('pesan'); ?>"></div>

<form method="POST" action="<?= base_url('Menu/approve'); ?>">
	<div class="row m-2">
		<div class="col-md-12">
			<div class="card bg-light">
				<div class="card-header bg-primary text-white"><i class="fas fa-fw fa-info-circle"></i> Detail Artikel</div>
				<div class="card-body">
					<div class="row">
						<?php
						foreach ($ar as $aa) : ?>
							<div class="col-lg text-center">
								<a href="<?= base_url('assets/images/artikel/' . $aa->gambar) ?>" data-fancybox="galerry">
									<img src="<?= base_url('assets/images/artikel/' . $aa->gambar) ?>" title="Ini gambar artikel" alt="ini gambar artikel" class="img-thumbnail" style="width: 200px; height: 200px;">
								</a>
							</div>
						<?php endforeach ?>
						<input type="hidden" value="<?= $aa->id_artikel ?>" name="id_artikel">
					</div>
					<div class="form-group row m-3">
						<label class="col-sm-2 col-form-label">Status artikel</label>
						<div class="col">
							<?php if ($aa->status == 1) { ?>
								<button class="btn btn-success" disabled>Disetujui <i class="fas fa-check"></i></button>
								<label class="ml-2"> pada tanggal <?= $aa->tanggal_acc; ?> Oleh <label href="<?= base_url('user'); ?>" class="badge badge-info"><?= $aa->periksa_oleh ?></label> </label>
							<?php } else if ($aa->status == 2) { ?>
								<button class="btn btn-danger" disabled>Tidak disetujui <i class="fas fa-exclamation-triangle"></i></button>
								<a class="btn btn-info" type="button" data-toggle="popover" title="Alasan penolakan artikel" data-content="<?= $aa->alasan_penolakan ?>"><i class="fas fa-eye"></i> Lihat alasan</a>
							<?php } else { ?>
								<button class="btn btn-warning text-dark" type="button" disabled>
									<i class="fas fa-fw fa-sync fa-spin"></i>
									Artikel sedang dalam peninjauan . . .
								</button>
							<?php } ?>
							<a href="<?= base_url('artikel/edit_artikel/' . $aa->id_artikel) ?>" class="btn btn-primary"><i class="fas fa-fw fa-edit"></i>
								Edit artikel
							</a>
						</div>
					</div>
					<div class="form-group row m-3">
						<label class="col-sm-2 col-form-label">Tanggal</label>
						<div class="col-sm-10">
							<input type="text" name="judul" class="form-control" value="<?= $aa->tanggal; ?>" readonly>
						</div>
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
						<!-- <div class="form-group row m-3">
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
						</div> -->

						<div class="form-group row m-3">
							<label class="col-sm-2 col-form-label font-italic">
								<strong>Setujui artikel?</strong><br>
								<small class="text-danger">artikel yang di<strong>setujui</strong> dapat dilihat oleh publik</small>
							</label>
							<div class="col-sm-2">
								<div class="form-check" hidden>
									<input class="form-check-input" type="radio" id="setuju" name="status" value="" checked>
									<label class="form-check-label" for="setuju">
										Abaikan
									</label>
								</div>
								<div class="form-check">
									<input class="form-check-input" type="radio" id="setuju" name="status" value="1">
									<label class="form-check-label" for="setuju">
										SETUJU
									</label>
								</div>
								<div class="form-check">
									<input class="form-check-input" type="radio" id="tolak" name="status" value="2">
									<label class="form-check-label" for="tolak">
										TIDAK SETUJU
									</label>
								</div>
							</div>
							<div class="col-sm-6">
								<input value="<?= $aa->alasan_penolakan ?>" type="text" name="alasan_penolakan" id="alasan_penolakan" class="form-control" placeholder="tulis alasan jika artikel ini ditolak">
							</div>
							<div class="col">
								<button class="btn btn-primary" type="submit"><i class="fas fa-fw fa-check"></i> Submit</button>
							</div>
						</div>
					<?php } ?>
				</div>
			</div>
		</div>
	</div>
</form>
<!-- modal alasan -->