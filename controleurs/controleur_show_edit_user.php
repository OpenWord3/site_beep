<?php
	
	$show_groupe = show_groupe();
	$id_conf = $_GET['Id'];
	$select_user = select_user($id_conf);
	
   include("./vues/edit_user.php");	

?>