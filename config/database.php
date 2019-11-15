<?php 
	
	//var_dump(PDO::getAvailableDrivers());
define('DB_HOST', 'localhost');
define('DB_NAME', 'boom');
define('DB_USER', 'root');
define('DB_PASSWORD', '');

	try {
			$db = new PDO("mysql:host=".DB_HOST.";dbname=".DB_NAME,DB_USER ,DB_PASSWORD);
			$db -> setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

			//$db->query('SLECT * FROM users');
	} catch (PDOException $e) {
		die("Erreur" .$e->getMessage());
		
	}

 ?>