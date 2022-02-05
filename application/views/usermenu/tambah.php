<div class="card-body card-shadow">
	<div class="card">
		<h5 class="card-header bg-primary text-white"><i class="fas fa-fw fa-file-alt"></i> Form tambah artikel</h5>
		<div class="card-body bg-light">
			<div class="row">
				<div class="col-md">
					<form id="frmtambah" action="<?= base_url('menu/index'); ?>" method="POST" enctype="multipart/form-data">
						<div class="form-group">
							<label>Gambar Judul</label>
							<input type="file" name="gambar_judul" class="form-control">
						</div>
						<div class="form-group">
							<label>Judul</label>
							<input type="text" name="judul" class="form-control" id="judul">
						</div>
						<label>Konten artikel</label>
						<div class="form-group">
							<textarea name="konten" class="form-control" style="height: 300px;" id=""></textarea>
							<script>
								ClassicEditor
									.create(document.querySelector('#editor'))
									.catch(error => {
										console.error(error);
									});
							</script>

						</div>
						<table id="tabelArtikel" class="col-lg mt-2 table-sm">
							<tbody>
								<tr>
									<td>
										<div class="form-group">
											<label for="gambar[]">Gambar untuk konten</label>
											<input type="file" class="form-control col" name="gambar[]" placeholder="">
										</div>
									</td>
									<td class="justify-content-end">
										<button type="button" id="btnTambah" class="btn btn-primary mt-3"><i class="fas fa-fw fa-plus"></i></button>
									</td>
								</tr>
							</tbody>
						</table>
						<button id="btnpost-user" type="button" class="btn btn-primary"> <i class="fas fa-fw fa-plus"></i> Post</button>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>