<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no">
		<title>Login | Himifda</title>
		<meta name="description" content="Login Himpunan Mahasiswa Informatika Universitas Darma Persada">
		<meta name="keywords" content="Himifda, Himpunan, Mahasiswa, Informatika, Universitas, Darma, Persada, Unsada, organisasi">
		<link rel="icon" href="<?= base_url(); ?>assets/images/favicon.ico" type="image/gif">
		<link rel="stylesheet" href="<?= base_url(); ?>assets/css/sb-admin-2.min.css">
		<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/custom.css">
	</head>
	<body class="bg-primary">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-lg-6">
					<div class="card o-hidden border-0 shadow-lg my-5">
						<div class="card-body p-0">
							<div class="row">
								<div class="col-lg">
									<div class="p-5">
										<div class="text-center">
											<h1 class="h4 text-gray-900 mb-4">Login Himifda</h1>
										</div>
										<?= $this->session->flashdata('login'); ?>
										<form class="user" method="post" action="<?= base_url('admin'); ?>">
											<div class="form-group">
												<input type="text" class="form-control form-control-user" name="nim" placeholder="NIM" value="<?= set_value('nim'); ?>">
													<?= form_error('nim', '<small class="text-danger pl-3">', '</small>'); ?>
											</div>
											<div class="form-group">
												<input type="password" class="form-control form-control-user" name="password" placeholder="Password">
													<?= form_error('password', '<small class="text-danger pl-3">', '</small>'); ?>
											</div>
											<button type="submit" class="btn btn-primary btn-user btn-block">Login</button>
										</form>
										<hr>
										<div class="text-center">
											<a class="small" href="forgot-password.html">Forgot Password?</a>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</body>
</html>