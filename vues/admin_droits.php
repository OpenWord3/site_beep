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
              <button class="btn btn-success btn-lg" data-toggle="modal" data-target="#ajouterdroitinterne">
                <i class="fa fa-plus"></i> droits interne
              </button>
              <button class="btn btn-success btn-lg" data-toggle="modal" data-target="#ajouterdroitexterne">
                <i class="fa fa-plus"></i> droits externe
              </button>
            </center>
          </div>
        </div>
        
          <div class="row mt">
            <div class="col-lg-12">
                  <div class="content-panel">
                      <h3><i class="fa fa-angle-right"></i> Les droits internes</h3>
                      <section id="unseen">
                      <?php if(isset($_POST["ajouter_droit_interne"])){echo $alert;
                        }else if(isset($_POST["ajouter_droit_externe"])){echo $alert;
                          }else if(isset($_POST["retirer_droit_interne"])){echo $alert;
                            }else if(isset($_POST["retirer_droit_externe"])){echo $alert;} ?>
                        <table class="table table-hover">
                          <thead>
                            <tr>
                              <th>#</th>
                              <th>Groupe 1</th>
                              <th><center>Autorisation</center></th>
                              <th>Groupe 2</th>
                              <th></th>
                            </tr>
                          </thead>
                          <tbody>
                            <?php $i=0; foreach($all_droits_internes as $result){ $i++;?>
                            <tr>
                              <th scope="row"><?php echo $i; ?></th>
                              <td><?php echo $result["nomg1"]; ?></td>
                              <td><center><img <?php if($result["unidirectionnel"] == "1"){ echo "src='./assets/img/1.png'";} else if($result["bidirectionnel"] == "1"){ echo "src='./assets/img/2.png'";}?> width="20%"></center></td>
                              <td><?php echo $result["nomg2"]; ?></td>
                              <td>
                                  <button class="btn btn-danger btn-xs" data-toggle="modal" data-dismiss="modal" data-target="#confirmationintern<?php echo $result["nomg1"]; ?><?php echo $result["nomg2"]; ?>"><i class="fa fa-trash-o "></i></button>
                              </td>
                            </tr>
                            <?php } ?>
                          </tbody>
                        </table>
                      </section>
              </div><!-- /content-panel -->
           </div><!-- /col-lg-4 -->     
          </div><!-- /row -->
        
          <div class="row mt">
            <div class="col-lg-12">
                  <div class="content-panel">
                      <h3><i class="fa fa-angle-right"></i> Les droits externes</h3>
                      <section id="unseen">
                        <table class="table table-hover">
                          <thead>
                            <tr>
                              <th>#</th>
                              <th>Groupe 1</th>
                              <th><center>Autorisation</center></th>
                              <th>Groupe 2</th>
                              <th></th>
                            </tr>
                          </thead>
                          <tbody>
                            <?php $i=0; foreach($all_droits_externes as $result){ $i++;?>
                            <tr>
                              <th scope="row"><?php echo $i; ?></th>
                              <td><?php echo $result["nomg1"]; ?></td>
                              <td><center><img src='./assets/img/1.png' width="20%"></center></td>
                              <td><?php echo $result["nomg2"]; ?></td>
                              <td>
                                  <button class="btn btn-danger btn-xs" data-toggle="modal" data-dismiss="modal" data-target="#confirmationextern<?php echo $result["nomg1"]; ?><?php echo $result["nomg2"]; ?>"><i class="fa fa-trash-o "></i></button>
                              </td>
                            </tr>
                            <?php } ?>
                          </tbody>
                        </table>
                      </section>
              </div><!-- /content-panel -->
           </div><!-- /col-lg-4 -->     
          </div><!-- /row -->

        <!-- Modal -->

        <div class="modal fade" id="ajouterdroitexterne" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title" id="myModalLabel">Ajouter un droit externe</h4>
              </div>
              <div class="modal-body">
                <center>
                <form action="<?php echo INDEX ?>?index=vue_gestion_droit" method="POST"> 
                  <table width="500">
                    <tr>
                      <td><label> Le groupe </label>&nbsp;<select name="groupe1">
                          <?php foreach($all_groupes_normaux as $result){ ?>
                            <option><?php echo $result["nom"] ?></option>
                          <?php } ?>
                        </select></td>
                      <td colspan="2"><label><center>a le droit d'appeler l'exterieur via </center></label></td>
                      <td><label> la gateway </label>&nbsp;<select name="groupe2">
                          <?php foreach($list_groupe_gateway as $result){ ?>
                            <option><?php echo $result["nom"] ?></option>
                          <?php } ?>
                        </select></td>
                    </tr>
                    <tr>
                      <td> </td>
                    </tr>
                  </table>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Fermer</button>
                    <button type="submit" class="btn btn-primary" name="ajouter_droit_externe">Ajouter</button>
                  </div>
                </form>
                </center>
              </div>              
            </div>
          </div>
        </div>

        <div class="modal fade" id="ajouterdroitinterne" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title" id="myModalLabel">Ajouter un droit interne</h4>
              </div>
              <div class="modal-body">
                <center>
                <form action="<?php echo INDEX ?>?index=vue_gestion_droit" method="POST"> 
                  <table width="500">
                    <tr>
                      <td><label> Le groupe </label>&nbsp;<select id="intern1" name="groupe1">
                          <?php foreach($all_groupes_normaux as $result){ ?>
                            <option><?php echo $result["nom"] ?></option>
                          <?php } ?>
                        </select></td>
                      <td colspan="2"><label><center>a le droit de contacter</center></label></td>
                      <td><label> le groupe </label>&nbsp;<select id="intern2" name="groupe2">
                          <?php foreach($all_groupes_normaux as $result){ ?>
                            <option><?php echo $result["nom"] ?></option>
                          <?php } ?>
                        </select></td>
                    </tr>
                    <tr>
                      <td> </td>
                    </tr>
                    <tr><td colspan="4"><input type="radio" name="type" value="unidirectionnel" required><label><b>Unidirectionnel</b> Appels possibles du groupe 1 vers le groupe 2</label></td></tr>
                    <tr><td colspan="4"><input type="radio" name="type" value="bidirectionnel" required><label><b>Bidirectionnel</b> Appels possibles entre les 2 groupes</label></td></tr>
                  </table>
                  <span id="intern" style="display:none; color:red;">Vous avez entré le même groupe deux fois.  !</span>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Fermer</button>
                    <button type="submit" class="btn btn-primary" name="ajouter_droit_interne">Ajouter</button>
                  </div>
                </form>
                </center>
              </div>              
            </div>
          </div>
        </div>

        <div class="modal fade" id="supprimerdroitexterne" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title" id="myModalLabel">Supprimer un droit interne</h4>
              </div>
              <div class="modal-body">
                <center>
                <form>
                  <table width="600">
                    <tr>
                      <td><label> Le groupe </label>&nbsp;<select name="groupe1">
                        <option>Travail</option>
                      </select></td>
                      <td colspan="2"><label><center>n'a pas le droit de contacter</center></label></td>
                      <td><label> le groupe </label>&nbsp;<select name="groupe2">
                        <option>Travail</option>
                      </select></td>
                    </tr>
                    <tr>
                      <td> </td>
                    </tr>
                    <tr><td colspan="4"><input type="radio" name="type" value="unidirectionnel"><label><b>Unidirectionnel</b> Le groupe 1 ne pourra plus joindre le groupe 2</label></td></tr>
                    <tr><td colspan="4"><input type="radio" name="type" value="bidirectionnel"><label><b>Bidirectionnel</b> Les deux groupes ne pourront plus se joindre</label></td></tr>
                  </table>
                </form>
                </center>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Fermer</button>
                <button type="button" class="btn btn-primary">Supprimer</button>
              </div>
            </div>
          </div>
        </div>

        <div class="modal fade" id="supprimerdroitinterne" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title" id="myModalLabel">Supprimer un droit interne</h4>
              </div>
              <div class="modal-body">
                <center>
                <form>
                  <table width="600">
                    <tr>
                      <td><label> Le groupe </label>&nbsp;<select name="groupe1"><option>Travail</option><option>Cours</option><option>Administrateurs</option><option>Commerciaux</option><option>Direction</option></select></td>
                      <td colspan="2"><label><center>n'a pas le droit de contacter</center></label></td>
                      <td><label> le groupe </label>&nbsp;<select name="groupe2"><option>Travail</option><option>Cours</option><option>Administrateurs</option><option>Commerciaux</option><option>Direction</option></select></td>
                    </tr>
                    <tr>
                      <td> </td>
                    </tr>
                    <tr><td colspan="4"><input type="radio" name="type" value="unidirectionnel"><label><b>Unidirectionnel</b> Le groupe 1 ne pourra plus joindre le groupe 2</label></td></tr>
                    <tr><td colspan="4"><input type="radio" name="type" value="bidirectionnel"><label><b>Bidirectionnel</b> Les deux groupes ne pourront plus se joindre</label></td></tr>
                  </table>
                </form>
                </center>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Fermer</button>
                <button type="button" class="btn btn-primary">Supprimer</button>
              </div>
            </div>
          </div>
        </div>

        <?php $i=0; foreach($all_droits_externes as $result){ $i++;?>
        <div class="modal fade" id="confirmationextern<?php echo $result["nomg1"]; ?><?php echo $result["nomg2"]; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                  <h4 class="modal-title" id="myModalLabel">Annuler ce droit externe ?</h4>
                </div>
                <div class="modal-body">
                  <center>
                    <form action="<?php echo INDEX ?>?index=vue_gestion_droit" method="POST">
                      <input type="hidden" name="groupe1" value="<?php echo $result["nomg1"]; ?>">
                      <input type="hidden" name="groupe2" value="<?php echo $result["nomg2"]; ?>"
                      <table width="300">
                        <tr>
                          <button class="btn btn-success btn-lg" type="submit" name="retirer_droit_externe">
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
        <?php } ?>

        <?php foreach($all_droits_internes as $result){ ?>
          <div class="modal fade" id="confirmationintern<?php echo $result["nomg1"]; ?><?php echo $result["nomg2"]; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                  <h4 class="modal-title" id="myModalLabel">Annuler ce droit interne ?</h4>
                </div>
                <div class="modal-body">
                  <center>
                    <form action="<?php echo INDEX ?>?index=vue_gestion_droit" method="POST">
                      <input type="hidden" name="groupe1" value="<?php echo $result["nomg1"]; ?>">
                      <input type="hidden" name="groupe2" value="<?php echo $result["nomg2"]; ?>">
                      <input type="hidden" name="unidir" value="<?php echo $result["unidirectionnel"]; ?>">
                      <input type="hidden" name="bidir" value="<?php echo $result["bidirectionnel"]; ?>">
                      <table width="300">
                        <tr>
                          <button class="btn btn-success btn-lg" type="submit" name="retirer_droit_interne">
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
        <?php } ?>

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

    $(document).ready(function(){

      //code pour verifier le nouveau mot de passe et la verification du nouveau mot de passe
      var intern1;
      var intern2;
      
      $("#intern1").blur(function(){
          
          $("#intern").fadeOut();
          intern1 = $("#intern1").val();

          $("#intern2").blur(function(){

              intern2 = $(this).val();

              if(intern1 === intern2){
                  
                  $("#intern").fadeIn();
                  $("#intern1").focus();              
              } 

          });
       }); 
       //custom select box

      $(function(){
          $('select.styled').customSelect();
      });  
    });      

  </script>
    

  </body>
</html>
