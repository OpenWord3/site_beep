<?php

	$contexte = $_POST['nom_groupe'];

	$check_groupe = check_groupe($contexte);
	
	if(!empty($check_groupe)){
		$msg = "<h3 style='color:red'>Ce groupe $contexte existe deja</h3>";
		include("./vues/admin_gestion_groupes.php");	
	}
	else if(empty($check_groupe)){
		$type_contexte = 1;
		add_groupe($contexte,$type_contexte);
		if(isset($_POST['from_groupe'])){
			$msg = "<h3 style='color:green'>Le groupe $contexte à bien été ajouter</h3>";
			include("./vues/admin_gestion_groupes.php");
		}
		else{
		$msg = "<h3 style='color:green'>Le groupe $contexte à bien été ajouter</h3>";
		include("./controleurs/controleur_show_users.php");	
		}
	}

	
?>