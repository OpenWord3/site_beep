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
        <section class="wrapper">
          	<h3><i class="fa fa-angle-right"></i> Liste des Gateways et leurs préfixes</h3>
				  <center>
					<?php if(isset($_POST["ajouter_switch"])){ echo $alert; }else if(isset($_POST["supprimer_switch"])){ echo $alert; }else if(isset($_POST["modifier_switch"])){echo $alert;} ?>
				  </center>
		  		    <div class="row mt">
			       		<div class="col-lg-12">
                      <div class="content-panel">
                      <h4><i class="fa fa-angle-right"></i></h4>
                          <section id="unseen">
                            <table class="table table-bordered table-striped table-condensed">
                              <thead>
                              <tr>
                                <th>Compte</th>
                                <th>Host</th>
                                <th>Port</th>
                                <th>Groupe</th>
                                <th>préfixes</th>
                                <th>Actions</th>
                              </tr>
                              </thead>
                              <tbody>
                                <?php foreach($all_switchs as $result) { ?>
                                <tr>                                  
                                  <td><?php echo $result["compte"]; ?></td>
                                  <td><?php echo $result["host"]; ?></td>
                                  <td><?php echo $result["port"]; ?></td>
                                  <td><?php echo $result["nom"]; ?></td>
                                  <td><?php echo $result["switch"]; ?></td>
                                  <td>
                                    <button class="btn btn-primary btn-xs" data-toggle="modal" data-target="#modification<?php echo $result["id_switch"]; ?>" ><a href="#modification<?php echo $result["id_switch"]; ?>"></a><i class="fa fa-pencil"></i></button>
                                    <button class="btn btn-danger btn-xs" data-toggle="modal" data-target="#suppression<?php echo $result["id_switch"]; ?>"><i class="fa fa-trash-o "></i></button>
                                  </td>
                                </tr> 
                                <?php } ?>                             
                              </tbody>
                          </table>
                          </section>
                  </div><!-- /content-panel -->
               </div><!-- /col-lg-4 -->			
		          </div><!-- /row -->

		    </section><! --/wrapper -->
        <center>
          <button class="btn btn-success btn-lg" data-toggle="modal" data-target="#ajouter">
            Ajouter un préfixe
          </button>
          <button class="btn btn-danger btn-lg" data-toggle="modal" data-target="#supprimer">
            Supprimer un préfixe
          </button>
        </center>
        <!-- Modal -->

        <?php foreach($all_switchs as $result) { ?>

          <div class="modal fade" id="suppression<?php echo $result["id_switch"] ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title" id="myModalLabel">Suppression du préfixe <?php echo $result["switch"]; ?> de la gateway <?php echo $result["compte"]; ?> du host <?php echo $result["host"]; ?></h4>
              </div>
              <div class="modal-body">
                <center>
                <form action="<?php echo INDEX ?>?index=vue_gestion_switch" method="POST">
                  <table width="300">
                    <tr>
                      <input type="hidden" name="id_switch" value="<?php echo $result["id_switch"] ?>">
                      <input type="hidden" name="compte" value="<?php echo $result["compte"]; ?>">
                      <input type="hidden" name="host" value="<?php echo $result["host"]; ?>">
                      <input type="hidden" name="port" value="<?php echo $result["port"]; ?>">
                      <input type="hidden" name="groupe" value="<?php echo $result["nom"]; ?>">
                      <input type="hidden" name="switch" value="<?php echo $result["switch"]; ?>">
                      <p>Etes-vous sûr de vouloir supprimer ce préfixe ?</p>
                    </tr>
                  </table>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal" >Non</button>
                    <button type="submit" class="btn btn-primary" name="supprimer_switch">Oui</button>
                  </div> 
                </form>
                </center>
              </div>
            </div>
          </div>
          </div>
        <?php } ?>

        <?php foreach($all_switchs as $result) { ?>

          <div class="modal fade" id="modification<?php echo $result["id_switch"] ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title" id="myModalLabel">Modification du préfixe <?php echo $result["switch"]; ?> de la gateway <?php echo $result["compte"]; ?> du host <?php echo $result["host"]; ?></h4>
              </div>
              <div class="modal-body">
                <center>
                <form action="<?php echo INDEX ?>?index=vue_gestion_switch" method="POST">
                  <table width="300">
                   <tr>
                      <td><label>nouveau préfixe</label></td>
                      <input type="hidden" name="id_switch" value="<?php echo $result["id_switch"] ?>">
                      <td><input type="textbox" placeholder="Nouveau switch" name="new_switch" required></td>
                    </tr>
                  </table>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal" >Fermer</button>
                    <button type="submit" class="btn btn-primary" name="modifier_switch">Modifier</button>
                  </div> 
                </form>
                </center>
              </div>
            </div>
          </div>
          </div>
        <?php } ?>

        <div class="modal fade" id="ajouter" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title" id="myModalLabel">Ajouter un préfixe</h4>
              </div>
              <div class="modal-body">
                <center>
                <form action="<?php echo INDEX ?>?index=vue_gestion_switch" method="POST">
                <table width="300">
                  <tr>
                    <td><label>Gateway</label></td>
                    <td><select name="gateway">
                        <?php foreach($all_gateways as $result){ ?>
                          <option><?php echo $result["compte"]; ?>_<?php echo $result["host"]; ?>_<?php echo $result["port"]; ?></option>
                        <?php } ?>
                    </select></td>
                  </tr>
                  <tr>
                    <td><label>Groupe</label></td>
                    <td><select name="groupe">
                        <?php foreach($groupes as $result){ ?>
                          <option><?php echo $result["nom"]; ?></option>
                        <?php } ?>
                    </select></td>
                  </tr>
                  <tr>
                    <td><label>Préfixe</label></td>
                    <td><input type="textbox" value="X" name="switch"></td>
                  </tr>
                </table>
                
                  <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Fermer</button>
                    <button type="submit" class="btn btn-primary" name="ajouter_switch">Ajouter</button>
                  </div>
                  </form>
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
                <h4 class="modal-title" id="myModalLabel">Supprimer un préfixe</h4>
              </div>
              <div class="modal-body">
                <center>
                <form action="<?php echo INDEX ?>?index=vue_gestion_switch" method="post">
                  <table width="300">
                    <tr>
                      <td><label>Entrer le préfixe</label></td>
                      <td><select name="id_switch">
                        <?php foreach($all_switchs as $result) { ?>
                          <option value="<?php echo $result["id_switch"]; ?>"><?php echo $result["compte"]."_".$result["host"]."_".$result["port"]."_".$result["nom"]."_".$result["switch"] ?></option>
                        <?php } ?>
                      </select></td>
                    </tr>
                  </table>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Fermer</button>
                    <button type="submit" class="btn btn-primary" name="supprimer_switch">Supprimer</button>
                  </div>
                </form>
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
    
  <script>
      //custom select box

      $(function(){
          $('select.styled').customSelect();
      });

  </script>
    
  </body>
</html>
