<?php
	//Fonction qui liste tous les callcenters
	function all_callcenters(){
		global $bdd;

		$req = $bdd->query("SELECT * FROM `call_centers`");
		$req->execute(array(0));
		$result = $req->fetchAll();
		
		$req->closeCursor();
		return $result;
	}

	//Fonction qui verifie si un callcenter existe deja
	function verif_call_center($nom_call){
		global $bdd;

		$req = $bdd->prepare("SELECT `nom` FROM `call_centers` WHERE `nom` = :nom_call");
		$req->execute(array("nom_call"=>$nom_call));

		$exist = $req->rowCount();
		$req->closeCursor();

		return $exist;
	}

	//Fonction qui verifie si le numero existe deja
	function verif_num_call($num_call){
		global $bdd;

		$req = $bdd->prepare("SELECT `num` FROM `call_centers` WHERE `num` = :num_call");
		$req->execute(array("num_call"=>$num_call));

		$exist = $req->rowCount();
		$req->closeCursor();

		return $exist;
	}

	//Fonction qui ajoute un nouveau callcenter
	function add_callcenter($nom_call,$num_call,$strategy){
		global $bdd;

		$req = $bdd->query("INSERT INTO `call_centers` (`nom`, `num`, `strategy`) VALUES ('$nom_call', '$num_call', '$strategy')");

		$req->closeCursor();
	}

	//Fonction qui ajoute un membre a un callcenter
	function add_member($id_callcenter,$id_user){
		global $bdd;

		$req = $bdd->query("INSERT INTO `call_center_users` (`id_callcenter`, `id_user`) VALUES ('$id_callcenter', '$id_user')");

		$req->closeCursor();
	}

	//Fonction qui retire un membre d'un callcenter
	function del_membre($id_callcenter,$id_user){
		global $bdd;

		$req = $bdd->query("DELETE FROM call_center_users WHERE id_callcenter = $id_callcenter AND id_user = $id_user");
		
		$req->closeCursor();
	}

	//Fonction qui modifie la strategy d'un callcenter
	function update_strategy($id_call_center,$strategy){
		global $bdd;

		$req = $bdd->query("UPDATE `call_centers` SET `strategy` = '$strategy' WHERE `id_call_center` = '$id_call_center'");

		$req->closeCursor();
	}

	//Fonction qui affiche les membres d'un callcenter
	function membre_call($nom_call){
		global $bdd;

		$req = $bdd->query("SELECT users.nom,prenom,login,num_transfert,num,mail FROM `users` 
							JOIN `call_center_users` ON call_center_users.id_user = users.id_user 
							JOIN call_centers ON call_centers.id_callcenter = call_center_users.id_callcenter
							WHERE call_centers.nom = '$nom_call'");
	
		$req->execute(array(0));
		$result = $req->fetchAll();
		
		$req->closeCursor();
		return $result;
	}

	//Fonction qui supprime un callcenter
	function del_callcenter($id_call_center){
		global $bdd;

		$req = $bdd->query("DELETE FROM call_center_users WHERE id_callcenter = '$id_call_center'");
		$req = $bdd->query("DELETE FROM call_centers WHERE id_callcenter = $id_call_center");

		$req->closeCursor();
	}

	//Fonction qui recupere l'id d'un callcenter
	function id_call($nom_call){
		global $bdd;

		$req = $bdd->prepare("SELECT id_callcenter FROM call_centers WHERE nom = :nom_call");
		$req->execute(array("nom_call"=>$nom_call));

		while($results = $req->fetch()){
			$result = $results["id_callcenter"];
		}
		
		$req->closeCursor();

		return $result;
	}

	//Fonction qui verifie si l'utilisateur est deja dans le centre d'appel
	function verif_membre($id_callcenter,$id_user){
		global $bdd;

		$req = $bdd->prepare("SELECT * FROM call_center_users WHERE id_callcenter = :id_callcenter AND id_user = :id_user");
		$req->execute(array(
							"id_callcenter"=>$id_callcenter,
							"id_user"=>$id_user));

		$exist = $req->rowCount();
		$req->closeCursor();

		return $exist;	
	}
?>