<?php	
	try{
		$bdd = new PDO("mysql:host=localhost;dbname=beep;charset=utf8", "root", "africainetfier", array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
	}catch(Exception $e){
		die("ERREUR : ".$e->getMessage());
	}
	
	global $bdd;
	
	$num = $_POST['num'];
if(strlen($num) == 0)
{
echo ('empty');
}
else 
{
// On récupère la liste des membres et on check si le pseudo existe déjà
$req = $bdd->query("SELECT num FROM numeros WHERE num like '$num'");

// On déroule la liste
$chk_num = $req->fetch(PDO::FETCH_ASSOC);
// Si le pseuo existe déjà on retourne non
if($chk_num == '1' || $chk_num > '1')
{
echo ('no');
$ok = false;
}
else
{
echo ('yes');
}
} 
?>