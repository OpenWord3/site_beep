<?php
	//Fonction qui liste tous les groupes normaux
	function all_groupes_normaux(){
		global $bdd;

		$req=$bdd->query("SELECT id_contexte,nom FROM contextes WHERE type_contexte = '1'");

		$req->execute(array(0));
		$result = $req->fetchAll();
		
		$req->closeCursor();
		return $result;
	}

	//Fonction qui regroupe tous les groupes de gateway
	//voir modele_gateway.php [list_groupe_gateway()]

	//Fonction qui verifie si le droit existe (unidirectionnel)
	function check_droit_unidir($id_groupe1,$id_groupe2){
		global $bdd;

		$req=$bdd->prepare("SELECT * FROM droits WHERE groupe_id_groupe = :id_groupe1 AND groupe_id_groupe1 = :id_groupe2");
		$req->execute(array("id_groupe1"=>$id_groupe1,
							"id_groupe2"=>$id_groupe2));

		$exist = $req->rowCount();
		$req->closeCursor();

		return $exist;
	}

	//Fonction qui verifie si le droit existe (bidirectionnel)
	function check_droit_bidir($id_groupe1,$id_groupe2){
		global $bdd;

		$req=$bdd->prepare("SELECT * FROM droits WHERE groupe_id_groupe = :id_groupe1 AND groupe_id_groupe1 = :id_groupe2");
		$req->execute(array("id_groupe1"=>$id_groupe1,
							"id_groupe2"=>$id_groupe2));

		$exist = $req->rowCount();
		$req->closeCursor();

		return $exist;
	}

	//Fonction qui verifie les droits externes
	function check_droit_extern($id_groupe1,$id_groupe2){
		global $bdd;

		$req=$bdd->prepare("SELECT * FROM droits WHERE groupe_id_groupe = :id_groupe1 AND groupe_id_groupe1 = :id_groupe2");
		$req->execute(array("id_groupe1"=>$id_groupe1,
							"id_groupe2"=>$id_groupe2));

		$exist = $req->rowCount();
		$req->closeCursor();

		return $exist;
	}

	//Fonction qui ajoute un nouveau droit
	function new_droit($id_groupe1,$id_groupe2,$unidir,$bidir){
		global $bdd;

		$req=$bdd->query("INSERT INTO droits VALUES ('$id_groupe1', '$id_groupe2', '$unidir', '$bidir');");

		$req->closeCursor();
	}

	//Fonction qui ajoute un nouveau droit externe
	function new_droit_extern($id_groupe1,$id_groupe2){
		global $bdd;

		$req=$bdd->query("INSERT INTO `droits` (`groupe_id_groupe`, `groupe_id_groupe1`) VALUES ('$id_groupe1', '$id_groupe2');");

		$req->closeCursor();
	}

	//Fonction qui retire le droit d'appel unidirectionnel
	function del_droit_unidir($id_groupe1,$id_groupe2){
		global $bdd;

		$req=$bdd->query("DELETE FROM droits WHERE groupe_id_groupe = '$id_groupe1' AND groupe_id_groupe1 = '$id_groupe2'");

		$req->closeCursor();
	}

	//Fonction qui retire le droit d'appel unidirectionnel
	function del_droit_bidir($id_groupe1,$id_groupe2){
		global $bdd;

		$req=$bdd->query("DELETE FROM droits WHERE groupe_id_groupe = '$id_groupe1' AND groupe_id_groupe1 = '$id_groupe2'");

		$req->closeCursor();
	}

	//Fonction qui retire le droit d'appel externe
	function del_droit_extern($id_groupe1,$id_groupe2){
		global $bdd;

		$req=$bdd->query("DELETE FROM droits WHERE groupe_id_groupe = '$id_groupe1' AND groupe_id_groupe1 = '$id_groupe2'");

		$req->closeCursor();
	}

	//Fonction qui affiche tous les droits internes
	function all_droits_internes(){
		global $bdd;

		$req=$bdd->query("SELECT g1.id_contexte as idg1,g1.nom as nomg1,g2.id_contexte as idg2,g2.nom as nomg2,unidirectionnel,bidirectionnel FROM droits 
							JOIN contextes g1 ON groupe_id_groupe = g1.id_contexte 
							JOIN contextes g2 ON groupe_id_groupe1 = g2.id_contexte 
							WHERE (g1.type_contexte = TRUE AND g2.type_contexte = TRUE AND unidirectionnel = '1') 
							OR (g1.type_contexte = TRUE AND g2.type_contexte = TRUE AND bidirectionnel = '1')");
		$req->execute(array(0));
		$result = $req->fetchAll();
		
		$req->closeCursor();
		return $result;
	}

	//Fonction qui affiche tous les droits externes
	function all_droits_externes(){
		global $bdd;

		$req=$bdd->query("SELECT g1.id_contexte as idg1,g1.nom as nomg1,g2.id_contexte as idg2,g2.nom as nomg2 FROM droits 
							JOIN contextes g1 ON groupe_id_groupe = g1.id_contexte 
							JOIN contextes g2 ON groupe_id_groupe1 = g2.id_contexte 
							WHERE g1.type_contexte = TRUE AND g2.type_contexte = '0'");
		$req->execute(array(0));
		$result = $req->fetchAll();
		
		$req->closeCursor();
		return $result;
	}
	
?>