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
	include("./modeles/modele_user.php");
	include("./modeles/modele_groupe.php");
	include("./modeles/modele_conference.php");
	include("./modeles/modele_droit.php");
	include("./modeles/modele_cdr.php");
	
	include("./function_check_nums.php");
	
	include("./pChart2.1.4/class/pData.class.php");
	include("./pChart2.1.4/class/pDraw.class.php");
	include("./pChart2.1.4/class/pImage.class.php");
	include("./pChart2.1.4/class/pPie.class.php");
	include("./pChart2.1.4/class/pIndicator.class.php");
	
	include ('./jpgraph-4.0.0/src/jpgraph.php');
	include ('jpgraph-4.0.0/src/jpgraph_bar.php');
	

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