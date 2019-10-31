<div class="card full-radius">
	<div class="card-header bg-light top-radius">
		<h5 class="text-center">Organization Structure</h5>
	</div>
	<div class="container">
		<div class="row mt-3">
			<?php foreach ($anggota as $anggota) : ?>
				<?php $tes = substr($anggota->kode_bidang, 0, 5);
				if ($tes == "KABID"): ?>
				<div class="card-group col-md-12 pt-5">
				<?php elseif ($tes == "KETUA" || $tes == "WAKIL"): ?>
				<div class="card-group col-md-12">
				<?php else: ?>
				<div class="card-group col-md-6">
				<?php endif ?>
					<div class="card mb-3 full-radius">
						<div class="row no-gutters">
							<div class="col-md-4 p-4 text-center">
								<?php if ($anggota->foto): ?>
								<img src="<?= base_url(); ?>assets/images/profile/<?= $anggota->foto ?>" class="card-img-top img-fluid rounded-circle" alt="..." style="max-width: 120px; min-height: 120px">
								<?php else: ?>
								<img src="<?= base_url(); ?>assets/images/profile/default.png" class="card-img-top rounded-circle" alt="..." style="max-width: 120px;">
								<?php endif ?>	
							</div>
							<div class="col-md-8">
								<div class="card-body">
									<h5 class="card-title"><?= $anggota->nama_lengkap ?></h5>
									<p class="card-text"><?= $anggota->nim ?></p>
									<p class="card-text"><?= $anggota->jabatan ?></p>
									<p class="card-text"><small class="text-muted">Menjabat Periode <?= $anggota->periode ?></small></p>
								</div>
							</div>
						</div>
					</div>
				</div>
			<?php endforeach; ?>
		</div>
	</div>
</div>