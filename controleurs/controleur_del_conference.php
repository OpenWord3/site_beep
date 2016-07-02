<?php
	$num_conf = $_POST['num_conf'];
	$mdp_conf = $_POST['mdp_conf'];
	
	$check_conf = check_conf($num_conf);
	
	if(empty($check_conf)){
		$msg = "<h3 style='color:red'><b>Le numéro de conférence $num_conf n'existe pas</b></h3>";
		include("./controleurs/controleur_show_conferences.php");	
	}
	else if(!empty($check_conf && $check_conf['mdp'] != $mdp_conf)){
		$msg = "<h3 style='color:red'><b>Le mot de passe n'est pas correct</b></h3>";
		include("./controleurs/controleur_show_conferences.php");	
	}
	else{
		del_conf($num_conf,$mdp_conf);
		exec('sudo /var/script_beep/delete_conference.pl '.$num_conf.' '.$mdp_conf);
		
		$msg = "<h3 style='color:green'><b>La conférence $num_conf à bien été supprimée</b></h3>";
		include("./controleurs/controleur_show_conferences.php");	
	}
?>