<?php

	$list_groupe_gateway = list_groupe_gateway();
	$liste_gateway = all_gateway();

	if(isset($_POST["ajouter_gateway"])){
		$compte=htmlspecialchars($_POST["compte"]);
		$mdp=$_POST["mdp"];
		$host=htmlspecialchars($_POST["host"]);
		$port=htmlspecialchars($_POST["port"]);

		$verif_compte=compte_gateway($compte,$host,$port);
		if($verif_compte != 0){
			$alert = "<font style='color:red;font-weight:bold;'>Ce compte associer au host que vous avez entré existe déja.</font>";
			
		} else {
			new_compte_gateway($compte,$mdp,$host,$port);
			exec('sudo /var/script_beep/add_trunk.sh '.$compte.' '.$mdp.' '.$host.' '.$port);
			$alert = "<font style='color:green;font-weight:bold;'>La gateway a bien été ajouté.</font>";
		}

	}else if(isset($_POST["modifier"])){
		$new_mdp=$_POST["new_mdp"];
		$id_gateway=$_POST["id_gateway"];
		$compte = nom_gateway($id_gateway);
		$host = host_gateway($id_gateway);
		$port = port_gateway($id_gateway);
		$mdp = mdp_gateway($id_gateway);
		change_mdp($new_mdp,$id_gateway);
		exec('sudo /var/script_beep/modif_trunk.sh '.$compte.' '.$new_mdp.' '.$host.' '.$port.' '.$mdp);
		$alert = "<font style='color:green;font-weight:bold;'>Le mot de passe de la gateway a bien été modifié.</font>";

	}else if(isset($_POST["supprimer"])){

		#il ne faudrait pas oublier de supprimer les configurations qui seront faites pour les numeros entrants
		$id_gateway = $_POST["id_gateway"];
		$compte = nom_gateway($id_gateway);
		$host = host_gateway($id_gateway);
		$port = port_gateway($id_gateway);

		del_incom_num($id_gateway);

		$info_set = info_set($id_gateway);
		foreach($info_set as $result){
			exec('sudo /var/script_beep/cancel_conf_incoming.sh '.$result['receveur'].' '.$result['num_geo'].' '.$result['num_sip'].' '.$result['inum']);
		}
		

		$switch_exist = switch_exist($id_gateway);

		if($switch_exist != 0){
			$id_switch_gateway = id_switch_gateway($id_gateway);			

			foreach($id_switch_gateway as $result){				
				$nom_groupe = nom_groupe($result['id_switch']);
				$nom_switch_gateway = $result['switch'];
				exec('sudo /var/script_beep/del_switch.sh '.$compte.' '.$host.' '.$port.' '.$nom_groupe.' '.$nom_switch_gateway);
				del_switch($result['id_switch']);
			}			
			
		}
		del_gateway($id_gateway);		
		exec('sudo /var/script_beep/remove_trunk.sh '.$compte.' '.$host.' '.$port);
		$alert = "<font style='color:green;font-weight:bold;'>La gateway a bien été supprimée.</font>";
	}

	$list_groupe_gateway = list_groupe_gateway();
	$liste_gateway = all_gateway();

	include("./vues/admin_gateways.php");
?>