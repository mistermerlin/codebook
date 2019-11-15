<?php 


 ?>
 <?php 
	session_start();
	require('config/database.php');
	require('includes/constants.php');
	require('includes/functions.php');
	include("partials/_header.php");

	//Si le formulaire est soumis
	if (isset($_POST['save'])) {

		if (not_empty(['code'])) {
			extract($_POST);
			$q = $db->prepare('INSERT INTO codes(id,code) VALUES (NULL,:code)');
			$success = $q->execute([$code]);

			if ($success) {
				//Affiche le code source



			}else{

				//Sinon
				set_flash("Erreur lors de l'ajout du code source. Veillez réessayez SVP.");
				redirect("share_code.php");
			}
		
		
	}else{

		redirect("share_code.php");
	}
	}

	require("views/share_code.view.php");

	 ?>

