<!DOCTYPE html>
<html lang="fr">
  <head>
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
                    <li><a class="logout" href="<?php echo INDEX ?>?index=vue_accueil">Deconnexion</a></li>
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
                      <a href="<?php echo INDEX ?>?index=vue_gestion_standard" >
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
          	<h3><i class="fa fa-angle-right"></i> Liste des Centres d'appels</h3>
			<center>
			  <button class="btn btn-success btn-lg" data-toggle="modal" data-target="#ajouter">
				<i class="fa fa-plus"></i> call center
			  </button>
			  <button class="btn btn-danger btn-lg" data-toggle="modal" data-target="#supprimer">
				<i class="fa fa-minus"></i> call center
			  </button>
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
      </section><!-- /MAIN CONTENT -->
      
      <!--main content end-->
      <!--footer start-->
      <footer class="site-footer">
          <div class="text-center">
              2016 - Beep Project
              <a href="responsive_table.html#" class="go-top">
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
