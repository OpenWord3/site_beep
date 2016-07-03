<?php
 
 function graph_week($graph_outgoing_yesterday_1,$graph_outgoing_yesterday_2,$graph_outgoing_yesterday_3,$graph_outgoing_yesterday_4,$graph_outgoing_yesterday_5,$graph_outgoing_yesterday_6,$graph_outgoing_yesterday_7,$graph_incoming_yesterday_1,$graph_incoming_yesterday_2,$graph_incoming_yesterday_3,$graph_incoming_yesterday_4,$graph_incoming_yesterday_5,$graph_incoming_yesterday_6,$graph_incoming_yesterday_7,$login){
 //ON RECUPERES LES DATES EN JOURS
 $date_today_d = date('D');
 $date_yesterday_1_d = date('D', strtotime("1 day ago"));
 $date_yesterday_2_d = date('D', strtotime("2 day ago"));
 $date_yesterday_3_d = date('D', strtotime("3 day ago"));
 $date_yesterday_4_d = date('D', strtotime("4 day ago"));
 $date_yesterday_5_d = date('D', strtotime("5 day ago"));
 $date_yesterday_6_d = date('D', strtotime("6 day ago"));
 $date_yesterday_7_d = date('D', strtotime("7 day ago"));

 //GRAPH = 0 SI VIDE
 if(empty($graph_outgoing_yesterday_1[0])){
	 $graph_outgoing_yesterday_1[0] = 0;
 }
 else{
	$graph_outgoing_yesterday_1[0] = $graph_outgoing_yesterday_1[0]/60;
 }
 
 if(empty($graph_outgoing_yesterday_2[0])){
	 $graph_outgoing_yesterday_2[0] = 0;
 }
 else{
	 $graph_outgoing_yesterday_2[0] = $graph_outgoing_yesterday_2[0]/60;
 }
 
 if(empty($graph_outgoing_yesterday_3[0])){
	 $graph_outgoing_yesterday_3[0] = 0;
 } 
 else{
	 $graph_outgoing_yesterday_3[0] = $graph_outgoing_yesterday_3[0]/60;
 }
 
 if(empty($graph_outgoing_yesterday_4[0])){
	 $graph_outgoing_yesterday_4[0] = 0;
 } 
 else{
	 $graph_outgoing_yesterday_4[0] = $graph_outgoing_yesterday_4[0]/60;
 }
 
 if(empty($graph_outgoing_yesterday_5[0])){
	 $graph_outgoing_yesterday_5[0] = 0;
 }
 else{
	 $graph_outgoing_yesterday_5[0] = $graph_outgoing_yesterday_5[0]/60;
 }
 
 if(empty($graph_outgoing_yesterday_6[0])){
	 $graph_outgoing_yesterday_6[0] = 0;
 }
 else{
	 $graph_outgoing_yesterday_6[0] = $graph_outgoing_yesterday_6[0]/60;
 }
 
 if(empty($graph_outgoing_yesterday_7[0])){
	 $graph_outgoing_yesterday_7[0] = 0;
 }
 else{
	 $graph_outgoing_yesterday_7[0] = $graph_outgoing_yesterday_7[0]/60;
 }
 
 if(empty($graph_incoming_yesterday_1[0])){
	 $graph_incoming_yesterday_1[0] = 0;
 } 
 else{
	 $graph_incoming_yesterday_1[0] = $graph_incoming_yesterday_1[0]/60;
 }
 
 if(empty($graph_incoming_yesterday_2[0])){
	 $graph_incoming_yesterday_2[0] = 0;
 }
 else{
	 $graph_incoming_yesterday_2[0] = $graph_incoming_yesterday_2[0]/60;
 }
 
 if(empty($graph_incoming_yesterday_3[0])){
	 $graph_incoming_yesterday_3[0] = 0;
 }
else{
	$graph_incoming_yesterday_3[0] = $graph_incoming_yesterday_3[0]/60;
} 

 if(empty($graph_incoming_yesterday_4[0])){
	 $graph_incoming_yesterday_4[0] = 0;
 } 
 else{
	 $graph_incoming_yesterday_4[0] = $graph_incoming_yesterday_4[0]/60;
 }
 if(empty($graph_incoming_yesterday_5[0])){
	 $graph_incoming_yesterday_5[0] = 0;
 }
 else{
	 $graph_incoming_yesterday_5[0] = $graph_incoming_yesterday_5[0]/60;
 }
 
 if(empty($graph_incoming_yesterday_6[0])){
	 $graph_incoming_yesterday_6[0] = 0;
 }
 else{
	 $graph_incoming_yesterday_6[0] = $graph_incoming_yesterday_6[0]/60;
 }
 
 if(empty($graph_incoming_yesterday_7[0])){
	 $graph_incoming_yesterday_7[0] = 0;
 }
else{
	$graph_incoming_yesterday_7[0] = $graph_incoming_yesterday_7[0]/60;
} 
 
 
 
 //ON DESSINE LES GRAPHES
 $DataSet = new pData;  
 // $DataSet->AddPoint(array($graph_yesterday_2[0]),"Serie3");  
 $DataSet->AddPoint(array($graph_outgoing_yesterday_1[0],$graph_outgoing_yesterday_2[0],$graph_outgoing_yesterday_3[0],$graph_outgoing_yesterday_4[0],$graph_outgoing_yesterday_5[0],$graph_outgoing_yesterday_6[0],$graph_outgoing_yesterday_7[0]),"Serie1");   
 $DataSet->AddPoint(array($graph_incoming_yesterday_1[0],$graph_incoming_yesterday_2[0],$graph_incoming_yesterday_3[0],$graph_incoming_yesterday_4[0],$graph_incoming_yesterday_5[0],$graph_incoming_yesterday_6[0],$graph_incoming_yesterday_7[0]),"Serie2");   
 $DataSet->AddPoint(array("$date_yesterday_1_d","$date_yesterday_2_d","$date_yesterday_3_d","$date_yesterday_4_d","$date_yesterday_5_d","$date_yesterday_6_d","$date_yesterday_7_d"),"Serie3");  
 $DataSet->AddSerie("Serie1");  
 $DataSet->AddSerie("Serie2"); 
 $DataSet->SetAbsciseLabelSerie("Serie3");  
 $DataSet->SetYAxisName("Minutes");
 $DataSet->SetYAxisUnit("m");   
 $DataSet->SetSerieName("Appels Sortants","Serie1");  
 $DataSet->SetSerieName("Appels Entrants","Serie2");  
 // Initialise the graph  
 $Test = new pChart(400,230);  
 $Test->setFontProperties("./chart/Fonts/tahoma.ttf",8);  
 $Test->setGraphArea(50,30,280,200);  
 $Test->drawFilledRoundedRectangle(7,7,693,223,5,240,240,240);  
 $Test->drawRoundedRectangle(5,5,695,225,5,230,230,230);  
 $Test->drawGraphArea(255,255,255,TRUE);  
 $Test->drawScale($DataSet->GetData(),$DataSet->GetDataDescription(),SCALE_NORMAL,150,150,150,TRUE,0,2,TRUE);     
 $Test->drawGrid(4,TRUE,230,230,230,50);  
  
 // Draw the 0 line  
 $Test->setFontProperties("./chart/Fonts/tahoma.ttf",6);  
 $Test->drawTreshold(0,143,55,72,TRUE,TRUE);  
  
 // Draw the bar graph  
 $Test->drawBarGraph($DataSet->GetData(),$DataSet->GetDataDescription(),TRUE);  
  
 // Finish the graph  
 $login_week = $login . "_week.png";
 $Test->setFontProperties("./chart/Fonts/tahoma.ttf",8);  
 $Test->drawLegend(300,50,$DataSet->GetDataDescription(),255,255,255);  
 $Test->setFontProperties("./chart/Fonts/tahoma.ttf",10);  
 $Test->Render("./users_graphs/$login_week");
 
 return $login_week;
 }
?>