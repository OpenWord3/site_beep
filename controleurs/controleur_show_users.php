<?php
	
	$nb_dahdi = count_dahdi();
	$info_port = info_port();
	$ports = array(1,2,3);
	//$x=1;
	
	$port = array();
		while($donnees = $info_port->fetch()){
			//echo $donnees['port'], "<br>";
			$port[] = $donnees['port'];
			//$x++;
		}
		if(empty($port)){
			$port[0] = "";
		}
		//echo $port;
		//echo count($port);
		for($i=1; $i <= 3; $i++){
			$y=0;
			while($y < count($port)){
			   if($i == $port[$y]){
				   unset($ports[array_search($port[$y], $ports)]);
			   }
			   $y++;
		   }
	   }
   $ports = array_values($ports);
   include("./vues/admin_gestion_personnes.php");	

?>