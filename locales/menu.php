<?php 

	$menu = [

		'accueil' => ['fr' => 'Accueil', 'en' => 'Home'],
	];
	die($menu['accueil'][$_SESSION['locale']]);

 ?>