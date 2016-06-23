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
                <form>
                <table width="300">
                  <tr>
                    <td><label>Standard Actuel</label></td>
                    <td><input type="textbox" Value="SIP/adolphe"></td>
                  </tr>
                  <tr>
                    <td><label>Nom</label></td>
                    <td><input type="textbox" placeholder="Nom"></td>
                  </tr>
                  <tr>
                    <td><label><h2>Options</h2></label></td>
                  </tr>
                  <tr>
                    <td><label>Transfert</label></td>
                    <td><input type="checkbox"></td>
                  </tr>
                  <tr>
                    <td><label>Jours</label></td>
                    <td><input type="textbox" placeholder="LUN-VEN"></td>
                  </tr>
                  <tr>
                    <td><label>Heures</label></td>
                    <td><input type="textbox" placeholder="08h-19h"></td>
                  </tr>
                </table><br>
                <center>
                  <button class="btn btn-success btn-lg">
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
			
		</section><! --/wrapper -->
      </section><!-- /MAIN CONTENT -->

      <!--main content end-->
      <!--footer start-->
		<?php include ("./assets/pages/admin_footer.php") ?>
      <!--footer end-->
  </section>

  <?php include ("./assets/pages/admin_js.php") ?>
    
  <script>
      //custom select box

      $(function(){
          $('select.styled').customSelect();
      });

  </script>

  </body>
</html>
