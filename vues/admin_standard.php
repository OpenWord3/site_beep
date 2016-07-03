<!DOCTYPE html>
<html lang="fr">
  <head>
  
    <title>Tableau de bord - Beep</title>
	
	<?php include ("./assets/pages/admin_css.php") ?>
	
  </head>

  <body>
		
	  <?php include ("./assets/pages/admin_menu.php") ?>
	  
      <section id="main-content">
          <section class="wrapper site-min-height">
          	<h3><i class="fa fa-angle-right"></i> Gestion du standard</h3>
          	<div class="row mt">
          		<div class="col-lg-12">
                <center>
                <form method="POST" action="">
				
				  <?php
					// ouverture du fichier texte en mode "lecture seule"
					$ouvre=fopen("/var/dialplan/standard.conf","r");
					// $ouvre=fopen("standard.conf","r");
					$i = 0;
					while ($i < 5) {
						// on recupère la ligne courante
						$temp = fgets($ouvre);
						$i++;
					}

					$valeurs = explode(",",$temp);

					$jours = $valeurs[3];
					$jour = explode("-",$jours);

					$corrections = $valeurs[2];
					$correction = explode("(",$corrections);

					$heures = $correction[1];
					$heure = explode("-",$heures);

					$h1 = $heure[0];
					$he1 = explode(":",$h1);

					$h2 = $heure[1];
					$he2 = explode(":",$h2);

					while ($i < 16) {
						// on recupère la ligne courante
						$temps = fgets($ouvre);
						$i++;
					}

					$phrase = explode("/",$temps);

					$mot = $phrase[1];
					$mots = explode(",",$mot);
					
					// echo $jour[0]."</br>";
					// echo $jour[1]."</br>";
					// echo $he1[0]."</br>";
					// echo $he1[1]."</br>";
					// echo $he2[0]."</br>";
					// echo $he2[1]."</br>";
					// echo $mots[0];

					// echo $temp;

					// fermeture du fichier
					fclose($ouvre);
				  ?>
				  
                <table width="300">
                  <tr>
                    <td><label><h2>Options</h2></label></td>
                  </tr>
                  <tr>
                    <td><label>Transfert</label></td>
                    <td><input type="checkbox"></td>
                  </tr>
				  <tr>
                    <td><label>Nouvel Utilisateur</label></td>
                    <td>
						<input type="text" value="<?php echo $mots[0] ?>" name="user" id="user" placeholder="Utilisateur"/>
					</td>
                  </tr>
                  <tr>
                    <td><label>Jour de début</label></td>
                    <td>
						<select value="begin_jour" name="begin_jour" id="begin_jour">
							<option value="mon" <?php echo ($jour[0] == "mon")?'selected="selected"':''; ?>>Lundi</option>
							<option value="tue" <?php echo ($jour[0] == "tue")?'selected="selected"':''; ?>>Mardi</option>
							<option value="wed" <?php echo ($jour[0] == "wed")?'selected="selected"':''; ?>>Mercredi</option>
							<option value="thu" <?php echo ($jour[0] == "thu")?'selected="selected"':''; ?>>Jeudi</option>
							<option value="fri" <?php echo ($jour[0] == "fri")?'selected="selected"':''; ?>>Vendredi</option>
							<option value="sat" <?php echo ($jour[0] == "sat")?'selected="selected"':''; ?>>Samedi</option>
							<option value="sun" <?php echo ($jour[0] == "sun")?'selected="selected"':''; ?>>Dimanche</option>
						</select>
					</td>
                  </tr>
                  <tr>
                    <td><label>Jour de fin</label></td>
                    <td>
						<select  value="end_jour" name="end_jour" id="end_jour">
							<option value="mon" <?php echo ($jour[1] == "mon")?'selected="selected"':''; ?>>Lundi</option>
							<option value="tue" <?php echo ($jour[1] == "tue")?'selected="selected"':''; ?>>Mardi</option>
							<option value="wed" <?php echo ($jour[1] == "wed")?'selected="selected"':''; ?>>Mercredi</option>
							<option value="thu" <?php echo ($jour[1] == "thu")?'selected="selected"':''; ?>>Jeudi</option>
							<option value="fri" <?php echo ($jour[1] == "fri")?'selected="selected"':''; ?>>Vendredi</option>
							<option value="sat" <?php echo ($jour[1] == "sat")?'selected="selected"':''; ?>>Samedi</option>
							<option value="sun" <?php echo ($jour[1] == "sun")?'selected="selected"':''; ?>>Dimanche</option>
						</select>
					</td>
                  </tr>
				  
                  <tr>
                    <td><label>Heure de début</label></td>
                    <td>
						<input type="number" value="<?php echo $he1[0] ?>" min="01" max="24" step="01" data-number-to-fixed="2" data-number-stepfactor="100" class="currency" id="begin_heure" name="begin_heure"/> heures
						<input type="number" value="<?php echo $he1[1] ?>" min="00" max="59" step="01" data-number-to-fixed="2" data-number-stepfactor="100" class="currency" id="begin_minute" name="begin_minute"/> minutes
					</td>
                  </tr>
                  <tr>
                    <td><label>Heure de fin</label></td>
                    <td>
						<input type="number" value="<?php echo $he2[0] ?>" min="01" max="24" step="01" data-number-to-fixed="2" data-number-stepfactor="100" class="currency" id="end_heure" name="end_heure"/> heures
						<input type="number" value="<?php echo $he2[1] ?>" min="00" max="59" step="01" data-number-to-fixed="2" data-number-stepfactor="100" class="currency" id="end_minute" name="end_minute"/> minutes
					</td>
                  </tr>
                </table><br>
                <center>
                  <button type="submit" name="modifier" id="modifier" class="btn btn-success btn-lg">
                    Enregister
                  </button>
                  <button class="btn btn-danger btn-lg" type="cancel">
                    Annuler
                  </button>
                </center>
                </form>
                </center>
          		</div>
          	</div>
			<?php
				if(isset($_POST['modifier'])){
					$user=$_POST['user'];
					$begin_jour=$_POST['begin_jour'];
					$end_jour=$_POST['end_jour'];
					$begin_heure=$_POST['begin_heure'];
					$begin_minute=sprintf("%02d",$_POST['begin_minute']);
					$end_heure=$_POST['end_heure'];
					$end_minute=sprintf("%02d",$_POST['end_minute']);
					
					exec('sudo /var/script_beep/standard.sh '.$begin_heure.' '.$begin_minute.' '.$end_heure.' '.$end_minute.' '.$begin_jour.' '.$end_jour.' '.$user);
					echo "window.location.reload()";
				}
			?>
		</section><! --/wrapper -->
      </section><!-- /MAIN CONTENT -->

      <!--main content end-->
      <!--footer start-->
		<?php include ("./assets/pages/admin_footer.php") ?>
      <!--footer end-->
  </section>

  <?php include ("./assets/pages/admin_js.php") ?>
    
  <script>
	webshims.setOptions('forms-ext', {
    replaceUI: 'auto',
    types: 'number'
	});
	webshims.polyfill('forms forms-ext');
  </script>
	
  <script>
      //custom select box

      $(function(){
          $('select.styled').customSelect();
      });

  </script>

  </body>
</html>
