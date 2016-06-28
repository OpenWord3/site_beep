<?php

 $date_today = date('Y-m-d');
 $date_yesterday_1 = date('Y-m-d', strtotime("1 day ago" ));
 $date_yesterday_2 = date('Y-m-d', strtotime("2 day ago" ));
 $date_yesterday_3 = date('Y-m-d', strtotime("3 day ago" ));
 
 $graph_today = graph_day($date_today,$date_yesterday_1);
 $graph_yesterday_1 = graph_day($date_yesterday_1,$date_yesterday_2);
 $graph_yesterday_2 = graph_day($date_yesterday_2,$date_yesterday_3);
 
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
 
//Je créer un nouvel objet contenant mes données pour le graphique */
 $MyData = new pData();

/*Je présente ma série de données à utiliser pour le graphique et je détermine le titre de l'axe vertical avec setAxisName*/  
 $MyData->addPoints(array($graph_today[0],$graph_yesterday_1[0],$graph_yesterday_2[0]),"Probe 3");
 $MyData->setSerieWeight("Probe 3",2);
 $MyData->setAxisName(0,"secondes");

/*J'indique les données horizontales du graphique. Il doit y avoir le même nombre que pour ma série de données précédentes (logique)*/
 $MyData->addPoints(array("$date_today_d","$date_yesterday_1_d","$date_yesterday_2_d"),"Labels");
 $MyData->setSerieDescription("Labels","Jour");
 $MyData->setAbscissa("Labels");
 $MyData->setPalette("Probe 3",array("R"=>255,"G"=>0,"B"=>0));

/* Je crée l'image qui contiendra mon graphique précédemment crée */
 $myPicture = new pImage(900,330,$MyData);

/* Je crée une bordure à mon image */
 $myPicture->drawRectangle(0,0,899,329,array("R"=>0,"G"=>0,"B"=>0));

/* J'indique le titre de mon graphique, son positionnement sur l'image et sa police */ 
 $myPicture->setFontProperties(array("FontName"=>"./pChart2.1.4/fonts/Forgotte.ttf","FontSize"=>11));
 $myPicture->drawText(200,25,"Votre consomation téléphonique les trois derniers jours",array("FontSize"=>20,"Align"=>TEXT_ALIGN_BOTTOMMIDDLE));

/* Je choisi le fond de mon graphique */
 $myPicture->setFontProperties(array("FontName"=>"./pChart2.1.4/fonts/pf_arma_five.ttf","FontSize"=>6));

/* Je détermine la taille du graphique et son emplacement dans l'image */
 $myPicture->setGraphArea(60,40,800,310);

/* Paramètres pour dessiner le graphique à partir des deux abscisses */
 $scaleSettings = array("XMargin"=>10,"YMargin"=>10,"Floating"=>TRUE,"GridR"=>200,"GridG"=>200,"GridB"=>200,"DrawSubTicks"=>TRUE,"CycleBackground"=>TRUE);
 $myPicture->drawScale($scaleSettings);

/* Je dessine mon graphique en fonction des paramètres précédents */
$myPicture->drawAreaChart();
$myPicture->drawLineChart(); 

/* Je rajoute des points rouge (plots) en affichant par dessus les données */
$myPicture->drawPlotChart(array("DisplayValues"=>TRUE,"PlotBorder"=>TRUE,"BorderSize"=>2,"Surrounding"=>-60,"BorderAlpha"=>80));

/* J'indique le chemin où je souhaite que mon image soit créée */
 $myPicture->Render("./users_graphs/$login.png");
 //echo '<img src="./users_graphs/.png">';
 $img = "./users_graphs/$login.png";
 include("./vues/dashboard.php");

?>