<?php
	//Fonction qui recupere le compte de la gateway
	function compte_gateway($compte,$host,$port){
		global $bdd;

		$req = $bdd->prepare("SELECT compte FROM `gateways` WHERE compte = :compte AND host = :host AND port = :port");
		$req->execute(array("compte"=>$compte,
							"host"=>$host,
							"port"=>$port));
		$exist = $req->rowCount();
		$req->closeCursor();

		return $exist;
	}

	//Fonction qui recuper le nom de la gateway
	function nom_gateway($id_gateway){
		global $bdd;

		$req=$bdd->prepare("SELECT compte FROM gateways WHERE id_gateway = :id_gateway");
		$req->execute(array("id_gateway"=>$id_gateway));

		while($results = $req->fetch()){
			$result = $results["compte"];
		}
		
		$req->closeCursor();

		return $result;
	}

	//Fonction qui recuper le host de la gateway
	function host_gateway($id_gateway){
		global $bdd;

		$req=$bdd->prepare("SELECT host FROM gateways WHERE id_gateway = :id_gateway");
		$req->execute(array("id_gateway"=>$id_gateway));

		while($results = $req->fetch()){
			$result = $results["host"];
		}
		
		$req->closeCursor();

		return $result;
	}

	//Fonction qui recuper le port de la gateway
	function port_gateway($id_gateway){
		global $bdd;

		$req=$bdd->prepare("SELECT port FROM gateways WHERE id_gateway = :id_gateway");
		$req->execute(array("id_gateway"=>$id_gateway));

		while($results = $req->fetch()){
			$result = $results["port"];
		}
		
		$req->closeCursor();

		return $result;
	}

	//Fonction qui ajoute une nouvelle gateway 
	function new_compte_gateway($compte,$mdp,$host,$port){
		global $bdd;

		$req = $bdd->prepare("INSERT INTO `gateways` (`compte`, `mdp`, `host`, `port`) VALUES (:compte, :mdp, :host, :port);");
		$req->execute(array(
							"compte"=>$compte,
							"mdp"=>$mdp,
							"host"=>$host,
							"port"=>$port));
		$req->closeCursor();
	}

	//Fonction qui ajoute les numeros entrants de la gateway
	function numbers_gateway($num_geo,$num_sip,$inum,$id_compte_gateway){
		global $bdd;

		$req = $bdd->prepare("INSERT INTO `set_nums` (`num_geo`, `num_sip`, `inum`, `id_gateway`) VALUES (:num_geo, :num_sip, :inum, :id);");
		$req->execute(array(
							"num_geo"=>$num_geo,
							"num_sip"=>$num_sip,
							"inum"=>$inum,
							"id"=>$id_compte_gateway));
		$req->closeCursor();
	}

	//Fonction qui recupere l'id de la derniere gateway
	function id_compte_gateway($compte){
		global $bdd;

		$req = $bdd->prepare("SELECT id_gateway  FROM gateways WHERE compte = :compte");
		$req->execute(array("compte"=>$compte));

		while($results = $req->fetch()){
			$result = $results["id_gateway"];
		}
		
		$req->closeCursor();

		return $result;
	}

	//Fonction qui met la liaison entre une gateway et un groupe
	function new_liaison($id_compte_gateway,$id_groupe_gateway){
		global $bdd;

		$req = $bdd->prepare("INSERT INTO `gateway_has_contextes` (`id_gateway`, `id_contexte`) VALUES (:gateway, :groupe);");
		$req->execute(array(
							"gateway"=>$id_compte_gateway,
							"groupe"=>$id_groupe_gateway));
		$req->closeCursor();
	}

	//Fonction qui liste tous les groupes en rapport avec les gateways
	function list_groupe_gateway(){
		global $bdd;

		$req = $bdd->prepare("SELECT id_contexte,nom FROM contextes WHERE type_contexte = FALSE");
		$req->execute(array(0));
		$result = $req->fetchAll();
		
		$req->closeCursor();
		return $result;
	}

	//Fonction qui liste tous les comptes gateway
	function all_gateway(){
		global $bdd;

		$req = $bdd->prepare("SELECT id_gateway,compte,mdp,host,port FROM gateways");
		$req->execute(array(0));
		$result = $req->fetchAll();
		
		$req->closeCursor();
		return $result;
	}

	//Fontion qui modifie le mot de passe de la gateway
	function change_mdp($new_mdp,$id_gateway){
		global $bdd;

		$req = $bdd->query("UPDATE `gateways` SET `mdp` = '$new_mdp' WHERE `id_gateway` = '$id_gateway'");

		$req->closeCursor();
	}

	//Fonction qui supprime une gateway
	function del_gateway($id_gateway){
		global $bdd;

		$req = $bdd->query("DELETE FROM `gateways` WHERE id_gateway = '$id_gateway'");

		$req->closeCursor();
	}

	//Fonction qui supprime les numeros pour les appels entrants pour la gateway
	function del_incom_num($id_gateway){
		global $bdd;

		$req = $bdd->query("DELETE FROM `set_nums` WHERE id_gateway = '$id_gateway'");

		$req->closeCursor();
	}
?>