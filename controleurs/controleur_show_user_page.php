<?php
 
 $id_user = $_SESSION['id_user'];
 $num = select_user($id_user);
 
 $last_day_month = date('Y-m-d', strtotime("noon last day of this month" ));
 $total_consomation = sum_duration_month($login,$last_day_month);

 
 // $last_calls = last_calls($login);
 
 // include("./graph_day.php");
 $graph_day_incoming = graph_day_incoming($num[0],$date_today);
 $graph_day_outgoing = graph_day_outgoing($login,$date_today);
 
 graph_day($graph_day_incoming,$graph_day_outgoing,$login);
 include("./graph_week.php");
 include("./graph_month.php");
 
 
 $graph_day = "./users_graphs/$login_day";
 $graph_week = "./users_graphs/$login_week";
 $graph_month = "./users_graphs/$login_month";
 
 include("./vues/dashboard.php");

?>