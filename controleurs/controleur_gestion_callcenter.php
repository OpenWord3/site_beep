<?php

	if(isset($_POST["valider"])){
		$nom_call=$_POST["nom_call"];
		$num_call=$_POST["num_call"];
		$strategy=$_POST["strategy"];

		exec('sudo /var/script_beep/add_callcenter.sh '.$nom_call.' '.$trategy.' '.$num_call);
	} else if(isset($_POST["supprimer"])){
		$nom_call=$_POST["nom_call"];
		exec('sudo /var/script_beep/remove_callcenter.sh '.$nom_call);
	}

	include("./vues/admin_call_center.php");
?>