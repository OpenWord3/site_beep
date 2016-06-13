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
			default:
				include("./vues/accueil.php");		
		}
	} else {
		include("./vues/accueil.php");	
	}
?>