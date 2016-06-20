<?php

$id_conf = $_POST['modifier'];
$num = $_POST['num_conf'];
$num_origine = $_POST['num_origine'];
$mdp = $_POST['mdp_conf'];
$mdp_origine = $_POST['mdp_origine'];

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
	//DEBUT POUR CONFERENCE DUREE
	if($num_origine == 770){
		update_conf($num_origine,$mdp_origine,$opt_talk,$opt_music,$id_conf);
		
		if(($opt_music == 1) && ($opt_talk == 1)){
			exec('sudo /var/script_beep/chg_option.pl 1');
			$msg = "<h3 style='color:green'>L'option talk only et music à bien été modifier pour la conférence 770</h3>";
		}	
		else if(($opt_talk ==1) && ($opt_music == 0)){
			exec('sudo /var/script_beep/chg_option.pl 2');
			$msg = "<h3 style='color:green'>L'option talk only à bien été modifier pour la conférence 770</h3>";
		}		
		else if(($opt_music ==1) && ($opt_talk == 0)){
			exec('sudo /var/script_beep/chg_option.pl 3');
			$msg = "<h3 style='color:green'>L'option music à bien été modifier pour la conférence 770</h3>";
		}
		else if(($opt_talk ==0) && ($opt_music == 0)){
			exec('sudo /var/script_beep/chg_option.pl 4');
			$msg = "<h3 style='color:green'>L'option talk only à bien été modifier pour la conférence 770</h3>";
		}		
		
	}	
	else if($num_origine == 790){
		update_conf($num_origine,$mdp,$opt_talk,$opt_music,$id_conf);
		
		if(($opt_music == 1) && ($opt_talk == 1)){
			exec('sudo /var/script_beep/chg_option.pl 5');
			$msg = "<h3 style='color:green'>L'option talk only et music à bien été modifier pour la conférence 790</h3>";
		}
		else if(($opt_talk ==1) && ($opt_music == 0)){
			exec('sudo /var/script_beep/chg_option.pl 6');
			$msg = "<h3 style='color:green'>L'option talk only à bien été modifier pour la conférence 790</h3>";
		}		
		else if(($opt_music ==1) && ($opt_talk == 0)){
			exec('sudo /var/script_beep/chg_option.pl 7');
			$msg = "<h3 style='color:green'>L'option music à bien été modifier pour la conférence 790</h3>";
		}
		else if(($opt_talk ==0) && ($opt_music == 0)){
			exec('sudo /var/script_beep/chg_option.pl 8');
			$msg = "<h3 style='color:green'>L'option talk only à bien été modifier pour la conférence 770</h3>";
		}		
		
	}
	// FIN
	else if($num == $num_origine){
		update_conf($num,$mdp,$opt_talk,$opt_music,$id_conf);
		
		if($mdp != $mdp_origine){
			exec('sudo /var/script_beep/chng_mdp_conference.pl '.$num.' '.$mdp);
		}
		
		if(($opt_music == 1) && ($opt_talk == 1)){
			exec('sudo /var/script_beep/chng_option_conference.pl '.$num.' 3');
			$msg = "<h3 style='color:green'>L'option talk only et music à bien été modifier pour la conférence $num</h3>";
		}	
		else if(($opt_talk ==1) && ($opt_music == 0)){
			exec('sudo /var/script_beep/chng_option_conference.pl '.$num.' 2');
			$msg = "<h3 style='color:green'>L'option talk only à bien été modifier pour la conférence $num</h3>";
		}		
		else if(($opt_music ==1) && ($opt_talk == 0)){
			exec('sudo /var/script_beep/chng_option_conference.pl '.$num.' 1');
			$msg = "<h3 style='color:green'>L'option music à bien été modifier pour la conférence $num</h3>";
		}
		else if(($opt_talk ==0) && ($opt_music == 0)){
			exec('sudo /var/script_beep/chng_option_conference.pl '.$num.' 4');
			$msg = "<h3 style='color:green'>L'option talk only à bien été modifier pour la conférence $num</h3>";
		}
	}
	else if($check_num == 0){		
		exec('sudo /var/script_beep/delete_conference.pl '.$num_origine.' '.$mdp_origine);
		exec('sudo /var/script_beep/create_conference.pl '.$num.' '.$mdp);
		
		if($opt_music == 1 && $opt_talk == 1){
			exec('sudo /var/script_beep/chng_option_conference.pl '.$num.' 3');
		}	
		else if($opt_talk ==1 && $opt_music == 0){
			exec('sudo /var/script_beep/chng_option_conference.pl '.$num.' 2');
		}		
		else if($opt_music ==1 && $opt_talk == 0){
			exec('sudo /var/script_beep/chng_option_conference.pl '.$num.' 1');
		}
		else if($opt_talk ==0 && $opt_music == 0){
			exec('sudo /var/script_beep/chng_option_conference.pl '.$num.' 4');
		}
		update_conf($num,$mdp,$opt_talk,$opt_music,$id_conf);
		
		$msg = "<h3 style='color:green'>La conférence $num à bien été modifier</h3>";
	}
	else if($check_num == 1){
		$msg = "<h3 style='color:red'>Le numero $num n est pas disponible</h3>";
	}
	
	include("./controleurs/controleur_show_conferences.php");	

?>