<div class="card full-radius">
	<div class="card-header bg-light top-radius">
		<h5 class="text-center">Events of Himifda</h5>
	</div>
	<div class="container">
		<div class="card-deck justify-content-center mt-3">
			<?php foreach ($event as $event) : ?>
				<?php if ($event->status == 'published'): ?>
					<div class="col-lg-3">
						<div class="card text-center full-radius">
							<a href="<?= base_url(); ?>detail_event/<?= $event->slug ?>" style="text-decoration: none; color: black;"><h5 class="card-header top-radius"><?= $event->judul ?></h5></a>
							<?php if ($event->gambar): ?>
								<img class="card-img-top" src="<?= base_url(); ?>assets/images/event/<?= $event->gambar ?>" alt="Card image cap">
							<?php endif ?>
							<div class="card-body">
								<p class="card-text text-justify"><?= $event->kutipan ?>...</p>
								<a href="<?= base_url(); ?>detail_event/<?= $event->slug ?>" class="btn-sm btn-primary text-decoration-none">Read More</a>
							</div>
							<div class="card-footer">
								<small class="text-muted">Updated at <?= $event->tanggal ?></small>
							</div>
						</div>
						<br>
					</div>
				<?php endif ?>
			<?php endforeach; ?>
		</div>
		<br>
		<nav aria-label="Page navigation">
			<ul class="pagination justify-content-center">
				<?= $pagination; ?>
			</ul>
		</nav>
	</div>
</div>