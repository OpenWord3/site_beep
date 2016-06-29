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
 
 $DataSet = new pData;  
 $DataSet->AddPoint(array($graph_today,$graph_yesterday_1,$graph_yesterday_2),"Serie1");  
 $DataSet->AddPoint(array("$date_today_d","$date_yesterday_1_d","$date_yesterday_2_d"),"Serie2");  
 $DataSet->AddAllSeries();  
 $DataSet->SetAbsciseLabelSerie("Serie2");  
  
 // Initialise the graph  
 $Test = new pChart(300,200);  
 $Test->drawFilledRoundedRectangle(7,7,293,193,5,240,240,240);  
 $Test->drawRoundedRectangle(5,5,295,195,5,230,230,230);  
  
 // Draw the pie chart  
 $Test->setFontProperties("./chart/Fonts/tahoma.ttf",8);  
 $Test->setShadowProperties(2,2,200,200,200);  
 $Test->drawFlatPieGraphWithShadow($DataSet->GetData(),$DataSet->GetDataDescription(),120,100,60,PIE_PERCENTAGE,10);  
 $Test->drawPieLegend(230,15,$DataSet->GetData(),$DataSet->GetDataDescription(),250,250,250);   
 $Test->Render("./users_graphs/$login.png");
 
 $img = "./users_graphs/$login.png";
 include("./vues/dashboard.php");

?>