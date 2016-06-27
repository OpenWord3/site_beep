<?php
	$all_callcenters = all_callcenters();

	if(isset($_POST["ajouter_call_center"])){
		$nom_call=htmlspecialchars($_POST["nom_call"]);
		$num_call=htmlspecialchars($_POST["num_call"]);
		$strategy=$_POST["strategy"];

		$verif_call_center = verif_call_center($nom_call);
		$verif_num_call = verif_num_call($num_call);

		if($verif_call_center != 0){
			$alert = "<font style='color:red;font-weight:bold;'>Le centre d’appel que vous avez entré existe déjà.</font>";
			$membre_call = membre_call($nom_call);

		}else{
			if($verif_num_call != 0){
				$alert = "<font style='color:red;font-weight:bold;'>Le numéro que vous avez entré existe déjà.</font>";
				$membre_call = membre_call($nom_call);
			} else {		
				add_callcenter($nom_call,$num_call,$strategy); 
				exec('sudo /var/script_beep/add_callcenter.sh '.$nom_call.' '.$strategy.' '.$num_call);			
				$membre_call = membre_call($nom_call);
				$alert = "<font style='color:green;font-weight:bold;'>Le centre d’appel a bien été ajouté.</font>";
			}
		}
		
	} else if(isset($_POST["supprimer_call_center"])){
		$nom_call = $_POST["nom_call"];
		$id_call_center = id_call($nom_call);
		del_callcenter($id_call_center);
		exec('sudo /var/script_beep/remove_callcenter.sh '.$nom_call);
		$alert = "<font style='color:green;font-weight:bold;'>Le centre d’appel a bien été supprimé.</font>";

	}else if(isset($_POST["ajouter_membre"])){
		$login = $_POST["membre"];
		$nom_call = $_POST["nom_call"];
		$id_user = id_user($login);
		$id_callcenter = id_call($nom_call);

		$verif_membre = verif_membre($id_callcenter,$id_user);

		if($verif_membre != 0){
			$alert = "<font style='color:red;font-weight:bold;'>Le membre existe déjà dans ce centre d'appel.</font>";
		}else {
			add_member($id_callcenter,$id_user);
			$chaine = 'SIP/'.$login;
			exec('sudo /var/script_beep/add_member_callcenter.sh '.$chaine.' '.$nom_call);
			$alert = "<font style='color:green;font-weight:bold;'>Le membre a bien été ajouté.</font>";
		}		

	}else if(isset($_POST["supprimer_membre"])){
		$nom_call = $_POST["nom_call"];
		$login = $_POST["membre"];
		$id_user = id_user($login);
		$id_callcenter = id_call($nom_call);
		$chaine = 'SIP/'.$login;
		del_membre($id_callcenter,$id_user);
		exec('sudo /var/script_beep/remove_member_callcenter.sh '.$chaine.' '.$nom_call);
		$alert = "<font style='color:green;font-weight:bold;'>Le membre a bien été retiré.</font>";
	} 
	
	include("./vues/admin_call_center.php");
?>