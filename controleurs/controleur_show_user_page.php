<?php
 
 $id_user = $_SESSION['id_user'];
 $select_user = select_user($id_user);
 
 $last_day_month = date('Y-m-d', strtotime("noon last day of this month" ));
 $total_consomation = sum_duration_month($login,$last_day_month);

 
 // $last_calls = last_calls($login);
 
 include("./graph_day.php");
 include("./graph_week.php");
 
 
 $graph_day = "./users_graphs/$login_day";
 $graph_week = "./users_graphs/$login_week";
 
 include("./vues/dashboard.php");

?>