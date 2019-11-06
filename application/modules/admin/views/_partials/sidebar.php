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
	<div class="sidebar-heading">Master Data</div>
	<li class="nav-item">
		<a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#masterdata" aria-expanded="true" aria-controls="collapse-">
			<i class="fas fa-fw fa-folder"></i>
			<span>Master Data</span>
		</a>
		<div id="masterdata" class="collapse" data-parent="#accordionSidebar">
			<div class="bg-white py-2 collapse-inner rounded">
				<a class="collapse-item" href="<?= base_url('admin/anggota'); ?>">Anggota</a>
				<a class="collapse-item" href="<?= base_url('admin/periode'); ?>">Periode</a>
				<a class="collapse-item" href="<?= base_url('admin/jabatan'); ?>">Jabatan</a>
			</div>
		</div>
	</li>
	<hr class="sidebar-divider">
	<div class="sidebar-heading">Menu Website</div>
	<li class="nav-item">
		<a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapse-" aria-expanded="true" aria-controls="collapse-">
			<i class="fas fa-fw fa-folder"></i>
			<span>Manajemen Konten</span>
		</a>
		<div id="collapse-" class="collapse" aria-labelledby="heading-" data-parent="#accordionSidebar">
			<div class="bg-white py-2 collapse-inner rounded">
				<h6 class="collapse-header">Halaman Depan</h6>
				<a class="collapse-item" href="<?= base_url('admin/event'); ?>">Event</a>
				<a class="collapse-item" href="<?= base_url('admin/visi_misi'); ?>">Visi & Misi</a>
				<a class="collapse-item" href="<?= base_url('admin/pengurus'); ?>">Struktur Organisasi</a>
				<a class="collapse-item" href="<?= base_url('admin/faq'); ?>">FAQ</a>
			</div>
		</div>
	</li>
	<li class="nav-item">
		<a class="nav-link" href="<?= base_url('admin/kritik_saran'); ?>">
			<i class="fas fa-fw fa-cog"></i>
			<span>Kritik & Saran</span>
		</a>
	</li>
	<hr class="sidebar-divider">
	<div class="sidebar-heading">Lainnya</div>

	<li class="nav-item">
		<a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#pengaturan" aria-expanded="true" aria-controls="collapse-">
			<i class="fas fa-fw fa-cog"></i>
			<span>Pengaturan</span>
		</a>
		<div id="pengaturan" class="collapse" data-parent="#accordionSidebar">
			<div class="bg-white py-2 collapse-inner rounded">
				<a class="collapse-item" href="<?= base_url('admin/role'); ?>">Role</a>
				<a class="collapse-item" href="<?= base_url('admin/user'); ?>">User</a>
				<a class="collapse-item" href="<?= base_url('admin/pengaturan'); ?>">pengaturan lainnya</a>
			</div>
		</div>
	</li>
	<hr class="sidebar-divider d-none d-md-block">
	<div class="text-center d-none d-md-inline">
		<button class="rounded-circle border-0" id="sidebarToggle"></button>
	</div>
</ul>
