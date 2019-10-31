<div id="content-wrapper" class="d-flex flex-column">
	<div id="content">
		<nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">
			<button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
				<i class="fa fa-bars"></i>
			</button>
			<div class="d-none d-md-block">
				<h1 class="h5 mb-0 text-gray" style="font-family: 'Source Sans Pro', sans-serif">
					<p class="m-0">Himpunan Mahasiswa Informatika</p>
					<p class="m-0 font-italic font-weight-bold h6">Universitas Darma Persada</p>
				</h1>
			</div>
			<h1 class="h5 mb-0 text-gray"></h1>
			<ul class="navbar-nav ml-auto">
				<div class="topbar-divider d-none d-sm-block"></div>
				<li class="nav-item dropdown no-arrow">
					<a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
						<span class="mr-2 d-none d-lg-inline text-gray-600 small"><?= $_SESSION['nama_lengkap']; ?></span>
						<img class="img-profile rounded-circle" src="<?= base_url('assets/images/profile/default.png')?>">
						<!-- <img class="img-profile rounded-circle" src=""> --><!-- <?= base_url('assets/images/profile/') . $anggota['image'] ?> -->
					</a>
					<div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
						<a class="dropdown-item" href="#">
							<i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
							Profile
						</a>
						<a class="dropdown-item" href="#">
							<i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
							Settings
						</a>
						<a class="dropdown-item" href="#">
							<i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>
							Activity Log
						</a>
						<div class="dropdown-divider"></div>
						<a class="dropdown-item" href="<?= base_url('admin/logout'); ?>">
							<i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
							Logout
						</a>
					</div>
				</li>
			</ul>
		</nav>