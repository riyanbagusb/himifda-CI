<div class="container-fluid">
	<div class="row">
		<div class="col-12">
			<?= $this->session->flashdata('faq'); ?>
			<?= $this->session->flashdata('user'); ?>
		</div>
		<div class="col-md-10">
			<h1 class="h3 mb-2 text-gray-800">Pengaturan</h1>
			<p class="mb-4">Konfigurasi Website Himifda.</p>
		</div>
		<div class="card shadow mb-4 col-12 p-0">
			<div class="card-header py-3">
				<h6 class="m-0 font-weight-bold text-primary">Periode Kepengurusan Yang Menjabat Saat Ini</h6>
			</div>
			<div class="card-body">
				<div class="table-responsive">
					<table class="table" id="dataTable" width="100%" cellspacing="0">
						<thead>
							<tr class="text-center">
								<th>Periode</th>
								<th>Status</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td class="text-center"><?= $periodeAktif->periode; ?></td>
								<td class="text-center"><span class="badge badge-success"><?= $periodeAktif->status; ?></span></td>
							</tr>
						</tbody>
					</table>
				</div>
				<form class="formPeriode" action="<?= base_url('admin/updatePeriode'); ?>" method="post">
					<div class="row">
						<div class="col-12">
							<select id="id" name="id" class="form-control">
								<?php foreach ($periode as $periode) : ?>
									<option value="<?= $periode->id; ?>"><?= $periode->periode; ?></option>
								<?php endforeach; ?>
							</select>
						</div>
						<div class="col-12 text-center mt-4">
							<button type="submit" class="btn btn-primary">Ubah</button>
						</div>
					</div>
				</form>
			</div>
		</div>
		<div class="card shadow mb-4 col-12 p-0">
			<div class="card-header py-3">
				<h6 class="m-0 font-weight-bold text-primary">User</h6>
			</div>
			<div class="card-body">
				<div class="table-responsive">
					<table class="table" id="dataTable" width="100%" cellspacing="0">
						<thead>
							<tr class="text-center">
								<th>Nama</th>
								<th>NIM</th>
								<th>Level</th>
								<th>Aksi</th>
							</tr>
						</thead>
						<tbody>
							<?php foreach ($user as $user) : ?>
								<tr>
									<td class="text-center"><?= $user->nama_lengkap; ?></td>
									<td class="text-center"><?= $user->nim; ?></td>
									<td class="text-center"><?= $user->role; ?></td>
									<td class="text-center"><a class="badge badge-danger text-white" href="<?= base_url('admin/deleteUser').'/'. $user->id; ?>">Hapus</a></td>
								</tr>
							<?php endforeach; ?>
						</tbody>
					</table>
				</div>
				<form class="formPeriode" method="post">
					<div class="row">
						<div class="col-12">
							<div class="form-group">
								<label for="nama_lengkap">Nama Lengkap</label>
								<input type="text" class="form-control" id="nama_lengkap" name="nama_lengkap" autocomplete="off" value="<?= set_value('nama_lengkap'); ?>">
								<?= form_error('nama_lengkap', '<small class="text-danger">', '</small>'); ?>
							</div>
							<div class="form-group">
								<label for="nim">NIM</label>
								<input type="text" class="form-control" id="nim" name="nim" autocomplete="off" value="<?= set_value('nim'); ?>">
								<?= form_error('nim', '<small class="text-danger">', '</small>'); ?>
							</div>
							<div class="form-group">
								<label for="role_id">Level</label>
								<select id="role_id" name="role_id" class="form-control">
								<?php foreach ($role as $role) : ?>
									<option value="<?= $role->id; ?>"><?= $role->role; ?></option>
								<?php endforeach; ?>
								</select>
							</div>
							<div class="form-group">
								<label for="password">Password</label>
								<input type="password" class="form-control" id="password" name="password" autocomplete="off">
							</div>
							<div class="form-group">
								<label for="password2">Confirm Password</label>
								<input type="password" class="form-control" id="password2" name="password2" autocomplete="off">
								<?= form_error('password2', '<small class="text-danger">', '</small>'); ?>
							</div>
						</div>
						<div class="col-12 text-center mt-4">
							<button type="submit" class="btn btn-primary">Tambah</button>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>