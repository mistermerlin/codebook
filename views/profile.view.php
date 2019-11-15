
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
				    			$user->twitter ? '<i class="fab fa-twitter"></i> <a href = "//twitter.com/'. /*e*/$user->twitter. '">@' . $user->twitter .'</a><br/>' : '';
				    		 ?>
				    		 <?=
				    			$user->github ? '<i class="fab fa-github"></i> <a href = "//github.com/'. /*e*/($user->github). '">' . $user->github .'</a><br/>' : '';
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
	<div class="col-md-6">
			<div class="card mb-3">
				  <h4 class="card-header">
				  	Compléter mon profil
				  </h4>
				  <div  class="card-body">
					 <form  method="post">
					  <fieldset>

						 <div class="row">
							<div class="col-md-6">
								<div class="form-group">
									<label for="name" class="col-form-label">Nom</label>
									  <input type="text" class="form-control" id="name" placeholder="name" name="name"
									  value="<?= get_input('name')? : $user->name ?>" >
								</div>

								<div class="form-group">
									<label for="country" class="col-form-label">Pays*</label>
									<input type="text" class="form-control" id="country" name="country"placeholder="pays"
									value="<?= get_input('country')? : $user->country ?>" required = "required">
								</div>

								<div class="form-group">
									<label for="twitter" class="col-form-label">Twitter</label>
									<input type="text" class="form-control" id="twitter" placeholder="twitter" name="twitter"
									value="<?= get_input('twitter')? : $user->twitter ?>" >

								</div>
							</div>


							<div class="col-md-6">
								<div class="form-group">
									<label for="city" class="col-form-label" name="city">Ville</label>

									<input type="text" class="form-control" id="city" placeholder="ville" name="city"
									value="<?= get_input('city')? : $user->city ?>"required = "required">

								</div>

								<div class="form-group">
								  <label for="staticEmail" class="col-form-label">Sexe*</label>
									<select class="form-control" id="sexe" name="sexe" value="<?= $user->sexe ?>">
										 <option value="H" <?= $user->sexe == "H"? 'selected' : ''; ?> >
								    		Homme
								    	</option>
										 <option value="F" <?= $user->sexe == "F"? 'selected' : ''; ?>>
										 Femme
										</option>

									</select>

								 </div>

								<div class="form-group">
								  <label for="staticEmail" class="col-form-label">Github</label>

									 <input type="text" class="form-control" id="github" placeholder="Github" name="github"
									 value="<?= get_input('github')? : $user->github ?>">

								</div>
							</div>

						</div>

							 <div class="form-check">
								 <label class="form-check-label"> </label>
								 <input class="form-check-input" type="checkbox" id="available_for_hiring", name="available_for_hiring"
								 <?= $user->available_for_hiring ? "checked" : "" ?> >
											          Disponible pour emploi ?

     						</div>
							<br>
     					<div class="form-group">
							<label for="bio">Biographie*</label>
							 <textarea class="form-control" id="bio" rows="10" cols="10" name="bio"
							 value="<?= get_input('bio') ? : $user->bio ;?>"
							 placeholder = "Je suis amoureux de la programmation" required = "required" >
								 <?= $user->bio ?>
							 </textarea>
    						</div>

    										 <button type="submit" class="btn btn-primary" id="update" name="update">Modifier</button>

								  </fieldset>
							</form>
				  </div>


	</div>

	</div>



	</div>
</div>

<?php  require("partials/_footer.php"); ?>
