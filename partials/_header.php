<!doctype html>
<html lang="fr">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
         <meta name="viewport" content="width=device-width, initial-scale=1.0">
         <meta name="description" content="Reseau social pour developpeurs ">
         <meta name="Auteur" content="Datouloba Ben Aziz Ouattara">
                <!-- liaison avec le CSS téléchargé de Bootstrap -->
        <!--link href="./assets/css/bootstrap.css" rel="stylesheet"-->
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css" >
    <link rel="stylesheet" href="assets/css/main.css" >

    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/4e7cbde93e.js" crossorigin="anonymous"></script>

    <title>
    	
    	<?php 

    		echo isset($title)
    		? $title .'| '. WEBSITE_NAME  
    		: 'CodeBook | Simple ,Rapide, Efficace';

 	 ?>

    </title>
  </head>

<?php 
include("partials/_nav.php");
include('partials/_errors.php');
include('partials/_flash.php');
 ?>