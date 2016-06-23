<?php
	
	function add_user($nom,$prenom,$login,$mdp,$mail,$num_transfert,$option_transfert,$role,$droit_conf,$jours,$horaires,$id_contexte){
		global $bdd;
		$req = $bdd->prepare("INSERT INTO `users` (`nom`,`prenom`,`login`,`mdp`,`mail`,`num_transfert`,`option_transfert`,`role`,`droit_conf`,`jours`,`horaires`,`id_contexte`) values (:nom,:prenom,:login,:mdp,:mail,:num_transfert,:option_transfert,:role,:droit_conf,:jours,:horaires,:id_contexte);");
		$req->execute(array(
							'nom'=>$nom,
							'prenom'=>$prenom,
							'login'=>$login,
							'mdp'=>$mdp,
							'mail'=>$mail,
							'num_transfert'=>$num_transfert,
							'option_transfert'=>$option_transfert,
							'role'=>$role,
							'droit_conf'=>$droit_conf,
							'jours'=>$jours,
							'horaires'=>$horaires,
							'id_contexte'=>$id_contexte));
		$req->closeCursor();
	
	}

	function add_num($num,$protocole,$id_user){
		global $bdd;
		
		$req = $bdd->prepare("INSERT INTO `numeros` (`num`,`protocole`,`id_user`) VALUES (:num,:protocole,:id_user);");
		$req->execute(array(
							'num'=>$num,
							'protocole'=>$protocole,
							'id_user'=>$id_user));
		$req->closeCursor();
	}
	
	function add_num_dahdi($num,$protocole,$id_user,$port){
		global $bdd;
		
		$req = $bdd->prepare("INSERT INTO `numeros` (`num`,`protocole`,`id_user`,`port`) VALUES (:num,:protocole,:id_user,:port);");
		$req->execute(array(
							'num'=>$num,
							'protocole'=>$protocole,
							'id_user'=>$id_user,
							'port'=>$port));
		$req->closeCursor();
	}
	
	function count_dahdi(){
		global $bdd;
		
		$req = $bdd->query("SELECT COUNT(protocole) AS nb_dahdi FROM numeros WHERE protocole like 'DAHDI'");
		$donnees = $req->fetch();
		
		return $donnees;
	}
	
	function find_id_user($login){
		global $bdd;
		$req = $bdd->query("SELECT id_user FROM users WHERE login like '$login'");
		$donnees = $req->fetch();
		return $donnees;
	}	
	
	function del_user_conf($id_user){
	global $bdd;
	$req = $bdd->query("DELETE FROM conferences WHERE id_user = $id_user");
	$req->execute(array(
						'id_user'=>$id_user));
	
	$req->closeCursor();
	}
	
	function del_user($id_user){
	global $bdd;
	
	$req = $bdd->prepare("DELETE users FROM users JOIN numeros ON users.id_user = numeros.id_user WHERE users.id_user = $id_user");
	$req->execute(array(
						'id_user'=>$id_user));
	
	$req->closeCursor();
	}
	
	function select_users($contexte){
		global $bdd;
		
		$req = $bdd->query("SELECT * FROM contextes JOIN users ON contextes.id_contexte = users.id_contexte JOIN numeros ON users.id_user = numeros.id_user WHERE contextes.nom like '$contexte'");
		//$donnees = $req->fetch();
		return $req;
	}
	
	function select_user($id_user){
		global $bdd;
		
		$req = $bdd->query("SELECT * FROM users JOIN numeros ON users.id_user = numeros.id_user WHERE users.id_user = '$id_user'");
		$donnees = $req->fetch();
		return $donnees;
	}
	
	function update_user($nom,$prenom,$login,$mdp,$mail,$num_transfert,$option_transfert,$role,$droit_conf,$jours,$horaires,$id_contexte,$id_user){
		global $bdd;
		
		$req = $bdd->query("UPDATE users SET nom = '$nom', prenom = '$prenom', login = '$login', mdp = '$mdp', mail = '$mail', num_transfert = '$num_transfert', option_transfert = '$option_transfert', role = '$role', droit_conf = '$droit_conf', jours = '$jours', horaires = '$horaires', id_contexte = '$id_contexte' WHERE id_user = '$id_user'");
		$req->closeCursor();
	}
	
	function update_num($num,$protocole,$id_user){
		global $bdd;
		
		$req = $bdd->query("UPDATE numeros SET num = '$num', protocole = '$protocole', port = NULL WHERE id_user = '$id_user'");
		$req->closeCursor();
	}
	
	function nums_users(){
		global $bdd;
		
		$req = $bdd->query("SELECT num FROM numeros");
		return $req;
	}	
	
	function nums_conferences(){
		global $bdd;
		
		$req = $bdd->query("SELECT num FROM conferences");
		return $req;
		
	}	
	
	function nums_callcenters(){
		global $bdd;
		
		$req = $bdd->query("SELECT num FROM call_centers");
		return $req;
	}

	function check_compte_user($login,$mdp) {
		global $bdd;
	
		$req = $bdd->query("SELECT role FROM users WHERE login like '$login' AND mdp like '$mdp'");
		$donnees = $req->fetch();
		
		return $donnees;
	}
	
	function info_port(){
		global $bdd;
		
		$req = $bdd->query("SELECT port FROM numeros WHERE protocole like 'DAHDI' ORDER BY port ASC");
		
		return $req;
	}
	
	function select_users_contexte($contexte){
		global $bdd;
		
		$req = $bdd->query("SELECT login,contextes.nom AS contexte,num,protocole,users.nom AS user,mail FROM users JOIN contextes ON users.id_contexte = contextes.id_contexte JOIN numeros ON users.id_user = numeros.id_user WHERE contextes.nom LIKE '$contexte'");
		
		return $req;
		
	}
?>