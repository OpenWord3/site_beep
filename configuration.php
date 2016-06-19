<?php
	if(!isset($_SESSION)){
		session_start();
	}
	
	include("./modeles/modele_connexion_bdd.php");
	include("./modeles/modele_fonction.php");
	include("./modeles/modele_gateway.php");
	include("./modeles/modele_switch.php");
	include("./modeles/modele_numero_entrant.php");
	include("./modeles/modele_call_center.php");
<<<<<<< HEAD
	include("./modeles/modele_connexion_bdd.php");
	include("./modeles/modele_user.php");
	include("./modeles/modele_groupe.php");
	include("./modeles/modele_conference.php");
	include("./function_check_nums.php");
=======
	include("./modeles/modele_droit.php");
>>>>>>> 3ad2868b9b84085e956c732b38fcc980eac763a7

	//Constante de l'index
	define("INDEX","index.php");

	//Constante du CSS
	//define("ASSET","./assets/css/");

	//Constante du JS
	//define("JS","./assets/js/");

	//Constante des images
	//define("IMG","./assets/img/");

	//Constante du style
	//define("CSS","./assets/");
?>