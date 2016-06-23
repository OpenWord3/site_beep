<?php

	$contexte = $_POST['nom_groupe'];
	$id_groupe_default = find_groupe_default();
	$id_contexte = find_id_groupe($contexte);
	$select_users_contexte = select_users_contexte($contexte);
	$default = "professeur";
	
	move_users_groupe($id_groupe_default[0],$id_contexte[0]);
	del_groupe($id_contexte[0]);
		
	/*while($donnees = $select_users_contexte->fetch()){
		//exec('sudo /var/script_beep/change_contexte.sh '.$donnees['login'].' '.$donnees['option_transfert'].' '.$default.' '.$donnees['mdp'].' '.$donnees['protocole']);
	}*/
	
	$msg = "<h3 style='color:red'>Le groupe $contexte à bien été supprimer</h3>";
	include("./vues/admin_gestion_groupes.php");	
?>