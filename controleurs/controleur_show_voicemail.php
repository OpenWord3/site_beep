<?php
 $id_user = $_SESSION['id_user'];
 $num = select_user($id_user);
 $num = $num['num'];
 
include("./vues/voicemail.php");
?>