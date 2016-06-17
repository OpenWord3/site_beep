<?php
	require_once'configuration.php';
	include("./modeles/modele_connexion_bdd.php");
	include("./modeles/modele_user.php");
	include("./modeles/modele_groupe.php");
	include("./modeles/modele_conference.php");
	include("./function_check_nums.php");
	
	if(!isset($_GET["index"])){
		include('./vues/accueil.php');
	}
	else{
		switch($_GET["index"]){
			case "vue_accueil":
				include("./controleurs/controleur_accueil.php");
				break;
			case "connexion_user":
				include("./controleurs/controleur_connexion_user.php");
				break;			
			case "add_user":
				include("./controleurs/controleur_add_user.php");
				break;
			case "del_user":
				include("./controleurs/controleur_del_user.php");
				break;	
			case "edit_user":
				include("./controleurs/controleur_edit_user.php ");
				break;			
			case "show_edit_user":
				include("./controleurs/controleur_show_edit_user.php ");
				break;			
			case "show_users":
				include("./controleurs/controleur_show_users.php ");
				break;
			case "add_contexte":
				include("./controleurs/controleur_add_groupe.php");
				break;				
			case "del_contexte":
				include("./controleurs/controleur_del_groupe.php");
				break;			
			case "show_contextes":
				include("./controleurs/controleur_show_groupes.php");
				break;			
			case "add_conf":
				include("./controleurs/controleur_add_conference.php");
				break;			
			case "del_conf":
				include("./controleurs/controleur_del_conference.php");
				break;				
			case "edit_conf":
				include("./controleurs/controleur_edit_conference.php");
				break;			
			case "show_edit_conf":
				include("./controleurs/controleur_show_edit_conf.php");
				break;
			case "show_conferences":
				include("./controleurs/controleur_show_conferences.php");
				break;
		}
	}
?>