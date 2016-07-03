<?php
	
	$login = "admin";
	
	 //LES DATES
	$date = date('Y-m'); 
	$date_today = date('Y-m-d'); 
	$date_yesterday_1 = date('Y-m-d', strtotime("1 day ago" ));
	$date_yesterday_2 = date('Y-m-d', strtotime("2 day ago" ));
	$date_yesterday_3 = date('Y-m-d', strtotime("3 day ago" ));
	$date_yesterday_4 = date('Y-m-d', strtotime("4 day ago" ));
	$date_yesterday_5 = date('Y-m-d', strtotime("5 day ago" ));
	$date_yesterday_6 = date('Y-m-d', strtotime("6 day ago" ));
	$date_yesterday_7 = date('Y-m-d', strtotime("7 day ago" ));
	
	// EXECUTION DES  FONCTIONS GRAPHES JOURS
	$graph_day_incoming = admin_graph_day_incoming($date_today);
	$graph_day_outgoing = admin_graph_day_outgoing($date_today);
	
	$login_day = graph_day($graph_day_incoming,$graph_day_outgoing,$login);
	
	$graph_day = "./users_graphs/$login_day";

	include("./vues/admin_index.php");
?>