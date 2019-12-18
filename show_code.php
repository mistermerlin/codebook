<?php 

session_start();
	require('config/database.php');
	require('includes/constants.php');
	require('includes/functions.php');
	include("partials/_header.php");

	if (!empty($_GET['id'])) {
		$data = find_code_by_id($_GET['id']);
		}
	} else {
		redirect('share_code.php');
	}

	require("views/show_code.view.php");


 ?>