<?php

	$contexte = $_POST['nom_groupe'];
	$id_groupe_default = find_groupe_default();
	$id_contexte = find_id_groupe($contexte);
	$select_users_contexte = select_users_contexte($contexte);
	$show_groupes = show_groupe();
	$default = "default";
	$svi = "svi";
	
	move_users_groupe($id_groupe_default[0],$id_contexte[0]);
	del_groupe($id_contexte[0]);
		
	while($donnees = $select_users_contexte->fetch()){
		exec('sudo /var/script_beep/change_contexte.sh '.$donnees['login'].' '.$contexte.' '.$default.' '.$donnees['num'].' '.$donnees['protocole'].' '.$donnees['user'].' '.$donnees['mail']);
	}
	
	while($donnees = $show_groupes->fetch()){
		exec('sudo /var/script_beep/del_include.sh '.$contexte.' '.$donnees['nom']);
	}
	exec('sudo /var/script_beep/del_include.sh '.$contexte.' '.$svi);
	
	$msg = "<h3 style='color:green'><b>Le groupe $contexte à bien été supprimé</b></h3>";
	include("./vues/admin_gestion_groupes.php");	
?>