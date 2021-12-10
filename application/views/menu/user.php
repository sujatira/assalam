    <!-- Begin Page Content -->
    <div class="container-fluid">
    	<!-- Page Heading -->
    	<h1 class="h3 mb-4 text-gray-800"><?= $judul; ?></h1>
    	<div class="card">
    		<h5 class="card-header bg-primary text-white">Tabel daftar akun</h5>
    		<div class="card-body">
    			<div class="table-responsive">
    				<?= $this->session->flashdata('pesan');  ?>
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
    									<a href="" class="text-danger"><i class="fas fa-trash-alt"></i></a>
    									<a href="<?= base_url('menu/detail_user/' . $u['id_user']); ?>" class="text-success"><i class="fas fa-eye"></i></a>
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