
<?php

?>

<div class="container">
	<br><br>
	<div class="row">
		<div class="col-md-6">
				<div class="card mb-3">
				  <h4 class="card-header">Profil de <?= $user->pseudo ?></h4>
				  <div class="card-body">
				    <img width="100" height="100" src="<?= get_avatar_url($user->email) ?>"
				    alt="Image de profil de <?= $user->pseudo ?>" >

				    <div class="row">
				    	<div class="col-sm-6"> <br>
						  <strong><?= $user->pseudo ?>:</strong>
						  <a href="mailto<?= $user->email ?>"><?= $user->email ?></a><br>
						   <?=
				    			$user->city && $user->country ? '<i class="fas fa-location-arrow"></i>&nbsp;' .$user->city.'-'.$user->country : '';
				    		 ?>
				    		 <br><a href="https://www.google.com/maps?q=<?= $user->city.' '.$user->country ?>" target= "_blank">
				    		 Voir sur Google Maps
				    		</a>
				    	</div>
				    	<div class="col-sm-6">
				    		<?=
				    			$user->twitter ? '<i class="fab fa-twitter"></i> <a href = "//twitter.com/'. e($user->twitter). '">@' . $user->twitter .'</a><br/>' : '';
				    		 ?>
				    		 <?=
				    			$user->github ? '<i class="fab fa-github"></i> <a href = "//github.com/'. e($user->github). '">' . $user->github .'</a><br/>' : '';
				    		 ?>
				    		  <?=
				    			$user->sexe == "H"? '<i class="fas fa-male"></i>' : '<i class="fas fa-female"></i>';
				    		 ?>
				    		 <?=
				    			$user->available_for_hiring ? 'Disponible pour emploie' : 'Non disponible pour emploie';
				    		 ?>

				    </div>
				    </div>

				    <div class="row">
				    	<div class="card-header col-md-12">

				    		<h5>La petite bio de <?= $user->name?> </h5>
				    		<p>
				    			<?=
				    				$user->bio ? nl2br(e($user->bio)) : 'Aucune bio pour le moment...';
				    			 ?>
				    		</p>
				    	</div>
				    </div>

				  </div>
				   <div class="card-body">
				    <p class="card-text">0 ami(s)</p>
				  </div>

				</div>
	</div>
	
	</div>



	</div>
</div>

<?php  require("partials/_footer.php"); ?>
