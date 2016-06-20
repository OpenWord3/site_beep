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
	$check_num = check_nums($nums_users,$nums_callcenters,$nums_conferences,$num_conf);

	
	if($check_num == 0){
		add_conf($num_conf,$mdp_conf,$opt_talk,$opt_music,$id_user[0]);
		exec('sudo /var/script_beep/create_conference.pl '.$num_conf.' '.$mdp_conf);
		
		if($opt_music == 1 && $opt_talk == 1){
			exec('sudo /var/script_beep/chng_option_conference.pl '.$num_conf.' 3');
		}	
		else if(($opt_talk ==1) && ($opt_music == 0)){
			exec('sudo /var/script_beep/chng_option_conference.pl '.$num_conf.' 2');
		}		
		else if(($opt_music ==1) && ($opt_talk == 0)){
			exec('sudo /var/script_beep/chng_option_conference.pl '.$num_conf.' 1');
		}
		else if(($opt_talk ==0) && ($opt_music == 0)){
			exec('sudo /var/script_beep/chng_option_conference.pl '.$num_conf.' 4');
		}
		
		$msg = "<h3 style='color:green'>Le numero de conference $num_conf à bien ete ajouter</h3>";
		include("./controleurs/controleur_show_conferences.php");	
	}
	else if($check_num == 1){
		$msg = "<h3 style='color:red'>Ce numéro de conference n'est pas disponilbe</h3>";
		include("./controleurs/controleur_show_conferences.php");	
	}
	
	
?>