<?php
	//Fonction qui verifie si un compte existe 
	function compte($pseudo){
		global $bdd;

		$req = $bdd->prepare("SELECT login FROM users WHERE login = :login");
		$req->execute(array("login"=>$pseudo));

		$exist = $req->rowCount();
		$req->closeCursor();

		return $exist;
	}

	//Fonction qui retourne le mot de passe
	function mdp($pseudo){
		global $bdd;

		$req = $bdd->prepare("SELECT mdp FROM users WHERE login = :login");
		$req->execute(array("login"=>$pseudo));

		while($results = $req->fetch()){
			$result = $results["mdp"];
		}

		return $result;
	}

	//Fonction qui verifie si un compte mail existe
	function check_mail($email){
		global $bdd;

		$req = $bdd->prepare("SELECT mail FROM users WHERE mail = :email");
		$req->execute(array("email"=>$email));

		$exist = $req->rowCount();
		$req->closeCursor();

		return $exist;
	}

	//Function qui inscrit un vsiteur
	function inscription($pseudo,$mdp,$mail,$protocole){
		global $bdd;

		$req = $bdd->prepare("INSERT INTO `utilisateur` (`pseudo`,`mdp`,`mail`,`status_utilisateur`) values (:pseudo,:mdp,:mail,FALSE);");
		$req->execute(array(
							'pseudo'=>$pseudo,
							'mdp'=>$mdp,
							'mail'=>$mail));
		$req->closeCursor();
	}

	//Fonction qui retourne tous les utilisateurs
	function all_users(){
		global $bdd;

		$req = $bdd->query("SELECT login FROM users WHERE role = '0'");
		$req->execute(array(0));
		$result = $req->fetchAll();
		
		$req->closeCursor();
		return $result;		
	}

	//Fonction qui recupere l'id de l'utilisateur
	function id_user($login){
		global $bdd;

		$req = $bdd->prepare("SELECT id_user FROM users WHERE login = :login");
		$req->execute(array("login"=>$login));

		while($results = $req->fetch()){
			$result = $results["id_user"];
		}
		
		$req->closeCursor();

		return $result;
	}
?>