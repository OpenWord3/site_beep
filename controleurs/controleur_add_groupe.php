<?php

	$contexte = $_POST['nom_groupe'];

	$check_groupe = check_groupe($contexte);
	
	if(!empty($check_groupe)){
		$msg = "<h3 style='color:red'><b>Ce groupe $contexte existe déjà</b></h3>";
		include("./vues/admin_gestion_groupes.php");	
	}
	else if(empty($check_groupe)){
		$type_contexte = 1;
		add_groupe($contexte,$type_contexte);
		exec('sudo /var/script_beep/addgroupe.sh '.$contexte);
		if(isset($_POST['from_groupe'])){
			$msg = "<h3 style='color:green'><b>Le groupe $contexte à bien été ajouté</b></h3>";			
			include("./vues/admin_gestion_groupes.php");
		}
		else{
		$msg = "<h3 style='color:green'><b>Le groupe $contexte à bien été ajouté</b></h3>";
		include("./controleurs/controleur_show_users.php");	
		}
	}
	
?>