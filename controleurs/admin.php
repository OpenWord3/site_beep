<?php
	
	if(isset($_POST['p'])){
		$p = "zalika";
		if($_POST['p'] == $p){
			echo "<br /><br /><font style='color:green;font-weight:bold;'>Le mot de passe est : bien.</font><br /><br />";
		} else {
			echo "<br /><br /><font style='color:red;font-weight:600;'>Entrez le bon mot de passe admin.</font><br /><br />";
		}
	}
	
?>
