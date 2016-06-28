<?php

	function graph_day($login,$date_1,$date_2){
		global $cdr;
		
		$req = $cdr->query("SELECT AVG(duration) FROM cdr WHERE src LIKE '$login' AND (start <= '$date_1') AND (start >= '$date_2') AND lastapp LIKE 'dial'");
		$donnees = $req->fetch();
		
		return $donnees;	
	}

?>