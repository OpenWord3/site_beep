<?php
	$all_groupes_externes = all_groupes_externes();

	if(isset($_POST["ajouter_groupe_externe"])){
		$contexte = htmlspecialchars($_POST["nom"]);
		$type_contexte = 0;

		$check_groupe = check_groupe($contexte);

		if(empty($check_groupe)){
			add_groupe($contexte,$type_contexte);
			exec('sudo /var/script_beep/add_groupe_extern.sh '.$contexte);
			$alert = "<h3><font style='color:green;font-weight:bold;'>Le groupe a bien été ajouté.</font></h3>";
		} else {
			$alert = "<h3><font style='color:red;font-weight:bold;'>Ce groupe existe déja.</font></h3>";
		}

	} else if(isset($_POST["modifier_groupe_externe"])){

	} else if(isset($_POST["supprimer_groupe_externe"])){
		$contexte = htmlspecialchars($_POST["nom"]);
		$type_contexte = 0;

		$check_groupe = check_groupe_externe($contexte);

		if(empty($check_groupe)){
			$alert = "<h3><font style='color:red;font-weight:bold;'>Ce groupe n'existe pas.</font></h3>";
		} else {
			$id_contexte = id_groupe($contexte);
			del_droit_extern2($id_contexte);
			del_groupe_externe($id_contexte);
			exec('sudo /var/script_beep/change_groupe_extern.sh '.$contexte);
			$alert = "<h3><font style='color:green;font-weight:bold;'>Le groupe a bien été supprimé.</font></h3>";
		}
	}

	include("./vues/admin_gestion_groupes_externes.php");
?>