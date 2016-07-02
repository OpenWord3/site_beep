<?php
	$all_droits_internes = all_droits_internes();
	$all_droits_externes = all_droits_externes();
	$all_groupes_normaux = all_groupes_normaux();
	$list_groupe_gateway = list_groupe_gateway();

	#id_groupe_switch($groupe)
	if(isset($_POST["ajouter_droit_interne"])){
		$groupe1=$_POST["groupe1"];
		$groupe2=$_POST["groupe2"];
		$type=$_POST["type"];

		$id_groupe1 = id_groupe_switch($groupe1);
		$id_groupe2 = id_groupe_switch($groupe2);

		if($type == "bidirectionnel"){
			$check_droit_bidir = check_droit_bidir($id_groupe1,$id_groupe2);

			if($check_droit_bidir != 0){
				$alert = "<h3><font style='color:red;font-weight:bold;'>Ce droit existe déjà.</font></h3>";
			} else {
				$unidir = '0';
				$bidir = '1';
				new_droit($id_groupe1,$id_groupe2,$unidir,$bidir);
				exec('sudo /var/script_beep/droit_appel_bidirectionnel.sh '.$groupe1.' '.$groupe2);
				$alert = "<h3><font style='color:green;font-weight:bold;'>Le droit a bien été ajouté.</font></h3>";
			}
			
		}else{
			$check_droit_unidir = check_droit_unidir($id_groupe1,$id_groupe2);
			$check_altern = check_altern($id_groupe2,$id_groupe1);

			if($check_droit_unidir != 0){
				$alert = "<h3><font style='color:red;font-weight:bold;'>Ce droit existe déjà.</font></h3>";
			} else {
				if($check_altern != 0){
					$alert = "<h3><font style='color:red;font-weight:bold;'>Ce droit existe déjà.</font></h3>";
				} else {
					$unidir = '1';
					$bidir = '0';
					new_droit($id_groupe1,$id_groupe2,$unidir,$bidir);
					exec('sudo /var/script_beep/droit_appel_unidirectionnel.sh '.$groupe1.' '.$groupe2);
					$alert = "<h3><font style='color:green;font-weight:bold;'>Le droit a bien été ajouté.</font></h3>";
				}
			}
			
		}			
	}else if(isset($_POST["ajouter_droit_externe"])){
		$groupe1=$_POST["groupe1"];
		$groupe2=$_POST["groupe2"];

		$id_groupe1 = id_groupe_switch($groupe1);
		$id_groupe2 = id_groupe_switch($groupe2);

		$check_droit_extern = check_droit_extern($id_groupe1,$id_groupe2);

		if($check_droit_extern != 0){
			$alert = "<h3><font style='color:red;font-weight:bold;'>Ce droit existe déjà.</font></h3>";
		}else {
			new_droit_extern($id_groupe1,$id_groupe2);
			exec('sudo /var/script_beep/droit_appel_unidirectionnel.sh '.$groupe1.' '.$groupe2);
			$alert = "<h3><font style='color:green;font-weight:bold;'>Le droit a bien été ajouté.</font></h3>";
		}

	} else if(isset($_POST["retirer_droit_interne"])){
		$groupe1=$_POST["groupe1"];
		$groupe2=$_POST["groupe2"];	
		$unidir=$_POST["unidir"];
		$bidir=$_POST["bidir"];	

		$id_groupe1 = id_groupe_switch($groupe1);
		$id_groupe2 = id_groupe_switch($groupe2);

		if($unidir == '1' && $bidir == '0'){			
			exec('sudo /var/script_beep/cancel_droit_unidirectionnel.sh '.$groupe1.' '.$groupe2);			

		} else {
			exec('sudo /var/script_beep/cancel_droit_bidirectionnel.sh '.$groupe1.' '.$groupe2);
		}
		
		del_droit_bidir($id_groupe1,$id_groupe2);
		$alert = "<h3><font style='color:green;font-weight:bold;'>Ce droit a bien été supprimé.</font></h3>";
		
	}else if(isset($_POST["retirer_droit_externe"])){
		$groupe1=$_POST["groupe1"];
		$groupe2=$_POST["groupe2"];

		$id_groupe1 = id_groupe_switch($groupe1);
		$id_groupe2 = id_groupe_switch($groupe2);

		del_droit_extern($id_groupe1,$id_groupe2);
		
		exec('sudo /var/script_beep/cancel_droit_unidirectionnel.sh '.$groupe1.' '.$groupe2);
		$alert = "<h3><font style='color:green;font-weight:bold;'>Ce droit a bien été supprimé.</font></h3>";
	}

	$all_droits_internes = all_droits_internes();
	$all_droits_externes = all_droits_externes();
	$all_groupes_normaux = all_groupes_normaux();
	$list_groupe_gateway = list_groupe_gateway();
	include("./vues/admin_droits.php");
	header("Refresh: 0;url=./vues/admin_droits.php");
?>