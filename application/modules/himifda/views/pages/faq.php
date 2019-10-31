<div class="card full-radius">
	<div class="card-header bg-light top-radius">
		<h5 class="text-center">Frequently Asked Questions</h5>
	</div>
	<div class="container mt-3 mb-2">
		<div class="accordion" id="accordionExample">
			<?php foreach ($faq as $faq) : ?>
			<div class="card-header faq-radius" id="heading-<?= $faq->id; ?>">
				<button class="btn btn-link font-weight-bold" type="button" data-toggle="collapse" data-target="#collapse-<?= $faq->id; ?>" aria-expanded="true" aria-controls="collapse-<?= $faq->id; ?>" id="faq-accordion"><i class="fas fa-question-circle"></i> <?= $faq->pertanyaan; ?></button>
			</div>
			<div class="container mb-2">
				<div id="collapse-<?= $faq->id; ?>" class="collapse" aria-labelledby="heading-<?= $faq->id; ?>" data-parent="#accordionExample">
					<div class="card-body"><?= $faq->jawaban; ?></div>
				</div>
			</div>
			<?php endforeach ?>
		</div>
	</div>
</div>