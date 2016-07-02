<?php
	
	$all_sets = all_sets();
	$all_gateways = all_gateway();
	$all_callcenters = all_callcenters();
	$all_users = all_users();
	
	if(isset($_POST["ajouter_set"])){

		$gateway = $_POST["gateway"];
		$pieces = explode("_", $gateway);

		$compte = $pieces[0];
		$host = $pieces[1];
		$port = $pieces[2];

		$num_geo = htmlspecialchars($_POST["num_geo"]);
		$num_sip = htmlspecialchars($_POST["num_sip"]);
		$inum = htmlspecialchars($_POST["inum"]);

		if($num_geo != ""){
			$verif_num_geo = verif_num_geo($num_geo);
			$verif_num_geo2 = verif_num_sip($num_geo);
			$verif_num_geo3 = verif_inum($num_geo);	
		}
		if($num_sip != ""){
			$verif_num_sip = verif_num_sip($num_sip);
			$verif_num_sip2 = verif_num_geo($num_sip);
			$verif_num_sip3 = verif_inum($num_sip);
		}
		if($inum != ""){
			$verif_inum = verif_inum($inum);
			$verif_inum2 = verif_num_sip($inum);
			$verif_inum3 = verif_num_geo($inum);
		}		

		$id_gateway = id_gateway_switch($compte,$host,$port);

		//je creer le set sans aucun numero au depart
		add_set($id_gateway);
		$id_set = id_set();

		if(isset($verif_num_geo)){
			if($verif_num_geo == 0 && $verif_num_geo2 == 0 && $verif_num_geo3 == 0){
				add_num_geo($id_set,$num_geo);
				$alert_geo = "";
			} else {
				$alert_geo = "<font style='color:red;font-weight:bold;'>Ce numéro géographique existe déjà.</font>";
			}
		} else {
			$alert_geo = "";
		}

		if(isset($verif_num_sip)){
			if($verif_num_sip == 0 && $verif_num_sip2 == 0 && $verif_num_sip3 == 0){
				add_num_sip($id_set,$num_sip);
				$alert_sip = "";
			} else {
				$alert_sip = "<font style='color:red;font-weight:bold;'>Ce numéro SIP existe déjà.</font>";	
			}
		} else {
			$alert_sip = "";
		}

		if(isset($verif_inum)){
			if($verif_inum == 0 && $verif_inum2 == 0 && $verif_inum3 == 0){
				add_inum($id_set,$inum);
				$alert_inum = "";
			} else {
				$alert_inum = "<font style='color:red;font-weight:bold;'>Ce numéro INUM existe déjà.</font>";
			}
		}else {
			$alert_inum = "";
		}

	}else if(isset($_POST["modifier_set"])){
		$id_set = $_POST["id_set_num"];
		$num_geo = htmlspecialchars($_POST["new_num_geo"]);
		$num_sip = htmlspecialchars($_POST["new_num_sip"]);
		$inum = htmlspecialchars($_POST["new_inum"]);

		$old_num_geo = $_POST["old_num_geo"];
		$old_num_sip = $_POST["old_num_sip"];
		$old_inum = $_POST["old_inum"];
		$receveur = $_POST["receveur"];

		if($num_geo != ""){
			$verif_num_geo = verif_num_geo($num_geo);
			$verif_num_geo2 = verif_num_sip($num_geo);
			$verif_num_geo3 = verif_inum($num_geo);
		}
		if($num_sip != ""){
			$verif_num_sip = verif_num_sip($num_sip);
			$verif_num_sip2 = verif_num_geo($num_sip);
			$verif_num_sip3 = verif_inum($num_sip);
		}
		if($inum != ""){
			$verif_inum = verif_inum($inum);
			$verif_inum2 = verif_num_sip($inum);
			$verif_inum3 = verif_num_geo($inum);
		}

		if(isset($verif_num_geo)){
			if($verif_num_geo == 0 && $verif_num_geo2 == 0 && $verif_num_geo3 == 0){
				add_num_geo($id_set,$num_geo);
				$alert_geo = "";
			} else {
				$alert_geo = "<font style='color:red;font-weight:bold;'>Ce numéro existe déjà.</font>";
			}
		} else {
			$alert_geo = "";
		}

		if(isset($verif_num_sip)){
			if($verif_num_sip == 0 && $verif_num_sip2 == 0 && $verif_num_sip3 == 0){
				add_num_sip($id_set,$num_sip);
				$alert_sip = "";
			} else {
				$alert_sip = "<font style='color:red;font-weight:bold;'>Ce numéro existe déjà.</font>";	
			}
		} else {
			$alert_sip = "";
		}

		if(isset($verif_inum)){
			if($verif_inum == 0 && $verif_inum2 == 0 && $verif_inum3 == 0){
				add_inum($id_set,$inum);
				$alert_inum = "";
			} else {
				$alert_inum = "<font style='color:red;font-weight:bold;'>Ce numéro existe déjà.</font>";
			}
		}else {
			$alert_inum = "";
		}

		if($receveur != ""){
			if($old_num_geo == ""){
				$old_num_geo = '0';
			}
			if($old_num_sip == ""){
				$old_num_sip = '0';
			}
			if($old_inum == ""){
				$old_inum = '0';
			}

			if($num_geo == ""){
				$num_geo = '0';
			}
			if($num_sip == ""){
				$num_sip = '0';
			}
			if($inum == ""){
				$inum = '0';
			}

			exec('sudo /var/script_beep/update_set_incoming.sh '.$receveur.' '.$num_geo.' '.$num_sip.' '.$inum.' '.$old_num_geo.' '.$old_num_sip.' '.$old_inum);
		}	

	}else if(isset($_POST["supprimer_set"])){
		$id_set_num = $_POST["id_set_num"];
		$num_geo = $_POST["num_geo"];
		$num_sip = $_POST["num_sip"];
		$inum = $_POST["inum"];
		$receveur = $_POST["receveur"];		

		if($num_geo == ""){
			$num_geo = '0';
		}
		if($num_sip == ""){
			$num_sip = '0';
		}
		if($inum == ""){
			$inum = '0';
		}

		exec('sudo /var/script_beep/cancel_conf_incoming.sh '.$receveur.' '.$num_geo.' '.$num_sip.' '.$inum);

		del_set($id_set_num);
		
		$alert = "<font style='color:green;font-weight:bold;'>le set a bien été supprimé.</font>";		
		
	} else if(isset($_POST["configurer_set"])){
		$id_set_num = $_POST["id_set_num"];
		$num_geo = $_POST["num_geo"];
		$num_sip = $_POST["num_sip"];
		$inum = $_POST["inum"];
		$choix = $_POST["receveur"];
		$old_receiver = $_POST["old_receiver"];

		if($num_geo == ""){
			$num_geo = '0';
		}
		if($num_sip == ""){
			$num_sip = '0';
		}
		if($inum == ""){
			$inum = '0';
		}

		if($old_receiver != ""){
			exec('sudo /var/script_beep/cancel_conf_incoming.sh '.$old_receiver.' '.$num_geo.' '.$num_sip.' '.$inum);
		} 

		if($choix == '1'){

			$receveur = htmlspecialchars($_POST["svi"]);
			$p1 = $_POST["proposition1"];
			$p2 = $_POST["proposition2"];
			$p3 = $_POST["proposition3"];

			if($p1 == $p2 || $p2 == $p3 || $p3 == $p1){
				$alert = "<font style='color:red;font-weight:bold;'>Les trois propositions doivent être différentes.</font>";
			} else if($receveur == ""){
				$alert = "<font style='color:red;font-weight:bold;'>Renseignez le nom du SVI.</font>";
			} else {
				
				if($p1 == "utilisateur"){
					$p1 = htmlspecialchars($_POST["user1"]);
				} else if($p2 == "utilisateur"){
					$p2 = htmlspecialchars($_POST["user2"]);
				}else if($p3 == "utilisateur"){
					$p3 = htmlspecialchars($_POST["user3"]);	
				} else if($p1 == "callcenter"){
					$nom_call = $_POST["call1"];
				}else if($p2 == "callcenter"){
					$nom_call = $_POST["call2"];
				}else if($p3 == "callcenter"){
					$nom_call = $_POST["call3"];
				}

				if($p1 != "" && $p2 != "" && $p3 != ""){				
					add_receiver($id_set_num,$receveur);
					if (isset($nom_call)){
						exec('sudo /var/script_beep/incoming_call.sh '.$choix.' '.$receveur.' '.$num_geo.' '.$num_sip.' '.$inum.' '.$p1.' '.$p2.' '.$p3.' '.$nom_call);
					} else {
						exec('sudo /var/script_beep/incoming_call.sh '.$choix.' '.$receveur.' '.$num_geo.' '.$num_sip.' '.$inum.' '.$p1.' '.$p2.' '.$p3);
					}
					$alert = "<font style='color:green;font-weight:bold;'>Le set de numéro a bien été configuré sur le receveur $receveur.</font>";
				} else {
					$alert = "<font style='color:red;font-weight:bold;'>Renseignez le login de l'utilisateur que le SVI doit appeler.</font>";
				}
			}

		} else if($choix == '2'){
			$receveur = "standard";
			add_receiver($id_set_num,$receveur);
			exec('sudo /var/script_beep/incoming_call.sh '.$choix.' '.$receveur.' '.$num_geo.' '.$num_sip.' '.$inum);
			$alert = "<font style='color:green;font-weight:bold;'>Le set de numéro a bien été configuré sur le receveur $receveur.</font>";
		} else {
			$receveur = htmlspecialchars($_POST["utilisateur"]);
			if($receveur == ""){
				$alert = "<font style='color:red;font-weight:bold;'>Renseignez le nom de l'utilisateur.</font>";
			} else {
				add_receiver($id_set_num,$receveur);
				exec('sudo /var/script_beep/incoming_call.sh '.$choix.' '.$receveur.' '.$num_geo.' '.$num_sip.' '.$inum);
				$alert = "<font style='color:green;font-weight:bold;'>Le set de numéro a bien été configuré sur le receveur $receveur.</font>";
			}
		}

		if($old_receiver != ""){
			$alert = "<font style='color:green;font-weight:bold;'>Le set de numéro a bien été configuré sur le nouveau recepteur $receveur.</font>";
		}
		
	}

	$all_sets = all_sets();
	$all_gateways = all_gateway();
	$all_callcenters = all_callcenters();
	$all_users = all_users();
	include("./vues/admin_numero_entrant.php");
	
?>