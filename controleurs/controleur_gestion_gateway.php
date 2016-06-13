<?php

	$list_groupe_gateway = list_groupe_gateway();
	$liste_gateway = all_gateway();

	if(isset($_POST["ajouter_gateway"])){
		$compte=htmlspecialchars($_POST["compte"]);
		$mdp=$_POST["mdp"];
		$host=htmlspecialchars($_POST["host"]);
		$port=htmlspecialchars($_POST["port"]);

		$verif_compte=compte_gateway($compte,$host);
		if($verif_compte != 0){
			$alert = "Ce compte associer au host que vous avez entré existe déja.";
			include("./vues/admin_gateways.php");
		} else {
			new_compte_gateway($compte,$mdp,$host,$port);			
			#$id_groupe_switch = id_groupe_switch($groupe);
			#new_liaison($id_compte_gateway,$id_groupe_switch);
			$alert = "La gateway a bien été ajouté.";
			include("./vues/admin_gateways.php");
		}

	}else if(isset($_POST["ajouter_numero"])){
		$num_geo = $_POST["num_geo"];
		$num_sip = $_POST["num_sip"];
		$inum = $_POST["inum"];
		$compte = $_POST["compte"];
		$id_compte_gateway = id_compte_gateway($compte);
		numbers_gateway($num_geo,$num_sip,$inum,$id_compte_gateway);
		$alert = "le(s) numeros ont bien été enregistrés";
		include("./vues/admin_gateways.php");

	}else if(isset($_POST["ajouter_switch"])){
		$switch = $_POST["switch"];
		$compte = $_POST["compte"];
		$id_compte_gateway = id_compte_gateway($compte);
		add_switch($switch,$id_gateway);
		$alert = $_POST["le switch a bien été enregistrés"];
		include("./vues/admin_gateways.php");

	}else if(isset($_POST["modifier"])){
		$new_mdp=$_POST["new_mdp"];
		$id_gateway=$_POST["id_gateway"];
		change_mdp($new_mdp,$id_gateway);
		$alert = "Le mot de passe de la gateway a bien été modifié.";
		include("./vues/admin_gateways.php");

	}else if(isset($_POST["supprimer"])){
		$id_gateway = $_POST["id_gateway"];
		del_liaison($id_gateway);
		del_incom_num($id_gateway);
		del_gateway($id_gateway);
		$alert = "La gateway a bien été supprimée.";
		include("./vues/admin_gateways.php");

	} else {
		include("./vues/admin_gateways.php");	
	}

	
?>