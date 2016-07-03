<?php

/*	function graph_day($login,$date){
		global $cdr;
		
		// $req = $cdr->query("SELECT SUM(duration) FROM cdr WHERE src LIKE '$login' AND (start <= '$date_1') AND (start >= '$date_2') AND (lastapp LIKE 'dial' OR lastapp LIKE 'MeetMe')");
		$req = $cdr->query("SELECT SUM(duration) FROM cdr WHERE src LIKE '$login' AND start LIKE '$date %'");
		$donnees = $req->fetch();
		
		return $donnees;	
	}	*/
	
	function graph_day_outgoing($login,$date){
		global $cdr;
		
		$req = $cdr->query("SELECT SUM(duration) FROM cdr WHERE src LIKE '$login' AND start LIKE '$date %'");
		$donnees = $req->fetch();
		
		return $donnees;	
	}		
	
	function graph_day_incoming($num,$date){
		global $cdr;
		
		$req = $cdr->query("SELECT SUM(duration) FROM cdr WHERE dst = $num AND start LIKE '$date %'");
		$donnees = $req->fetch();
		
		return $donnees;	
	}		
		
	function graph_month_outgoing($login,$date){
		global $cdr;
		
		$req = $cdr->query("SELECT SUM(duration) FROM cdr WHERE src LIKE '$login' AND start LIKE '". $date ."%'");
		$donnees = $req->fetch();
		
		return $donnees;	
	}
	
	function graph_month_incoming($num,$date){
		global $cdr;
		
		$req = $cdr->query("SELECT SUM(duration) FROM cdr WHERE dst LIKE '$num' AND start LIKE '". $date ."%'");
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
		
		$req = $cdr->query(" select dst,dstchannel,start from cdr where src like '$login' order by start desc limit 5");
		return $req;
	}
	
	function admin_graph_day_incoming($date){
		global $cdr;
		
		$req = $cdr->query("SELECT SUM(duration) FROM cdr WHERE (lastapp LIKE 'MeetMe' OR lastapp like 'AGI' OR lastapp like 'VOICEMAIL' OR lastapp like 'queue' OR channel like 'SIP/standard%') AND start LIKE '$date %'");
		$donnees = $req->fetch();
		
		return $donnees;
	}
	
	function admin_graph_day_outgoing($date){
		global $cdr;
		
		$req = $cdr->query("SELECT SUM(duration) FROM cdr WHERE lastapp LIKE 'Dial' AND start LIKE '$date %'");
		$donnees = $req->fetch();
		
		return $donnees;		
	}
	
	function admin_graph_month_incoming($date){
		global $cdr;

		$req = $cdr->query("SELECT SUM(duration) FROM cdr WHERE (lastapp LIKE 'MeetMe' OR lastapp like 'AGI' OR lastapp like 'VOICEMAIL' OR lastapp like 'queue' OR channel like 'SIP/standard%') AND start LIKE '". $date ."%'");
		$donnees = $req->fetch();

		return $donnees;
	}
	
	function admin_graph_month_outgoing($date){
		global $cdr;
		
		$req = $cdr->query("SELECT SUM(duration) FROM cdr WHERE lastapp LIKE 'Dial' AND start LIKE '". $date ."%'");
		$donnees = $req->fetch();
		
		return $donnees;		
	}

?>