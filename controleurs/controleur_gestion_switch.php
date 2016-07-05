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
		
		$verif_switch = verif_switch($compte,$host,$port,$groupe,$switch);
		if($verif_switch != 0){
			$alert = "<h3><font style='color:red;font-weight:bold;'>Ce switch existe déjà.</font></h3>";

		} else {
			$id_gateway = id_gateway_switch($compte,$host,$port);
			$id_groupe = id_groupe_switch($groupe);
			add_switch($id_gateway,$switch);
			$id_switch = id_last_switch();
			link_switch_contexte($id_groupe,$id_switch);
			if($compte == "dahdi"){
				exec('sudo /var/script_beep/add_switch_dahdi.sh '.$groupe.' '.$switch);

			}else {
				exec('sudo /var/script_beep/add_switch.sh '.$compte.' '.$host.' '.$port.' '.$groupe.' '.$switch);
			}
			$alert = "<h3><font style='color:green;font-weight:bold;'>Le switch a bien été ajouté.</font></h3>";
		}		

	}else if(isset($_POST["modifier_switch"])){
		$id_switch = $_POST["id_switch"];
		$switch = htmlspecialchars($_POST["new_switch"]);		

		$gateway_groupe = gateway_groupe($id_switch);
		foreach($gateway_groupe as $result => $z){
			$compte = $z["compte"];
			$host = $z["host"];
			$port = $z["port"];
			$groupe = $z["nom"];
			$old_switch = $z["switch"];
		}
		$verif_switch = verif_switch($compte,$host,$port,$groupe,$switch);

		if($verif_switch != 0){
			$alert = "<h3><font style='color:red;font-weight:bold;'>Ce switch existe déjà.</font></h3>";

		} else {
			change_switch($id_switch,$switch);
			exec('sudo /var/script_beep/modif_switch.sh '.$compte.' '.$host.' '.$port.' '.$groupe.' '.$old_switch.' '.$switch);
			$alert = "<h3><font style='color:green;font-weight:bold;'>Le switch a bien été modifié.</font></h3>";
		}


	}else if(isset($_POST["supprimer_switch"])){
		$id_switch = $_POST["id_switch"];

		if(isset($_POST["compte"])){
			$compte = $_POST["compte"];
			$host = $_POST["host"];
			$port = $_POST["port"];
			$groupe = $_POST["groupe"];
			$switch = $_POST["switch"];

		}else{
			$gateway_groupe = gateway_groupe($id_switch);
			foreach($gateway_groupe as $result => $z){
				$compte = $z["compte"];
				$host = $z["host"];
				$port = $z["port"];
				$groupe = $z["nom"];
				$switch = $z["switch"];
			}
		}
		
		del_switch($id_switch);
		exec('sudo /var/script_beep/del_switch.sh '.$compte.' '.$host.' '.$port.' '.$groupe.' '.$switch);
		$alert = "<h3><font style='color:green;font-weight:bold;'>Le switch a bien été supprimé.</font></h3>";
	} 	

	$all_switchs = all_switchs();
	$groupes = list_groupe_gateway();
	$gateways = all_gateway();
	$all_gateways = all_gateway();
	include("./vues/admin_switch.php");
?>