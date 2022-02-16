<!-- Footer -->
</div>


<footer class="sticky-footer bg-white shadow">
	<div class="container my-auto">
		<div class="copyright text-center my-auto">
			<span>Copyright &copy; Jami-Assalam 2021 - <?= date('Y'); ?></span>
		</div>
	</div>
</footer>

<a class="scroll-to-top rounded" href="#page-top">
	<i class="fas fa-angle-up"></i>
</a>
<script>
	const BASE_URL = "<?= base_url() ?>"
</script>
<!-- Boostrap Core JavaScript -->
<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script> -->
<script src="<?= base_url('assets/vendor/jquery/jquery.min.js'); ?>"></script>
<script src="<?= base_url('assets/vendor/bootstrap/js/bootstrap.bundle.min.js'); ?>"></script>

<!-- Core Plugin Javascript -->
<script src="<?= base_url('assets/vendor/jquery-easing/jquery.easing.min.js'); ?>"></script>

<!-- Costom Script for all page -->
<script src="<?= base_url('assets/js/sb-admin-2.min.js'); ?>"></script>
<script src="<?= base_url('assets/js/artikel.js'); ?>"></script>

<!-- Page level plugin -->
<script src="<?= base_url('assets/vendor/chart.js/Chart.min.js') ?>"></script>
<script src="<?= base_url('assets/vendor/datatables/jquery.dataTables.min.js'); ?>"></script>
<script src="<?= base_url('assets/vendor/datatables/dataTables.bootstrap4.min.js'); ?>"></script>
<script src="<?= base_url('assets/js/demo/datatables-demo.js'); ?>"></script>


<!-- Sweet Alert -->
<script src="<?= base_url('assets/js/dist/sweetalert2.all.min.js'); ?>"></script>
<script src="<?= base_url('assets/js/new.js'); ?>"></script>

<!-- Fancybox -->
<script src="https://cdn.jsdelivr.net/npm/@fancyapps/ui@4.0.12/dist/fancybox.umd.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@fancyapps/ui@4.0.12/dist/fancybox.esm.js"></script>

<!-- Dark Mode Swicth -->
<script src="<?= base_url('assets/dark/dark-mode-switch.min.js');  ?>"></script>

</body>

</html>