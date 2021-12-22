<div class="row">
	<div class="col-md-8">
		<h1 class="h3 mb-4 text-gray-800"><?= $judul; ?></h1>
		<div class="row">
			<div class="col-lg-6">
				<form action="<?= base_url('user/update'); ?>" method="POST">
					<div class="form-group row">
						<label for="email" class="col-sm-2 col-form-label">Email</label>
						<div class="col-sm-10">
							<input type="text" class="form-control" id="email" name="email" value=" <?= $tbl_user['email']; ?>" readonly>
						</div>
					</div>
					<div class="form-group row">
						<label for="name" class="col-sm-2 col-form-label">Nama</label>
						<div class="col-sm-10">
							<input type="text" class="form-control" id="name" name="name" value=" <?= $tbl_user['nama']; ?>">
							<input type="hidden" class="form-control" id="id" name="id" value=" <?= $tbl_user['id']; ?>">
							<?= form_error('name', '<small class=text-danger pl-3">', '</small>'); ?>
						</div>
					</div>
					<div class="form-group row">
						<div class="col-sm-2">Gambar</div>
						<div class="col-sm-10">
							<div class="row">
								<div class="col-sm-3">
									<img src="<?= base_url('assets/images/profile/') . $tbl_user['image']; ?>" class="img-thumbnail">
								</div>
								<div class="col-sm-9">
									<div class="custom-file">
										<input type="file" class="custom-file-input" id="image" name="image">
										<label class="custom-file-label" for="image">Pilih gambar</label>
										<small class="text-danger font-italic">*jika string/nama file tidak muncul langsung simpan saja</small>
									</div>
								</div>
							</div>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
	<div class="col-md-4">
		<img src="https://cdn-icons-png.flaticon.com/512/3163/3163207.png" class="img-fluid" alt="">
		<h1>ssdsd</h1>
	</div>
</div>
</div>