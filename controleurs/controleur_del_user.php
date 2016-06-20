<?php
	$login = $_POST['login'];
	
	$find_id_user = find_id_user($login);
	$find_user_groupe = find_user_groupe($login);
	
	if(empty($find_id_user)){
		$msg = "<h3 style='color:red'>L'utilisateur $login n existe pas</h3>";
		include("./controleurs/controleur_show_users.php");	
	}
	else if(!empty($find_id_user)){
		$id_user = $find_id_user[0];
		del_user($id_user);
		del_user_conf($id_user);
		
		exec('sudo /var/script_beep/deleteuser.sh '.$login.' '.$find_user_groupe);
		$msg = "<h3 style='color:green'>L'utilisateur $login à bien été supprimer</h3>";
		include("./controleurs/controleur_show_users.php");		
	}
	
?>