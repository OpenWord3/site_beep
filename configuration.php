<?php
<<<<<<< HEAD
	if(!isset($_SESSION)){
		session_start();
	}
	//Constante de l'index
	define("INDEX","index.php");
=======
	
	include("./modeles/modele_connexion_bdd.php");
	include("./modeles/modele_fonction.php");
	include("./modeles/modele_gateway.php");
	include("./modeles/modele_switch.php");
	include("./modeles/modele_numero_entrant.php");
	include("./modeles/modele_call_center.php");

	//Constante de l'index
	define("INDEX","index.php");

	//Constante du CSS
	define("ASSET","./assets/css/");

	//Constante du JS
	define("JS","./assets/js/");

	//Constante des images
	define("IMG","./assets/img/");

	//Constante du style
	define("CSS","./assets/");
>>>>>>> be5413265db7bc95748e54878e64f9e006ad95d5
?>