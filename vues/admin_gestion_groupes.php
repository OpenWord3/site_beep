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
                          <tr>
                            <th scope="row">1</th>
                            <td>Travail</td>
                            <th>
                                <button class="btn btn-danger btn-xs" data-toggle="modal" data-dismiss="modal" data-target="#confirmation"><i class="fa fa-trash-o "></i></button>
                            </th>
                          </tr>
                          <tr>
                            <th scope="row">2</th>
                            <td>Cours</td>
                            <th>
                                <button class="btn btn-danger btn-xs" data-toggle="modal" data-dismiss="modal" data-target="#confirmation"><i class="fa fa-trash-o "></i></button>
                            </th>
                          </tr>
                          <tr>
                            <th scope="row">3</th>
                            <td>Administrateur</td>
                            <th>
                                <button class="btn btn-danger btn-xs" data-toggle="modal" data-dismiss="modal" data-target="#confirmation"><i class="fa fa-trash-o "></i></button>
                            </th>
                          </tr>
                          <tr>
                            <th scope="row">4</th>
                            <td>Commerciaux</td>
                            <th>
                                <button class="btn btn-danger btn-xs" data-toggle="modal" data-dismiss="modal" data-target="#confirmation"><i class="fa fa-trash-o "></i></button>
                            </th>
                          </tr>
                          <tr>
                            <th scope="row">5</th>
                            <td>Direction</td>
                            <th>
                                <button class="btn btn-danger btn-xs" data-toggle="modal" data-dismiss="modal" data-target="#confirmation"><i class="fa fa-trash-o "></i></button>
                            </th>
                          </tr>
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
                  <form>
                    <table width="300">
                      <tr>
                        <th><label>Nom du groupe</label></th>
                        <th><input type="textbox" placeholder="Nom du groupe"></th>
                      </tr>
                    </table>
                  </form>
                </center>
              </div>

              <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Fermer</button>
                <button type="button" class="btn btn-primary"  data-dismiss="modal" data-toggle="modal" data-target="#confirmation" data-target="#confirmation">Supprimer</button>
              </div>
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
                <form>
                <table width="300">
                  <tr>
                    <td><label>Nom du groupe</label></td>
                    <td><input type="textbox" placeholder="Nom du groupe"></td>
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
                <h4 class="modal-title" id="myModalLabel">Supprimer le groupe {nom du groupe} ?</h4>
              </div>
              <div class="modal-body">
                <center>
                  <form>
                    <table width="300">
                      <tr>
                        <button class="btn btn-success btn-lg" data-target="#">
                          Oui
                        </button>
                        <button class="btn btn-danger btn-lg" data-target="#">
                          Non
                        </button>
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
