<div class="container-fluid">
	<div class="row">
		<div class="col-12">
			<?= $this->session->flashdata('faq'); ?>
		</div>
		<div class="col-md-10">
			<h1 class="h3 mb-2 text-gray-800">Frequently Asked Questions</h1>
			<p class="mb-4">Pertanyaan paling sering ditanyakan mengenai himifda.</p>
		</div>
		<div class="col-md-2 align-self-end mb-4 d-flex justify-content-md-end">
			<a href="#" class="btn btn-primary modalTambahFaq" data-toggle="modal" data-target="#modalFaq">Tambah</a>
		</div>
		<div class="card shadow mb-4 col-12 p-0">
			<div class="card-header py-3">
				<h6 class="m-0 font-weight-bold text-primary">Frequently Asked Questions</h6>
			</div>
			<div class="card-body">
				<div class="table-responsive">
					<table class="table table-bordered tigaKolom" id="dataTable" width="100%" cellspacing="0">
						<thead>
							<tr class="text-center">
								<th>No</th>
								<th>Pertanyaan</th>
								<th>Jawaban</th>
								<th>Aksi</th>
							</tr>
						</thead>
						<tbody>
							<?php
							$no=1;
							foreach ($faq as $faq) : ?>
								<tr>
									<td class="text-center"><?= $no++; ?>.</td>
									<td><?= $faq->pertanyaan; ?></td>
									<td><?= $faq->jawaban; ?></td>
									<td align="center">
										<a href="<?= base_url() ?>admin/faq/<?= $faq->id; ?>" data-toggle="modal" data-target="#modalFaq"><badge class="badge badge-warning text-white mb-1 pl-3 pr-3 modalUbahFaq" data-id="<?= $faq->id; ?>">Ubah</badge></a>
										<a class="badge badge-danger mb-1 pl-3 pr-3" href="<?= base_url() ?>admin/deleteFaq/<?= $faq->id; ?>">Hapus</a>
									</td>
								</tr>
							<?php endforeach; ?>
						</tbody>
					</table>
				</div>
			</div>
			<div class="modal fade" id="modalFaq" tabindex="-1" role="dialog" aria-labelledby="modalFaq" aria-hidden="true">
				<div class="modal-dialog" role="document">
					<div class="modal-content">
						<div class="modal-header">
							<h5 class="modal-title" id="modalFaqLabel"></h5>
							<button type="button" class="close" data-dismiss="modal" aria-label="Close">
								<span aria-hidden="true">&times;</span>
							</button>
						</div>
						<form class="formFaq" action="<?= base_url('admin/addFaq') ?>" method="post">
							<input type="hidden" id="id" name="id">
							<div class="modal-body">
								<div class="form-group">
									<label for="pertanyaan">Pertanyaan</label>
									<input type="text" class="form-control" id="pertanyaan" name="pertanyaan" autocomplete="off" required minlength="10">
								</div>
								<div class="form-group">
									<label for="jawaban">Jawaban</label>
									<input type="text" class="form-control" id="jawaban" name="jawaban" autocomplete="off" required minlength="10">
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