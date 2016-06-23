<?php
	
	//Fonction qui verifie si le numero geographique existe deja
	function verif_num_geo($num_geo){
		global $bdd;

		$req = $bdd->prepare("SELECT `num_geo` FROM `set_nums` WHERE `num_geo` = :num_geo");
		$req->execute(array("num_geo"=>$num_geo));

		$exist = $req->rowCount();
		$req->closeCursor();

		return $exist;
	}

	//Function which checks if the sip number exists
	function verif_num_sip($num_sip){
		global $bdd;

		$req = $bdd->prepare("SELECT `num_sip` FROM `set_nums` WHERE `num_sip` = :num_sip");
		$req->execute(array("num_sip"=>$num_sip));

		$exist = $req->rowCount();
		$req->closeCursor();

		return $exist;
	}

	//Function that checks if the inum exists
	function verif_inum($inum){
		global $bdd;

		$req = $bdd->prepare("SELECT `inum` FROM `set_nums` WHERE `inum` = :inum");
		$req->execute(array("inum"=>$inum));

		$exist = $req->rowCount();
		$req->closeCursor();

		return $exist;
	}

	//Fomction qui creer le set
	function add_set($id_gateway){
		global $bdd;

		$req = $bdd->query("INSERT INTO `set_nums` (`num_geo`, `num_sip`, `inum`, `id_gateway`) VALUES (NULL, NULL, NULL, '$id_gateway');");

		$req->closeCursor();
	}

	//Fonction qui ajoute un numero geographique
	function add_num_geo($id_set_num,$num_geo){
		global $bdd;

		$req = $bdd->query("UPDATE `set_nums` SET `num_geo` = '$num_geo' WHERE `id_set_num` = '$id_set_num';");

		$req->closeCursor();
	}

	//Fonction qui ajoute un numero sip
	function add_num_sip($id_set_num,$num_sip){
		global $bdd;

		$req = $bdd->query("UPDATE `set_nums` SET `num_sip` = '$num_sip' WHERE `id_set_num` = '$id_set_num';");

		$req->closeCursor();
	}

	//Fonction qui ajoute un inum
	function add_inum($id_set_num,$num_inum){
		global $bdd;

		$req = $bdd->query("UPDATE `set_nums` SET `inum` = '$num_inum' WHERE `id_set_num` = '$id_set_num';");

		$req->closeCursor();
	}

	//Fonction qui recupere l'id du set
	function id_set(){
		global $bdd;

		$req = $bdd->query("SELECT Max(id_set_num) as last FROM set_nums");

		while($results = $req->fetch()){
			$result = $results["last"];
		}
		
		$req->closeCursor();

		return $result;
	}

	//Fonction qui affiche tous les sets de numeros
	function all_sets(){
		global $bdd;

		$req = $bdd->query("SELECT `id_set_num`,`num_geo`,`num_sip`,`inum`,`compte`,`host`,`receveur` FROM `set_nums` JOIN `gateways` ON gateways.id_gateway = set_nums.id_gateway");
		$req->execute(array(0));
		$result = $req->fetchAll();
		
		$req->closeCursor();
		return $result;
	}

	//Fonction qui supprime un set de numero
	function del_set($id_set_num){
		global $bdd;

		$req = $bdd->query("DELETE FROM `set_nums` WHERE `id_set_num` = '$id_set_num'");

		$req->closeCursor();		
	}

	//Fonction qui ajoute un receveur au set
	function add_receiver($id_set_num,$receveur){
		global $bdd;

		$req = $bdd->query("UPDATE `set_nums` SET `receveur` = '$receveur' WHERE `id_set_num` = '$id_set_num'");

		$req->closeCursor();
	}
?>