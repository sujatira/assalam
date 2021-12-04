<div class="mt-3 col-md-6">
	<div class="card">
		<div class="card-header">
			Detail Akun
		</div>
		<div class="card-body">
			<h5 class="card-title">Nama : <?= $userid->nama ?></h5>
			<p class="card-text">Bergabung sejak : <?= date('d F Y', $userid->date_create); ?></p>
			<p class="card-text">Email : <?= $userid->email; ?></p>
			<th> <img src="<?= base_url('assets/images/profile/') . $userid->image; ?> " width="200px" height="200px"> </th>
		</div>
		<a href="<?= base_url('menu/user'); ?>" class="btn btn-info">Go Back</a>
	</div>
</div>