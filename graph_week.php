<?php
 
 //ON RECUPERES TOUTES LES DATES DE LA SEMAINE
 $date_tomorrow = date('Y-m-d', strtotime("1 day"));
 $date_today = date('Y-m-d');
 $date_yesterday_1 = date('Y-m-d', strtotime("1 day ago" ));
 $date_yesterday_2 = date('Y-m-d', strtotime("2 day ago" ));
 $date_yesterday_3 = date('Y-m-d', strtotime("3 day ago" ));
 $date_yesterday_4 = date('Y-m-d', strtotime("4 day ago" ));
 $date_yesterday_5 = date('Y-m-d', strtotime("5 day ago" ));
 $date_yesterday_6 = date('Y-m-d', strtotime("6 day ago" ));
 $date_yesterday_7 = date('Y-m-d', strtotime("7 day ago" ));
 
 //ON RECUPERES LES DONNES POUR LES GRAPHES
 $graph_yesterday_1 = graph_day($login,$date_yesterday_1);
 $graph_yesterday_2 = graph_day($login,$date_yesterday_2);
 $graph_yesterday_2 = graph_day($login,$date_yesterday_3);
 $graph_yesterday_2 = graph_day($login,$date_yesterday_4);
 $graph_yesterday_2 = graph_day($login,$date_yesterday_5);
 $graph_yesterday_2 = graph_day($login,$date_yesterday_6);
 $graph_yesterday_2 = graph_day($login,$date_yesterday_7);
 
 //ON RECUPERES LES DATES EN JOURS
 $date_today_d = date('D');
 $date_yesterday_1_d = date('D', strtotime("1 day ago"));
 $date_yesterday_2_d = date('D', strtotime("2 day ago"));
 $date_yesterday_3_d = date('D', strtotime("3 day ago"));
 $date_yesterday_4_d = date('D', strtotime("4 day ago"));
 $date_yesterday_5_d = date('D', strtotime("5 ay ago"));
 $date_yesterday_6_d = date('D', strtotime("6 day ago"));
 $date_yesterday_7_d = date('D', strtotime("7 day ago"));

 //GRAPH = 0 SI VIDE
 if(empty($graph_yesterday_1[0])){
	 $graph_yesterday_1[0] = 0;
 } 
 if(empty($graph_yesterday_2[0])){
	 $graph_yesterday_2[0] = 0;
 }
 if(empty($graph_yesterday_3[0])){
	 $graph_yesterday_3[0] = 0;
 } 
 if(empty($graph_yesterday_4[0])){
	 $graph_yesterday_4[0] = 0;
 } 
 if(empty($graph_yesterday_5[0])){
	 $graph_yesterday_5[0] = 0;
 }
 if(empty($graph_yesterday_6[0])){
	 $graph_yesterday_6[0] = 0;
 }
 if(empty($graph_yesterday_7[0])){
	 $graph_yesterday_7[0] = 0;
 }
 
 //ON DESSINE LES GRAPHES
 $DataSet = new pData;  
 // $DataSet->AddPoint(array($graph_yesterday_2[0]),"Serie3");  
 $DataSet->AddPoint(array($graph_yesterday_1[0]),"Serie1");  
 $DataSet->AddPoint(array($graph_yesterday_2[0]),"Serie2");  
 $DataSet->AddPoint(array($graph_yesterday_3[0]),"Serie3");  
 $DataSet->AddPoint(array($graph_yesterday_4[0]),"Serie4");  
 $DataSet->AddPoint(array($graph_yesterday_5[0]),"Serie5");  
 $DataSet->AddPoint(array($graph_yesterday_6[0]),"Serie6");  
 $DataSet->AddPoint(array($graph_yesterday_7[0]),"Serie7");  
 $DataSet->AddAllSeries();  
 $DataSet->SetAbsciseLabelSerie();  
 $DataSet->SetYAxisName("Secondes");
 $DataSet->SetYAxisUnit("s");   
 // $DataSet->SetSerieName("$date_yesterday_1_d","Serie2");  
 $DataSet->SetSerieName("$date_yesterday_1_d","Serie1");  
 $DataSet->SetSerieName("$date_yesterday_2_d","Serie2");  
 $DataSet->SetSerieName("$date_yesterday_3_d","Serie3");  
 $DataSet->SetSerieName("$date_yesterday_4_d","Serie4");  
 $DataSet->SetSerieName("$date_yesterday_5_d","Serie5");  
 $DataSet->SetSerieName("$date_yesterday_6_d","Serie6");  
 $DataSet->SetSerieName("$date_yesterday_7_d","Serie7");  
  
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
 $Test->setFontProperties("./chart/Fonts/tahoma.ttf",8);  
 $Test->drawLegend(300,150,$DataSet->GetDataDescription(),255,255,255);  
 $Test->setFontProperties("./chart/Fonts/tahoma.ttf",10);  
 $Test->Render("./users_graphs/$login_week.png");
 
 // $last_calls = last_calls($login);
 
 // $img = "./users_graphs/$login_week.png";
 // include("./vues/dashboard.php");

?>