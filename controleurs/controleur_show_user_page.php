<?php
 
 $date_tomorrow = date('Y-m-d', strtotime("1 day"));
 $date_today = date('Y-m-d');
 $date_yesterday_1 = date('Y-m-d', strtotime("1 day ago" ));
 $date_yesterday_2 = date('Y-m-d', strtotime("2 day ago" ));
 $date_yesterday_3 = date('Y-m-d', strtotime("3 day ago" ));
 
 $graph_today = graph_day($login,$date_tomorrow,$date_today);
 $graph_yesterday_1 = graph_day($login,$date_today,$date_yesterday_1);
 $graph_yesterday_2 = graph_day($login,$date_yesterday_1,$date_yesterday_2);
 
 $date_today_d = date('D');
 $date_yesterday_1_d = date('D', strtotime("1 day ago"));
 $date_yesterday_2_d = date('D', strtotime("2 day ago"));

 if($graph_today[0] == "NULL"){
	 $graph_today[0] = 0;
 } 
 if($graph_yesterday_1[0] == "NULL"){
	 $$graph_yesterday_1[0] = 0;
 } 
 if($graph_yesterday_2[0] == "NULL"){
	 $$graph_yesterday_2[0][0] = 0;
 }
 
$data1y=array(47,80,40,116);



// Create the graph. These two calls are always required
$graph = new Graph(350,200,'auto');
$graph->SetScale("textlin");

$theme_class=new UniversalTheme;
$graph->SetTheme($theme_class);

$graph->yaxis->SetTickPositions(array($graph_today[0],$graph_yesterday_1[0],$graph_yesterday_2[0]));
$graph->SetBox(false);

$graph->ygrid->SetFill(false);
$graph->xaxis->SetTickLabels(array('$date_today_d','$date_yesterday_1_d','$date_yesterday_2_d'));
$graph->yaxis->HideLine(false);
$graph->yaxis->HideTicks(false,false);

// Create the bar plots
$b1plot = new BarPlot($data1y);


// Create the grouped bar plot
$gbplot = new GroupBarPlot(array($b1plot));
// ...and add it to the graPH
$graph->Add($gbplot);


$b1plot->SetColor("white");
$b1plot->SetFillColor("#cc1111");


$graph->title->Set("Bar Plots");

// Display the graph
$graph->Stroke("./users_graphs/$login.png");
 //echo '<img src="./users_graphs/.png">';
 $img = "./users_graphs/$login.png";
 include("./vues/dashboard.php");

?>