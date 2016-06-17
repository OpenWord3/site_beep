<?php

$id_conf = $_POST['modifier'];
$num = $_POST['num_conf'];
$num_origine = $_POST['num_origine'];
$mdp = $_POST['mdp_conf'];

if(!isset($_POST['opt_talk'])){
	$opt_talk = 0;
}
else{
	$opt_talk = $_POST['opt_talk'];
}
if(!isset($_POST['opt_music'])){
	$opt_music = 0;
}
else{
	$opt_music = $_POST['opt_music'];
}

	$nums_users = nums_users();
	$nums_callcenters = nums_callcenters();
	$nums_conferences= nums_conferences();
	
	$check_num = check_nums($nums_users,$nums_callcenters,$nums_conferences,$num);
	
	if($num == $num_origine){
		update_conf($num,$mdp,$opt_talk,$opt_music,$id_conf);
		$msg = "<h3 style='color:green'>La conférence à bien été modifier</h3>";
		include("./controleurs/controleur_show_conferences.php");	
	}
	else if($check_num == 0){		
		//exec('sudo /var/script_beep/adduser.sh '.$login.' '.$mdp.' '.$mail.' '.$num.' '.$protocole.' '.$port.' '.$option_transfert.' '.$num_transfert.' '.$contexte);
		update_conf($num,$mdp,$opt_talk,$opt_music,$id_conf);
		$msg = "<h3 style='color:green'>La conférence à bien été modifier</h3>";
		include("./controleurs/controleur_show_conferences.php");	
	}
	else if($check_num == 1){
		$msg = "<h3 style='color:red'>Le numero $num n est pas disponible</h3>";
		include("./controleurs/controleur_show_conferences.php");	
	}

?>