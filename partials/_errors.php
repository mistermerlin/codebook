<?php 
	
	if (isset($errors) && count($errors) != 0) {

	echo '<div class="container"><div class="alert alert-dismissible alert-danger col-md-6">
		  <button type="button" class="close" data-dismiss="alert">&times;</button>';
  	
  	foreach ($errors as $error) {
  		
  		echo $error .'<br />';
  	}
       echo '</div></div>';

	}

 ?>