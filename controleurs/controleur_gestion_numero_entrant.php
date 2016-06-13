<?php
	
	$all_sets = all_sets();
	$all_gateways = all_gateway();
	
	if(isset($_POST["ajouter_set"])){
		$compte = $_POST["compte"];
		$host = $_POST["host"];
		$num_geo = htmlspecialchars($_POST["num_geo"]);
		$num_sip = htmlspecialchars($_POST["num_sip"]);
		$inum = htmlspecialchars($_POST["inum"]);

		if($num_geo != ""){
			$verif_num_geo = verif_num_geo($num_geo);	
		} else {
			$verif_num_geo = 0;			
		}
		if($num_sip != ""){
			$verif_num_sip = verif_num_sip($num_sip);
		} else {
			$verif_num_sip = 0;
		}
		if($inum != ""){
			$verif_inum = verif_inum($inum);
		} else {
			$verif_inum = 0;
		}		

		$id_gateway = id_gateway_switch($compte,$host);

		//je creer le set sans aucun numero depart
		add_set($id_gateway);
		$id_set = id_set();

		if($verif_num_geo == 0){
			add_num_geo($id_set,$num_geo);
			$alert_geo = "";
		} else {
			$alert_geo = "Ce numéro géographique existe déjà.";
		}

		if($verif_num_sip == 0){
			add_num_sip($id_set,$num_sip);
			$alert_sip = "";
		} else {
			$alert_sip = "Ce numéro SIP existe déjà.";	
		}

		if($verif_inum == 0){
			add_inum($id_set,$inum);
			$alert_inum = "";
		} else {
			$alert_inum = "Ce numéro INUM existe déjà.";
		}

		include("./vues/admin_numero_entrant.php");

	}else if(isset($_POST["modifier_set"])){
		$id_set = $_POST["id_set_num"];
		$num_geo = htmlspecialchars($_POST["new_num_geo"]);
		$num_sip = htmlspecialchars($_POST["new_num_sip"]);
		$inum = htmlspecialchars($_POST["new_inum"]);

		if($num_geo != ""){
			$verif_num_geo = verif_num_geo($num_geo);	
		} else {
			$verif_num_geo = 0;			
		}
		if($num_sip != ""){
			$verif_num_sip = verif_num_sip($num_sip);
		} else {
			$verif_num_sip = 0;
		}
		if($inum != ""){
			$verif_inum = verif_inum($inum);
		} else {
			$verif_inum = 0;
		}	
		if($verif_num_geo != 0){
			add_num_geo($id_set,$num_geo);
			$alert_geo = "";
		} else {
			$alert_geo = "Ce numéro géographique existe déjà.";
		}

		if($verif_num_sip != 0){
			add_num_sip($id_set,$num_sip);
			$alert_sip = "";
		} else {
			$alert_sip = "Ce numéro SIP existe déjà.";	
		}

		if($verif_inum == 0){
			add_inum($id_set,$inum);
			$alert_inum = "";
		} else {
			$alert_inum = "Ce numéro INUM existe déjà.";
		}

		include("./vues/admin_numero_entrant.php");	

	} else {
		include("./vues/admin_numero_entrant.php");
	}
?>