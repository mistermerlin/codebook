<?php 
	session_start();
	require('config/database.php');
	require('includes/constants.php');
	require('includes/functions.php');
	include('partials/_header.php');

	if (!empty($_GET['id'])) {
		//recupere les infos de l'utilisateur a partir de son id
			$user = find_user_by_id($_GET['id']);
	
			if (!$user) {
				redirect('index.php');
			}
	}else{
		redirect('profile.php?id='.get_session('user_id'));
	}

	//Traitement du formulaire de mise a jour du profil

		//Si le formulaire a ete soumis
	if (isset($_POST['update'])) {
		//Si tous les champs ont ete remplis

		if (not_empty(['name', 'city', 'country', 'sexe', 'bio'])) {		
			$errors = [];

			extract($_POST);

			$q = $db->prepare("UPDATE users 
				SET name = :name, city = :city, country = :country,
				 sexe = :sexe, twitter = :twitter, github = :github, 
				 available_for_hiring = :available_for_hiring, bio = :bio
				 WHERE id = :id ");

			$q->execute([
				'name'=> $name,
					'city'=> $city,
					'country'=> $country,
					'sexe'=> $sexe,
					'twitter'=> $twitter,
					'github'=> $github,
					'available_for_hiring'=> !empty($available_for_hiring) ? '1' : '0',
					'bio'=> $bio,
					'id'=> get_session('user_id')
				]);
			

				set_flash('Felicitations, Votre profil à été mise à jour');
				redirect('profile.php?id='.$user->id);

			}
			else{
				save_input_data();
				$errors[]= "Veillez remplir tous les champs requis svp!!!";
			}
		}
	
	else{
		clear_input_data();
	}

	require('views/profile.view.php');

	 ?>