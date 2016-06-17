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
    <link rel="shortcut icon" href="./assets/img/favicons/favicon.ico">
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
                    <li><a class="logout" href="<?php INDEX ?>?=vue_accueil">Deconnexion</a></li>
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
                      <a class="active" href="<?php INDEX ?>?index=vue_accueil_admin">
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
<<<<<<< HEAD
                          <li><a  href="admin_gestion_personnes.php">Personnes</a></li>
                          <li><a  href="<?php echo INDEX ?>?index=show_contextes">Groupes</a></li>
=======
                          <li><a  href="<?php INDEX ?>?index=vue_gestion_utilisateur">Personnes</a></li>
                          <li><a  href="<?php INDEX ?>?index=vue_gestion_groupe">Groupes</a></li>
>>>>>>> be5413265db7bc95748e54878e64f9e006ad95d5
                      </ul>
                  </li>

                  <li class="sub-menu">
<<<<<<< HEAD
                      <a href="<?php echo INDEX ?>?index=show_conferences" >
=======
                      <a href="<?php INDEX ?>?index=vue_gestion_conference" >
>>>>>>> be5413265db7bc95748e54878e64f9e006ad95d5
                          <i class="fa fa-bank"></i>
                          <span>Salles de conférences</span>
                      </a>
                  </li>

                  <li class="sub-menu">
                      <a href="<?php INDEX ?>?index=vue_gestion_droit" >
                          <i class="fa fa-check-circle"></i>
                          <span>Droits</span>
                      </a>
                  </li>
                  
                  <li class="sub-menu">
                      <a href="<?php INDEX ?>?index=vue_gestion_callcenter" >
                          <i class="fa fa-phone-square"></i>
                          <span>Centres d'appels</span>
                      </a>
                  </li>

                  <li class="sub-menu">
                      <a href="<?php INDEX ?>?index=vue_gestion_standard" >
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
					<?php if(isset($msg)){echo $msg; }?>
		  		    <?php $show_groupes = show_groupe(); while($donnees = $show_groupes->fetch()){ $contexte =  $donnees['nom'];$select_users = select_users($contexte); ?>
		  		    <div class="row mt">
			       		<div class="col-lg-12">
                      <div class="content-panel">
                      <h4><i class="fa fa-angle-right"></i><?php echo $contexte; ?><i class="fa fa-plus" data-toggle="modal" data-target="#ajouter_au_groupe"></i></h4>
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
							  <?php while($donnees = $select_users->fetch()){ ?>
                              <tr>
                                  <td><?php echo $donnees['nom']; ?></td>
                                  <td><?php echo $donnees['prenom']; ?></td>
                                  <td><?php echo $donnees['login']; ?></td>
                                  <td class="numeric"><?php echo $donnees['num']; ?></td>
                                  <td class="numeric"><?php echo $donnees['num_transfert']; ?></td>
                                  <td class="numeric"><?php if($donnees['option_transfert'] == 1){echo "Oui"; }else{echo "Non";} ?></td>
                                  <td><?php echo $donnees['protocole']; ?></td>
                                  <td><?php echo $donnees['mail']; ?></td>
                                  <td>
								  <form action ="<?php echo INDEX ?>?index=del_user" method="POST">
										<input type="hidden" name="login" value="<?php echo $donnees['login']; ?>">
										<button class="btn btn-danger btn-xs" type ="submit" name="remove_levels" value="delete"><i class="fa fa-trash-o "></i></button>
								  </form>
                                    <!--  <button class="btn btn-primary btn-xs" data-toggle="modal" data-target="#modification"><i class="fa fa-pencil"></i></button> -->
                                  </td>
								  <td>
								 <a data-toggle="modal" href="#" data-target="#modal_edit" class="LienModal" rel="<?php echo $donnees['id_user']; ?>"><i class="fa fa-pencil"></i></a>
						
									</td>
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
        <div class="modal fade" id="ajouter" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title" id="myModalLabel">Ajouter un utilisateur</h4>
              </div>
              <div class="modal-body">
                <center>
                <form action="<?php echo INDEX ?>?index=add_user" method="POST">
                <table width="300">
                  <tr>
                    <th><label>Protocole</label></th>
                    <th><select required name="protocole" onChange="THEFUNCTION(this.selectedIndex);">
					<option>SIP</option>
					<?php if($nb_dahdi['nb_dahdi'] >= 3){}else{?>
					<option>DAHDI</option>
					<?php } ?>
					</select>
					</th>
                  </tr>
				  <div style="display:none;" id="port">
					<label for="type">Port : </label>
					<select id="" name="port">
					<?php for($i=0; $i < count($ports); $i++){?> 
					<option value="<?php echo $ports[$i]; ?>"><?php echo $ports[$i]; ?>
					<?php } ?>
					</select>
				</div>
                  <tr>
                    <td><label>Groupe</label></td>
                    <td>
                      <select name="groupe" required>
						<?php 	$show_groupes = show_groupe(); while($donnees = $show_groupes->fetch()){ $nom = $donnees['nom']; echo "<option value='$nom'>$nom</option>"; } ?>
                      </select>
                    </td>
                  </tr>
                  <tr>
                    <td><label>Option De Transfert</label></td>
                    <td><select required name="option_transfert"><option value="0">Non</option><option value="1">Oui</option></select></td>
                  </tr>
                  <tr>
                    <td><label>Login</label></td>
                    <td><input type="textbox" placeholder="Login" name="login" required></td>
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
                    <td><input type="mail" placeholder="Adresse Mail" name="mail" required></td>
                  </tr>
                  <tr>
                    <td><label>Mot de Passe</label></td>
                    <td><input type="textbox" Value="BeepProject" name="mdp"></td>
                  </tr>
                  <tr>
                    <td><label>Numéro de téléphone</label></td>
                    <td><input type="textbox" placeholder="Numéro de téléphone" name="num" required></td>
                  </tr>
                  <tr>
                    <td><label>Numéro de transfert</label></td>
                    <td><input type="textbox" placeholder="Numéro de transfert" name="num_transfert"></td>
                  </tr>
                </table>
                </center>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Fermer</button>
                <button type="submit" class="btn btn-primary">Ajouter</button>
              </div>
			  </form>
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
                <form action="<?php echo INDEX ?>?index=add_contexte" method="POST">
                <table width="300">
                  <tr>
                    <td><label>Nom du groupe</label></td>
<<<<<<< HEAD
                    <td><input type="textbox" placeholder="Nom du groupe" name="nom_groupe"></td>
=======
                    <td><input type="textbox" placeholder="Nom du groupe" name="groupe"></td>
>>>>>>> be5413265db7bc95748e54878e64f9e006ad95d5
                  </tr>
                </table>
                </center>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Fermer</button>
<<<<<<< HEAD
                <button type="submit" class="btn btn-primary">Ajouter</button>
=======
                <button type="button" class="btn btn-primary" name="ajouter_groupe">Ajouter</button>
>>>>>>> be5413265db7bc95748e54878e64f9e006ad95d5
              </div>
              </form>
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
                  <form action="<?php echo INDEX ?>?index=del_user" method="POST">
                    <table width="300">
                      <tr>
                        <th><label>Le nom de l'utilisateur</label></th>
<<<<<<< HEAD
                        <th><input type="textbox" placeholder="Le nom de l'utilisateur" name="login"></th>
=======
                        <th><input type="textbox" placeholder="Le nom de l'utilisateur" name="pseudo"></th>
>>>>>>> be5413265db7bc95748e54878e64f9e006ad95d5
                      </tr>
                      <tr>
                        <th><label>Le nom de son groupe</label></th>
                        <th><input type="textbox" placeholder="Le nom de son groupe" name="groupe"></th>
                      </tr>
                    </table>
                </center>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Fermer</button>
                <button type="submit" class="btn btn-primary" button class="btn btn-danger btn-xs" >Supprimer</button>
              </div>
              </form>
            </div>
          </div>
        </div>

        <div class="modal fade" id="confirm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title" id="myModalLabel">Supprimer l'utilisateur</h4>
              </div>
              <div class="modal-body">
                <center>
                    <table width="300">
                      <tr>
						<button type="button" data-dismiss="modal" class="btn btn-primary" id="delete">Delete</button>

						<button type="button" data-dismiss="modal" class="btn">Cancel</button>	

                      </tr>
                    </table>
                </center>
              </div>
            </div>
          </div>
        </div>
<div id="modal_edit" class="modal fade" data-backdrop="static" data-keyboard="false">
    <div class="modal-dialog">
        <div class="modal-content">
 
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <h4 class="modal-title">Modifer l'utilisateur</h4>
                </div>
				<center>
                <div class="modal-body">
                    <p>Loading...</p>
                </div>
				</center>
 
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
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
  	<script>
$('button[name="remove_levels"]').on('click', function(e){
    var $form=$(this).closest('form');
    e.preventDefault();
    $('#confirm').modal({ backdrop: 'static', keyboard: false })
        .one('click', '#delete', function (e) {
            $form.trigger('submit');
        });
});
	</script>    
    <script>
$(".LienModal").click(function(oEvt){
    oEvt.preventDefault();
    var Id=$(this).attr("rel");
        $(".modal-body").fadeIn(1000).html('<div style="text-align:center; margin-right:auto; margin-left:auto">Patientez...</div>');
        $.ajax({
            type:"GET",
            data : "Id="+Id,
            url:"<?php echo INDEX ?>?index=show_edit_user",
            error:function(msg){
                $(".modal-body").addClass("tableau_msg_erreur").fadeOut(800).fadeIn(800).fadeOut(400).fadeIn(400).html('<div style="margin-right:auto; margin-left:auto; text-align:center">Impossible de charger cette page</div>');
            },
            success:function(data){
                $(".modal-body").fadeIn(1000).html(data);
            }
        });
    });
    </script>  
	<script>
		function THEFUNCTION(i) {
			var port = document.getElementById('port');
			switch(i) {
				case 1 : port.style.display = ''; break;
				default: port.style.display = 'none'; break;
			}
		}
	</script>
  </body>
</html>
