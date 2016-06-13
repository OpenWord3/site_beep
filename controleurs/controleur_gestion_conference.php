<?php

	if(isset($_POST["ajouter"])){
		$num_conf=$_POST["num_conf"];
		$mdp_conf=$_POST["mdp_conf"];
		$talk=$_POST["talk"];
		$music=$_POST["music"];
		if($mdp_conf == ""){
			exec('sudo /var/script_beep/create_conference.pl '.$num_conf);
		}else{
			exec('sudo /var/script_beep/create_conference.pl '.$num_conf.' '.$mdp_conf);
		}

	} else if(isset($_POST["supprimer"])){
		$num_conf=$_POST["num_conf"];
		$mdp_conf=$_POST["mdp_conf"];
		if($mdp_conf == ""){
			exec('sudo /var/script_beep/delete_conference.pl '.$num_conf);
		}else{
			exec('sudo /var/script_beep/delete_conference.pl '.$num_conf.' '.$mdp_conf);
		}
	}

	include("./vues/admin_salles_conferences.php");
?>