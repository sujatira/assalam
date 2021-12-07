<div class="card-body card-shadow">
	<div class="card">
		<h5 class="card-header bg-primary text-white">Form tambah artikel</h5>
		<div class="card-body">
			<div class="col-md-12">
				<div class="row">
					<div class="col-md-6">
						<form id="frmtambah" action="<?= base_url('menu/index'); ?>" method="POST" enctype="multipart/form-data">
							<!-- <div><?= $this->session->flashdata('pesan'); ?></div> -->
							<div class="form-group">
								<label>Gambar Judul</label>
								<input type="file" name="gambar_judul" class="form-control">
							</div>
							<div class="form-group">
								<label>Judul</label>
								<input type="text" name="judul" class="form-control" id="judul">
							</div>
							<div class="form-group">
								<label>Isi artikel</label>
								<textarea class="form-control" name="isi" id="isi" style="width: 900px; height: 500px;"></textarea>
							</div>
							<table id="tabelArtikel" class="col-lg mt-2">
								<tbody>
									<tr>
										<td>
											<div class="form-group">
												<label for="gambar[]">Gambar untuk isi</label>
												<input type="file" class="form-control" name="gambar[]" placeholder="">
											</div>
										</td>
										<td>
											<button type="button" id="btnTambah"> <i class="fa fa-plus"></i> </button>
										</td>
									</tr>
								</tbody>
							</table>
							<button id="btnpost" type="button" class="btn btn-primary">Post</button>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>