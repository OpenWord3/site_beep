<!DOCTYPE html>
<html lang="fr">
  <head>
  
    <title>Tableau de bord - Beep</title>
	
	<?php include ("./assets/pages/admin_css.php") ?>
	
  </head>

  <body>
		
	  <?php include ("./assets/pages/admin_menu.php") ?>
	  
      <section id="main-content">
        <section class="wrapper">
          	<h3><i class="fa fa-angle-right"></i> Liste des Salles de conférences</h3>
				<center>
				  <button class="btn btn-success btn-lg" data-toggle="modal" data-target="#ajouter">
					<i class="fa fa-plus"></i> salle de conférence
				  </button>
				  <button class="btn btn-danger btn-lg" data-toggle="modal" data-target="#supprimer">
					<i class="fa fa-minus"></i> salle de conférence
				  </button>
				</center>
				<div class="row mt">
					<div class="col-lg-12">
						<div class="content-panel">
						<h4><i class="fa fa-angle-right"></i> Salle <b>7001</b></h4>
						  <section id="unseen">
							<table class="table table-bordered table-striped table-condensed">
							  <thead>
							  <tr>
								  <th>Options</th>
								  <th>Valeurs</th>
								  <th>
									<button class="btn btn-primary btn-xs"  data-toggle="modal" data-target="#modifier"><i class="fa fa-pencil"></i></button>
									<button class="btn btn-danger btn-xs"  data-toggle="modal" data-target="#confirmation"><i class="fa fa-trash-o "></i></button>
								  </th>
							  </tr>
							  </thead>
							  <tbody>
							  <tr>
								  <td>Mot de passe</td>
								  <td>12345</td>
							  </tr>
							  <tr>
								  <td>TalkOnly</td>
								  <td>Non</td>
							  </tr>
							  <tr>
								  <td>Musique</td>
								  <td>Oui</td>
							  </tr>
							  </tbody>
							</table>
						  </section>
						</div><!-- /content-panel -->
					<!-- /col-lg-4 -->     
				</div><!-- /row -->
		    </section><! --/wrapper -->
        
		<!-- Modal -->
        <div class="modal fade" id="ajouter" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title" id="myModalLabel">Ajouter une salle de conférence</h4>
              </div>
              <div class="modal-body">
                <center>
                <form>
                <table width="300">
                  <tr>
                    <td><label>Numéro de salle de conférence</label></td>
                    <td><input type="textbox" placeholder="Nunméro de salle de conférence"></td>
                  </tr>
                  <tr>
                    <td><label>Mot de Passe</label></td>
                    <td><input type="textbox" Value="BeepProject"></td>
                  </tr>
                  <tr>
                    <td><label>TalkOnly</label></td>
                    <td><input type="checkbox"></td>
                  </tr>
                  <tr>
                    <td><label>Musique d'attente</label></td>
                    <td><input type="checkbox"></td>
                  </tr>
                </table>
                </form>
                </center>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Fermer</button>
                <button type="button" class="btn btn-primary">Ajouter</button>
              </div>
            </div>
          </div>
        </div>
		
		<div class="modal fade" id="modifier" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title" id="myModalLabel">Modifier une salle de conférence</h4>
              </div>
              <div class="modal-body">
                <center>
                <form>
                <table width="300">
                  <tr>
                    <td><label>Numéro de salle de conférence</label></td>
                    <td><input type="textbox" placeholder="Nunméro de salle de conférence" name="num_conf"></td>
                  </tr>
                  <tr>
                    <td><label>Mot de Passe</label></td>
                    <td><input type="textbox" Value="BeepProject" name="mdp_conf"></td>
                  </tr>
                  <tr>
                    <td><label>TalkOnly</label></td>
                    <td><input type="checkbox" name="talk"></td>
                  </tr>
                  <tr>
                    <td><label>Musique d'attente</label></td>
                    <td><input type="checkbox" name="music"></td>
                  </tr>
                </table>
                </form>
                </center>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Fermer</button>
                <button type="button" class="btn btn-primary">Ajouter</button>
              </div>
            </div>
          </div>
        </div>
		
		<div class="modal fade" id="confirmation" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title" id="myModalLabel">Supprimer la salle {xxx} ?</h4>
              </div>
              <div class="modal-body">
                <center>
				  <button class="btn btn-success btn-lg">
					OUI
				  </button>
				  <button class="btn btn-danger btn-lg">
					NON
				  </button>
				</center>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Fermer</button>
                <button type="button" class="btn btn-primary">Supprimer</button>
              </div>
            </div>
          </div>
        </div>
		
        <div class="modal fade" id="supprimer" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title" id="myModalLabel">Supprimer une salle de conférence</h4>
              </div>
              <div class="modal-body">

                <center>
                <form>
                <table width="300">
                  <tr>
                    <td><label>Numéro de salle de conférence</label></td>
                    <td><input type="textbox" placeholder="Nunméro de salle de conférence" name="num_conf"></td>
                  </tr>
                  <tr>
                    <td><label>Mot de Passe</label></td>
                    <td><input type="textbox" Value="S'il existe" name="mdp_conf"></td>
                  </tr>
                  <tr>
                </table>
                </form>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Fermer</button>
                <button type="button" class="btn btn-primary" data-dismiss="modal" data-toggle="modal" data-target="#confirmation">Supprimer</button>
              </div>
            </div>
          </div>
      </section><!-- /MAIN CONTENT -->
      
	  <!--main content end-->
      <!--footer start-->
		<?php include ("./assets/pages/admin_footer.php") ?>
      <!--footer end-->
  </section>

  <?php include ("./assets/pages/admin_js.php") ?>
    
    <!--script for this page-->    <!--script for this page-->
    <script type="text/javascript" src="./assets/js/gritter/js/jquery.gritter.js"></script>
    <script type="text/javascript" src="./assets/js/gritter-conf.js"></script>
    
  <script>
      //custom select box

      $(function(){
          $('select.styled').customSelect();
      });

  </script>
    

  </body>
</html>
