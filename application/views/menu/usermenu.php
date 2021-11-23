<div id="wrapper">
	<!-- Begin Page Content -->
	<!-- Page Heading -->
	<div class="col-md-12">
		<div class="row">
			<div class="card-body card-shadow">
				<h1 class="h3 mb-4 text-gray-800"><?= $judul; ?></h1>

				<?= $this->session->flashdata('pesan');  ?>

				<a href="<?= base_url('usermenu/tambah') ?>" class="btn btn-primary"><i class="fas fa-file-medical mr-1"></i>
					Tambah
					Artikel</a>
				<table class="table table-bordered table-hover table-striped" id="dataTable" width="100%">
					<thead>
						<tr>
							<th scope="col">No</th>
							<th scope="col">Judul</th>
							<th scope="col">Status</th>
							<th scope="col">Tanggal</th>
							<th scope="col">Aksiiii</th>
						</tr>
					</thead>
					<tbody>
						<?php
						$i = 1;
						foreach ($artikel as $a) : ?>
							<tr>
								<th scope="col"><?= $i++ ?></th>
								<th scope="col"><?= $a['judul']; ?></th>
								<th scope="col"> <?php if ($a['status'] == 1) { ?>
										<span class="badge badge-success">Di Izinkan</span>
									<?php } else { ?>
										<span class="badge badge-danger"> Di Tolak </span>
									<?php } ?>
								</th>
								<th scope="col"><?= $a['tanggal']; ?></th>
								<th scope="col">
									<a href="<?= base_url('menu/detail/' . $a['id_artikel']); ?>" class="badge badge-success">details</a>
									<a href="#" class="badge badge-warning">edit</a>
									<a href="#" class="badge badge-danger">hapus</a>
								</th>
							</tr>
						<?php endforeach; ?>
					</tbody>
				</table>
			</div>
		</div>
	</div>
</div>
<!-- End of Main Content -->