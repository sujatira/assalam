	<!-- Begin Page Content -->
	<!-- Page Heading -->
	<div class="container">
		<!-- <h1 class="h3 mb-4 text-gray-800"><?= $judul; ?></h1> -->
		<div class="row">
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
									Jumlah Saldo Masjid</div>
								<div class="h5 mb-0 font-weight-bold text-gray-800">$40,000</div>
							</div>
							<div class="col-auto">
								<i class="fas fa-fw fa-file-invoice-dollar fa-2x text-primary"></i>
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
									Jumlah Saldo Masjid</div>
								<div class="h5 mb-0 font-weight-bold text-gray-800">$40,000</div>
							</div>
							<div class="col-auto">
								<i class="fas fa-fw fa-file-invoice-dollar fa-2x text-primary"></i>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-xl-8 col-lg-7">
				<div class="card shadow mb-4">
					<!-- Card Header - Dropdown -->
					<div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
						<h6 class="m-0 font-weight-bold text-primary">Info Kas</h6>

					</div>
					<!-- Card Body -->
					<div class="card-body">
						<div class="chart-area">
							<canvas id="myAreaChart"></canvas>
						</div>
					</div>
				</div>

			</div>

			<!-- Pie Chart -->
			<div class="col-xl-4 col-lg-5">
				<div class="card shadow mb-4">
					<!-- Card Header - Dropdown -->
					<div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
						<h6 class="m-0 font-weight-bold text-primary">Revenue Sources</h6>
					</div>
					<!-- Card Body -->
					<div class="card-body">
						<div class="chart-pie pt-4 pb-2">
							<canvas id="myPieChart"></canvas>
						</div>
						<div class="mt-4 text-center small">
							<span class="mr-2">
								<i class="fas fa-circle text-primary"></i> Direct
							</span>
							<span class="mr-2">
								<i class="fas fa-circle text-success"></i> Social
							</span>
							<span class="mr-2">
								<i class="fas fa-circle text-info"></i> Referral
							</span>
						</div>
					</div>
				</div>
			</div>

			<div class="col-lg-12">
				<div class="card shadow mb-4">
					<!-- Card Header - Dropdown -->
					<div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
						<h6 class="m-0 font-weight-bold text-primary">Info Kas</h6>
					</div>
					<!-- Card Body -->
					<div class="card-body">
						<div class="row">
							<div class="col-xl-3 col-md-6 mb-4">
								<div class="card border-left-primary shadow h-100 py-2 bg-white">
									<div class="card-body bg-white">
										<div class="row no-gutters align-items-center">
											<div class="col mr-2">
												<div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
													Jumlah Kas Masuk</div>
												<div class="h5 mb-0 font-weight-bold text-gray-800">Rp. <?= number_format($masuk->jumlah, 0) ?></div>
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
													Jumlah Kas Keluar</div>
												<div class="h5 mb-0 font-weight-bold text-gray-800">Rp. <?= number_format($keluar->maks, 0) ?></div>
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
													Sisa Kas</div>
												<div class="h5 mb-0 font-weight-bold text-gray-800">Rp. <?= number_format($sisa, 0) ?></div>
											</div>
											<div class="col-auto">
												<i class="fas fa-fw fa-file-invoice-dollar fa-2x text-primary"></i>
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
	</div>
	<!-- End of Main Content -->