<?php
 
 $id_user = $_SESSION['id_user'];
 $select_user = select_user($id_user);
 
 $last_day_month = date('Y-m-d', strtotime("noon last day of this month" ));
 $total_consomation = sum_duration_month($login,$last_day_month);
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

 if(empty($graph_today[0])){
	 $graph_today[0] = 0;
 } 
 if(empty($graph_yesterday_1[0])){
	 $graph_yesterday_1[0] = 0;
 } 
 if(empty($graph_yesterday_2[0])){
	 $graph_yesterday_2[0] = 0;
 }
 
 
 // GRAPHIQUE ENTRANT ET SORTANT PAR JOUR
 
 $graph_day_incoming = graph_day_incoming($select_user[0],$date_tomorrow,$date_today);
 $graph_day_outgoing = graph_day_outgoing($login,$date_tomorrow,$date_today);
 
 echo $graph_day_incoming[0];
 echo $graph_day_outgoing[0];
 // Dataset definition   
 $DataSet = new pData;  
 // $DataSet->AddPoint(array($graph_yesterday_2[0]),"Serie3");  
 $DataSet->AddPoint(array($graph_day_outgoing[0]),"Serie2");  
 $DataSet->AddPoint(array($graph_day_incoming[0]),"Serie1");  
 $DataSet->AddAllSeries();  
 $DataSet->SetAbsciseLabelSerie();  
 $DataSet->SetYAxisName("Secondes");
 $DataSet->SetYAxisUnit("s");   
 // $DataSet->SetSerieName("$date_yesterday_1_d","Serie2");  
 $DataSet->SetSerieName("OUTGOING","Serie2");  
 $DataSet->SetSerieName("INCOMING","Serie1");  
  
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
 $Test->Render("./users_graphs/$login.png");
 
 // $last_calls = last_calls($login);
 
 $img = "./users_graphs/$login.png";
 include("./vues/dashboard.php");

?>