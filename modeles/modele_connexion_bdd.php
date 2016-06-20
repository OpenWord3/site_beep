<?php
	try{
		$bdd = new PDO("mysql:host=localhost;dbname=beep;charset=utf8", "root", "africainetfier", array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
	}catch(Exception $e){
		die("ERREUR : ".$e->getMessage());
	}
?>