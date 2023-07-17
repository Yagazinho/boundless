<script src="../assets/js/jquery-3.js"></script>
<script src="../assets/js/swal.js"></script>
<script src="../assets/bootstrap-4.5.2/js/bootstrap.min.js"></script>
<script src="../assets/js/index.js"></script>
<script type="text/javascript">
	<?php if($emsg || $smsg): ?>
	$(document).ready(function() {
		swal({
			text: "<?= $emsg.$smsg ?>",
			icon: "<?php if($smsg){echo 'success';}elseif($emsg){echo 'error';} ?>",
			buttons: false,
			timer: 5000
		})
	})
	<?php endif ?>

</script>
</body>

</html>
