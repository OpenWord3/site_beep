<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Tableau de bord Admin">
    <meta name="author" content="Louis-Adolphe Mougnin">
    <meta name="keyword" content="Dashboard, Bootstrap, Admin, Theme, Responsive, Fluid, Retina">

    <title>Tableau de bord - Beep</title>

    <link href="../assets/css/bootstrap.css" rel="stylesheet">
    <link href="../assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
    <link rel="stylesheet" type="text/css" href="../assets/css/zabuto_calendar.css">
    <link rel="stylesheet" type="text/css" href="../assets/js/gritter/css/jquery.gritter.css" />
    <link rel="stylesheet" type="text/css" href="../assets/lineicons/style.css">    
    <link href="../assets/css/style.css" rel="stylesheet">
    <link href="../assets/css/style-responsive.css" rel="stylesheet">
    <link rel="shortcut icon" href="../assets/img/favicons/favicon.ico">
    <script src="../assets/js/chart-master/Chart.js"></script>
  </head>

  <body>

  <section id="container" >

      <header class="header black-bg">
              <div class="sidebar-toggle-box">
                  <div class="fa fa-bars tooltips" data-placement="right" data-original-title="Toggle Navigation"></div>
              </div>

            <a href="admin_index.php" class="logo"><img src="../assets/img/logo.png" width="80"></img></a>
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
                                    <span class="photo"><img alt="avatar" src="../assets/img/ui-zac.jpg"></span>
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
                                    <span class="photo"><img alt="avatar" src="../assets/img/ui-divya.jpg"></span>
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
                                    <span class="photo"><img alt="avatar" src="../assets/img/ui-danro.jpg"></span>
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
                                    <span class="photo"><img alt="avatar" src="../assets/img/ui-sherman.jpg"></span>
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
                    <li><a class="logout" href="login.php">Deconnexion</a></li>
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
              
                  <p class="centered"><a href="admin_profile.php"><img src="../assets/img/ui-sam.jpg" class="img-circle" width="60"></a></p>
                  <h5 class="centered">Louis-Adolphe Mougnin</h5>
                    
                  <li class="mt">
                      <a class="active" href="admin_index.php">
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
                          <li><a  href="admin_gestion_personnes.php">Personnes</a></li>
                          <li><a  href="admin_gestion_groupes.php">Groupes</a></li>
                      </ul>
                  </li>

                  <li class="sub-menu">
                      <a href="admin_salles_conferences.php" >
                          <i class="fa fa-bank"></i>
                          <span>Salles de conférences</span>
                      </a>
                  </li>

                  <li class="sub-menu">
                      <a href="admin_droits.php" >
                          <i class="fa fa-plus-circle"></i>
                          <span>Droits</span>
                      </a>
                  </li>
                  
                  <li class="sub-menu">
                      <a href="admin_call_center.php" >
                          <i class="fa fa-phone-square"></i>
                          <span>Centres d'appels</span>
                      </a>
                  </li>

                  <li class="sub-menu">
                      <a href="admin_standard.php" >
                          <i class="fa fa-sitemap"></i>
                          <span>Standard</span>
                      </a>
                  </li>


                  <li class="sub-menu">
                      <a href="admin_gateways.php" >
                          <i class="fa fa-random"></i>
                          <span>Gateways</span>
                      </a>
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

        <div class="row mt">
          <div class="col-lg-12">
            <center>
              <button class="btn btn-success btn-lg" data-toggle="modal" data-target="#ajouter">
                <i class="fa fa-plus"></i> droits
              </button>
              <button class="btn btn-danger btn-lg" data-toggle="modal" data-target="#supprimer">
                <i class="fa fa-minus"></i> droits
              </button>
            </center>
          </div>
        </div>

        <div class="row mt">
          <div class="col-lg-12">
                <div class="content-panel">
                    <h3><i class="fa fa-angle-right"></i> Les droits</h3>
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
                          <tr>
                            <th scope="row">1</th>
                            <td>Travail</td>
                            <td><center><img src="../assets/img/2.png" width="20%"></center></td>
                            <td>Cours</td>
                            <td>
                                <button class="btn btn-danger btn-xs" data-toggle="modal" data-dismiss="modal" data-target="#confirmation"><i class="fa fa-trash-o "></i></button>
                            </td>
                          </tr>
                          <tr>
                            <th scope="row">2</th>
                            <td>Cours</td>
                            <td><center><img src="../assets/img/1.png" width="20%"></center></td>
                            <td>Administrateur</td>
                            <td>
                                <button class="btn btn-danger btn-xs" data-toggle="modal" data-dismiss="modal" data-target="#confirmation"><i class="fa fa-trash-o "></i></button>
                            </td>
                          </tr>
                          <tr>
                            <th scope="row">3</th>
                            <td>Administrateur</td>
                            <td><center><img src="../assets/img/2.png" width="20%"></center></td>
                            <td>Travail</td>
                            <td>
                                <button class="btn btn-danger btn-xs" data-toggle="modal" data-dismiss="modal" data-target="#confirmation"><i class="fa fa-trash-o "></i></button>
                            </td>
                          </tr>
                          <tr>
                            <th scope="row">4</th>
                            <td>Commerciaux</td>
                            <td><center><img src="../assets/img/3.png" width="20%"></center></td>
                            <td>Direction</td>
                            <td>
                                <button class="btn btn-danger btn-xs" data-toggle="modal" data-dismiss="modal" data-target="#confirmation"><i class="fa fa-trash-o "></i></button>
                            </td>
                          </tr>
                          <tr>
                            <th scope="row">5</th>
                            <td>Direction</td>
                            <td><center><img src="../assets/img/1.png" width="20%"></center></td>
                            <td>Commerciaux</td>
                            <td>
                                <button class="btn btn-danger btn-xs" data-toggle="modal" data-dismiss="modal" data-target="#confirmation"><i class="fa fa-trash-o "></i></button>
                            </td>
                          </tr>
                        </tbody>
                      </table>
                    </section>
            </div><!-- /content-panel -->
         </div><!-- /col-lg-4 -->     
        </div><!-- /row -->

        <!-- Modal -->
        <div class="modal fade" id="ajouter" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title" id="myModalLabel">Ajouter un droit</h4>
              </div>
              <div class="modal-body">
                <center>
                <form>
                  <table width="500">
                    <tr>
                      <td><label> Le groupe </label>&nbsp;<select><option>Travail</option><option>Cours</option><option>Administrateurs</option><option>Commerciaux</option><option>Direction</option></select></td>
                      <td colspan="2"><label><center>a le droit de contacter</center></label></td>
                      <td><label> le groupe </label>&nbsp;<select><option>Travail</option><option>Cours</option><option>Administrateurs</option><option>Commerciaux</option><option>Direction</option></select></td>
                    </tr>
                    <tr>
                      <td> </td>
                    </tr>
                    <tr><td colspan="4"><input type="radio" name="type"><label><b>Unidirectionnel</b> Appels possibles du groupe 1 vers le groupe 2</label></td></tr>
                    <tr><td colspan="4"><input type="radio" name="type"><label><b>Bidirectionnel</b> Appels possibles entre les 2 groupes</label></td></tr>
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
                <h4 class="modal-title" id="myModalLabel">Supprimer un droit</h4>
              </div>
              <div class="modal-body">
                <center>
                <form>
                  <table width="600">
                    <tr>
                      <td><label> Le groupe </label>&nbsp;<select><option>Travail</option><option>Cours</option><option>Administrateurs</option><option>Commerciaux</option><option>Direction</option></select></td>
                      <td colspan="2"><label><center>n'a pas le droit de contacter</center></label></td>
                      <td><label> le groupe </label>&nbsp;<select><option>Travail</option><option>Cours</option><option>Administrateurs</option><option>Commerciaux</option><option>Direction</option></select></td>
                    </tr>
                    <tr>
                      <td> </td>
                    </tr>
                    <tr><td colspan="4"><input type="radio" name="type"><label><b>Unidirectionnel</b> Le groupe 1 ne pourra plus joindre le groupe 2</label></td></tr>
                    <tr><td colspan="4"><input type="radio" name="type"><label><b>Bidirectionnel</b> Les deux groupes ne pourront plus se joindre</label></td></tr>
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

        <div class="modal fade" id="confirmation" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title" id="myModalLabel">Supprimer ce droit ?</h4>
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
    <script src="../assets/js/jquery.js"></script>
    <script src="../assets/js/jjquery-1.8.3.min.js"></script>
    <script src="../assets/js/bootstrap.min.js"></script>
    <script class="include" type="text/javascript" src="../assets/js/jquery.dcjqaccordion.2.7.js"></script>
    <script src="../assets/js/jquery.scrollTo.min.js"></script>
    <script src="../assets/js/jquery.nicescroll.js" type="text/javascript"></script>


    <!--common script for all pages-->
    <script src="../assets/js/common-scripts.js"></script>

    <!--script for this page-->    <!--script for this page-->
    <script type="text/javascript" src="../assets/js/gritter/js/jquery.gritter.js"></script>
    <script type="text/javascript" src="../assets/js/gritter-conf.js"></script>
    
  <script>
      //custom select box

      $(function(){
          $('select.styled').customSelect();
      });

  </script>
    

  </body>
</html>
