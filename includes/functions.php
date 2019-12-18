
<?php 
	if (!function_exists('e')){
		function e($String){
			if ($String){
				return htmlspecialchars($String);
			}
				}
		}
		
/******************* Hashage de mot de passe ************************/
		//Hashage du mot de passe

	if (!function_exists('bcrypt_hash_password')){
		function bcrypt_hash_password($value, $options = array()){
			$cost = isset($options['rounds']) ? $options['rounds'] : 10;
			$hash = password_hash($value, PASSWORD_BCRYPT, array('cost' => $cost));

				if ($hash === false)
					{				
					throw new Exception("Bcript Hashing n'est pas supporté");
					}

					return $hash;
				}
		}

	//Verification du mot de passe
		if (!function_exists('bcrypt_verify_password')){
		function bcrypt_verify_password($value, $hashedValue){
			
			return password_verify($value, $hashedValue);
				}
		}
/**********************Fin du Hashage de mot de passe******************/
 //Avatar URL
	if (!function_exists('get_avatar_url')){
			function get_avatar_url($email){
				return "http://gravatar.com/avatar/".md5(strtolower(trim(/*e*/($email))));
					}
			}

//chercher une valeur par la clef
	if (!function_exists('get_session')) {
			function get_session($email){
				if ($email) {
					return !empty($_SESSION[$email]) 
					? e($_SESSION[$email] )
					: null;
				}
					}
			}

			//chercher la langue(facultatif)
	if (!function_exists('get_current_locale')) {
			function get_current_locale(){
				
				return $_SESSION['locale'];
					}
			}


		//si l'utilisateur est connecté
	if (!function_exists('is_logged_in')){
				function is_logged_in(){
					return isset($_SESSION['user_id']) || isset($_SESSION['pseudo']);
				}
				}

				//find user by id
	if (!function_exists('find_user_by_id')) {
			function find_user_by_id($id){
				global $db;
			$q = $db->prepare('SELECT name, pseudo, email, city, country, twitter, github, sexe, available_for_hiring, bio FROM users WHERE id= ?');
				$q->execute([$id]);
				$data = ($q->fetch(PDO::FETCH_OBJ));
				//var_dump($data[0]->pseudo);
				$q->closeCursor();
				return $data;
			}
		}
		//Find Code by ID
		if (!function_exists('find_code_by_id')) {
			function find_code_by_id($id){
			
				global $db;

			$q = $db->prepare('SELECT code FROM codes WHERE id = ?');
			 $q->execute([$id]);

		
			$data = $q->fetch(PDO::FETCH_ODJ);

				$q->closeCursor();
				return $data;
			}
		}
				
			
		//si e formulaire n'est pas vide

	if (!function_exists('not_empty')) {
		function not_empty($fields = []){
			if (count($fields) != 0) {
				foreach ($fields as $field ) {
					if (empty($_POST[$field]) || trim($_POST[$field] == "")) {
						return false;
						# code...
					}
				}
			return true;			
}
		}
	}

	//
	if (!function_exists('is_already_in_use')) {
		function is_already_in_use($field, $value, $table){

	global $db ;

	$q = $db->prepare("SELECT id FROM $table WHERE $field = ?");		

	$q->execute([$value]);
	$count = $q->rowCount();
	$q->closeCursor();
	return $count;

		}
	}
	if (!function_exists('set_flash')) {
		function set_flash($message,$type = 'info'){
			$_SESSION['notification'] ['message'] = $message;
			$_SESSION['notification'] ['type'] = $type;
		}
		}

	if (!function_exists('redirect')) {
			function redirect($page){
				header('location: '. $page);
				exit();
			}
			}


	if (!function_exists('save_input_data')) {
				function save_input_data(){
					foreach ($_POST as $key => $value) {
						if (strpos($key, 'password') === false) {
							$_SESSION['input'][$key] = $value ;
							# code...
						}
						# code...
					}
				}
			}

	if (!function_exists('get_input')) {
				function get_input($key){
					return !empty($_SESSION['input'][$key]) 
					? $_SESSION['input'][$key] 
					: null;
				}
			}

	if (!function_exists('clear_input_data')) {
					function clear_input_data(){
						if (isset($_SESSION['input'])) {
							 $_SESSION['input'] = [] ;
							
						}
					}
				}
				//gere l'activite de notre menu
	if (!function_exists('set_active')) {
					function set_active($file){
						$page = array_pop(explode('/', $_SERVER['SCRIPT_NAME']));
						if ($page == $file.'.php') {
							return "active";
						}else{
							return " " ;
						}
					}
				}




 ?>