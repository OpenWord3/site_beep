<?php
 
 //ON RECUPERES TOUTES LES DATES DE LA SEMAINE
 setlocale(LC_TIME, 'fra_fra');

 $date_tomorrow = date('Y-m-d', strtotime("1 day"));
 $date_today = date('Y-m-d');
 $date_yesterday_1 = date('Y-m-d', strtotime("1 day ago" ));
 $date_yesterday_2 = date('Y-m-d', strtotime("2 day ago" ));
 $date_yesterday_3 = date('Y-m-d', strtotime("3 day ago" ));
 $date_yesterday_4 = date('Y-m-d', strtotime("4 day ago" ));
 $date_yesterday_5 = date('Y-m-d', strtotime("5 day ago" ));
 $date_yesterday_6 = date('Y-m-d', strtotime("6 day ago" ));
 $date_yesterday_7 = date('Y-m-d', strtotime("7 day ago" ));
 
 //ON RECUPERES LES DONNES OUTGOING POUR LES GRAPHES
 $graph_outgoing_yesterday_1 = graph_day_outgoing($login,$date_yesterday_1);
 $graph_outgoing_yesterday_2 = graph_day_outgoing($login,$date_yesterday_2);
 $graph_outgoing_yesterday_3 = graph_day_outgoing($login,$date_yesterday_3);
 $graph_outgoing_yesterday_4 = graph_day_outgoing($login,$date_yesterday_4);
 $graph_outgoing_yesterday_5 = graph_day_outgoing($login,$date_yesterday_5);
 $graph_outgoing_yesterday_6 = graph_day_outgoing($login,$date_yesterday_6);
 $graph_outgoing_yesterday_7 = graph_day_outgoing($login,$date_yesterday_7);

 //ON RECUPERES LES DONNES INCOMING POUR LES GRAPHES
 $graph_incoming_yesterday_1 = graph_day_incoming($num[0],$date_yesterday_1);
 $graph_incoming_yesterday_2 = graph_day_incoming($num[0],$date_yesterday_2);
 $graph_incoming_yesterday_3 = graph_day_incoming($num[0],$date_yesterday_3);
 $graph_incoming_yesterday_4 = graph_day_incoming($num[0],$date_yesterday_4);
 $graph_incoming_yesterday_5 = graph_day_incoming($num[0],$date_yesterday_5);
 $graph_incoming_yesterday_6 = graph_day_incoming($num[0],$date_yesterday_6);
 $graph_incoming_yesterday_7 = graph_day_incoming($num[0],$date_yesterday_7);
 
 //ON RECUPERES LES DATES EN JOURS
 $date_today_d = strftime('%a');
 $date_yesterday_1_d = strftime('%a', strtotime("1 day ago"));
 $date_yesterday_2_d = strftime('%a', strtotime("2 day ago"));
 $date_yesterday_3_d = strftime('%a', strtotime("3 day ago"));
 $date_yesterday_4_d = strftime('%a', strtotime("4 day ago"));
 $date_yesterday_5_d = strftime('%a', strtotime("5 day ago"));
 $date_yesterday_6_d = strftime('%a', strtotime("6 day ago"));
 $date_yesterday_7_d = strftime('%a', strtotime("7 day ago"));

 //GRAPH = 0 SI VIDE
 if(empty($graph_outgoing_yesterday_1[0])){
	 $graph_outgoing_yesterday_1[0] = 0;
 } 
 if(empty($graph_outgoing_yesterday_2[0])){
	 $graph_outgoing_yesterday_2[0] = 0;
 }
 if(empty($graph_outgoing_yesterday_3[0])){
	 $graph_outgoing_yesterday_3[0] = 0;
 } 
 if(empty($graph_outgoing_yesterday_4[0])){
	 $graph_outgoing_yesterday_4[0] = 0;
 } 
 if(empty($graph_outgoing_yesterday_5[0])){
	 $graph_outgoing_yesterday_5[0] = 0;
 }
 if(empty($graph_outgoing_yesterday_6[0])){
	 $graph_outgoing_yesterday_6[0] = 0;
 }
 if(empty($graph_outgoing_yesterday_7[0])){
	 $graph_outgoing_yesterday_7[0] = 0;
 } 
 
 if(empty($graph_incoming_yesterday_1[0])){
	 $graph_incoming_yesterday_1[0] = 0;
 } 
 if(empty($graph_incoming_yesterday_2[0])){
	 $graph_incoming_yesterday_2[0] = 0;
 }
 if(empty($graph_incoming_yesterday_3[0])){
	 $graph_incoming_yesterday_3[0] = 0;
 } 
 if(empty($graph_incoming_yesterday_4[0])){
	 $graph_incoming_yesterday_4[0] = 0;
 } 
 if(empty($graph_incoming_yesterday_5[0])){
	 $graph_incoming_yesterday_5[0] = 0;
 }
 if(empty($graph_incoming_yesterday_6[0])){
	 $graph_incoming_yesterday_6[0] = 0;
 }
 if(empty($graph_incoming_yesterday_7[0])){
	 $graph_incoming_yesterday_7[0] = 0;
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
 $DataSet->SetYAxisName("Secondes");
 $DataSet->SetYAxisUnit("s");   
 // $DataSet->SetSerieName("$date_yesterday_1_d","Serie2");  
 /*$DataSet->SetSerieName("$date_yesterday_1_d","Serie1");  
 $DataSet->SetSerieName("$date_yesterday_2_d","Serie2");  
 $DataSet->SetSerieName("$date_yesterday_3_d","Serie3");  
 $DataSet->SetSerieName("$date_yesterday_4_d","Serie4");  
 $DataSet->SetSerieName("$date_yesterday_5_d","Serie5");  
 $DataSet->SetSerieName("$date_yesterday_6_d","Serie6");  
 $DataSet->SetSerieName("$date_yesterday_7_d","Serie7");  */
 $DataSet->SetSerieName("OUTGOING","Serie1");  
 $DataSet->SetSerieName("INCOMING","Serie2");  
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
 
 // $last_calls = last_calls($login);
 
 // $img = "./users_graphs/$login_week.png";
 // include("./vues/dashboard.php");

?>