<?php
 
 $id_user = $_SESSION['id_user'];
 $num = select_user($id_user);
 
 $last_day_month = date('Y-m-d', strtotime("noon last day of this month" ));
 $total_consomation = sum_duration_month($login,$last_day_month);

 
 // $last_calls = last_calls($login);
 
 // include("./graph_day.php");
 //LES DATES
 $date_today = date('Y-m-d'); 
 $date_yesterday_1 = date('Y-m-d', strtotime("1 day ago" ));
 $date_yesterday_2 = date('Y-m-d', strtotime("2 day ago" ));
 $date_yesterday_3 = date('Y-m-d', strtotime("3 day ago" ));
 $date_yesterday_4 = date('Y-m-d', strtotime("4 day ago" ));
 $date_yesterday_5 = date('Y-m-d', strtotime("5 day ago" ));
 $date_yesterday_6 = date('Y-m-d', strtotime("6 day ago" ));
 $date_yesterday_7 = date('Y-m-d', strtotime("7 day ago" ));

 // EXECUTION DES  FONCTIONS GRAPHES JOURS
 $graph_day_incoming = graph_day_incoming($num[0],$date_today);
 $graph_day_outgoing = graph_day_outgoing($login,$date_today);
 
 //EXECUTION DES FONCTIONS GRAPHES SEMAINE
 $graph_outgoing_yesterday_1 = graph_day_outgoing($login,$date_yesterday_1);
 $graph_outgoing_yesterday_2 = graph_day_outgoing($login,$date_yesterday_2);
 $graph_outgoing_yesterday_3 = graph_day_outgoing($login,$date_yesterday_3);
 $graph_outgoing_yesterday_4 = graph_day_outgoing($login,$date_yesterday_4);
 $graph_outgoing_yesterday_5 = graph_day_outgoing($login,$date_yesterday_5);
 $graph_outgoing_yesterday_6 = graph_day_outgoing($login,$date_yesterday_6);
 $graph_outgoing_yesterday_7 = graph_day_outgoing($login,$date_yesterday_7);

 $graph_incoming_yesterday_1 = graph_day_incoming($num[0],$date_yesterday_1);
 $graph_incoming_yesterday_2 = graph_day_incoming($num[0],$date_yesterday_2);
 $graph_incoming_yesterday_3 = graph_day_incoming($num[0],$date_yesterday_3);
 $graph_incoming_yesterday_4 = graph_day_incoming($num[0],$date_yesterday_4);
 $graph_incoming_yesterday_5 = graph_day_incoming($num[0],$date_yesterday_5);
 $graph_incoming_yesterday_6 = graph_day_incoming($num[0],$date_yesterday_6);
 $graph_incoming_yesterday_7 = graph_day_incoming($num[0],$date_yesterday_7);
 
 
 $login_day = graph_day($graph_day_incoming,$graph_day_outgoing,$login);
 $login_week = graph_week($graph_outgoing_yesterday_1,$graph_outgoing_yesterday_2,$graph_outgoing_yesterday_3,$graph_outgoing_yesterday_4,$graph_outgoing_yesterday_5,$graph_outgoing_yesterday_6,$graph_outgoing_yesterday_7,$graph_incoming_yesterday_1,$graph_incoming_yesterday_2,$graph_incoming_yesterday_3,$graph_incoming_yesterday_4,$graph_incoming_yesterday_5,$graph_incoming_yesterday_6,$graph_incoming_yesterday_7);
 // include("./graph_week.php");
 include("./graph_month.php");
 
 
 $graph_day = "./users_graphs/$login_day";
 $graph_week = "./users_graphs/$login_week";
 $graph_month = "./users_graphs/$login_month";
 
 include("./vues/dashboard.php");

?>