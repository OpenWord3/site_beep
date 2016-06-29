<?php

	function graph_day($login,$date_1,$date_2){
		global $cdr;
		
		$req = $cdr->query("SELECT SUM(duration) FROM cdr WHERE src LIKE '$login' AND (start <= '$date_1') AND (start >= '$date_2') AND (lastapp LIKE 'dial' OR lastapp LIKE 'MeetMe')");
		$donnees = $req->fetch();
		
		return $donnees;	
	}	
	
	function sum_duration_month($login,$date){
		global $cdr;
		
		$req = $cdr->query("SELECT SUM(duration) FROM cdr WHERE src LIKE '$login' AND (start <= '$date') AND (lastapp LIKE 'dial' OR lastapp LIKE 'MeetMe')");
		$donnees = $req->fetch();
		
		return $donnees;	
	}

?>