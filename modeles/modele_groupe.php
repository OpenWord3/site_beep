<?php
	function add_groupe($contexte,$type_contexte){
		global $bdd;
		//$type_contexte = 1;
		$req = $bdd->prepare("INSERT INTO `contextes`(`nom`,`type_contexte`) values(:nom,:type_contexte);");
		$req->execute(array(
							'nom'=>$contexte,
							'type_contexte'=>$type_contexte));
		$req->closeCursor();
	}
	
	function find_id_groupe($contexte){
		global $bdd;
		$req = $bdd->query("SELECT id_contexte,nom FROM contextes WHERE nom like '$contexte'");
		$donnees = $req->fetch();
		return $donnees;
	}

	function id_groupe($contexte){
		global $bdd;
		$req = $bdd->query("SELECT id_contexte FROM contextes WHERE nom like '$contexte'");

		while($results = $req->fetch()){
			$result = $results["id_contexte"];
		}
		
		$req->closeCursor();

		return $result;
	}
	
	function show_groupe(){
		global $bdd;
		$req = $bdd->query("SELECT * FROM contextes WHERE type_contexte = 1");
		return $req;
	}

	//Fonction qui liste tous les groupes externes
	function all_groupes_externes(){
		global $bdd;

		$req=$bdd->query("SELECT * FROM `contextes` WHERE `type_contexte` = 0 AND id_contexte != 10");
		$req->execute(array(0));
		$result = $req->fetchAll();
		
		$req->closeCursor();
		return $result;
	}
	
	function select_groupe(){
		global $bdd;
		$req = $bdd->query("SELECT nom FROM contextes");
		return $req;
	}
	
	function check_groupe($contexte){
		global $bdd;
		
		$req = $bdd->query("SELECT nom FROM contextes WHERE nom like '$contexte'");
		$donnees = $req->fetch();
		return $donnees;
	}

	//Fonction qui recherche les groupes pour switch
	function check_groupe_externe($contexte){
		global $bdd;
		
		$req = $bdd->query("SELECT nom FROM contextes WHERE nom like '$contexte' AND type_contexte = 0");
		$donnees = $req->fetch();
		return $donnees;
	}
	
	//Fonction qui supprime un groupe externe
	function del_groupe_externe($id_contexte){
		global $bdd;
		$id_default = '10';

		$req = $bdd->query("UPDATE `contextes_has_switchs` SET id_contexte = '$id_default' WHERE id_contexte = '$id_contexte'");
		$req = $bdd->query("DELETE FROM `contextes` WHERE `id_contexte` = '$id_contexte'");

		$req->closeCursor();
	}

	function find_groupe_default(){
		global $bdd;
		
		$req = $bdd->query("SELECT id_contexte FROM contextes WHERE nom like 'default'");
		$donnees = $req->fetch();
		return $donnees;
	}
	
	function move_users_groupe($id_contexte_default,$id_contexte){
		global $bdd;
		
		$req = $bdd->query("UPDATE users SET id_contexte = '$id_contexte_default' WHERE id_contexte = $id_contexte");
		$req->closeCursor();
	}
	
	function del_groupe($id_contexte){
		global $bdd;
		
		$req = $bdd->prepare("DELETE FROM contextes WHERE id_contexte = '$id_contexte'");
		$req->execute(array(
						'id_contexte'=>$id_contexte));
	
		$req->closeCursor();		
	}
	
	function find_user_groupe($login){
		global $bdd;
		
		$req = $bdd->query("SELECT contextes.nom FROM contextes JOIN users ON contextes.id_contexte = users.id_contexte WHERE login LIKE '$login'");
		$donnees = $req->fetch();
		
		return $donnees;
	}

?>