    <!-- Begin Page Content -->
    <div class="container-fluid">
    	<!-- Page Heading -->
    	<div class="row">
    		<div class="col-xl-3 col-md-6 mb-4">
    			<div class="card border-left-primary shadow h-100 py-2 bg-white">
    				<div class="card-body bg-white">
    					<div class="row no-gutters align-items-center">
    						<div class="col mr-2">
    							<div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
    								Jumlah Kas Masuk</div>
    							<div class="h5 mb-0 font-weight-bold text-gray-800">Rp. <?= number_format($masuk->jumlah) ?></div>
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
    			<div class="card border-left-primary shadow h-100 py-2 bg-white">
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
    	</div>

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
							$mm[]   = $value['jumlah'];
						}
						?>
    				<canvas id="myBarChart" height="90px"></canvas>
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
    							scales: {
    								yAxes: [{
    									ticks: {

    										beginAtZero: true,
    									}
    								}]
    							},
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
    								display: false,
    							},
    							cutoutPercentage: 80,
    						},
    					});
    				</script>
    			</div>
    		</div>
    	</div>


    	<div class="card text-white bg-info mt-3 mb-3" style="max-width: 450px;">
    		<div class="card-header bg-primary"><strong><i class="fas fa-fw fa-info"></i> Total Sisa Kas Masjid Jami Assalam</strong></div>
    		<div class="card-body">
    			<h1 class="card-title">Rp. <?= number_format($sisa); ?>,- </h1>
    			<p class="card-text">Total keuangan adalah jumlah dari seluruh pemasukan dikurangi pengeluaran, yang dijumlahkan secara realtime oleh sistem</p>
    		</div>
    	</div>
    </div>
    <script src="//cdnjs.cloudflare.com/ajax/libs/numeral.js/2.0.6/numeral.min.js"></script>
    <!-- End of Main Content -->