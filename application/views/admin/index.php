	<div class="container">
		<!-- <h1 class="h3 mb-4 text-gray-800"><?= $judul; ?></h1> -->
		<div class="row justify-content-around">
			<div class="col-xl-3 col-md-6 mb-4">
				<div class="card border-left-primary shadow h-100 py-2 bg-white">
					<div class="card-body bg-white">
						<div class="row no-gutters align-items-center">
							<div class="col mr-2">
								<div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
									Jumlah User</div>
								<div class="h5 mb-0 font-weight-bold text-gray-800"><?= $jumlahuser ?> User</div>
							</div>
							<div class="col-auto">
								<i class="fas fa-fw fa-users fa-2x text-primary"></i>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-xl-3 col-md-6 mb-4">
				<div class="card border-left-primary shadow h-100 py-2 bg-white">
					<div class="card-body bg-white">
						<div class="row no-gutters align-items-center">
							<div class="col mr-2">
								<div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
									Jumlah Artikel</div>
								<div class="h5 mb-0 font-weight-bold text-gray-800"><?= $jumlahartikel ?> Artikel</div>
							</div>
							<div class="col-auto">
								<i class="fas fa-fw fa-newspaper fa-2x text-primary"></i>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-xl-3 col-md-6 mb-4">
				<div class="card border-left-primary shadow h-100 py-2 bg-white">
					<div class="card-body bg-white">
						<div class="row no-gutters align-items-center">
							<div class="col mr-2">
								<div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
									Pengajuan baru</div>
								<div class="h5 mb-0 font-weight-bold text-gray-800"><?= $blmacc ?> Pengajuan</div>
							</div>
							<div class="col-auto">
								<i class="fas fa-fw fa-file-invoice-dollar fa-2x text-primary"></i>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- <div class="col-xl-3 col-md-6 mb-4">
				<div class="card border-left-primary shadow h-100 py-2 bg-white">
					<div class="card-body bg-white">
						<div class="row no-gutters align-items-center">
							<div class="col mr-2">
								<div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
									Jumlah Saldo Masjid</div>
								<div class="h5 mb-0 font-weight-bold text-gray-800">$40,000</div>
							</div>
							<div class="col-auto">
								<i class="fas fa-fw fa-file-invoice-dollar fa-2x text-primary"></i>
							</div>
						</div>
					</div>
				</div>
			</div> -->
		</div>
		<div class="row">
			<div class="col-xl-8 col-lg-7">
				<div class="card shadow mb-4">
					<!-- Card Header - Dropdown -->
					<div class="card-header py-3 d-flex flex-row align-items-center justify-content-between bg-primary">
						<h6 class="m-0 font-weight-bold text-white">Info Pemasukan Kas Per Bulan</h6>
					</div>
					<!-- Card Body -->
					<div class="card-body bg-white">
						<div class="chart-area">
							<?php
							foreach ($chart2 as $ct => $value) {
								$dod[]  = $value['month'];
								$mm[]   = $value['nominal'];
							}
							?>
							<canvas id="myBarChart"></canvas>
							<script>
								var ctx = document.getElementById("myBarChart");
								var myBarChart = new Chart(ctx, {
									type: 'bar',
									data: {
										labels: <?= json_encode($dod) ?>,
										datasets: [{
											data: <?= json_encode($mm) ?>,
											backgroundColor: ['#4e73df', '#1cc88a', '#36b9cc'],
											hoverBackgroundColor: ['#2e59d9', '#17a673', '#2c9faf'],
											hoverBorderColor: "rgba(234, 236, 244, 1)",
										}],
									},
									options: {
										maintainAspectRatio: false,
										tooltips: {
											backgroundColor: "rgb(255,255,255)",
											bodyFontColor: "#858796",
											borderColor: '#dddfeb',
											borderWidth: 1,
											xPadding: 15,
											yPadding: 15,
											displayColors: false,
											caretPadding: 10,
										},
										legend: {
											display: false
										},
										cutoutPercentage: 80,
									},
								});
							</script>
						</div>
					</div>
				</div>
			</div>
			<!-- Pie Chart -->
			<div class=" col-xl-4 col-lg-5">
				<div class="card shadow mb-4">
					<!-- Card Header - Dropdown -->
					<div class="card-header py-3 d-flex flex-row align-items-center justify-content-between bg-primary">
						<h6 class="m-0 font-weight-bold text-white">Diagram Jumlah Member</h6>
					</div>
					<!-- Card Body -->
					<div class="card-body bg-white">
						<div class="chart-pie pt-4 pb-2">

							<?php
							foreach ($chart as $ct => $value) {
								$tot[]  = $value['jumlah'];
								$mn[]   = $value['sebagai'];
							}
							?>

							<canvas id="myPieChart"></canvas>
							<script>
								var ctx = document.getElementById("myPieChart");
								var myPieChart = new Chart(ctx, {
									type: 'doughnut',
									data: {
										labels: <?= json_encode($mn)  ?>,
										datasets: [{
											data: <?= json_encode($tot)  ?>,
											backgroundColor: ['#4e73df', '#1cc88a', '#36b9cc'],
											hoverBackgroundColor: ['#2e59d9', '#17a673', '#2c9faf'],
											hoverBorderColor: "rgba(234, 236, 244, 1)",
										}],
									},
									options: {
										maintainAspectRatio: false,
										tooltips: {
											backgroundColor: "rgb(255,255,255)",
											bodyFontColor: "#858796",
											borderColor: '#dddfeb',
											borderWidth: 1,
											xPadding: 15,
											yPadding: 15,
											displayColors: false,
											caretPadding: 10,
										},
										legend: {
											display: false
										},
										cutoutPercentage: 80,
									},
								});
							</script>
						</div>
						<div class="mt-4 text-center small">
							<span class="mr-2">
								<i class="fas fa-circle text-primary"></i> Admin
							</span>
							<span class="mr-2">
								<i class="fas fa-circle text-success"></i> Bendahara
							</span>
							<span class="mr-2">
								<i class="fas fa-circle text-info"></i> Member
							</span>
						</div>
					</div>
				</div>
			</div>
			<div class="col-lg-12">
				<div class="card shadow mb-4">
					<!-- Card Header - Dropdown -->
					<div class="card-header py-3 d-flex flex-row align-items-center justify-content-between bg-primary">
						<h6 class="m-0 font-weight-bold text-white">Info Kas</h6>
					</div>
					<!-- Card Body -->
					<div class="card-body bg-white">
						<div class="row">
							<div class="col-xl-3 col-md-6 mb-4">
								<div class="card border-left-primary shadow h-100 py-2 bg-light">
									<div class="card-body">
										<div class="row no-gutters align-items-center">
											<div class="col mr-2">
												<div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
													Jumlah Kas Masuk</div>
												<div class="h5 mb-0 font-weight-bold text-gray-800">Rp. <?= number_format($masuk->jumlah, 0) ?></div>
											</div>
											<div class="col-auto">
												<i class="fas fa-fw fa-info-circle fa-2x text-primary"></i>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-xl-3 col-md-6 mb-4">
								<div class="card border-left-primary shadow h-100 py-2 bg-light">
									<div class="card-body">
										<div class="row no-gutters align-items-center">
											<div class="col mr-2">
												<div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
													Jumlah Kas Keluar</div>
												<div class="h5 mb-0 font-weight-bold text-gray-800">Rp. <?= number_format($keluar->maks, 0) ?></div>
											</div>
											<div class="col-auto">
												<i class="fas fa-fw fa-info-circle fa-2x text-primary"></i>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-xl-3 col-md-6 mb-4">
								<div class="card border-left-primary shadow h-100 py-2 bg-light">
									<div class="card-body">
										<div class="row no-gutters align-items-center">
											<div class="col mr-2">
												<div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
													Sisa Kas</div>
												<div class="h5 mb-0 font-weight-bold text-gray-800">Rp. <?= number_format($sisa, 0) ?></div>
											</div>
											<div class="col-auto">
												<i class="fas fa-fw fa-info-circle fa-2x text-primary"></i>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-xl-3 col-md-6 mb-4">
								<div class="card shadow h-100 py-2 bg-light">
									<div class="card-body">
										<div class="row no-gutters align-items-center">
											<a href="<?= base_url('menu/info_kas') ?>">
												<div class="col mr-2 text-center">
													<div class="h5 mb-0 font-weight-bold text-gray-800">Lihat Detail</div>
												</div>
											</a>
											<i class="fas fa-fw fa-angle-right fa-2x text-primary"></i>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- End of Main Content -->