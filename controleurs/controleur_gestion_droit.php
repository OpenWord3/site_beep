<?php

	if(isset($_POST["valider"])){
		$groupe1=$_POST["groupe1"];
		$groupe2=$_POST["groupe2"];
		$type=$_POST["type"];

		if($type == "bidirectionnel"){
			exec('sudo /var/script_beep/droit_appel_bidirectionnel.sh '.$groupe1.' '.$groupe2);
		}else{
			exec('sudo /var/script_beep/droit_appel_unidirectionnel.sh '.$groupe1.' '.$groupe2);
		}			
	}else if(isset($_POST["annuler"])){
		$groupe1=$_POST["groupe1"];
		$groupe2=$_POST["groupe2"];
		$type=$_POST["type"];

		if($type == "bidirectionnel"){
			exec('sudo /var/script_beep/cancel_appel_bidirectionnel.sh '.$groupe1.' '.$groupe2);
		}else{
			exec('sudo /var/script_beep/cancel_appel_unidirectionnel.sh '.$groupe1.' '.$groupe2);
		}
	}

	include("./vues/admin_droits.php");
?>