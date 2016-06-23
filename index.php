<?php
	require_once'configuration.php';

	if(isset($_GET["index"])){
		switch(htmlentities($_GET["index"])){
			case "vue_accueil":
				include("./controleurs/controleur_accueil.php");
				break;
			case "vue_connexion":
				include("./controleurs/controleur_connexion.php");
				#include("./vues/admin_index.php");
				break;
			case "vue_accueil_admin":
				include("./controleurs/controleur_admin.php");
				break;
			case "vue_gestion_utilisateur":
				include("./controleurs/controleur_gestion_utilisateur.php");
				break;
			case "vue_gestion_conference":
				include("./controleurs/controleur_gestion_conference.php");
				break;
			case "vue_gestion_droit":
				include("./controleurs/controleur_gestion_droit.php");
				break;
			case "vue_gestion_callcenter":
				include("./controleurs/controleur_gestion_callcenter.php");
				break;
			case "vue_gestion_gateway":
				include("./controleurs/controleur_gestion_gateway.php");
				break;
			case "vue_gestion_groupe":
				include("./controleurs/controleur_gestion_groupe.php");
				break;
			case "vue_gestion_standard":
				include("./controleurs/controleur_gestion_standard.php");
				break;
			case "vue_gestion_numero_entrant":
				include("./controleurs/controleur_gestion_numero_entrant.php");
				break;
			case "vue_gestion_switch":
				include("./controleurs/controleur_gestion_switch.php");
				break;
			case "vue_tableau_bord":
				include("./controleurs/controleur_tableau_bord.php");
				break;
			case "vue_chat":
				include("./controleurs/controleur_chat.php");
				break;
			case "vue_contacts":
				include("./controleurs/controleur_contacts.php");
				break;
			case "vue_voicemail":
				include("./controleurs/controleur_voicemail.php");
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
			default:
				include("./vues/accueil.php");		
		}
	} else {
		include("./vues/accueil.php");	
	}
?>