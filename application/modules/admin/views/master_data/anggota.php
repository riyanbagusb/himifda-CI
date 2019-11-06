<div class="container-fluid">
	<div class="row">
		<div class="col-12">
			<?= $this->session->flashdata('message'); ?>
		</div>
		<div class="col-md-10">
			<h1 class="h3 mb-2 text-gray-800">Anggota</h1>
			<p class="mb-4">Data anggota resmi Himifda.</p>
		</div>
		<div class="col-md-2 align-self-end mb-4 d-flex justify-content-md-end">
			<a href="#" class="btn btn-primary tambah" data-toggle="modal" data-target="#modal">Tambah</a>
		</div>
		<div class="card shadow mb-4 col-12 p-0">
			<div class="card-header py-3">
				<h6 class="m-0 font-weight-bold text-primary">Anggota Resmi</h6>
			</div>
			<div class="card-body">
				<div class="table-responsive">
					<table class="table table-bordered table-sm-responsive dataTable" id="dataTable" width="100%" cellspacing="0">
						<thead>
							<tr class="text-center">
								<th class="no-sort">No</th>
								<th>NIM</th>
								<th>Nama</th>
								<th>Status</th>
								<th class="no-sort">Aksi</th>
							</tr>
						</thead>
						<tbody>
							<?php
							$no=1;
							foreach ($anggota as $anggota) : ?>
								<tr>
									<td class="text-center"><?= $no++; ?>.</td>
									<td><?= $anggota->nim; ?></td>
									<td><?= $anggota->nama; ?></td>
									<td class="text-center"><span class="badge badge-pill badge-primary">Aktif</span></td>
									<td align="center">
										<a href="" data-toggle="modal" data-target="#modal"><span class="badge badge-warning text-white mb-1 pl-3 pr-3 ubah" data-id="<?= $anggota->nim; ?>">Ubah</span></a>
										<a href="" data-toggle="modal" data-target="#modal"><span class="badge badge-danger text-white mb-1 pl-3 pr-3 hapus" data-id="<?= $anggota->nim; ?>">Hapus</span></a>
									</td>
								</tr>
							<?php endforeach; ?>
						</tbody>
					</table>
				</div>
			</div>
			<div class="modal fade" id="modal" tabindex="-1" role="dialog" aria-labelledby="modal" aria-hidden="true">
				<div class="modal-dialog" role="document">
					<div class="modal-content">
						<div class="modal-header">
							<h5 class="modal-title"><span class="label-judul"></span> Anggota</h5>
							<button type="button" class="close" data-dismiss="modal" aria-label="Close">
								<span aria-hidden="true">&times;</span>
							</button>
						</div>
						<form action="<?= base_url('admin/anggota/tambah') ?>" method="post">
							<div class="modal-body">
								<div class="form-group">
									<label for="pertanyaan">NIM</label>
									<input type="text" class="form-control" id="nim" name="nim" autocomplete="off" required minlength="10" maxlength="10">
								</div>
								<div class="form-group">
									<label for="jawaban">Nama Lengkap</label>
									<input type="text" class="form-control" id="nama" name="nama" autocomplete="off" required>
								</div>
							</div>
							<div class="modal-footer">
								<button type="submit" class="btn btn-primary">Tambah</button>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
