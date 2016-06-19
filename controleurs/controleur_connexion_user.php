<?php
	
	$login = $_POST['login'];
	$mdp = $_POST['mdp'];
	
	$check_compte_user = check_compte_user($login,$mdp);
	
	if(empty($check_compte_user)){
		$msg = "Login ou mot de passe incorrect";
		include("./vues/accueil.php");
	}
	else if(!empty($check_compte_user)){
		if($check_compte_user['role'] == 1){
			include("./controleurs/controleur_show_users.php");	
			$id_user = find_id_user($login);
			$_SESSION["id_user"] = $id_user;
		}
		else{
			include("./vues/user.php");
		}
	}
?>