<div class="card full-radius">
	<div class="card-header bg-light top-radius">
		<h5 class="text-center">Vision & mission</h5>
	</div>
	<div class="container">
		<div class="card mt-3 mb-3 full-radius">
			<h5 class="card-header top-radius">Vision</h5>
			<div class="card-body">
				<?php foreach ($visi as $visi) : ?>
					<li class="card-text pb-1"><?= $visi->visi; ?></li>
				<?php endforeach ?>
			</div>
		</div>
		<div class="card mb-3 full-radius">
			<h5 class="card-header top-radius">Mission</h5>
			<div class="card-body">
				<?php foreach ($misi as $misi) : ?>
					<li class="card-text pb-1"><?= $misi->misi; ?></li>
				<?php endforeach ?>
			</div>
		</div>
	</div>
</div>