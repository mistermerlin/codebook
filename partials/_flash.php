<?php if (isset($_SESSION['notification']['message'])): ?>
	<div class="container">
	<div class="col-md-6 alert alert-<?= $_SESSION['notification']['type'] ?>">
		  <button type="button" class="close" data-dismiss="alert">&times;</button>
		  <h4><?=  $_SESSION['notification']['message'] ?></h4>
	</div>
	</div>
<?php $_SESSION['notification'] = []; ?>
<?php endif; 