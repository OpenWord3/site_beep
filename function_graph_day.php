<?php
 
function graph_day($graph_day_incoming,$graph_day_outgoing,$login){
 $date_today = date('Y-m-d'); 
 $date_today_d = date('D');
 $date = date("l j F Y");
 
 // GRAPHIQUE ENTRANT ET SORTANT PAR JOUR
 
 // $graph_day_incoming = graph_day_incoming($num[0],$date_today);
 // $graph_day_outgoing = graph_day_outgoing($login,$date_today);
 
 if(empty($graph_day_incoming[0])){
	 $graph_day_incoming[0] = 0;
 }
 else{
	 $graph_day_incoming[0] = $graph_day_incoming[0]/60;
 }
 if(empty($graph_day_outgoing[0])){
	 $graph_day_outgoing[0] = 0;
 }
 else{
	 $graph_day_outgoing[0] = $graph_day_outgoing[0]/60;
 }
 // Dataset definition   
 $DataSet = new pData;  
 // $DataSet->AddPoint(array($graph_yesterday_2[0]),"Serie3");  
 $DataSet->AddPoint(array($graph_day_outgoing[0]),"Serie2");  
 $DataSet->AddPoint(array($graph_day_incoming[0]),"Serie1");  
 $DataSet->AddPoint(array($date),"Serie3");  
 $DataSet->AddSerie("Serie2");  
 $DataSet->AddSerie("Serie1");  
 $DataSet->SetAbsciseLabelSerie("Serie3");  
 $DataSet->SetYAxisName("Minutes");
 $DataSet->SetYAxisUnit("m");   
 // $DataSet->SetSerieName("$date_yesterday_1_d","Serie2");  
 $DataSet->SetSerieName("Appels Sortants","Serie2");  
 $DataSet->SetSerieName("Appels Entrants","Serie1");  
  
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
 $login_day = $login . "_day.png";
 $Test->setFontProperties("./chart/Fonts/tahoma.ttf",8);  
 $Test->drawLegend(300,150,$DataSet->GetDataDescription(),255,255,255);  
 $Test->setFontProperties("./chart/Fonts/tahoma.ttf",10);  
 $Test->Render("./users_graphs/$login_day");
 
 return $login_day;
}
?>