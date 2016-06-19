<?php
	$num_conf = $_POST['num_conf'];
	$mdp_conf = $_POST['mdp_conf'];
	$id_user = $_SESSION["id_user"];
	
	
	if(!isset($_POST['opt_talk'])){
		$opt_talk = 0;
	} 
	else if(isset($_POST['opt_talk'])){
		$opt_talk = 1;
	} 
	if(!isset($_POST['opt_music'])){
		$opt_music = 0;
	} 
	else if(isset($_POST['opt_music'])){
		$opt_music = 1;
	}
	
	$nums_users = nums_users();
	$nums_callcenters = nums_callcenters();
	$nums_conferences= nums_conferences();
	$i = 1;
	while($donnees = $nums_users->fetch()){
		$nums[$i] = $donnees['num'];
		$i++;
	}	
	
	while($donnees = $nums_callcenters->fetch()){
		$nums[$i] = $donnees['num'];
		$i++;		
	}
	
	while($donnees = $nums_conferences->fetch()){
		$nums[$i] = $donnees['num'];
		$i++;
	}
	if(empty($nums)){
		$nums = 0;
	}
	$size = sizeof($nums);
	$check_num = 0;
	for($x=1; $x <= $size; $x++){
		if($num_conf == $nums[$x]){
			$check_num = 1;
		}
	}
	
	if($check_num == 0){
		add_conf($num_conf,$mdp_conf,$opt_talk,$opt_music,$id_user[0]);
		$msg = "<h3 style='color:green'>Le numero de conference $num_conf à bien ete ajouter</h3>";
		include("./controleurs/controleur_show_conferences.php");	
	}
	else if($check_num == 1){
		$msg = "<h3 style='color:red'>Ce numéro de conference n'est pas disponilbe</h3>";
		include("./controleurs/controleur_show_conferences.php");	
	}
	
	
?>