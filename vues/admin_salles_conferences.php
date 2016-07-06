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
			
			<center><?php if(isset($msg)){ echo $msg;} ?></center>
			
			<?php 
				$show_conf = show_conf();
				while($donnees = $show_conf->fetch()){
			?>
				<div class="row mt">
					<div class="col-lg-12">
						<div class="content-panel">
                      <h4><i class="fa fa-angle-right"></i><?php echo "Salle ",$donnees['num']; ?></h4>
						  <section id="unseen">
                            <table class="table table-bordered table-striped table-condensed">
                              <thead>
                              <tr>
                                  <th>Options</th>
                                  <th>Valeurs</th>
                                  <th>
								  <form action="<?php echo INDEX ?>?index=del_conf" method="post">
										<input type="hidden" name="id_conf" value="<?php echo $donnees['id_conf']; ?>">
										<button class="btn btn-danger btn-xs" type ="submit" name="remove_levels" value="delete"><i class="fa fa-trash-o "></i></button>
									</form>    
								<a data-toggle="modal" href="#" data-target="#modal_edit" class="LienModal" rel="<?php echo $donnees['id_conf']; ?>"><i class="fa fa-pencil"></i></a>									
							  </th>
                              </tr>
                              </thead>
                              <tbody>
                              <tr>
                                  <td>Mot de passe</td>
                                  <td><?php echo $donnees['mdp']; ?></td>
                              </tr>
                              <tr>
                                  <td>TalkOnly</td>
                                  <td><?php if($donnees['option_talk'] == 1){echo "Oui";}else{echo "Non";}?></td>
                              </tr>
                              <tr>
                                  <td>Musique</td>
                                  <td><?php if($donnees['option_music'] == 1){echo "Oui";}else{echo "Non";}?></td>
                              </tr>                              
							  <tr>
                                  <td>Login</td>
                                  <td><?php echo $donnees['login']; ?></td>
                              </tr>
                              </tbody>
                            </table>
						  </section>
						</div><!-- /content-panel -->
					</div><!-- /col-lg-4 -->     
				</div><!-- /row -->
				<?php }
				?>
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
                <form action="<?php echo INDEX ?>?index=add_conf" method="POST">
                <table width="300">
                  <tr>
                    <td><label>Numéro de salle de conférence</label></td>
                    <td><input type="textbox" placeholder="Numéro de salle de conférence" name="num_conf" required pattern="[0-9]{3,10}"></td>
                  </tr>
                  <tr>
                    <td><label>Mot de Passe</label></td>
                    <td><input pattern="[0-9].{0,10}" type="textbox" Value="BeepProject" name="mdp_conf"></td>
                  </tr>
                  <tr>
                    <td><label>TalkOnly</label></td>
                    <td><input type="checkbox" name="opt_talk" value="1"></td>
                  </tr>
                  <tr>
                    <td><label>Musique d'attente</label></td>
                    <td><input type="checkbox" name="opt_music" value="1"></td>
                  </tr>
                </table>
                </center>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Fermer</button>
                <button type="submit" class="btn btn-primary">Ajouter</button>
              </div>
			</form>
            </div>
          </div>
        </div>
		
<div id="modal_edit" class="modal fade" data-backdrop="static" data-keyboard="false">
    <div class="modal-dialog">
        <div class="modal-content">
 
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <h4 class="modal-title">Modifer l'utilisateur</h4>
                </div>
				<center>
                <div class="modal-body">
                    <p>Loading...</p>
                </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
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
                    <td><input type="textbox" placeholder="Numéro de salle de conférence" name="num_conf"></td>
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
		
        <div class="modal fade" id="confirm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title" id="myModalLabel">Supprimer la conférence</h4>
              </div>
              <div class="modal-body">
                <center>
                    <table width="300">
                      <tr>
						<button type="button" data-dismiss="modal" class="btn btn-primary" id="delete">Delete</button>
						<button type="button" data-dismiss="modal" class="btn">Cancel</button>	
                      </tr>
                    </table>
                </center>
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
                <form action="<?php echo INDEX ?>?index=del_conf" method="POST">
                <table width="300">
                  <tr>
                    <td><label>Numéro de salle de conférence</label></td>
                    <td><input type="textbox" placeholder="Numéro de salle de conférence" name="num_conf" required pattern="[0-9]{3,10}"></td>
                  </tr>
                  <tr>
                    <td><label>Mot de Passe</label></td>
                    <td><input type="textbox" Value="S'il existe" name="mdp_conf"></td>
                  </tr>
                  <tr>
                </table>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Fermer</button>
                <button type="submit" class="btn btn-primary" data-target="#confirmer">Supprimer</button>
              </div>
             </form>
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
  <script>
$(".LienModal").click(function(oEvt){
    oEvt.preventDefault();
    var Id=$(this).attr("rel");
        $(".modal-body").fadeIn(1000).html('<div style="text-align:center; margin-right:auto; margin-left:auto">Patientez...</div>');
        $.ajax({
            type:"GET",
            data : "Id="+Id,
            url:"<?php echo INDEX ?>?index=show_edit_conf",
            error:function(msg){
                $(".modal-body").addClass("tableau_msg_erreur").fadeOut(800).fadeIn(800).fadeOut(400).fadeIn(400).html('<div style="margin-right:auto; margin-left:auto; text-align:center">Impossible de charger cette page</div>');
            },
            success:function(data){
                $(".modal-body").fadeIn(1000).html(data);
            }
        });
    });
   </script>  
   	<script>
		$('button[name="remove_levels"]').on('click', function(e){
			var $form=$(this).closest('form');
			e.preventDefault();
			$('#confirm').modal({ backdrop: 'static', keyboard: false })
				.one('click', '#delete', function (e) {
					$form.trigger('submit');
				});
		});
	</script> 

  </body>
</html>
