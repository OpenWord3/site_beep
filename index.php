<?php
	require_once'configuration.php';

	
	if(!isset($_GET["index"])){
		include('./vues/accueil.php');
	}
	else {
		switch(htmlentities($_GET["index"])){
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
				include("./controleurs/controleur_edit_user.php");
				break;			
			case "show_edit_user":
				include("./controleurs/controleur_show_edit_user.php");
				break;			
			case "show_users":
				include("./controleurs/controleur_show_users.php");
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
			case "vue_gestion_switch":
				include("./controleurs/controleur_gestion_switch.php");
				break;
			case "vue_gestion_numero_entrant":
				include("./controleurs/controleur_gestion_numero_entrant.php");
				break;
			case "vue_gestion_standard":
				include("./controleurs/controleur_gestion_standard.php");
				break;
			case "vue_gestion_gateway":
				include("./controleurs/controleur_gestion_gateway.php");
				break;
			case "vue_gestion_droit":
				include("./controleurs/controleur_gestion_droit.php");
				break;
			case "vue_gestion_utilisateur":
				include("./controleurs/controleur_gestion_utilisateur.php");
				break;
			case "vue_gestion_groupe":
				include("./controleurs/controleur_gestion_groupe.php");
				break;
			case "vue_gestion_conference":
				include("./controleurs/controleur_gestion_conference.php");
				break;
			case "vue_gestion_callcenter":
				include("./controleurs/controleur_gestion_callcenter.php");
				break;
			case "vue_gestion_groupes_externes":
				include("./controleurs/controleur_gestion_groupes_externes.php");
				break;
			case "vue_connexion":
				include("./controleurs/controleur_connexion.php");
				break;
			case "vue_accueil_admin":
				include("./controleurs/controleur_admin.php");
				break;
			case "show_tableau_bord":
				include("./controleurs/controleur_show_user_page.php");
				break;
			case "vue_chat":
				include("./controleurs/controleur_chat.php");
				break;
			case "vue_contacts":
				include("./controleurs/controleur_contacts.php");
				break;
			case "show_voicemail":
				include("./controleurs/controleur_show_voicemail.php");
				break;
			case "vue_user":
				include("./controleurs/controleur_user.php");
				break;
			case "vue_prise_note":
				include("./vues/admin_blank.php");
				break;
			case "vue_calendrier":
				include("./vues/admin_calendar.php");
				break;
			case "vue_gallerie":
				include("./vues/admin_gallery.php");
				break;
			case "vue_todo_list":
				include("./vues/admin_todo_list.php");
				break;
			case "vue_verrouillage":
				include("./vues/admin_lock_screen.php");
				break;
			case "vue_deconnexion":
				include("./controleurs/controleur_deconnexion.php");
				break;
			default:
				include("./vues/accueil.php");		
		}
	}
?>