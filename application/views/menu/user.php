    <!-- Begin Page Content -->
    <div class="container-fluid">
    	<!-- Page Heading -->
    	<div class="card">
    		<h5 class="card-header bg-primary text-white"><i class="fas fa-fw fa-table"></i> Tabel daftar akun</h5>
    		<div class="card-body bg-white">
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

    									<?php if ($u['role_id'] != 1) { ?>

    										<a href="<?= base_url('menu/hapus_user/' . $u['id_user']); ?>" class="btn btn-danger btn-sm btn-hapus" id="btn-hapus"><i class="fas fa-trash"></i></a>
    										<a href="<?= base_url('menu/detail_user/' . $u['id_user']); ?>" class="btn btn-info btn-sm"><i class="fas fa-eye"></i></a>
    										<a href="<?= base_url('menu/detail_user/' . $u['id_user']); ?>" class="btn btn-success btn-sm"><i class="fas fa-comments"></i></a>

    									<?php } else { ?>

    										<a href="<?= base_url('menu/detail_user/' . $u['id_user']); ?>" class="btn btn-info btn-sm"><i class="fas fa-eye"></i></a>
    										<a href="<?= base_url('menu/detail_user/' . $u['id_user']); ?>" class="btn btn-success btn-sm"><i class="fas fa-comments"></i></a>

    									<?php } ?>
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