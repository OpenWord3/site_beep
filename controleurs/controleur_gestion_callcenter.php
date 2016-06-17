<?php
	$all_callcenters = all_callcenters();

	if(isset($_POST["ajouter_call_center"])){
		$nom_call=htmlspecialchars($_POST["nom_call"]);
		$num_call=htmlspecialchars($_POST["num_call"]);
		$strategy=$_POST["strategy"];

		$verif_call_center = verif_call_center($nom_call);

		if($verif_call_center != 0){
			$alert = "Le centre d’appel que vous avez entré existe déjà.";
			$membre_call = membre_call($nom_call);

		}else{
			#exec('sudo /var/script_beep/add_callcenter.sh '.$nom_call.' '.$trategy.' '.$num_call);
			add_callcenter($nom_call,$num_call,$strategy); 
			$alert = "Le centre d’appel a bien été ajouté.";
			$membre_call = membre_call($nom_call);
		}
		
	} else if(isset($_POST["supprimer_call_center"])){
		$nom_call = $_POST["nom_call"];
		$id_call_center = id_call($nom_call);
		del_callcenter($id_call_center);
		#exec('sudo /var/script_beep/remove_callcenter.sh '.$nom_call);
		$alert = "Le callcenter a bien été supprimé.";

	}else if(isset($_POST["ajouter_membre"])){
		$login = $_POST["membre"];
		$nom_call = $_POST["nom_call"];
		$id_user = id_user($login);
		$id_callcenter = id_call($nom_call);

		$verif_membre = verif_membre($id_callcenter,$id_user);

		if($verif_membre != 0){
			$alert = "Le membre existe déjà dans ce centre d'appel.";
		}else {
			add_member($id_callcenter,$id_user);
			$alert = "Le membre a bien été ajouté.";
		}		

	}else if(isset($_POST["supprimer_membre"])){
		$nom_call = $_POST["nom_call"];
		$login = $_POST["membre"];
		$id_user = id_user($login);
		$id_callcenter = id_call($nom_call);

		del_membre($id_callcenter,$id_user);

		$alert = "Le membre a bien été retiré.";
	} 
	
	include("./vues/admin_call_center.php");
?>