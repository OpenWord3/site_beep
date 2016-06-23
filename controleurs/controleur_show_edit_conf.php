<?php
	
	$id_conf = $_GET['Id'];
	$select_conf = select_conf($id_conf);
	
   include("./vues/edit_conf.php");	

?>