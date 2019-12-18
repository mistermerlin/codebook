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

		

	require('views/profile.view.php');

	 ?>