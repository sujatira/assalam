<div class="row container">
	<div class="col-sm-6">
		<div class="mt-3">
			<div class="card">
				<div class="card-header bg-primary text-white"><i class="fas fa-fw fa-info-circle"></i>
					Detail Akun
				</div>
				<div class="card-body bg-white">
					<h5 class="card-title">Nama : <?= $userid->nama ?></h5>
					<p class="card-text">Bergabung sejak : <?= date('d F Y', $userid->date_create); ?></p>
					<p class="card-text">Email : <?= $userid->email; ?></p>
					<th> <img src="<?= base_url('assets/images/profile/') . $userid->image; ?> " width="200px" height="200px"> </th>
				</div>
			</div>
		</div>
	</div>
	<div class="col-sm-6">
		<div class="text-center">
			<img src="https://cdn-icons.flaticon.com/png/512/2194/premium/2194188.png?token=exp=1641485978~hmac=7bccad0e34259e76daaf507dc9e61575" width="400px" class="img-fluid" alt="">
		</div>
	</div>
</div>