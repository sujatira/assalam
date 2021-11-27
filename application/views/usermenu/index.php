<div id="wrapper">
	<!-- Begin Page Content -->
	<!-- Page Heading -->
	<div class="col-md-12">
		<div class="row">
			<div class="card-body card-shadow">
				<h1 class="h3 mb-3 text-gray-800"><?= $judul; ?></h1>
				<?= $this->session->flashdata('pesan');  ?>
				<a href="<?= base_url('menu/tambah') ?>" class="btn btn-primary mb-3"><i class="fas fa-file-medical mr-1"></i>Tambah Artikel</a>
				<table class="table table-bordered table-hover table-striped" id="dataTable" width="100%">
					<thead class="text-center">
						<tr>
							<th scope="col">No</th>
							<th scope="col">Judul</th>
							<th scope="col">Status</th>
							<th scope="col">Tanggal</th>
							<th scope="col">Oleh</th>
							<th scope="col">Aksi</th>
						</tr>
					</thead>
					<tbody>
						<?php
						$i = 1;
						foreach ($artikel as $a) : ?>
							<tr>
								<td class="text-center"><?= $i++ ?></td>
								<td class="col-4 text-text-truncate"><?= $a['judul']; ?>
								<td class="text-center"> <?php if ($a['status'] == 1) { ?>
										<span class="badge badge-primary">Di Izinkan</span>
									<?php } else if ($a['status'] == 2) { ?>
										<span class="badge badge-danger">Di Tolak</span>
									<?php } else { ?>
										<span class="badge badge-warning text-dark">Menunggu</span>
									<?php } ?>
								</td>
								<td class="text-center"><?= $a['tanggal']; ?></td>
								<td><?= $this->User_model->getUserId($a['id_user'])->nama; ?></td>
								<td class="text-center">
									<a href="#" class="text-success"><i class="fas fa-edit"></i></a>
									<a href="<?= base_url('menu/detail/' . $a['id_artikel']); ?>" class="text-info"><i class="fas fa-eye"></i></a>
									<a href="#" class="text-danger"><i class="fas fa-trash-alt"></i></a>
								</td>
							</tr>
						<?php endforeach; ?>
					</tbody>
				</table>
			</div>
		</div>
	</div>
</div>
<!-- End of Main Content -->

<!-- Modal -->
<div class="modal fade" id="postModal" tabindex="-1" aria-labelledby="postModalLabel" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="postModalLabel">Tambah Artikel Baru</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<form action="<?= base_url('menu/posartikel') ?>" method="POST" class="user">
				<div class="modal-body">
					<div class="form-group">
						<label for="formGroupExampleInput">Judul Artikel</label>
						<input type="text" class="form-control mb-3" id="judul" name="judul" placeholder="Masukan judul artikel">
						<label for="exampleFormControlTextarea3">Isi Artikel</label>
						<textarea class="form-control mb-3" id="isi" name="isi" rows="7"></textarea>
						<div class="mb-3">
							<label for="exampleFormControlTextarea3">Tambahkan Gambar</label>
							<input class="form-control mb-1" type="file" id="file1" name="file1">
							<input class="form-control mb-1" type="file" id="file2" name="file2">
							<input class="form-control mb-1" type="file" id="file3" name="file3">
							<input class="form-control mb-1" type="file" id="file4" name="file4">
						</div>
					</div>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
					<button type="submit" class="btn btn-primary">Tambah</button>
				</div>
			</form>
		</div>
	</div>
</div>