<?php


	$login = $_POST['login'];
	$nom = $_POST['nom'];
	$prenom = $_POST['prenom'];
	$mail = $_POST['mail'];
	$mdp = $_POST['mdp'];
	$num = $_POST['num'];
	$num_origine = $_POST['num_origine'];
	$contexte = $_POST['groupe'];
	$num_transfert = $_POST['num_transfert'];
	$protocole = $_POST['protocole'];
	$option_transfert = $_POST['option_transfert'];
	$droit_conf = 0;
	$jours = "";
	$horaires = "";
	$role = "0";
	$id_user = $_POST['modifier'];
	
	
	$nums_users = nums_users();
	$nums_callcenters = nums_callcenters();
	$nums_conferences= nums_conferences();
	$check_num = check_nums($nums_users,$nums_callcenters,$nums_conferences,$num);
	
	$id_contexte = find_id_groupe($contexte);
		
	if(!empty($find_id_user)){
		$msg = "<h3 style='color:red'>Le login $login n est pas disponible</h3>";
		include("./controleurs/controleur_show_users.php");	
	}
	else if(empty($find_id_user)){
		if($num_origine == $num){
			update_user($nom,$prenom,$login,$mdp,$mail,$num_transfert,$option_transfert,$role,$droit_conf,$jours,$horaires,$id_contexte[0],$id_user);
			update_num($num,$protocole,$id_user);
			exec('sudo /var/script_beep/deleteuser.sh '.$login.' '.$find_user_groupe);
			exec('sudo /var/script_beep/adduser.sh '.$login.' '.$mdp.' '.$mail.' '.$num.' '.$protocole.' '.$port.' '.$option_transfert.' '.$num_transfert.' '.$contexte);
			$msg = "<h3 style='color:green'>L'utilisateur $login à bien été modifier</h3>";
			include("./controleurs/controleur_show_users.php");	
		}
		else if($check_num == 0){
			update_user($nom,$prenom,$login,$mdp,$mail,$num_transfert,$option_transfert,$role,$droit_conf,$jours,$horaires,$id_contexte[0],$id_user);
			update_num($num,$protocole,$id_user);
			exec('sudo /var/script_beep/deleteuser.sh '.$login.' '.$find_user_groupe);
			exec('sudo /var/script_beep/adduser.sh '.$login.' '.$mdp.' '.$mail.' '.$num.' '.$protocole.' '.$port.' '.$option_transfert.' '.$num_transfert.' '.$contexte);
			$msg = "<h3 style='color:green'>L'utilisateur $login à bien été modifier</h3>";
			include("./controleurs/controleur_show_users.php");	
		}
		else if($check_num == 1){
			$msg = "<h3 style='color:red'>Le numero $num n est pas disponible</h3>";
			include("./controleurs/controleur_show_users.php");	
		}
	}

	//exec('sudo /var/script_beep/change_contexte.sh '.$login.' '.$option_transfert.' '.$id_contexte[1].' '.$mdp.' '.$protocole);
?>