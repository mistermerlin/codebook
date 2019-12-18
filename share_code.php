<?php 


 ?>
 <?php 
	session_start();
	require('config/database.php');
	require('includes/constants.php');
	require('includes/functions.php');
	include("partials/_header.php");

	if (!empty($_GET['id'])) {
		$data = find_code_by_id($_GET['id']);

	
			$data = $q->fetch(PDO::FETCH_ODJ);

			if (!$data) {
						
					$code = "";
			} else{
				
				$code = $data->code;	
			}
		
	} else {
		$code = "";
	}


	//Si le formulaire est soumis
	if (isset($_POST['save'])) {

		if (not_empty(['code'])) {
			extract($_POST);
			$q = $db->prepare('INSERT INTO codes(code) VALUES (?)');
			$success = $q->execute([$code]);

			if ($success) {
				//Affiche le code source
				$id = $db->lastInsertId();
				redirect('show_code.php?id='.$id);


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

