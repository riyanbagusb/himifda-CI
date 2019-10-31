<div class="container-fluid">
	<div class="row">
		<div class="col-12">
			<?= $this->session->flashdata('faq'); ?>
		</div>
		<div class="col-md-10">
			<h1 class="h3 mb-2 text-gray-800">Visi & Misi</h1>
			<p class="mb-4">Visi & Misi Himifda periode saat ini.</p>
		</div>
		<div class="card shadow mb-4 col-12 p-0">
			<div class="card-header py-3">
				<h6 class="m-0 font-weight-bold text-primary">Visi</h6>
			</div>
			<div class="card-body">
				<div class="table-responsive">
					<table class="table" id="dataTable" width="100%" cellspacing="0">
						<thead>
							<tr class="text-center">
								<th>Visi</th>
								<th>Aksi</th>
							</tr>
						</thead>
						<tbody>
							<?php foreach ($visi as $visi) : ?>
								<tr>
									<td><?= $visi->visi; ?></td>
									<td align="center">
										<a href="<?= base_url() ?>admin/visi_misi/<?= $visi->id; ?>" data-toggle="modal" data-target="#modalFaq"><badge class="badge badge-warning text-white mb-1 pl-3 pr-3 modalUbahFaq" data-id="<?= $visi->id; ?>">Ubah</badge></a>
										<a class="badge badge-danger mb-1 pl-3 pr-3" href="<?= base_url() ?>admin/deleteVisi/<?= $visi->id; ?>">Hapus</a>
									</td>
								</tr>
							<?php endforeach; ?>
						</tbody>
					</table>
				</div>
			</div>
		</div>
		<div class="card shadow mb-4 col-12 p-0">
			<div class="card-header py-3">
				<h6 class="m-0 font-weight-bold text-primary">Misi</h6>
			</div>
			<div class="card-body">
				<div class="table-responsive">
					<table class="table" id="dataTable" width="100%" cellspacing="0">
						<thead>
							<tr class="text-center">
								<th>Misi</th>
								<th>Aksi</th>
							</tr>
						</thead>
						<tbody>
							<?php foreach ($misi as $misi) : ?>
								<tr>
									<td><?= $misi->misi; ?></td>
									<td align="center">
										<a href="<?= base_url() ?>admin/visi_misi/<?= $misi->id; ?>" data-toggle="modal" data-target="#modalFaq"><badge class="badge badge-warning text-white mb-1 pl-3 pr-3 modalUbahFaq" data-id="<?= $misi->id; ?>">Ubah</badge></a>
										<a class="badge badge-danger mb-1 pl-3 pr-3" href="<?= base_url() ?>admin/deleteVisi/<?= $misi->id; ?>">Hapus</a>
									</td>
								</tr>
							<?php endforeach; ?>
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
</div>