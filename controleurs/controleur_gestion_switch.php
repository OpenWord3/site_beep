<?php

	$all_switchs = all_switchs();
	$groupes = list_groupe_gateway();
	$gateways = all_gateway();
	$all_gateways = all_gateway();

	if(isset($_POST["ajouter_switch"])){
		$compte = $_POST["compte"];
		$host = $_POST["host"];
		$groupe = $_POST["groupe"];
		$switch = htmlspecialchars($_POST["switch"]);

		$verif_switch = verif_switch($compte,$host,$groupe,$switch);
		if($verif_switch != 0){
			$alert = "Ce switch existe déjà";
			include("./vues/admin_switch.php");

		} else {
			$id_gateway = id_gateway_switch($compte,$host);
			$id_groupe = id_groupe_switch($groupe);
			add_switch($id_gateway,$switch);
			$id_switch = id_last_switch();
			link_switch_contexte($id_groupe,$id_switch);
			$alert = "Le switch a bien été ajouté";
			include("./vues/admin_switch.php");
		}

	}else if(isset($_POST["modifier_switch"])){

	}else if(isset($_POST["supprimer_switch"])){
		$id_switch = $_POST["id_switch"];
		del_switch($id_switch);
		$alert = "Le switch a bien été supprimé";
		include("./vues/admin_switch.php");
	} else {
		include("./vues/admin_switch.php");
	}	
?>