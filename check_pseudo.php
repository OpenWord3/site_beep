<?php	
	try{
		$bdd = new PDO("mysql:host=localhost;dbname=beep;charset=utf8", "root", "africainetfier", array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
	}catch(Exception $e){
		die("ERREUR : ".$e->getMessage());
	}
	
	global $bdd;
	
	$login = $_POST['login'];
if(strlen($login) == 0)
{
echo ('empty');
}
else 
{
// On récupère la liste des membres et on check si le pseudo existe déjà
$req = $bdd->query("SELECT login FROM users WHERE login like '$login'");

// On déroule la liste
$chk_pseudo = $req->fetch(PDO::FETCH_ASSOC);
// Si le pseuo existe déjà on retourne non
if($chk_pseudo == '1' || $chk_pseudo > '1')
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