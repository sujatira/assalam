<!-- Content Wrapper -->
<div id="content-wrapper" class="d-flex flex-column bg-light">
	<!-- Main Content -->
	<div id="content">

		<!-- Topbar -->
		<nav class="navbar navbar-expand navbar-white topbar mb-4 static-top bg-white shadow">
			<!-- Sidebar Toggle (Topbar) -->
			<button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
				<i class="fa fa-bars"></i>
			</button>

			<div class="custom-switch form-check form-switch">
				<input type="checkbox" class="custom-control-input" id="darkSwitch">
				<label class="custom-control-label" for="darkSwitch">Mode Gelap <i class="fas fa-fw fa-adjust"></i></label>
				<!-- <badge class="badge badge-primary">Beta</badge> -->
			</div>

			<!-- Topbar Navbar -->
			<ul class="navbar-nav ml-auto">
				<!-- Nav Item - Messages -->

				<div class="topbar-divider d-none d-sm-block"></div>
				<!-- Nav Item - User Information -->
				<li class="nav-item dropdown no-arrow">
					<a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
						<span class="mr-2 d-none d-lg-inline text-gray-600 small">Hallo! <?= $tbl_user['nama']; ?></span>
						<img class="img-profile rounded" src="<?= base_url('assets/images/profile/') . $tbl_user['image']; ?>">
					</a>
					<!-- Dropdown - User Information -->
					<div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
						<a class="dropdown-item" href="<?= base_url('user'); ?>">
							<i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
							Profil Saya
						</a>
						<a class="dropdown-item" href="<?= base_url('auth/reset_password'); ?>">
							<i class="fas fa-lock fa-sm fa-fw mr-2 text-gray-400"></i>
							Ganti Password
						</a>
						<div class="dropdown-divider"></div>
						<a class="dropdown-item btn-keluar" href="<?= base_url('Auth/logout'); ?>" id="btn-keluar">
							<i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
							Keluar
						</a>
					</div>
				</li>

			</ul>

		</nav>
		<!-- End of Topbar -->