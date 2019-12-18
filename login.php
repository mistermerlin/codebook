<?php 
	session_start();
	require('config/database.php');
	include('filters/auth_filter.php');
	require('includes/constants.php');
	require('includes/functions.php');
	include("partials/_header.php");


	//Si le formulaire a ete soumis
	if (isset($_POST['login'])) {
		//Si tous les champs ont ete remplis
		if (not_empty(['identifiant','password'])) {		

			extract($_POST);

			$q = $db->prepare("SELECT id,name,pseudo, password AS hashed_password FROM users 
				WHERE (pseudo = :identifiant OR email = :identifiant) 
				 AND active = '1'");

			$q->execute([
				'identifiant'=> $identifiant
				]);
				$user = $q->fetch(PDO::FETCH_OBJ);

			if ($user && bcrypt_verify_password($password, $user ->hashed_password)) {

				$_SESSION['user_id'] = $user->id ;
				$_SESSION['pseudo'] = $user->pseudo ;

				redirect('profile.php?id='.$user->id);
			}else{
				set_flash('Combinaison identifiant/mot de passe incorect', 'danger');
				save_input_data();
			}
		}
	}
	else{
		clear_input_data();
	}

	require("views/login.view.php");

	 ?>

