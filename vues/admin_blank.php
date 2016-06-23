<!DOCTYPE html>
<html lang="fr">
  <head>
    <title>Tableau de bord - Beep</title>
	
	<?php include ("./assets/pages/admin_css.php") ?>
	
  </head>

  <body>

  <section id="container" >

      <?php include ("./assets/pages/admin_menu.php") ?>
	  
      <section id="main-content">
          <section class="wrapper site-min-height">
          	<h3><i class="fa fa-angle-right"></i> Notes</h3>
          	<div class="row mt">
          		<div class="col-lg-12">
          		<form>
					<textarea Placeholder="Commencer à écrire içi" rows="35" cols="222" id="text"></textarea><br />

				</form>				
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
