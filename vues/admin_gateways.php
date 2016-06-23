<!DOCTYPE html>
<html lang="fr">
  <head>
    <!--<meta http-equiv="Refresh" content="30; url=<?php echo INDEX ?>?index=vue_gestion_gateway"> -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Tableau de bord Admin">
    <meta name="author" content="Louis-Adolphe Mougnin">
    <meta name="keyword" content="Dashboard, Bootstrap, Admin, Theme, Responsive, Fluid, Retina">


    <title>Tableau de bord - Beep</title>

    <link href="./assets/css/bootstrap.css" rel="stylesheet">
    <link href="./assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
    <link rel="stylesheet" type="text/css" href="./assets/css/zabuto_calendar.css">
    <link rel="stylesheet" type="text/css" href="./assets/js/gritter/css/jquery.gritter.css" />
    <link rel="stylesheet" type="text/css" href="./assets/lineicons/style.css">    
    <link href="./assets/css/style.css" rel="stylesheet">
    <link href="./assets/css/style-responsive.css" rel="stylesheet">
    <script src="./assets/js/chart-master/Chart.js"></script>
  </head>

  <body>

  <section id="container" >

      <header class="header black-bg">
              <div class="sidebar-toggle-box">
                  <div class="fa fa-bars tooltips" data-placement="right" data-original-title="Toggle Navigation"></div>
              </div>

            <a href="admin_index.php" class="logo"><img src="./assets/img/logo.png" width="80"></img></a>
            <div class="nav notify-row" id="top_menu">
              
                <ul class="nav top-menu">
              
                    <li class="dropdown">
                        <a data-toggle="dropdown" class="dropdown-toggle" href="admin_index.php#">
                            <i class="fa fa-tasks"></i>
                            <span class="badge bg-theme">4</span>
                        </a>
                        <ul class="dropdown-menu extended tasks-bar">
                            <div class="notify-arrow notify-arrow-green"></div>
                            <li>
                                <p class="green">Vous avez 4 notifications</p>
                            </li>
                            <li>
                                <a href="admin_index.php#">
                                    <div class="task-info">
                                        <div class="desc">Utilisation de la mémoire</div>
                                        <div class="percent">40%</div>
                                    </div>
                                    <div class="progress progress-striped">
                                        <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%">
                                            <span class="sr-only">40% Complete (success)</span>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="admin_index.php#">
                                    <div class="task-info">
                                        <div class="desc">Base de données</div>
                                        <div class="percent">60%</div>
                                    </div>
                                    <div class="progress progress-striped">
                                        <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%">
                                            <span class="sr-only">60% Complete (warning)</span>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="admin_index.php#">
                                    <div class="task-info">
                                        <div class="desc">Utilisateurs DHADI</div>
                                        <div class="percent">80%</div>
                                    </div>
                                    <div class="progress progress-striped">
                                        <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%">
                                            <span class="sr-only">80% Complete</span>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="admin_index.php#">
                                    <div class="task-info">
                                        <div class="desc">Flux de communication</div>
                                        <div class="percent">70%</div>
                                    </div>
                                    <div class="progress progress-striped">
                                        <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width: 70%">
                                            <span class="sr-only">70% Complete (Important)</span>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li class="external">
                                <a href="#">Voir toutes les tâches</a>
                            </li>
                        </ul>
                    </li>

                    <li id="header_inbox_bar" class="dropdown">
                        <a data-toggle="dropdown" class="dropdown-toggle" href="admin_index.php#">
                            <i class="fa fa-envelope-o"></i>
                            <span class="badge bg-theme">5</span>
                        </a>
                        <ul class="dropdown-menu extended inbox">
                            <div class="notify-arrow notify-arrow-green"></div>
                            <li>
                                <p class="green">Vous avez 5 nouveaux messages</p>
                            </li>
                            <li>
                                <a href="admin_index.php#">
                                    <span class="photo"><img alt="avatar" src="./assets/img/ui-zac.jpg"></span>
                                    <span class="subject">
                                    <span class="from">Zac Snider</span>
                                    <span class="time">Maintenant</span>
                                    </span>
                                    <span class="message">
                                        Yo mon pote, comment tu vas ?
                                    </span>
                                </a>
                            </li>
                            <li>
                                <a href="admin_index.php#">
                                    <span class="photo"><img alt="avatar" src="./assets/img/ui-divya.jpg"></span>
                                    <span class="subject">
                                    <span class="from">Divya Manian</span>
                                    <span class="time">40 mins.</span>
                                    </span>
                                    <span class="message">
                                     Bonjour, j'ai besoin de votre aide.
                                    </span>
                                </a>
                            </li>
                            <li>
                                <a href="admin_index.php#">
                                    <span class="photo"><img alt="avatar" src="./assets/img/ui-danro.jpg"></span>
                                    <span class="subject">
                                    <span class="from">Dan Rogers</span>
                                    <span class="time">2 hrs.</span>
                                    </span>
                                    <span class="message">
                                        Je n'arrive pas à me connecter à l'IPBX.
                                    </span>
                                </a>
                            </li>
                            <li>
                                <a href="admin_index.php#">
                                    <span class="photo"><img alt="avatar" src="./assets/img/ui-sherman.jpg"></span>
                                    <span class="subject">
                                    <span class="from">Dj Sherman</span>
                                    <span class="time">4 hrs.</span>
                                    </span>
                                    <span class="message">
                                        Le réseau d'IN'TECH est bizarre.
                                    </span>
                                </a>
                            </li>
                            <li>
                                <a href="admin_index.php#">Voir tous les messages</a>
                            </li>
                        </ul>
                    </li>
                    <!-- inbox dropdown end -->
                </ul>
                <!--  notification end -->
            </div>
            <div class="top-menu">
              <ul class="nav pull-right top-menu">
                    <li><a class="logout" href="<?php echo INDEX ?>?=vue_accueil">Deconnexion</a></li>
              </ul>
            </div>
        </header>
      <!--header end-->
      
      <!-- **********************************************************************************************************************************************************
      MAIN SIDEBAR MENU
      *********************************************************************************************************************************************************** -->
      <!--sidebar start-->
      <aside>
          <div id="sidebar"  class="nav-collapse ">
              <!-- sidebar menu start-->
              <ul class="sidebar-menu" id="nav-accordion">
              
                  <p class="centered"><a href="admin_profile.php"><img src="./assets/img/ui-sam.jpg" class="img-circle" width="60"></a></p>
                  <h5 class="centered">Louis-Adolphe Mougnin</h5>
                    
                  <li class="mt">
                      <a class="active" href="<?php echo INDEX ?>?index=vue_accueil_admin">
                          <i class="fa fa-dashboard"></i>
                          <span>Tableau de bord</span>
                      </a>
                  </li>

                  <li class="sub-menu">
                      <a href="admin_javascript:;" >
                          <i class="fa fa-users"></i>
                          <span>Utilisateurs & Groupes</span>
                      </a>
                      <ul class="sub">
                          <li><a  href="<?php echo INDEX ?>?index=vue_gestion_utilisateur">Personnes</a></li>
                          <li><a  href="<?php echo INDEX ?>?index=vue_gestion_groupe">Groupes</a></li>
                      </ul>
                  </li>

                  <li class="sub-menu">
                      <a href="<?php echo INDEX ?>?index=vue_gestion_conference" >
                          <i class="fa fa-bank"></i>
                          <span>Salles de conférences</span>
                      </a>
                  </li>

                  <li class="sub-menu">
                      <a href="<?php echo INDEX ?>?index=vue_gestion_droit" >
                          <i class="fa fa-plus-circle"></i>
                          <span>Droits</span>
                      </a>
                  </li>
                  
                  <li class="sub-menu">
                      <a href="<?php echo INDEX ?>?index=vue_gestion_callcenter" >
                          <i class="fa fa-phone-square"></i>
                          <span>Centres d'appels</span>
                      </a>
                  </li>

                  <li class="sub-menu">
                      <a href="<?php echo INDEX ?>?index=vue_gestion_standard">
                          <i class="fa fa-sitemap"></i>
                          <span>Standard</span>
                      </a>
                  </li>

                  <li class="sub-menu">
                      <a href="admin_javascript:;" >
                          <i class="fa fa-random"></i>
                          <span>Gateway, numeros entrants et switch</span>
                      </a>
                      <ul class="sub">
                          <li><a href="<?php echo INDEX ?>?index=vue_gestion_gateway" >Gateways</a></li>
                          <li><a href="<?php echo INDEX ?>?index=vue_gestion_numero_entrant">Numeros entrants</a></li>
                          <li><a href="<?php echo INDEX ?>?index=vue_gestion_switch">switchs</a></li>
                      </ul>
                  </li>

                  <li class="sub-menu">
                      <a href="admin_javascript:;" >
                          <i class="fa fa-wrench"></i>
                          <span>Widgets</span>
                      </a>
                      <ul class="sub">
                          <li><a  href="admin_blank.php">Prise de note</a></li>
                          <li><a  href="admin_calendar.php">Calendrier</a></li>
                          <li><a  href="admin_gallery.php">Gallerie</a></li>
                          <li><a  href="admin_todo_list.php">ToDo List</a></li>
                          <li><a  href="admin_lock_screen.php">Verrouiller l'écran</a></li>
                      </ul>
                  </li>
              </ul>
              <!-- sidebar menu end-->
          </div>
      </aside>
      <!--sidebar end-->
      
      <!-- **********************************************************************************************************************************************************
      MAIN CONTENT
      *********************************************************************************************************************************************************** -->
      <!--main content start-->
      <section id="main-content">
        <section class="wrapper">
          	<h3><i class="fa fa-angle-right"></i> Liste des Gateways</h3>
		  		    <div class="row mt">
			       		<div class="col-lg-12">
                      <div class="content-panel">
                      <h4><i class="fa fa-angle-right"></i></h4>
                          <section id="unseen">
                            <table class="table table-bordered table-striped table-condensed">
                              <?php if(isset($_POST["ajouter"])){ echo $alert; }else if(isset($_POST["modifier"])){ echo $alert; } ?>
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
                                  <td><?php echo $result["mdp"]; ?></td>
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
                    <tr>
                      <td><label>Port</label></td>
                      <td><input type="textbox" placeholder="Entrez le port SVP"></td>
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

      $(function(){
          $('select.styled').customSelect();
      });

  </script>
    

  </body>
</html>
