<?php
	$num_conf = $_POST['num_conf'];
	$mdp_conf = $_POST['mdp_conf'];
	
	$check_conf = check_conf($num_conf);
	
	if(empty($check_conf)){
		$msg = "<h3 style='color:red'>Le numero de conference $num_conf n'existe pas</h3>";
		include("./controleurs/controleur_show_conferences.php");	
	}
	else if(!empty($check_conf && $check_conf['mdp'] != $mdp_conf)){
		$msg = "<h3 style='color:red'>Le mot de passe n'est pas correcte</h3>";
		include("./controleurs/controleur_show_conferences.php");	
	}
	else{
		del_conf($num_conf,$mdp_conf);
		exec('sudo /var/script_beep/delete_conference.pl '.$num_conf.' '.$mdp_conf);
		
		$msg = "<h3 style='color:green'>Le conference $num_conf à bien ete supprimer</h3>";
		include("./controleurs/controleur_show_conferences.php");	
	}
	
	
?>