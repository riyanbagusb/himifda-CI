<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no">
		<title>404 | Himifda</title>
		<meta name="description" content="404">
		<meta name="keywords" content="Himifda, Himpunan, Mahasiswa, Informatika, Universitas, Darma, Persada, Unsada, organisasi">
		<link rel="icon" href="<?= base_url('assets/images/favicon.ico'); ?>" type="image/gif">
		<link rel="stylesheet" href="<?php echo base_url('assets/modules/bootstrap/css/bootstrap.min.css'); ?>">
		<link rel="stylesheet" href="<?= base_url('assets/css/sb-admin-2.min.css'); ?>">
		<link rel="stylesheet" href="<?php echo base_url('assets/css/custom.css'); ?>">
	</head>
	<body id="page-top" style="background-color: #f8f9fc">
		<div id="wrapper">
			<div id="content-wrapper" class="d-flex flex-column">
				<div id="content">
					<div class="container-fluid mt-5">
						<div class="text-center">
							<div class="error mx-auto" data-text="404">404</div>
							<p class="lead text-gray-800 mb-5">Page Not Found</p>
							<p class="text-gray-500 mb-0">It looks like you found a glitch in the matrix...</p>
							<div class="mt-5">
								<a href="<?php echo base_url(); ?>">
									<button class="btn btn-outline-primary mt-5 mb-2 p-3" style="border-radius: 5em">Back to Home</button>
								</a>
							</div>
						</div>
					</div>
					<footer class="sticky-footer bg-white fixed-bottom">
					<div class="container my-auto">
						<div class="copyright text-center my-auto">
							<span>Copyright &copy; Himifda 2019</span>
						</div>
					</div>
				</footer>
				</div>
			</div>
		</div>
		<a class="scroll-to-top rounded" href="#page-top">
			<i class="fas fa-angle-up"></i>
		</a>
	</body>
	<script src="<?= base_url('assets/jquery.min.js') ?>"></script>
	<script src="<?= base_url('assets/bootstrap/js/bootstrap.bundle.min.js') ?>"></script>
	<script src="<?= base_url('assets/jquery-easing/jquery.easing.min.js') ?>"></script>
	<script src="<?= base_url('assets/js/sb-admin-2.min.js') ?>"></script>
</html>