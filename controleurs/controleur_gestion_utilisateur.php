<?php

	if(isset($_POST["ajouter"])){

		$protocole=$_POST["protocole"];
		$groupe=$_POST["groupe"];
		$transfert=$_POST["transfert"];
		$pseudo=$_POST["pseudo"];
		$nom=$_POST["nom"];
		$prenom=$_POST["prenom"];
		$email=$_POST["email"];
		$mdp=$_POST["mdp"];
		$num_exten=$_POST["num_exten"];
		$telephone=$_POST["telephone"];
		$port=$_POST["port"];

		$verif_pseudo = compte($pseudo);
		$verif_mail = check_mail($email);
		if($verif_pseudo != 0){
			$alert="Ce compte existe déjà";
			include("./vues/admin_gestion_personnes.php");
		} else if($verif_mail != 0){
			$alert="Ce mail existe déjà";
			include("./vues/admin_gestion_personnes.php");
		}
		exec('sudo /var/script_beep/adduser.sh '.$pseudo.' '.$mdp.' '.$email.' '.$num_exten.' '.$protocole.' '.$port.' '.$transfert.' '.$telephone.' '.$groupe);
	} else if(isset($_POST["supprimer"])){

		$pseudo=$_POST["pseudo"];
		$groupe=$_POST["groupe"];
		exec('sudo /var/script_beep/deleteuser.sh '.$pseudo.' '.$groupe);
	} else if(isset($_POST["ajouter_groupe"])){
		$groupe=$_POST["groupe"];
	} else {
		include("./vues/admin_gestion_personnes.php");
	}
?>