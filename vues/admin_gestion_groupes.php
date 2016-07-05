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

        <div class="row mt">
          <div class="col-lg-12">
            <center>
              <button class="btn btn-success btn-lg" data-toggle="modal" data-target="#ajouter_groupe">
                <i class="fa fa-plus"></i> groupe
              </button>
              <button class="btn btn-danger btn-lg" data-toggle="modal" data-target="#supprimer">
                <i class="fa fa-minus"></i> groupe
              </button>
            </center>
			<center><?php if(isset($msg)){ echo $msg;} ?></center>
          </div>
        </div>

		    <div class="row mt">
       		<div class="col-lg-12">
                <div class="content-panel">
                    <h3><i class="fa fa-angle-right"></i> Liste des groupes d'utilisateurs</h3>
                    <section id="unseen">
                      <table class="table table-hover">
                        <thead>
                          <tr>
                            <th>#</th>
                            <th>Nom du groupe</th>
                          </tr>
                        </thead>
                        <tbody>
						 <?php $i=1; $show_groupes = show_groupe(); while($donnees = $show_groupes->fetch()){ $nom = $donnees['nom']; ?>
                          <tr>
                            <th scope="row"><?php echo $i; ?></th>
                            <td><?php echo $nom; ?></td>
                            <th>
							<form action="<?php echo INDEX ?>?index=del_contexte" method="POST">
								<input type="hidden" name="nom_groupe" value="<?php echo $nom; ?>">
								<button class="btn btn-danger btn-xs" type ="submit" name="remove_levels" value="delete" <?php if($nom == 'default'){echo "disabled";} ?>><i class="fa fa-trash-o "></i></button>
							</form>                            
							</th>
                          </tr>
						<?php $i++;} ?>
                        </tbody>
                      </table>
                    </section>
            </div><!-- /content-panel -->
         </div><!-- /col-lg-4 -->			
        </div><!-- /row -->

		    </section><! --/wrapper -->
        <!-- Modal -->

        <div class="modal fade" id="supprimer" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title" id="myModalLabel">Supprimer un groupe</h4>
              </div>

              <div class="modal-body">
                <center>
                  <form action="<?php echo INDEX ?>?index=del_contexte" method="POST">
                    <table width="300">
                      <tr>
                        <th><label>Nom du groupe</label></th>
                        <th><input type="textbox" placeholder="Nom du groupe" name="nom_groupe" required></th>
                      </tr>
                    </table>
                </center>
              </div>

              <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Fermer</button>
                <button type="submit" class="btn btn-primary" button class="btn btn-danger btn-xs" >Supprimer</button>
              </div>
			 </form>
            </div>
          </div>
        </div>

        <div class="modal fade" id="ajouter_groupe" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title" id="myModalLabel">Ajouter un groupe</h4>
              </div>
              <div class="modal-body">
                <center>
                <form action="<?php echo INDEX ?>?index=add_contexte" method="POST">
                <table width="300">
                  <tr>
                    <td><label>Nom du groupe</label></td>
                    <td><input type="textbox" placeholder="Nom du groupe" name="nom_groupe" required></td>
                  </tr>
                </table>
                </center>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Fermer</button>
                <button type="submit" class="btn btn-primary"  name="from_groupe" value="from_groupe">Ajouter</button>
              </div>
              </form>
            </div>
          </div>
        </div>

        <div class="modal fade" id="confirm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title" id="myModalLabel">Supprimer le groupe</h4>
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
