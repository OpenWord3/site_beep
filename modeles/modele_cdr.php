<?php

	function graph_day($login,$date_1,$date_2){
		global $cdr;
		
		// $req = $cdr->query("SELECT SUM(duration) FROM cdr WHERE src LIKE '$login' AND (start <= '$date_1') AND (start >= '$date_2') AND (lastapp LIKE 'dial' OR lastapp LIKE 'MeetMe')");
		$req = $cdr->query("SELECT SUM(duration) FROM cdr WHERE src LIKE '$login' AND (start <= '$date_1') AND (start >= '$date_2')");
		$donnees = $req->fetch();
		
		return $donnees;	
	}	
	
	function graph_day_outgoing($login,$date_1,$date_2){
		global $cdr;
		
		$req = $cdr->query("SELECT SUM(duration) FROM cdr WHERE src LIKE '$login' AND (start <= '$date_1') AND (start >= '$date_2')");
		$donnees = $req->fetch();
		
		return $donnees;	
	}		
	
	function graph_day_incoming($num,$date_1,$date_2){
		global $cdr;
		
		$req = $cdr->query("SELECT SUM(duration) FROM cdr WHERE dst = $num AND (start <= '$date_1') AND (start >= '$date_2')");
		$donnees = $req->fetch();
		
		return $donnees;	
	}	
	
	function sum_duration_month($login,$date){
		global $cdr;
		
		$req = $cdr->query("SELECT SUM(duration) FROM cdr WHERE src LIKE '$login' AND (start <= '$date') AND (lastapp LIKE 'dial' OR lastapp LIKE 'MeetMe')");
		$donnees = $req->fetch();
		
		return $donnees;	
	}
	
	function last_calls($login){
		global $cdr;
		
		$req = $cdr->query(" select dst,dstchannel,start from cdr where src like '$login' order by start desc limit 5")
	}

?>