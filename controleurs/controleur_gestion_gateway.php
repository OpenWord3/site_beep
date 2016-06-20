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
			$alert = "Ce compte associer au host que vous avez entré existe déja.";
			
		} else {
			new_compte_gateway($compte,$mdp,$host,$port);
			exec('sudo /var/script_beep/add_trunk.sh '.$compte.' '.$mdp.' '.$host.' '.$port);			
			$alert = "La gateway a bien été ajouté.";
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
		$alert = "Le mot de passe de la gateway a bien été modifié.";

	}else if(isset($_POST["supprimer"])){

		#il ne faudrait pas oublier de supprimer les configurations qui seront faites pour les numeros entrants
		$id_gateway = $_POST["id_gateway"];
		$compte = nom_gateway($id_gateway);
		$host = host_gateway($id_gateway);
		$port = port_gateway($id_gateway);
		del_incom_num($id_gateway);
		$id_switch_gateway = id_switch_gateway($id_gateway);
		$nom_switch_gateway = nom_switch_gateway($id_gateway);
		$nom_groupe = nom_groupe($id_switch_gateway);		
		
		del_switch($id_switch);

		del_gateway($id_gateway);
		exec('sudo /var/script_beep/del_switch.sh '.$compte.' '.$host.' '.$port.' '.$nom_groupe.' '.$nom_switch_gateway);
		exec('sudo /var/script_beep/remove_trunk.sh '.$compte.' '.$host.' '.$port);
		$alert = "La gateway a bien été supprimée.";
	}

	include("./vues/admin_gateways.php");
?>