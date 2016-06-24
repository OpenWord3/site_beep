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
                <form method="POST">
                <table width="300">
                  <tr>
                    <td><label><h2>Options</h2></label></td>
                  </tr>
                  <tr>
                    <td><label>Transfert</label></td>
                    <td><input type="checkbox"></td>
                  </tr>
                  <tr>
                    <td><label>Jour de début</label></td>
                    <td>
						<select value="begin_jour" name="begin_jour" id="begin_jour">
							<option value="mon">Lundi</option>
							<option value="tue">Mardi</option>
							<option value="wed">Mercredi</option>
							<option value="thu">Jeudi</option>
							<option value="fri">Vendredi</option>
							<option value="sat">Samedi</option>
							<option value="sun">Dimanche</option>
						</select>
					</td>
                  </tr>
                  <tr>
                    <td><label>Jour de fin</label></td>
                    <td>
						<select  value="end_jour" name="end_jour" id="end_jour">>
							<option value="mon">Lundi</option>
							<option value="tue">Mardi</option>
							<option value="wed">Mercredi</option>
							<option value="thu">Jeudi</option>
							<option value="fri">Vendredi</option>
							<option value="sat">Samedi</option>
							<option value="sun">Dimanche</option>
						</select>
					</td>
                  </tr>
                  <tr>
                    <td><label>Heure de début</label></td>
                    <td>
						<input type="number" value="8" min="01" max="24" step="01" data-number-to-fixed="2" data-number-stepfactor="100" class="currency" id="begin_heure" name="begin_heure"/> heures
						<input type="number" value="00" min="00" max="59" step="01" data-number-to-fixed="2" data-number-stepfactor="100" class="currency" id="begin_minute" name="begin_minute"/> minutes
					</td>
                  </tr>
                  <tr>
                    <td><label>Heure de fin</label></td>
                    <td>
						<input type="number" value="16" min="01" max="24" step="01" data-number-to-fixed="2" data-number-stepfactor="100" class="currency" id="end_heure" name="end_heure"/> heures
						<input type="number" value="00" min="00" max="59" step="01" data-number-to-fixed="2" data-number-stepfactor="100" class="currency" id="end_minute" name="end_minute"/> minutes
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
					$begin_jour=$_POST['begin_jour'];
					$end_jour=$_POST['end_jour'];
					$begin_heure=$_POST['begin_heure'];
					$begin_minute=sprintf("%02d",$_POST['begin_minute']);
					$end_heure=$_POST['end_heure'];
					$end_minute=sprintf("%02d",$_POST['end_minute']);
					
					exec('sudo /var/script_beep/standard.sh '.$begin_heure.' '.$begin_minute.' '.$end_heure.' '.$end_minute.' '.$begin_jour.' '.$end_jour);
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
