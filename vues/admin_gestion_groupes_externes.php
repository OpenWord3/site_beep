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
          </div>
        </div>
		<center>
			<?php
				if(isset($_POST["ajouter_groupe_externe"])){ echo $alert; 
                }else if(isset($_POST["modifier"])){ echo $alert; 
                }else if(isset($_POST["supprimer_groupe_externe"])){echo $alert;}
			?>
		</center>
  		    <div class="row mt">
         		<div class="col-lg-12">
                  <div class="content-panel">  				
                      <h3><i class="fa fa-angle-right">Liste des groupes de switchs</i></h3>
                            <section id="unseen">
                              <table class="table table-bordered table-striped table-condensed">
                                <thead>
                                <tr>
                                  <th>Nom du groupe</th>
                                  <th>Actions</th>
                                </tr>
                                </thead>
                                <tbody>
                                  <?php foreach($all_groupes_externes as $result) { ?>
                                  <tr>                                  
                                    <td><?php echo $result["nom"]; ?></td>
                                    <td>
                                      <button class="btn btn-danger btn-xs" data-toggle="modal" data-target="#suppression<?php echo $result["id_contexte"]; ?>"><i class="fa fa-trash-o "></i></button>
                                    </td>
                                  </tr> 
                                  <?php } ?>                             
                                </tbody>
                            </table>
                            </section>
              </div><!-- /content-panel -->
           </div><!-- /col-lg-4 -->			
          </div><!-- /row -->
        </section>

		    </section><! --/wrapper -->
        <!-- Modal -->

        <?php foreach($all_groupes_externes as $result) { ?>

          <div class="modal fade" id="suppression<?php echo $result["id_contexte"] ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title" id="myModalLabel">Suppression du groupe de switch <?php echo $result["nom"]; ?></h4>
              </div>
              <div class="modal-body">
                <center>
                <form action="<?php echo INDEX ?>?index=vue_gestion_groupes_externes" method="POST">
                  <table width="300">
                    <tr>                  
                      <input type="hidden" name="nom" value="<?php echo $result["nom"] ?>">
                      <p>Etes-vous sûr de vouloir supprimer ce groupe ?</p>
                    </tr>
                  </table>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal" >Non</button>
                    <button type="submit" class="btn btn-primary" name="supprimer_groupe_externe">Oui</button>
                  </div> 
                </form>
                </center>
              </div>
            </div>
          </div>
          </div>
        <?php } ?>

        <div class="modal fade" id="ajouter_groupe" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title" id="myModalLabel">Ajouter un groupe pour switch</h4>
              </div>
              <div class="modal-body">
                <center>
                <form action="<?php echo INDEX ?>?index=vue_gestion_groupes_externes" method="POST">
                <table width="300">
                  <tr>
                    <td><label>Groupe</label></td>
                    <td><input type="textbox" placeholder="Nom du groupe" name="nom"></td>
                  </tr>                  
                </table>
                
                  <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Fermer</button>
                    <button type="submit" class="btn btn-primary" name="ajouter_groupe_externe">Ajouter</button>
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
                <h4 class="modal-title" id="myModalLabel">Supprimer le groupe</h4>
              </div>
              <div class="modal-body">
                <center>
                    <form action="<?php echo INDEX ?>?index=vue_gestion_groupes_externes" method="POST">
                      <table width="300">                      
                          <tr><td><label>Groupe</label></td>
                          <td><select name="nom">
                            <?php foreach($all_groupes_externes as $result) { ?>
                            <option><?php echo $result["nom"] ?></option>
                            <?php } ?>
                          </select></td>
                          <tr>
    						            <td><button type="submit" class="btn btn-primary" name="supprimer_groupe_externe">Delete</button></td>
    						            <td><button type="button" data-dismiss="modal" class="btn">Cancel</button></td>	
                          </tr>                      
                      </table>
                    </form>
                </center>
              </div>
            </div>
          </div>
        </div>
      </section><!-- /MAIN CONTENT -->
      
      <!--main content end-->
      <!--footer start-->
      <footer class="site-footer">
          <div class="text-center">
              2016 - Beep Project
              <a href="admin_gestion_groupes.php#" class="go-top">
                  <i class="fa fa-angle-up"></i>
              </a>
          </div>
      </footer>
      <!--footer end-->
  </section>

    <!-- js placed at the end of the document so the pages load faster -->
    <script src="./assets/js/jquery.js"></script>
    <script src="./assets/js/jjquery-1.8.3.min.js"></script>
    <script src="./assets/js/bootstrap.min.js"></script>
    <script class="include" type="text/javascript" src="./assets/js/jquery.dcjqaccordion.2.7.js"></script>
    <script src="./assets/js/jquery.scrollTo.min.js"></script>
    <script src="./assets/js/jquery.nicescroll.js" type="text/javascript"></script>


    <!--common script for all pages-->
    <script src="./assets/js/common-scripts.js"></script>

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
