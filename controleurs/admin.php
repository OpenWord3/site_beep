<?php
	$password = "zalika";
	if(isset($_POST["password"])){
		if($_POST["password"] == $password){
			//$retour = "Le mot de passe est : bien.";
			$retour = "1";
		} else {
			//$retour = "Entrez le bon mot de passe admin.";
			$retour = "0";
		}
	}else{
		//$retour = "Entrez le bon mot de passe admin.";
		$retour = "0";
	}
	echo $retour;
?>