<?php
 $id_user = $_SESSION['id_user'];
 $num = select_user($id_user);
 $num = $num['num'];
 
 exec('sudo /var/script_beep/count_vocale.pl '.$num);
 $count_vocale = fopen("/var/script_beep/count_vocale.txt","r");
include("./vues/voicemail.php");
?>