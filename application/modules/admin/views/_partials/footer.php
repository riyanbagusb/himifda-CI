					</div>
					<footer class="sticky-footer bg-white">
						<div class="container my-auto">
							<div class="copyright text-center my-auto">
								<span>Copyright &copy; Himifda 2019</span>
							</div>
						</div>
					</footer>
				</div>
			</div>
			<a class="scroll-to-top rounded" href="#page-top">
				<i class="fas fa-angle-up"></i>
			</a>
			<div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
				<div class="modal-dialog" role="document">
					<div class="modal-content">
						<div class="modal-header">
							<h5 class="modal-title" id="exampleModalLabel">Logout</h5>
							<button class="close" type="button" data-dismiss="modal" aria-label="Close">
								<span aria-hidden="true">×</span>
							</button>
						</div>
						<div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
						<div class="modal-footer">
							<button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
							<a class="btn btn-primary" href="<?= base_url('admin/logout'); ?>">Logout</a>
						</div>
					</div>
				</div>
			</div>
			<?php if ($title == "Login | Himifda") { ?>
			<?php } else { ?>
			<script src="<?= base_url('assets/modules/jquery/jquery.min.js'); ?>"></script>
			<script src="<?= base_url('assets/modules/jquery-easing/jquery.easing.min.js'); ?>"></script>
			<script src="<?= base_url('assets/modules/datatables/jquery.dataTables.min.js'); ?>"></script>
			<script src="<?= base_url('assets/modules/bootstrap/js/bootstrap.bundle.min.js'); ?>"></script>
			<script src="<?= base_url('assets/modules/datatables/dataTables.bootstrap4.js'); ?>"></script>
			<script src="<?= base_url('assets/modules/datepicker/js/bootstrap-datepicker.min.js'); ?>"></script>
			<script src="<?= base_url('assets/js/sb-admin-2.min.js'); ?>"></script>
			<script src="<?= base_url('assets/js/javascript.js'); ?>"></script>
			<?php } ?>
		</div>
	</div>
</body>