<?php

	if(isset($_POST["valider"])){
		
		$pseudo = htmlspecialchars($_POST["pseudo"]);
		$mdp = htmlspecialchars($_POST["mdp"]);

		$existe = compte($pseudo);
		if($existe != 0){
			// on verifie le mot de passe rattache au pseudo
			$pass = mdp($pseudo);
			if($pass == $mdp){
				if($pseudo == "admin"){
					include("./vues/admin_index.php");
				} else {
					include("./vues/dashboard.php");
				}
			} else {
				include("./vues/accueil.php");	
			}				
		} else {
			include("./vues/accueil.php");
		}
	} 
?>