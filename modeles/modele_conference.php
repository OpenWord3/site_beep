<?php 
	function add_conf($num,$mdp,$option_talk,$option_music,$id_user){
		global $bdd;
		$req = $bdd->prepare("INSERT INTO `conferences` (`num`,`mdp`,`option_talk`,`option_music`,`id_user`) values (:num,:mdp,:option_talk,:option_music,:id_user);");
		$req->execute(array(
							'num'=>$num,
							'mdp'=>$mdp,
							'option_talk'=>$option_talk,
							'option_music'=>$option_music,
							'id_user'=>$id_user));
		$req->closeCursor();
		
	}
	function del_conf($num,$mdp){
	global $bdd;
	
	$req = $bdd->prepare("DELETE FROM conferences WHERE num = :num AND mdp like :mdp");
	$req->execute(array(
						'num'=>$num,
						'mdp'=>$mdp));
	
	$req->closeCursor();
	}
	
	function check_conf($num){
		global $bdd;
		$req = $bdd->query("SELECT num,mdp FROM conferences WHERE num = $num");
		$donnees = $req->fetch();
		return $donnees;
	}
	
	function show_conf(){
		global $bdd;
		$req = $bdd->query("SELECT id_conf,num,conferences.mdp,option_music,option_talk,login FROM conferences JOIN users ON conferences.id_user = users.id_user");
		//$donnees = $req->fetch();
		//return $donnees;
		return $req;
	}
	
	function select_conf($id_conf){
		global $bdd;
		$req = $bdd->query("SELECT * FROM conferences WHERE id_conf = $id_conf");
		$donnees = $req->fetch();
		
		return $donnees;
	}
	
	function update_conf($num,$mdp,$option_talk,$option_music,$id_conf){
		global $bdd;
		
		$req = $bdd->query("UPDATE conferences SET num = '$num', mdp = '$mdp', option_talk = '$option_talk', option_music = '$option_music' WHERE id_conf = '$id_conf'");
		$req->closeCursor();
	}
?>