<?php
	try{
		$bdd = new PDO("mysql:host=localhost;dbname=beep;charset=utf8", "root", "", array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
	}catch(Exception $e){
		die("ERREUR : ".$e->getMessage());
	}

	//Fonction qui retourne le mot de passe
	function mdp(){
		global $bdd;

		$req = $bdd->query("SELECT mdp FROM users WHERE login LIKE 'admin'");

		while($results = $req->fetch()){
			$result = $results["mdp"];
		}

		return $result;
	}

	$verif = mdp();

	if(isset($_POST['p'])){
		//$p = "zalika";
		if($_POST['p'] == $verif){
			echo "<br /><br /><font style='color:green;font-weight:bold;'>Le mot de passe est : bien.</font><br /><br />";
		} else {
			echo "<br /><br /><font style='color:red;font-weight:600;'>Entrez le bon mot de passe admin.</font><br /><br />";
		}
	}
	
?>
