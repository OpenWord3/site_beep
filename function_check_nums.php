<?php

function check_nums($nums_users,$nums_callcenters,$nums_conferences,$num){
	$i = 1;
	while($donnees = $nums_users->fetch()){
		$nums[$i] = $donnees['num'];
		$i++;
	}	
	
	while($donnees = $nums_callcenters->fetch()){
		$nums[$i] = $donnees['num'];
		$i++;		
	}
	
	while($donnees = $nums_conferences->fetch()){
		$nums[$i] = $donnees['num'];
		$i++;
	}
	
	if(empty($nums)){
		$nums = 0;
	}
	
	$size = sizeof($nums);
	$check_num = 0;
	
	for($x=1; $x <= $size; $x++){
		if($num == $nums[$x]){
			$check_num = 1;
		}
	}
	
	return $check_num;
}


?>