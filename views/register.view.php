<?php $title = "Inscription "; ?>
<?php //require("includes/constants.php"); ?>
<?php //include("partials/_header.php"); ?>

<div id="main-content">
	<h1 class="lead">Devenez dès à present membre !!</h1>

		<?php include('partials/_errors.php'); 

		?>

	<div class="container">
		<form data-paeseley-validate method="post" class="well col-md-6" style="background-color: #f2e8ff">
				<!-- champ nom -->
			<div class="form-group">
		      <label for="name">Nom :</label>
		      <input value="<?= get_input('name'); ?>" type="text" class="form-control" id="name" name="name" placeholder="Entrez votre nom svp !!!" >
		    </div>
		    				<!-- champ Pseudo -->

		    <div class="form-group">
		      <label for="pseudo">Pseudo :</label>
		      <input  value="<?= get_input('pseudo'); ?>"type="text" class="form-control" id="pseudo" name="pseudo"  placeholder="Entrez votre Pseudo svp !!!" required="required">
		    </div>
		    				<!-- champ Email -->

		    <div class="form-group">
		      <label for="pseudo">Email :</label>
		      <input value="<?= get_input('email'); ?>" type="email" class="form-control" id="email" name="email"  placeholder="Entrez votre email svp !!!"required="required">
		    </div>
		    				<!-- champ mot de passe -->

		    <div class="form-group">
		      <label for="password">Mot de passe :</label>
		      <input type="password" class="form-control" id="password" name="password" placeholder="Mot de passe" required="required">
		    </div>
		    				<!-- champ confirmation du mot de passe -->

		    <div class="form-group">
		      <label for="password_confirm">Confirmation du mot de passe :</label>
		      <input type="password" class="form-control" id="password_confirm" name="password_confirm" placeholder="Confirmez le mot de passe !!!" required="required">
		    </div>

		    				<!-- champ bouton -->
		    <input type="submit" name="register" value="Inscription" class="btn btn-primary">

			 
		</form>
		
	</div>

</div>



<?php  require("partials/_footer.php"); ?>