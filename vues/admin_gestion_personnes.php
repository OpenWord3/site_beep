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
          	<h3><i class="fa fa-angle-right"></i> Liste des utilisateurs Beep</h3>
              <center>
                <button class="btn btn-success btn-lg" data-toggle="modal" data-target="#ajouter_groupe">
                  <i class="fa fa-plus"></i> groupe
                </button>
                <button class="btn btn-success btn-lg" data-toggle="modal" data-target="#ajouter">
                  <i class="fa fa-plus"></i> utilisateur
                </button>
                <button class="btn btn-danger btn-lg" data-toggle="modal" data-target="#supprimer">
                  <i class="fa fa-minus"></i> utilisateur
                </button>
              </center>

		  		    <div class="row mt">
			       		<div class="col-lg-12">
                      <div class="content-panel">
                      <h4><i class="fa fa-angle-right"></i> Contexte Travail <i class="fa fa-plus" data-toggle="modal" data-target="#ajouter_au_groupe"></i></h4>
                          <section id="unseen">
                            <table class="table table-bordered table-striped table-condensed">
                              <thead>
                              <tr>
                                  <th>Nom</th>
                                  <th>Prenoms</th>
                                  <th>Login</th>
                                  <th class="numeric">Numéro de téléphone</th>
                                  <th class="numeric">Numéro de transfert</th>
                                  <th class="numeric">Option de Transfert</th>
                                  <th>Protocole</th>
                                  <th>Adresse Mail</th>
                              </tr>
                              </thead>
                              <tbody>
                              <tr>
                                  <td>MOUGNIN</td>
                                  <td>Serge Louis Adolphe</td>
                                  <td>adolphe</td>
                                  <td class="numeric">1000</td>
                                  <td class="numeric">0752243150</td>
                                  <td class="numeric">Oui</td>
                                  <td>SIP</td>
                                  <td>mougnin@intechinfo.fr</td>
                                  <td>
                                      <button class="btn btn-primary btn-xs" data-toggle="modal" data-target="#modification"><i class="fa fa-pencil"></i></button>
                                      <button class="btn btn-danger btn-xs" data-toggle="modal" data-target="#confirmation"><i class="fa fa-trash-o "></i></button>
                                  </td>
                              </tr>
                              <tr>
                                  <td>SANGARE</td>
                                  <td>Hassane Ibrahim</td>
                                  <td>hassane</td>
                                  <td class="numeric">1001</td>
                                  <td class="numeric">0652543010</td>
                                  <td class="numeric">Oui</td>
                                  <td>DAHDI</td>
                                  <td>sangares@intechinfo.fr</td>
                                  <td>
                                      <button class="btn btn-primary btn-xs" data-toggle="modal" data-target="#modification"><i class="fa fa-pencil"></i></button>
                                      <button class="btn btn-danger btn-xs" data-toggle="modal" data-target="#confirmation"><i class="fa fa-trash-o "></i></button>
                                  </td>
                              </tr>
                              <tr>
                                  <td>ILANGOVANE</td>
                                  <td>Steephenraaj</td>
                                  <td>steephen</td>
                                  <td class="numeric">1002</td>
                                  <td class="numeric"></td>
                                  <td class="numeric">Non</td>
                                  <td>SIP</td>
                                  <td>ilangovane@intechinfo.fr</td>
                                  <td>
                                      <button class="btn btn-primary btn-xs" data-toggle="modal" data-target="#modification"><i class="fa fa-pencil"></i></button>
                                      <button class="btn btn-danger btn-xs" data-toggle="modal" data-target="#confirmation"><i class="fa fa-trash-o "></i></button>
                                  </td>
                              </tr>
                              <tr>
                                  <td>KOUDOSSOU</td>
                                  <td>Adjevi Alexandre</td>
                                  <td>adjevi</td>
                                  <td class="numeric">1002</td>
                                  <td class="numeric"></td>
                                  <td class="numeric">Non</td>
                                  <td>SIP</td>
                                  <td></td>
                                  <td>
                                      <button class="btn btn-primary btn-xs" data-toggle="modal" data-target="#modification"><i class="fa fa-pencil"></i></button>
                                      <button class="btn btn-danger btn-xs" data-toggle="modal" data-target="#confirmation"><i class="fa fa-trash-o "></i></button>
                                  </td>
                              </tr>
                              </tbody>
                          </table>
                          </section>
                  </div><!-- /content-panel -->
               </div><!-- /col-lg-4 -->			
		          </div><!-- /row -->

              <div class="row mt">
                <div class="col-lg-12">
                      <div class="content-panel">
                      <h4><i class="fa fa-angle-right"></i> Contexte Administrateur <i class="fa fa-plus" data-toggle="modal" data-target="#ajouter_au_groupe"></i></h4>
                          <section id="unseen">
                            <table class="table table-bordered table-striped table-condensed">
                              <thead>
                              <tr>
                                  <th>Nom</th>
                                  <th>Prenoms</th>
                                  <th>Login</th>
                                  <th class="numeric">Numéro de téléphone</th>
                                  <th class="numeric">Numéro de transfert</th>
                                  <th class="numeric">Option de Transfert</th>
                                  <th>Protocole</th>
                                  <th>Adresse Mail</th>
                              </tr>
                              </thead>
                              <tbody>
                              <tr>
                                  <td>MOUGNIN</td>
                                  <td>Serge Louis Adolphe</td>
                                  <td>adolphe</td>
                                  <td class="numeric">1000</td>
                                  <td class="numeric">0752243150</td>
                                  <td class="numeric">Oui</td>
                                  <td>SIP</td>
                                  <td>mougnin@intechinfo.fr</td>
                                  <td>
                                      <button class="btn btn-primary btn-xs" data-toggle="modal" data-target="#modification"><i class="fa fa-pencil"></i></button>
                                      <button class="btn btn-danger btn-xs" data-toggle="modal" data-target="#confirmation"><i class="fa fa-trash-o "></i></button>
                                  </td>
                              </tr>
                              <tr>
                                  <td>SANGARE</td>
                                  <td>Hassane Ibrahim</td>
                                  <td>hassane</td>
                                  <td class="numeric">1001</td>
                                  <td class="numeric">0652543010</td>
                                  <td class="numeric">Oui</td>
                                  <td>DAHDI</td>
                                  <td>sangares@intechinfo.fr</td>
                                  <td>
                                      <button class="btn btn-primary btn-xs" data-toggle="modal" data-target="#modification"><i class="fa fa-pencil"></i></button>
                                      <button class="btn btn-danger btn-xs" data-toggle="modal" data-target="#confirmation"><i class="fa fa-trash-o "></i></button>
                                  </td>
                              </tr>
                              <tr>
                                  <td>ILANGOVANE</td>
                                  <td>Steephenraaj</td>
                                  <td>steephen</td>
                                  <td class="numeric">1002</td>
                                  <td class="numeric"></td>
                                  <td class="numeric">Non</td>
                                  <td>SIP</td>
                                  <td>ilangovane@intechinfo.fr</td>
                                  <td>
                                      <button class="btn btn-primary btn-xs" data-toggle="modal" data-target="#modification"><i class="fa fa-pencil"></i></button>
                                      <button class="btn btn-danger btn-xs" data-toggle="modal" data-target="#confirmation"><i class="fa fa-trash-o "></i></button>
                                  </td>
                              </tr>
                              <tr>
                                  <td>KOUDOSSOU</td>
                                  <td>Adjevi Alexandre</td>
                                  <td>adjevi</td>
                                  <td class="numeric">1002</td>
                                  <td class="numeric"></td>
                                  <td class="numeric">Non</td>
                                  <td>SIP</td>
                                  <td></td>
                                  <td>
                                      <button class="btn btn-primary btn-xs" data-toggle="modal" data-target="#modification"><i class="fa fa-pencil"></i></button>
                                      <button class="btn btn-danger btn-xs" data-toggle="modal" data-target="#confirmation"><i class="fa fa-trash-o "></i></button>
                                  </td>
                              </tr>
                              </tbody>
                          </table>
                          </section>
                  </div><!-- /content-panel -->
               </div><!-- /col-lg-4 -->     
              </div><!-- /row -->

		  </section><! --/wrapper -->
        <!-- Modal -->
        <div class="modal fade" id="ajouter" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title" id="myModalLabel">Ajouter un utilisateur</h4>
              </div>
              <div class="modal-body">
                <center>
                <form>
                <table width="300">
                  <tr>
                    <th><label>Protocole</label></th>
                    <th><select required><option>SIP</option><option>DAHDI</option></select></th>
                  </tr>
                  <tr>
                    <td><label>Groupe</label></td>
                    <td>
                      <select required>
                        <option>Travail</option>
                        <option>Cours</option>
                        <option>Administrateur</option>  
                      </select>
                    </td>
                  </tr>
                  <tr>
                    <td><label>Option De Transfert</label></td>
                    <td><select required><option>Non</option><option>Oui</option></select></td>
                  </tr>
                  <tr>
                    <td><label>Login</label></td>
                    <td><input type="textbox" placeholder="Login" required></td>
                  </tr>
                  <tr>
                    <td><label>Nom</label></td>
                    <td><input type="textbox" placeholder="Nom"></td>
                  </tr>
                  <tr>
                    <td><label>Prenoms</label></td>
                    <td><input type="textbox" placeholder="Prenoms"></td>
                  </tr>
                  <tr>
                    <td><label>Adresse Mail</label></td>
                    <td><input type="mail" placeholder="Adresse Mail" required></td>
                  </tr>
                  <tr>
                    <td><label>Mot de Passe</label></td>
                    <td><input type="textbox" Value="BeepProject"></td>
                  </tr>
                  <tr>
                    <td><label>Numéro de téléphone</label></td>
                    <td><input type="textbox" placeholder="Numéro de téléphone" required></td>
                  </tr>
                  <tr>
                    <td><label>Numéro de transfert</label></td>
                    <td><input type="textbox" placeholder="Numéro de transfert"></td>
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
<!------------------------------------------------------------------------------------- -->
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
                    <td><input type="textbox" placeholder="Nom du groupe" name="groupe"></td>
                  </tr>
                </table>
                </form>
                </center>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Fermer</button>
                <button type="button" class="btn btn-primary" name="ajouter_groupe">Ajouter</button>
              </div>
            </div>
          </div>
        </div>

        <div class="modal fade" id="ajouter_au_groupe" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title" id="myModalLabel">Ajouter un utilisateur au groupe {nom du groupe}</h4>
              </div>
              <div class="modal-body">
                <center>
                <form>
                <table width="300">
                  <tr>
                    <th><label>Protocole</label></th>
                    <th><select required name="protocole"><option>SIP</option><option>DAHDI</option></select></th>
                  </tr>
                  <tr>
                    <th><label>Groupe</label></th>
                    <th><select required name="groupe"><option>Travail</option><option>Cours</option><option>Administrateur</option></select></th>
                  </tr>
                  <tr>
                    <td><label>Option De Transfert</label></td>
                    <td><select required name="transfert"><option>Non</option><option>Oui</option></select></td>
                  </tr>
                  <tr>
                    <td><label>Login</label></td>
                    <td><input type="textbox" placeholder="Login" name="pseudo" required></td>
                  </tr>
                  <tr>
                    <td><label>Nom</label></td>
                    <td><input type="textbox" placeholder="Nom" name="nom"></td>
                  </tr>
                  <tr>
                    <td><label>Prenoms</label></td>
                    <td><input type="textbox" placeholder="Prenoms" name="prenom"></td>
                  </tr>
                  <tr>
                    <td><label>Adresse Mail</label></td>
                    <td><input type="mail" placeholder="Adresse Mail" name="email" required></td>
                  </tr>
                  <tr>
                    <td><label>Mot de Passe</label></td>
                    <td><input type="textbox" Value="BeepProject" name="mdp"></td>
                  </tr>
                  <tr>
                    <td><label>Numéro de téléphone</label></td>
                    <td><input type="textbox" placeholder="Numéro de téléphone" name="num_exten" required></td>
                  </tr>
                  <tr>
                    <td><label>Numéro de transfert</label></td>
                    <td><input type="textbox" placeholder="Numéro de transfert" name="telephone"></td>
                  </tr>
                  <tr>
                    <td><label>Port Dahdi</label></td>
                    <th><select required name="port"><option>Pas besoin</option><option>Port 1</option><option>Port 2</option><option>Port 3</option></select></th>
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

        <div class="modal fade" id="supprimer" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title" id="myModalLabel">Supprimer un utilisateur</h4>
              </div>
              <div class="modal-body">
                <center>
                  <form>
                    <table width="300">
                      <tr>
                        <th><label>Le nom de l'utilisateur</label></th>
                        <th><input type="textbox" placeholder="Le nom de l'utilisateur" name="pseudo"></th>
                      </tr>
                      <tr>
                        <th><label>Le nom de son groupe</label></th>
                        <th><input type="textbox" placeholder="Le nom de son groupe" name="groupe"></th>
                      </tr>
                    </table>
                  </form>
                </center>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Fermer</button>
                <button type="button" class="btn btn-primary" button class="btn btn-danger btn-xs" data-toggle="modal" data-dismiss="modal" data-target="#confirmation">Supprimer</button>
              </div>
            </div>
          </div>
        </div>

        <div class="modal fade" id="confirmation" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title" id="myModalLabel">Supprimer l'utilisateur {nom de l'utilisateur} ?</h4>
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

        <div class="modal fade" id="modification" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title" id="myModalLabel">Modification de l'utilisateur {utilisateur}</h4>
              </div>
              <div class="modal-body">
                <center>
                <form>
                <table width="300">
                  <tr>
                    <th><label>Protocole</label></th>
                    <th><select required><option>SIP</option><option>DAHDI</option></select></th>
                  </tr>
                  <tr>
                    <td><label>Option De Transport</label></td>
                    <td><select required><option>Non</option><option>Oui</option></select></td>
                  </tr>
                  <tr>
                    <td><label>Groupe</label></td>
                    <td>
                      <select required>
                        <option>Travail</option>
                        <option>Cours</option>
                        <option>Administrateur</option>  
                      </select>
                    </td>
                  </tr>
                  <tr>
                    <td><label>Login</label></td>
                    <td><input type="textbox" placeholder="Chargé son login" required></td>
                  </tr>
                  <tr>
                    <td><label>Nom</label></td>
                    <td><input type="textbox" placeholder="Chargé son om"></td>
                  </tr>
                  <tr>
                    <td><label>Prenoms</label></td>
                    <td><input type="textbox" placeholder="Chargé ses prenoms"></td>
                  </tr>
                  <tr>
                    <td><label>Adresse Mail</label></td>
                    <td><input type="mail" placeholder="Chargé son adresse Mail" required></td>
                  </tr>
                  <tr>
                    <td><label>Mot de Passe</label></td>
                    <td><input type="textbox" Value="Chargé son mot de passe"></td>
                  </tr>
                  <tr>
                    <td><label>Numéro de téléphone</label></td>
                    <td><input type="textbox" placeholder="Chargé son numéro de téléphone" required></td>
                  </tr>
                  <tr>
                    <td><label>Numéro de transfert</label></td>
                    <td><input type="textbox" placeholder="Chargé son numéro de transfert"></td>
                  </tr>
                </table>
                </form>
                </center>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Fermer</button>
                <button type="button" class="btn btn-primary">Modifier</button>
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
              <a href="admin_gestion_personnes.php#" class="go-top">
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
