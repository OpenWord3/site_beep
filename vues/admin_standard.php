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
    <script src="../assets/js/chart-master/Chart.js"></script>
    <link href="../assets/font-awesome/css/font-awesome.css" rel="stylesheet" />

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
                          <i class="fa fa-check-circle"></i>
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
          <section class="wrapper site-min-height">
          	<h3><i class="fa fa-angle-right"></i> Gestion du standard</h3>
          	<div class="row mt">
          		<div class="col-lg-12">
                <center>
                <form>
                <table width="300">
                  <tr>
                    <td><label>Standard Actuel</label></td>
                    <td><input type="textbox" Value="SIP/adolphe"></td>
                  </tr>
                  <tr>
                    <td><label>Nom</label></td>
                    <td><input type="textbox" placeholder="Nom"></td>
                  </tr>
                  <tr>
                    <td><label><h2>Options</h2></label></td>
                  </tr>
                  <tr>
                    <td><label>Transfert</label></td>
                    <td><input type="checkbox"></td>
                  </tr>
                  <tr>
                    <td><label>Jours</label></td>
                    <td><input type="textbox" placeholder="LUN-VEN"></td>
                  </tr>
                  <tr>
                    <td><label>Heures</label></td>
                    <td><input type="textbox" placeholder="08h-19h"></td>
                  </tr>
                </table><br>
                <center>
                  <button class="btn btn-success btn-lg">
                    Enregister
                  </button>
                  <button class="btn btn-danger btn-lg" type="cancel">
                    Annuler
                  </button>
                </center>
                </form>
                </center>
          		</div>
          	</div>
			
		</section><! --/wrapper -->
      </section><!-- /MAIN CONTENT -->

      <!--main content end-->
      <!--footer start-->
      <footer class="site-footer">
          <div class="text-center">
              2016 - Beep Project
              <a href="blank.html#" class="go-top">
                  <i class="fa fa-angle-up"></i>
              </a>
          </div>
      </footer>
      <!--footer end-->
  </section>

    <!-- js placed at the end of the document so the pages load faster -->
    <script src="../assets/js/jquery.js"></script>
    <script src="../assets/js/jquery-1.8.3.min.js"></script>
    <script src="../assets/js/jquery-ui-1.9.2.custom.min.js"></script>
    <script src="../assets/js/jquery.ui.touch-punch.min.js"></script>
    <script src="../assets/js/bootstrap.min.js"></script>
    <script class="include" type="text/javascript" src="../assets/js/jquery.dcjqaccordion.2.7.js"></script>
    <script src="../assets/js/jquery.scrollTo.min.js"></script>
    <script src="../assets/js/jquery.nicescroll.js" type="text/javascript"></script>
    <script src="../assets/js/jquery.sparkline.js"></script> 


    <link href="../assets/font-awesome/css/font-awesome.css" rel="stylesheet" />

    <!--common script for all pages-->
    <script src="../assets/js/common-scripts.js"></script>
    <script type="text/javascript" src="../assets/js/gritter/js/jquery.gritter.js"></script>
    <script type="text/javascript" src="../assets/js/gritter-conf.js"></script>

    <!--script for this page-->
    <script src="../assets/js/sparkline-chart.js"></script>    
    <script src="../assets/js/zabuto_calendar.js"></script>
    <script src="assets/js/common-scripts.js"></script>
    
  <script>
      //custom select box

      $(function(){
          $('select.styled').customSelect();
      });

  </script>

  </body>
</html>
