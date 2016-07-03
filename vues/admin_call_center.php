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
          	<h3><i class="fa fa-angle-right"></i> Liste des Centres d'appels</h3>
			<center>
			  <button class="btn btn-success btn-lg" data-toggle="modal" data-target="#ajouter">
				<i class="fa fa-plus"></i> call center
			  </button>
			  <button class="btn btn-primary btn-lg" data-toggle="modal" data-target="#modifier">
				<i class="fa fa-pencil"></i> call center
			  </button>
			  <button class="btn btn-danger btn-lg" data-toggle="modal" data-target="#supprimer">
				<i class="fa fa-minus"></i> call center
			  </button>
			</center>
			
			<center>
				<?php
					if(isset($_POST["ajouter_call_center"])){echo $alert;
					}else if(isset($_POST["supprimer_call_center"])){echo $alert;
					}else if(isset($_POST["ajouter_membre"])){echo $alert;
					}else if(isset($_POST["supprimer_membre"])){echo $alert;}
				?>
			</center>
		
			<?php foreach($all_callcenters as $result){ 
				$nom_call = $result["nom"];
				$membre_call = membre_call($nom_call);
			?>
			
			<div class="row mt">
				<div class="col-lg-12">
			  <div class="content-panel">
			  <h4><i class="fa fa-angle-right"></i> <?php echo $result["nom"]; ?> numéro : <?php echo $result["num"]; ?> <i class="fa fa-info-circle" data-toggle="modal" data-target="#infos"></i></h4>
				  <section id="unseen">
					<table class="table table-bordered table-striped table-condensed">
					  <thead>
					  <tr>
						  <th>Nom</th>
						  <th>Prenoms</th>
						  <th>Login</th>
						  <th class="numeric">Numéro de transfert</th>
						  <th>Adresse Mail</th>
						  <th>
							<button class="btn btn-success btn-xs" data-toggle="modal" data-target="#ajoutermembre<?php echo $result["id_callcenter"]; ?>"><i class="fa fa-plus" ></i></button>
							<button class="btn btn-primary btn-xs" data-toggle="modal" data-target="#modifierstrategy"><i class="fa fa-pencil"></i></button>
							<button class="btn btn-danger btn-xs" data-toggle="modal" data-toggle="modal" data-target="#supprimermembre<?php echo $result["id_callcenter"]; ?>"><i class="fa fa-trash-o"></i></button>
						  </th>
					  </tr>
					  </thead>
					  <tbody>
            <?php foreach($membre_call as $result){ ?>
  					  <tr>
  						  <td><?php echo $result["nom"]; ?></td>
  						  <td><?php echo $result["prenom"]; ?></td>
  						  <td><?php echo $result["login"]; ?></td>
  						  <td class="numeric"><?php echo $result["num_transfert"]; ?></td>
  						  <td><?php echo $result["mail"]; ?></td>
  						  <td><i class="btn btn-danger btn-xs" class="fa fa-minus"></i></td>
  					  </tr>
            <?php } ?>
					  </tbody>
					</table>
				  </section>
			  </div><!-- /content-panel -->
        </div><!-- /col-lg-4 -->			
		 </div><!-- /row -->
     <?php } ?>
		</section><! --/wrapper -->
        <!-- Modal -->
        <?php foreach($all_callcenters as $result){ 
          $nom_call = $result["nom"];
        ?>
        <div class="modal fade" id="ajoutermembre<?php echo $result["id_callcenter"]; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title" id="myModalLabel">Ajouter un membre</h4>
              </div>
              <div class="modal-body">
                <center>
                  <form action="<?php echo INDEX ?>?index=vue_gestion_callcenter" method="POST">
                    <table width="300">
                      <tr>
                        <th><label>Nom du centre</label></th>
                        <input type="hidden" value="<?php echo $result["nom"]; ?>" name="nom_call" />
                        <th><input type="textbox" value="<?php echo $result["nom"]; ?>" disabled /></th>
                      </tr>
                      <tr>
                        <td><label>Numero utilisateur</label></td>
                        <td><select name="membre">
                          <?php $all_users = all_users();
                            foreach($all_users as $result){
                          ?>
                          <option><?php echo $result["login"]; ?></option>
                          <?php } ?>
                        </select></td>
                      </tr>
                    </table>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-default" data-dismiss="modal">Fermer</button>
                      <button type="submit" class="btn btn-primary" name="ajouter_membre">Ajouter</button>
                    </div>
                  </form>
                </center>
              </div>              
            </div>
          </div>
        </div>
        <?php } ?>

        <?php foreach($all_callcenters as $result){ 
          $nom_call = $result["nom"];
          $membre_call = membre_call($nom_call);
        ?>
        <div class="modal fade" id="supprimermembre<?php echo $result["id_callcenter"]; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title" id="myModalLabel">Retirer un membre du centre d'appel</h4>
              </div>
              <div class="modal-body">
                <center>
                <form action="<?php echo INDEX ?>?index=vue_gestion_callcenter" method="POST">
                  <table width="300">
                    <tr>
                      <th><label>Nom du centre d'appels</label></th>
                      <input type="hidden" value="<?php echo $result["nom"]; ?>" name="nom_call" />
                      <th><input type="textbox" value="<?php echo $result["nom"]; ?>" disabled /></th>
                    </tr>
                    <tr>
                      <td><label>Numero utilisateur</label></td>
                      <td><select name="membre">
                        <?php foreach($membre_call as $result){ ?>
                          <option><?php echo $result["login"]; ?></option>
                        <?php } ?>
                      </select></td>
                    </tr>
                  </table>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Fermer</button>
                    <button type="submit" class="btn btn-primary" name="supprimer_membre">Retirer</button>
                  </div>
                </form>
                </center>
              </div>              
            </div>
          </div>
        </div>
        <?php } ?>

        <div class="modal fade" id="infos" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title" id="myModalLabel">Informations sur le centre d'appels</h4>
              </div>
              <div class="modal-body">
                <center>
                <form>
                <table width="300">
                  <tr>
                    <th><label>Nom</label></th>
                    <th><label>First</label></th>
                  </tr>
                  <tr>
                    <td><label>Numero</label></td>
                    <td><label>1111</label></td>
                  </tr>
                  <tr>
                    <td><label>Stratégie</label></td>
                    <td><label>RingAll</label></td>
                  </tr>
                 </table>
                </form>
                </center>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Fermer</button>
              </div>
            </div>
          </div>
        </div>

        <div class="modal fade" id="ajouter" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title" id="myModalLabel">Ajouter un centre d'appels</h4>
              </div>
              <div class="modal-body">
                <center>
                <form action="<?php echo INDEX ?>?index=vue_gestion_callcenter" method="POST">
                  <table width="300">
                    <tr>
                      <td><label>Nom</label></td>
                      <td><input type="textbox" placeholder="Nom" name="nom_call"></td>
                    </tr>
                      <td><label>Numéro de téléphone</label></td>
                      <td><input type="textbox" placeholder="Numéro de téléphone" name="num_call"></td>
                    </tr>
                    <tr>
                      <th><label>Stratégie</label></th>
                      <th><select required name="strategy">
                            <option>ringall</option>
                            <option>roundrobin</option>
                            <option>leastrecent</option>
                            <option>fewestcall</option>
                            <option>random</option>
                            <option>rrmemory</option>
                            <option>linear</option>
                            <option>wrandom</option>
                          </select></th>
                    </tr>
                  </table>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Fermer</button>
                    <button type="submit" class="btn btn-primary" name="ajouter_call_center">Ajouter</button>
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
                <h4 class="modal-title" id="myModalLabel">Supprimer un centre d'appels</h4>
              </div>
              <div class="modal-body">

                <center>
                <form action="<?php echo INDEX ?>?index=vue_gestion_callcenter" method="POST">
                <table width="300">
                  <tr>
                    <th><label>Entrer le nom</label></th>
                    <th><select name="nom_call">
                      <?php foreach ($all_callcenters as $result) { ?>
                        <option><?php echo $result["nom"]; ?></option>
                      <?php } ?>
                    </select></th>
                  </tr>
                </table>
                <div class="modal-footer">
                  <button type="button" class="btn btn-default" data-dismiss="modal">Fermer</button>
                  <button type="submit" class="btn btn-primary" name="supprimer_call_center">Supprimer</button>
                </div>
                </form>
              </div>
              
            </div>
          </div>

        <!-- ===================================================================================================================================================== -->
        <div class="modal fade" id="modifier" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title" id="myModalLabel">Modifier un centre d'appels</h4>
              </div>
              <div class="modal-body">

                <center>
                <form action="<?php echo INDEX ?>?index=vue_gestion_callcenter" method="POST">
                <table width="300">
                  <tr>
                    <th><label>Entrer le nom</label></th>
                    <th><select name="nom_call">
                      <?php foreach ($all_callcenters as $result) { ?>
                        <option><?php echo $result["nom"]; ?></option>
                      <?php } ?>
                    </select></th>
                  </tr>
                  <tr>
                      <th><label>Stratégie</label></th>
                      <th><select required name="strategy">
                            <option>ringall</option>
                            <option>roundrobin</option>
                            <option>leastrecent</option>
                            <option>fewestcall</option>
                            <option>random</option>
                            <option>rrmemory</option>
                            <option>linear</option>
                            <option>wrandom</option>
                          </select></th>
                    </tr>
                </table>
                <div class="modal-footer">
                  <button type="button" class="btn btn-default" data-dismiss="modal">Fermer</button>
                  <button type="submit" class="btn btn-primary" name="modifier_call_center">Modifier</button>
                </div>
                </form>
              </div>
              
            </div>
          </div>

        <!-- ===================================================================================================================================================== -->

        
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
