<?php
 $id_user = $_SESSION['id_user'];
 $num = select_user($id_user);
 $num = $num['num'];
 
 exec('sudo /var/script_beep/count_vocale  '.$num);
 $count_vocale = fopen("/var/script_beep/count_vocale.txt");
include("./vues/voicemail.php");
?>