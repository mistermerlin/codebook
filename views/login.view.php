<?php $title = "Connexion "; ?>

<div id="main-content">
	<h1 class="lead">Page de connexion</h1>

		<?php include('partials/_errors.php'); 

		?>

	<div class="container">
		<form data-paeseley-validate method="post" class="well col-md-6" style="background-color: #f2e8ff">			
		    				<!-- champ Indentifiant -->
		    <div class="form-group">
		      <label for="identifiant">Pseudo ou adresse electronique :</label>
		      <input  value="<?= get_input('identifiant'); ?>"type="text" class="form-control" id="identifiant" name="identifiant"  placeholder="Entrez votre identifiant" required="required">
		    </div>			
		    				<!-- champ mot de passe -->
		    <div class="form-group">
		      <label for="password">Mot de passe :</label>
		      <input type="password" class="form-control" id="password" name="password" placeholder="Mot de passe" required="required">
		    </div>	
		    				<!-- champ bouton -->
		    <input type="submit" name="login" value="Connexion" class="btn btn-primary">
		 
		</form>	
	</div>
</div>

<?php  require("partials/_footer.php"); ?>