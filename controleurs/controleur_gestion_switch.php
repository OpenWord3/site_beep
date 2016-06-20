<?php

	$all_switchs = all_switchs();
	$groupes = list_groupe_gateway();
	$gateways = all_gateway();
	$all_gateways = all_gateway();

	if(isset($_POST["ajouter_switch"])){
		$compte = $_POST["compte"];
		$host = $_POST["host"];
		$port = $_POST["port"];
		$groupe = $_POST["groupe"];
		$switch = htmlspecialchars($_POST["switch"]);

		$check_compte_host = compte_gateway($compte,$host,$port);

		if($check_compte_host == 0){
			$alert = "Ce couple compte : ".$compte." /host : ".$host." /port : ".$port." n'existe pas.";

		} else {
			$verif_switch = verif_switch($compte,$host,$groupe,$switch);
			if($verif_switch != 0){
				$alert = "Ce switch existe déjà.";

			} else {
				$id_gateway = id_gateway_switch($compte,$host,$port);
				$id_groupe = id_groupe_switch($groupe);
				add_switch($id_gateway,$switch);
				$id_switch = id_last_switch();
				link_switch_contexte($id_groupe,$id_switch);
				exec('sudo /var/script_beep/add_switch.sh '.$compte.' '.$host.' '.$port.' '.$groupe.' '.$switch);
				$alert = "Le switch a bien été ajouté.";
			}
		}

	}else if(isset($_POST["modifier_switch"])){

	}else if(isset($_POST["supprimer_switch"])){
		$id_switch = $_POST["id_switch"];
		$compte = $_POST["compte"];
		$host = $_POST["host"];
		$port = $_POST["port"];
		$groupe = $_POST["groupe"];
		$switch = $_POST["switch"];
		del_switch($id_switch);
		exec('sudo /var/script_beep/del_switch.sh '.$compte.' '.$host.' '.$port.' '.$groupe.' '.$switch);
		$alert = "Le switch a bien été supprimé.";
	} 	
	include("./vues/admin_switch.php");
?>