
<div class="card full-radius">
	<div class="card-header bg-light top-radius">
		<h5 class="text-center"><?= $event->judul ?></h5>
	</div>
	<div class="card-body row">
		<?php if ($event->gambar): ?>
			<div class="col-12 text-center">
			<img class="card-img-top" src="<?= base_url(); ?>assets/images/event/<?= $event->gambar ?>" alt="Event Image" style="max-height: 300px; width: auto;">
			</div>
		<?php endif ?>
		<p class="card-text text-justify my-2 col-12"><?= $event->isi ?></p>
	</div>
	<div class="card-footer text-center">
		<small class="text-muted"><i class="fas fa-user"></i> <?= $event->nama_lengkap ?>,</small>
		<small class="text-muted">Updated at <?= $event->tanggal ?></small>
	</div>
</div>