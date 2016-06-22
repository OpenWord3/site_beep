<?php

	$all_switchs = all_switchs();
	$groupes = list_groupe_gateway();
	$gateways = all_gateway();
	$all_gateways = all_gateway();

	if(isset($_POST["ajouter_switch"])){
		$gateway = $_POST["gateway"];
		$pieces = explode("_", $gateway);

		$compte = $pieces[0];
		$host = $pieces[1];
		$port = $pieces[2];
		
		$groupe = $_POST["groupe"];
		$switch = htmlspecialchars($_POST["switch"]);
		
		$verif_switch = verif_switch($compte,$host,$groupe,$switch);
		if($verif_switch != 0){
			$alert = "<font style='color:red;font-weight:bold;'>Ce switch existe déjà.</font>";

		} else {
			$id_gateway = id_gateway_switch($compte,$host,$port);
			$id_groupe = id_groupe_switch($groupe);
			add_switch($id_gateway,$switch);
			$id_switch = id_last_switch();
			link_switch_contexte($id_groupe,$id_switch);
			exec('sudo /var/script_beep/add_switch.sh '.$compte.' '.$host.' '.$port.' '.$groupe.' '.$switch);
			$alert = "<font style='color:green;font-weight:bold;'>Le switch a bien été ajouté.</font>";
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
		$alert = "<font style='color:green;font-weight:bold;'>Le switch a bien été supprimé.</font>";
	} 	
	include("./vues/admin_switch.php");
?>