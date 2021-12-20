    <!-- Begin Page Content -->
    <div class="container-fluid">
    	<!-- Page Heading -->
    	<h1 class="h3 mb-4 text-gray-800"><?= $judul; ?></h1>
    	<div class="card">
    		<h5 class="card-header bg-primary text-white">Tabel daftar akun</h5>
    		<div class="card-body">
    			<div class="table-responsive">
    				<?= $this->session->flashdata('pesan');  ?>
    				<?= $this->session->flashdata('hapus');  ?>
    				<table class="table table-bordered table-hover table-striped table-sm" id="dataTable" width="100%">
    					<thead class="text-center">
    						<tr>
    							<th scope="col">No</th>
    							<th scope="col">Nama</th>
    							<th scope="col">Email</th>
    							<th scope="col">Bergabung</th>
    							<th scope="col">Status</th>
    							<th scope="col">Aksi</th>
    							<th scope="col">Gambar</th>
    						</tr>
    					</thead>
    					<tbody>
    						<?php
								$i = 1;
								$date = ['date_create'];
								foreach ($user as $u) : ?>
    							<tr>
    								<th class="text-center"><?= $i++ ?></th>
    								<th><?= $u['nama']; ?></th>
    								<th><?= $u['email']; ?></th>
    								<th><?= date('d F Y', $u['date_create']); ?></th>
    								<th><?= $u['sebagai']; ?></th>
    								<th class="text-center">
    									<a href="<?= base_url('menu/hapus_user/' . $u['id_user']); ?>" class="btn btn-danger btn-sm" data-target="#modalHapus" data-toggle="modal" type="button"><i class="fas fa-trash"></i></a>
    									<a href="<?= base_url('menu/detail_user/' . $u['id_user']); ?>" class="btn btn-success btn-sm"><i class="fas fa-eye"></i></a>
    								</th>
    								<th class="text-center "> <img src="<?= base_url('assets/images/profile/') . $u['image'] ?> " width="75px" height="75px"> </th>
    							</tr>
    						<?php endforeach; ?>
    					</tbody>
    				</table>
    				<!-- End of Main Content -->
    			</div>
    		</div>
    	</div>
    </div>

    <!-- Modal hapus user -->
    <div class="modal fade" tabindex="-1" id="modalHapus" data-backdrop="static" data-keyboard="false">
    	<div class="modal-dialog">
    		<div class="modal-content">
    			<div class="modal-header">
    				<h5 class="modal-title">Hapus User</h5>
    				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
    					<span aria-hidden="true">&times;</span>
    				</button>
    			</div>
    			<div class="modal-body">
    				<p>Yakin ingin menghapus user ini?</p>
    			</div>
    			<div class="modal-footer">
    				<button type="button" class="btn btn-secondary" data-dismiss="modal">Tidak</button>
    				<a type="button" class="btn btn-danger" href="<?= base_url('menu/hapus_user/' . $u['id_user']) ?>">Ya hapus</a>
    			</div>
    		</div>
    	</div>
    </div>