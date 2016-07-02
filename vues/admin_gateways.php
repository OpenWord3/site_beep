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
          	<h3><i class="fa fa-angle-right"></i> Liste des Gateways</h3>
			<center>
				<?php if(isset($_POST["ajouter_gateway"])){ echo $alert; 
					}else if(isset($_POST["modifier"])){ echo $alert; 
					}else if(isset($_POST["supprimer"])){echo $alert;}
				?>
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
                                <th>Mot de passe</th>
                                <th>Host (Ippi, Ovh, etc...)</th>
                                <th>port</th>
                                <th>Actions</th>
                              </tr>
                              </thead>
                              <tbody>
                                <?php foreach($liste_gateway as $result) { ?>
                                <tr>                                  
                                  <td><?php echo $result["compte"]; ?></td>
                                  <td><button data-toggle="modal" data-target="#athentication<?php echo $result["id_gateway"]; ?>">Voir mot de passe</button></td>
                                  <td><?php echo $result["host"]; ?></td>
                                  <td><?php echo $result["port"]; ?></td>
                                  <td>
                                    <button class="btn btn-primary btn-xs" data-toggle="modal" data-target="#modification<?php echo $result["id_gateway"]; ?>" ><a href="#modification<?php echo $result["id_gateway"]; ?>"></a><i class="fa fa-pencil"></i></button>
                                    <button class="btn btn-danger btn-xs" data-toggle="modal" data-target="#suppression<?php echo $result["id_gateway"]; ?>"><i class="fa fa-trash-o "></i></button>
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
            Ajouter une gateway
          </button>
          <button class="btn btn-danger btn-lg" data-toggle="modal" data-target="#supprimer">
            Supprimer une gateway
          </button>
        </center>
        <!-- Modal -->

        <?php foreach($liste_gateway as $result) { ?>

          <div class="modal fade" id="athentication<?php echo $result["id_gateway"]; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title" id="myModalLabel">Mot de passe de la gateway <?php echo $result["compte"]; ?></h4>
              </div>
              <div class="modal-body">
                <center>
                <!--<form>-->
                  <table width="300">
                    <tr>
                      <p>Etrez votre mot de passe admin</p>
                      <input type="password" id="password<?php echo $result["id_gateway"]; ?>"/> 
                      <span id="resultat<?php echo $result["id_gateway"]; ?>"></span>
                      <input id="id_gateway<?php echo $result["id_gateway"]; ?>" type="hidden" name="id_gateway" value="<?php echo $result["id_gateway"]; ?>">
                    </tr>
                  </table>                  
                <!--</form>-->
                </center>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal" id="non<?php echo $result["id_gateway"]; ?>">Fermer</button>
                <button type="submit" class="btn btn-primary" id="submit<?php echo $result["id_gateway"]; ?>">Valider</button>
              </div> 
            </div>
          </div>
          </div>
        <?php } ?>

        <?php foreach($liste_gateway as $result) { ?>

          <div class="modal fade" id="suppression<?php echo $result["id_gateway"] ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title" id="myModalLabel">Suppression de la gateway <?php echo $result["compte"]; ?></h4>
              </div>
              <div class="modal-body">
                <center>
                <form action="<?php echo INDEX ?>?index=vue_gestion_gateway" method="POST">
                  <table width="300">
                    <tr>
                      <input type="hidden" name="id_gateway" value="<?php echo $result["id_gateway"] ?>">
                      <p>Etes-vous sûr de vouloir supprimer cette gateway ?</p>
                    </tr>
                  </table>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal" >Non</button>
                    <button type="submit" class="btn btn-primary" name="supprimer">Oui</button>
                  </div> 
                </form>
                </center>
              </div>
            </div>
          </div>
          </div>
        <?php } ?>

        <?php foreach($liste_gateway as $result) { ?>

          <div class="modal fade" id="modification<?php echo $result["id_gateway"] ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title" id="myModalLabel">Modification de la gateway <?php echo $result["compte"]; ?></h4>
              </div>
              <div class="modal-body">
                <center>
                <form action="<?php echo INDEX ?>?index=vue_gestion_gateway" method="POST">
                  <table width="300">
                   <tr>
                      <td><label>nouveau mot de passe</label></td>
                      <input type="hidden" name="id_gateway" value="<?php echo $result["id_gateway"] ?>">
                      <td><input type="textbox" placeholder="Nouveau mot de passe" name="new_mdp" required></td>
                    </tr>
                    <tr>
                      <td><label>Mot de Passe</label></td>
                      <td><input type="textbox" Value="Chargé son mot de passe"></td>
                    </tr>
                  </table>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal" >Fermer</button>
                    <button type="submit" class="btn btn-primary" name="modifier">Modifier</button>
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
                <h4 class="modal-title" id="myModalLabel">Ajouter une gateway</h4>
              </div>
              <div class="modal-body">
                <center>
                <form action="<?php echo INDEX ?>?index=vue_gestion_gateway" method="POST">
                <table width="300">
                  <tr>
                    <td><label>Compte</label></td>
                    <td><input type="textbox" placeholder="Ovh ou Ippi" name="compte"></td>
                  </tr>
                  <tr>
                    <td><label>Mot de passe</label></td>
                    <td><input type="textbox" placeholder="Mot de passe" name="mdp"></td>
                  </tr>
                  <tr>
                    <td><label>Host</label></td>
                    <td><input type="textbox" placeholder="ippi.fr ou ovh.fr" name="host"></td>
                  </tr>
                  <tr>
                    <td><label>Port</label></td>
                    <td><input type="textbox" placeholder="ippi.fr ou ovh.fr" name="port"></td>
                  </tr>
                </table>
                
                  <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Fermer</button>
                    <button type="submit" class="btn btn-primary" name="ajouter_gateway">Ajouter</button>
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
                <h4 class="modal-title" id="myModalLabel">Supprimer une gateway</h4>
              </div>
              <div class="modal-body">

                <center>
                <form>
                <table width="300">
                  <tr>
                    <th><label>Entrer le nom</label></th>
                    <th><input type="textbox" placeholder="Le nom"></th>
                  </tr>
                </table>
                </form>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Fermer</button>
                <button type="button" class="btn btn-primary" data-target="#confirmer">Supprimer</button>
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
      $(document).ready(function(){

        <?php foreach($liste_gateway as $result) { ?>
          $("#submit<?php echo $result['id_gateway']; ?>").on('click', function(){
            //$("#submit<?php echo $result['id_gateway']; ?>").click(function(){
              var password = $("#password<?php echo $result['id_gateway']; ?>").val();
              var id_gateway = $("#id_gateway<?php echo $result['id_gateway']; ?>").val();
              console.log(password);
              console.log(id_gateway);
              //console.error(alert(e.message));
              $.ajax
              ({    
                type: "POST",
                url: "./vues/admin.php",
                data: "p=" + password + "&id=" + id_gateway,
                datatype: 'html',
                success: function(msg)
                {
                  $("#resultat<?php echo $result['id_gateway']; ?>").html(msg);
                  $("#resultat<?php echo $result['id_gateway']; ?>").fadeIn();
                }
              });          
            });

            $("#non<?php echo $result['id_gateway']; ?>").on('click',function(){
            //$("#non<?php echo $result['id_gateway']; ?>").click(function(){
              $("#resultat<?php echo $result['id_gateway']; ?>").fadeOut();
              $("#password<?php echo $result['id_gateway']; ?>").val("");
            });
        <?php } ?>

        $(function(){
          $('select.styled').customSelect();
        });
      });

  </script>
    

  </body>
</html>
