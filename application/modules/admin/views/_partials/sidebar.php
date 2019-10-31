<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">
	<a class="sidebar-brand d-flex align-items-center justify-content-center" href="<?= base_url('admin/dashboard'); ?>">
		<div class="sidebar-brand-icon">
			<img src="<?= base_url('assets/images/himifda-24.png'); ?>">
		</div>
		<div class="sidebar-brand-text mx-3">Himifda</div>
	</a>
	<hr class="sidebar-divider my-0">
	<li class="nav-item active">
		<a class="nav-link" href="<?= base_url('admin/dashboard'); ?>">
			<i class="fas fa-fw fa-tachometer-alt"></i>
			<span>Dashboard</span>
		</a>
	</li>	
	<hr class="sidebar-divider">
	<div class="sidebar-heading">Menu</div>
	<li class="nav-item">
		<a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapse-" aria-expanded="true" aria-controls="collapse-">
			<i class="fas fa-fw fa-folder"></i>
			<span>Menu</span>
		</a>
		<div id="collapse-" class="collapse" aria-labelledby="heading-" data-parent="#accordionSidebar">
			<div class="bg-white py-2 collapse-inner rounded">
				<h6 class="collapse-header">Halaman Utama</h6>
				<a class="collapse-item" href="<?= base_url('admin/faq'); ?>">FAQ</a>
				<a class="collapse-item" href="<?= base_url('admin/visi_misi'); ?>">Visi & Misi</a>
			</div>
		</div>
	</li>
	<hr class="sidebar-divider">
	<div class="sidebar-heading">Lainnya</div>
	<li class="nav-item">
		<a class="nav-link" href="<?= base_url('admin/pengaturan'); ?>">
			<i class="fas fa-fw fa-cog"></i>
			<span>Pengaturan</span>
		</a>
	</li>
	<hr class="sidebar-divider d-none d-md-block">
	<div class="text-center d-none d-md-inline">
		<button class="rounded-circle border-0" id="sidebarToggle"></button>
	</div>
</ul>