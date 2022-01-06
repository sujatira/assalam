<div class="row">
	<div class="container">
		<div class="col-md-8">
			<div class="mt-3">
				<div class="card">
					<div class="card-header bg-primary">
						Detail Akun
					</div>
					<div class="card-body bg-white">
						<h5 class="card-title">Nama : <?= $userid->nama ?></h5>
						<p class="card-text">Bergabung sejak : <?= date('d F Y', $userid->date_create); ?></p>
						<p class="card-text">Email : <?= $userid->email; ?></p>
						<th> <img src="<?= base_url('assets/images/profile/') . $userid->image; ?> " width="200px" height="200px"> </th>
					</div>
					<a href="<?= base_url('menu/user'); ?>" class="btn btn-info">Go Back</a>
				</div>
			</div>
		</div>
		<div class="col-md-4">
			<img src="https://cdn-icons.flaticon.com/png/512/3666/premium/3666941.png?token=exp=1640194929~hmac=dbcba70e6094a08bb32bc0fd6acdf461" class="img-fluid" alt="">
		</div>
	</div>
</div>