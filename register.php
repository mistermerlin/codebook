<?php 
	session_start();
	require('config/database.php');
	include('filters/guest_filter.php');
	require('includes/constants.php');
	require('includes/functions.php');
	include("partials/_header.php");
 	$title = "Inscription "; 


	//Si le formulaire a ete soumis
	if (isset($_POST['register'])) {
		//Si tous les champs ont ete remplis
		if (not_empty(['name','pseudo','email','password','password_confirm'])) {			

			$errors = [];  
			extract($_POST);

			if (mb_strlen($pseudo) < 3) {
				$errors[] = "pseudo trop court!(minimum 3 caractere)";
			}
			if (!filter_var($email,FILTER_VALIDATE_EMAIL)) {
				$errors[] = "Adresse mail invalide";
			}
			if (mb_strlen($password) < 6) {
				$errors[] = "password trop court!(minimum 6 caractere)";
			}else{
				if ($password != $password_confirm) {
							$errors[] = "Les deux mots de passes ne concordent pas ";
				}
			}
			if (is_already_in_use('pseudo',$pseudo,'users')) {
				$errors[] = "pseudo deja utilisé";
			}
			if (is_already_in_use('email',$email,'users')) {
				$errors[] = "email deja utilisé";
			}
			if (Count($errors) == 0) {
				//envoie de mail d'activation 
				$password = sha1($password);
				$to = $email;
				$subject = WEBSITE_NAME. "- ACTIVATION DE COMPTE";
				$token = sha1($pseudo.$email.$password);

				ob_start();
				require('templates/emails/activation.tmpl.php');
				$content = ob_get_clean();	

				$headers = "MINE-Version: 1.0". "\r\n";
				$headers = "Content-type: text/html; charset= iso-8859-1". "\r\n";
				mail($to, $subject, $content, $headers);
    			 
				//Informer l'utilisateur qu'un mail lui a ete envoyé.
				set_flash("Mail d'activation envoyé",'success') ;

				$q = $db->prepare('INSERT INTO users(name ,pseudo, email ,password)
						VALUES(:name, :pseudo, :email, :password)');
				$q->execute([
					'name'=> $name,
					'pseudo'=> $pseudo,
					'email'=> $email,
					'password'=> $password
				]);
				redirect('index.php');
			}else{
				save_input_data();
			}
		}

		else{

			$errors[] = "Veillez remplir tous les champs svp !!!";
			save_input_data();
		}
	}else{
		clear_input_data();
	}

	require("views/register.view.php");

	 ?>

