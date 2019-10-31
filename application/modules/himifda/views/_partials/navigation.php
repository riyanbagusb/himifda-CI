<body>
	<nav class="navbar navbar-expand-md navbar-dark fixed-top font-weight-bold bg-primary">
		<div class="container">
			<a class="navbar-brand" href="<?= base_url(); ?>">
				<img src="<?= base_url('assets/images/himifda-24.png'); ?>" class="mr-1">
				<span>HIMIFDA</span>
			</a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#himifdaNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="himifdaNav">
				<ul class="navbar-nav ml-auto">
					<li>
						<a class="nav-link" href="<?= base_url(); ?>">Home</a>
					</li>
					<li class="nav-item dropdown">
						<a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Profile</a>
						<div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
							<a class="dropdown-item" href="<?= base_url('visi_misi'); ?>">Vision &amp; Mission </a>
							<a class="dropdown-item" href="<?= base_url('struktur_organisasi'); ?>">Organization Structure </a>
						</div>
					</li>
					<li>
						<a class="nav-link" href="<?= base_url('event'); ?>">Event</a>
					</li>
					<li class="nav-item dropdown">
						<a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Academic</a>
						<div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
							<a class="dropdown-item" href="<?= base_url('modul'); ?>">Download Modules</a>
							<a class="dropdown-item" href="http://portal.unsada.ac.id">Academic Portal</a>
						</div>
					</li>
					<li>
						<a class="nav-link" href="<?= base_url('faq'); ?>">FAQ</a>
					</li>
				</ul>
			</div>
		</div>
	</nav>
	<div class="container pt-5">
		<div class="pt-4 pb-3">
		<?php if ($this->session->flashdata('kritik_saran')) : ?>
			<div class="alert alert-success alert-dismissible fade show" role="alert">
				Your criticism and suggestions has been <strong><?= $this->session->flashdata('kritik_saran'); ?></strong>, thank you for supporting us.
				<button type="button" class="close" data-dismiss="alert" aria-label="close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
		<?php endif ?>
