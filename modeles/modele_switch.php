<?php
	//Fonction qui verifie si un switch existe deja
	function verif_switch($compte,$host,$groupe,$switch){
		global $bdd;

		$req = $bdd->prepare("SELECT switch FROM switchs 
							 JOIN gateways ON gateways.id_gateway = switchs.id_gateway 
							 JOIN contextes_has_switchs ON switchs.id_switch = contextes_has_switchs.id_switch
							 JOIN contextes ON contextes.id_contexte = contextes_has_switchs.id_contexte
							 WHERE compte = :compte AND host = :host AND nom = :groupe AND switch = :switch");
		$req->execute(array("compte"=>$compte,
							"host"=>$host,
							"groupe"=>$groupe,
							"switch"=>$switch));

		$exist = $req->rowCount();
		$req->closeCursor();

		return $exist;
	}

	//Fonction qui ajoute un nouveau switch
	function add_switch($id_compte,$switch){
		global $bdd;

		$req = $bdd->query("INSERT INTO `switchs` (`switch`,`id_gateway`) VALUES ('$switch','$id_compte')");

		$req->closeCursor();
	}

	//Fonction qui recupere l'id du dernier switch ajouter
	function id_last_switch(){
		global $bdd;

		$req = $bdd->query("SELECT MAX(`id_switch`) AS last FROM switchs");

		while($results = $req->fetch()){
			$result = $results["last"];
		}
		
		$req->closeCursor();

		return $result;
	}

	//Fonction qui gere la liaison entre le contexte et le switch
	function link_switch_contexte($id_groupe,$id_switch){
		global $bdd;

		$req = $bdd->query("INSERT INTO `contextes_has_switchs` (`id_contexte`,`id_switch`) VALUES ('$id_groupe','$id_switch')");

		$req->closeCursor();
	}

	//Fonction qui affiche les switchs
	function all_switchs(){
		global $bdd;

		$req = $bdd->query("SELECT switchs.id_switch,compte,host,port,nom,switch FROM switchs 
							 JOIN gateways ON gateways.id_gateway = switchs.id_gateway 
							 JOIN contextes_has_switchs ON switchs.id_switch = contextes_has_switchs.id_switch
							 JOIN contextes ON contextes.id_contexte = contextes_has_switchs.id_contexte");
		$req->execute(array(0));
		$result = $req->fetchAll();
		
		$req->closeCursor();
		return $result;
	}

	//Fonction qui recupere l'id de la gateway du switch
	function id_gateway_switch($compte,$host,$port){
		global $bdd;

		$req = $bdd->prepare("SELECT `id_gateway` FROM `gateways` WHERE compte = :compte AND host = :host AND port = :port");
		$req->execute(array("compte"=>$compte,
							"host"=>$host,
							"port"=>$port));

		while($results = $req->fetch()){
			$result = $results["id_gateway"];
		}
		
		$req->closeCursor();

		return $result;	
	}

	//Fonction qui recupere l'id du groupe du switch
	function id_groupe_switch($groupe){
		global $bdd;

		$req = $bdd->prepare("SELECT id_contexte FROM `contextes` WHERE nom = :groupe");
		$req->execute(array("groupe"=>$groupe));
		
		while($results = $req->fetch()){
			$result = $results["id_contexte"];
		}
		
		$req->closeCursor();

		return $result;
	}

	//Fonction qui supprime un switch
	function del_switch($id_switch){
		global $bdd;

		$req = $bdd->query("DELETE FROM `contextes_has_switchs` WHERE id_switch = '$id_switch'");
		$req = $bdd->query("DELETE FROM `switchs` WHERE `id_switch` = '$id_switch'");

		$req->closeCursor();
	}

	//Fonction qui verifie le compte et son host avant ajout d'un switch
	function check_compte_host($compte,$host){
		global $bdd;

		$req = $bdd->prepare("SELECT compte FROM gateways WHERE compte = :compte AND host = :host");
		$req->execute(array("compte"=>$compte,
							"host"=>$host));

		$exist = $req->rowCount();
		$req->closeCursor();

		return $exist;
	}

	//Fonction qui renvoie le nom du groupe du switch
	function nom_groupe($id_switch){
		global $bdd;
		$req = $bdd->query("SELECT nom FROM switchs 
							 JOIN gateways ON gateways.id_gateway = switchs.id_gateway 
							 JOIN contextes_has_switchs ON switchs.id_switch = contextes_has_switchs.id_switch
							 JOIN contextes ON contextes.id_contexte = contextes_has_switchs.id_contexte 
							 WHERE switchs.id_switch = '$id_switch'");
		while($results = $req->fetch()){
			$result = $results["nom"];
		}
		
		$req->closeCursor();

		return $result;
	}

?>