</div>
</div>
<footer>
	<div class="container-fluid pb-5 bg-primary">
		<div class="container text-center">
		<br>
			<div class="row">
				<div class="col-lg-6 text-white">
					<h1>HIMIFDA OFFICE</h1>
					<p>4th Floor of The Darma Persada University Engineering Faculty Building, Radin Inten II Street, Pondok Kelapa, Duren Sawit, East Jakarta, Jakarta Capital City 13450</p>
					<hr>
						<div class="embed-responsive embed-responsive-16by9" id="map-location">
							<iframe class="embed-responsive-item" src="https://www.google.co.id/maps/embed?pb=!1m18!1m12!1m3!1d3966.258733457552!2d106.92171451412116!3d-6.229581095490535!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e698d7e6240a61f%3A0xc950c12bfd03e363!2sHimpunan+Mahasiswa+Informatika+Universitas+Darma+Persada!5e0!3m2!1sid!2sid!4v1544601542972" width="400" height="300" frameborder="0" allowfullscreen></iframe>
						</div>
					<br>
				</div>
				<div class="card col-lg-6" id="kritik-saran-radius">
					<br>
					<h6>HERE YOU CAN PROVIDE A CRITICISM AND SUGGESTIONS FOR INFORMATICS ENGINEERING OF DARMA PERSADA UNIVERSITY</h6>
					<br>
					<form action="" class="text-justify" method="post">
						<div class="form-group">
							<label for="email">Email</label>
							<input type="email" class="form-control <?php if (form_error('email')) : ?>border-danger<?php endif ?>" id="email" name="email" placeholder="Enter your email" value="<?= set_value('email') ?>">
							<?php if (validation_errors()) : ?>
								<small class="text-danger">
									<?= form_error('email'); ?>							
								</small>
							<?php endif ?>
						</div>
						<div class="form-group">
							<label for="kritik">Criticism</label>
							<textarea type="text" class="form-control <?php if (form_error('kritik')) : ?>border-danger<?php endif ?>" rows="3" name="kritik" placeholder="Enter your critics" required><?= set_value('kritik') ?></textarea>
							<?php if (validation_errors()) : ?>
								<small class="text-danger">
									<?= form_error('kritik'); ?>							
								</small>
							<?php endif ?>
						</div>
						<div class="form-group">
							<label for="saran">Suggestions</label>
							<textarea type="text" class="form-control <?php if (form_error('saran')) : ?>border-danger<?php endif ?>" rows="3" name="saran" placeholder="Enter your Suggestions" required><?= set_value('saran') ?></textarea>
							<?php if (validation_errors()) : ?>
								<small class="text-danger">
									<?= form_error('saran'); ?>							
								</small>
							<?php endif ?>
						</div>
						<button type="submit" name="submit" value="Create" class="btn btn-primary">Submit</button>
					</form>
					<br>
				</div>
			</div>
			<br>
			<hr>
			<span class="text-white">© Copyright <?= date('Y')  ?> | Himpunan Mahasiswa Informatika Universitas Darma Persada. All Rights Reserved.</span>
			<a class="text-white" href="#">Back to top</a>
			<hr>
		</div>
	</div>
</footer>
<script src="<?= base_url('assets/modules/jquery.min.js'); ?>"></script>
	<script src="<?= base_url('assets/modules/popper.min.js'); ?>"></script>
	<script src="<?= base_url('assets/modules/bootstrap/js/bootstrap.min.js'); ?>"></script>
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-131173714-1"></script>
	<script>
		window.dataLayer = window.dataLayer || [];
		function gtag(){dataLayer.push(arguments);}
		gtag('js', new Date());
		gtag('config', 'UA-131173714-1');
	</script>
</body>