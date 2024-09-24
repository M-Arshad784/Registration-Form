<?php

if (isset($_GET['success'])) {
	?>
	<div class="alert alert-success alert-dismissible" role="alert" style="color: #fff; background-color: #28a745;border-color: #23923d;">
		<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
		<strong>Success!</strong>
		<?php echo base64_decode($_GET['success']);?>
	</div>

	<?php
}

else if (isset($_GET['error'])) {

	?>


	<div class="alert alert-danger alert-dismissible" style="color: #fff; background-color: #dc3545; border-color: #dc3545;">
		<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
		<h5><i class="icon fas fa-ban"></i> Failed!</h5>
		<?php echo base64_decode($_GET['error']);?>
	</div>

	<?php
}

?>