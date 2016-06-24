<!DOCTYPE html>
<html lang="fr">
  <head>
    <!--<meta http-equiv="Refresh" content="30; url=<?php echo INDEX ?>?index=vue_gestion_gateway"> -->	
    <title>Tableau de bord - Beep</title>
	
	<?php include ("./assets/pages/admin_css.php") ?>
	
  </head>

  <body>
<<<<<<< HEAD
		
	  <?php include ("./assets/pages/admin_menu.php") ?>
	  
=======

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
                          <li><a  href="<?php echo INDEX ?>?index=show_users">Personnes</a></li>
                          <li><a  href="<?php echo INDEX ?>?index=show_contextes">Groupes</a></li>
                      </ul>
                  </li>

                  <li class="sub-menu">
                      <a href="<?php echo INDEX ?>?index=show_conferences" >
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
                          <li><a href="<?php echo INDEX ?>?index=vue_gestion_groupes_externes">Groupes externes</a></li>
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
>>>>>>> 7689b9871eaeaa341337558257bdbbd57a2e35fb
      <section id="main-content">
        <section class="wrapper">
          	<h3><i class="fa fa-angle-right"></i> Liste des numéros entrants</h3>
		  		    <div class="row mt">
			       		<div class="col-lg-12">
                      <div class="content-panel">
                      <h4><i class="fa fa-angle-right"></i></h4>
                          <section id="unseen">
                          <?php if(isset($_POST["configurer_set"])){echo $alert;}?>
                            <table class="table table-bordered table-striped table-condensed">
                              <?php if(isset($_POST["ajouter_set"])){ 
                                      echo $alert_geo+" "+$alert_sip+" "+$alert_inum; 
                                    }else if(isset($_POST["modifier_set"])){ 
                                      echo $alert_geo+" "+$alert_sip+" "+$alert_inum; 
                                    }else if(isset($_POST["supprimer_set"])){ echo $alert; } ?>
                              <thead>
                              <tr>
                                <th>Compte</th>                                
                                <th>Host (Ippi, Ovh, etc...)</th>
                                <th>Numero géographique</th>
                                <th>Numéro SIP</th>
                                <th>Numéro INUM</th>
                                <th>Receveur</th>
                                <th>Actions</th>
                              </tr>
                              </thead>
                              <tbody>
                                <?php foreach($all_sets as $result) { ?>
                                <tr>                                  
                                  <td><?php echo $result["compte"]; ?></td>
                                  <td><?php echo $result["host"]; ?></td>
                                  <td><?php echo $result["num_geo"]; ?></td>
                                  <td><?php echo $result["num_sip"]; ?></td>
                                  <td><?php echo $result["inum"]; ?></td>
                                  <td><?php echo $result["receveur"]; ?></td>
                                  <td>
                                    <button class="btn btn-primary btn-xs" data-toggle="modal" data-target="#modification<?php echo $result["id_set_num"]; ?>" ><a href="#modification<?php echo $result["id_set_num"]; ?>"></a><i class="fa fa-pencil"></i></button>
                                    <button class="btn btn-danger btn-xs" data-toggle="modal" data-target="#suppression<?php echo $result["id_set_num"]; ?>"><i class="fa fa-trash-o "></i></button>
                                    <button class="btn btn-default btn-xs" data-toggle="modal" data-target="#configuration<?php echo $result["id_set_num"]; ?>"><i class="fa fa-phone "></i></button>
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
            Ajouter un set de numéros entrants
          </button>
          <button class="btn btn-danger btn-lg" data-toggle="modal" data-target="#supprimer">
            Supprimer un set de numéros entrants
          </button>
        </center>
        <!-- Modal -->

        <?php foreach($all_sets as $result) { ?>

          <div class="modal fade" id="configuration<?php echo $result["id_set_num"] ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title" id="myModalLabel">Configuration du set de numero entrants</h4>
              </div>
              <div class="modal-body">
                <center>
                <form action="<?php echo INDEX ?>?index=vue_gestion_numero_entrant" method="POST">
                  <input type="hidden" name="id_set_num" value="<?php echo $result["id_set_num"]; ?>">
                  <input type="hidden" name="num_geo" value="<?php echo $result["num_geo"]; ?>">
                  <input type="hidden" name="num_sip" value="<?php echo $result["num_sip"]; ?>">
                  <input type="hidden" name="inum" value="<?php echo $result["inum"]; ?>">
                  <table width="300">
                    <tr id="receveurtr<?php echo $result["id_set_num"] ?>">                      
                      <td><label>Receveur</label></td>
                      <td><select name="receveur" id="receveur<?php echo $result["id_set_num"] ?>">
                        <option value="1">SVI</option>
                        <option value="2">Standard</option>
                        <option value="3">Utilisateur</option>
                      </select></td>
                    </tr>
                    <tr id="svitr<?php echo $result["id_set_num"] ?>" style="display:none;">
                      <td><label>Nom du SVI</label></td>
                      <td><input type="text" name="svi" id="svi<?php echo $result["id_set_num"] ?>"></td>
                    </tr>
                    <tr id="proposition1tr<?php echo $result["id_set_num"] ?>" style="display:none;">
                      <td><label>Proposition 1</label></td>
                      <td><select name="proposition1" id="proposition1<?php echo $result["id_set_num"] ?>">
                        <option value="conférence">conférence</option>
                        <option value="standard">standard</option>
                        <option value="composer">composer</option>
                        <option value="utilisateur">utilisateur</option>
                      </select></td>
                    </tr>
                    <tr id="p1<?php echo $result["id_set_num"] ?>" style="display:none;">
                      <td><label>Nom de l'utilisateur</label></td>
                      <td><input type="text" name="user1" id="user1<?php echo $result["id_set_num"] ?>"></td>
                    </tr>
                    <tr id="proposition2tr<?php echo $result["id_set_num"] ?>" style="display:none;">
                      <td><label>Proposition 2</label></td>
                      <td><select name="proposition2" id="proposition2<?php echo $result["id_set_num"] ?>">
                        <option value="conférence">conférence</option>
                        <option value="standard">standard</option>
                        <option value="composer">composer</option>
                        <option value="utilisateur">utilisateur</option>
                      </select></td>
                    </tr>
                    <tr id="p2<?php echo $result["id_set_num"] ?>" style="display:none;">
                      <td><label>Nom de l'utilisateur</label></td>
                      <td><input type="text" name="user2" id="user2<?php echo $result["id_set_num"] ?>"></td>
                    </tr>
                    <tr id="proposition3tr<?php echo $result["id_set_num"] ?>" style="display:none;">
                      <td><label>Proposition 3</label></td>
                      <td><select name="proposition3" id="proposition3<?php echo $result["id_set_num"] ?>">
                        <option value="conférence">conférence</option>
                        <option value="standard">standard</option>
                        <option value="composer">composer</option>
                        <option value="utilisateur">utilisateur</option>
                      </select></td>
                    </tr>
                    <tr id="p3<?php echo $result["id_set_num"] ?>" style="display:none;">
                      <td><label>Nom de l'utilisateur</label></td>
                      <td><input type="text" name="user3" id="user3<?php echo $result["id_set_num"] ?>"></td>
                    </tr>
                    <tr id="utilisateurtr<?php echo $result["id_set_num"] ?>" style="display:none;">
                      <td><label>Utilisateur</label></td>
                      <td><input type="text" name="utilisateur" id="utilisateur<?php echo $result["id_set_num"] ?>"></td>
                    </tr>                    
                  </table>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal" id="non<?php echo $result['id_set_num'] ?>">Non</button>
                    <button type="submit" class="btn btn-primary" name="configurer_set" id="oui">Valider</button>
                  </div> 
                </form>
                </center>
              </div>
            </div>
          </div>
          </div>
        <?php } ?>

        <?php foreach($all_sets as $result) { ?>

          <div class="modal fade" id="suppression<?php echo $result["id_set_num"] ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title" id="myModalLabel">Suppression du set de numero entrants du compte <?php echo $result["compte"]; ?></h4>
              </div>
              <div class="modal-body">
                <center>
                <form action="<?php echo INDEX ?>?index=vue_gestion_numero_entrant" method="POST">
                  <table width="300">
                    <tr>
                      <input type="hidden" name="id_set_num" value="<?php echo $result["id_set_num"] ?>">
                      <p>Etes-vous sûr de vouloir supprimer ce set de numero ?</p>
                    </tr>
                  </table>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal" >Non</button>
                    <button type="submit" class="btn btn-primary" name="supprimer_set">Oui</button>
                  </div> 
                </form>
                </center>
              </div>
            </div>
          </div>
          </div>
        <?php } ?>

        <?php foreach($all_sets as $result) { ?>

          <div class="modal fade" id="modification<?php echo $result["id_set_num"] ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title" id="myModalLabel">Modification d'un ou des numéros du set du compte <?php echo $result["compte"]; ?></h4>
              </div>
              <div class="modal-body">
                <center>
                <form action="<?php echo INDEX ?>?index=vue_gestion_numero_entrant" method="POST">
                  <input type="hidden" name="id_set_num" value="<?php echo $result["id_set_num"] ?>">
                  <table width="300">
                   <tr>
                      <td><label>Numéro géographique</label></td>
                      <td><input type="textbox" id="val_new_num_geo" placeholder="Nouveau Numéro géographique" name="new_num_geo"></td>
                    </tr>
                    <tr>
                      <td><label>Numéro SIP</label></td>
                      <td><input type="textbox" id="val_new_num_sip" placeholder="Nouveau Numéro SIP" name="new_num_sip"></td>
                    </tr>
                    <tr>
                      <td><label>Numéro INUM</label></td>
                      <td><input type="textbox" id="val_new_inum" placeholder="Nouveau Numéro INUM" name="new_inum"></td>
                    </tr>
                  </table>
                  <span id="new_numeros" style="display:none; color:red;">Vous devez renseiger au moins un champs !</span>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal" >Fermer</button>
                    <button type="submit" class="btn btn-primary" id="boutton_modifier_set" name="modifier_set">Modifier</button>
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
                <h4 class="modal-title" id="myModalLabel">Ajouter un set de numero</h4>
              </div>
              <div class="modal-body">
                <center>
                <form action="<?php echo INDEX ?>?index=vue_gestion_numero_entrant" method="POST">
                <form>
                <table width="300">
                  <tr>
                    <td><label>Gateway</label></td>
                    <td><select name="gateway">
                        <?php foreach($all_gateways as $result){ ?>
                        <option><?php echo $result["compte"]; ?>_<?php echo $result["host"]; ?>_<?php echo $result["port"]; ?></option>
                        <?php } ?>
                    </select></td>
                  </tr>
                  <tr>
                    <?php if(isset($_POST["ajouter_set"])){ echo $alert_geo; } ?>
                    <td><label>Numéro géographique</label></td>
                    <td><input id="val_num_geo" type="textbox" placeholder="Ex : 01523659..." name="num_geo"></td>
                  </tr>
                  <tr>
                    <?php if(isset($_POST["ajouter_set"])){ echo $alert_sip; } ?>
                    <td><label>Numéro SIP</label></td>
                    <td><input id="val_num_sip" type="textbox" placeholder="EX : 8889563245..." name="num_sip"></td>
                  </tr>
                  <tr>
                    <?php if(isset($_POST["ajouter_set"])){ echo $alert_inum; } ?>
                    <td><label>Numéro INUM</label></td>
                    <td><input id="val_inum" type="textbox" placeholder="Ex : 0004523689..." name="inum"></td>
                  </tr>
                </table>

                <span id="numeros" style="display:none; color:red;">Vous devez renseiger au moins un champs !</span>
                
                  <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Fermer</button>
                    <button type="submit" class="btn btn-primary" id="boutton_ajouter_set" name="ajouter_set">Ajouter</button>
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
                <h4 class="modal-title" id="myModalLabel">Supprimer un set de numéro</h4>
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

      $(document).ready(function(){

          $("#boutton_ajouter_set").click(function(){
            var valid = true;
            if($("#val_num_geo").val() == "" && $("#val_num_sip").val() == "" && $("#val_inum").val() == ""){
              $("#val_num_geo").css("border-color","#FF0000");
              $("#val_num_sip").css("border-color","#FF0000");
              $("#val_inum").css("border-color","#FF0000");
              valid = false;
              $("#numeros").fadeIn();
              //alert(valid);
            }else{
              $("#val_num_geo").css("border-color","#000000");
              $("#val_num_sip").css("border-color","#000000");
              $("#val_inum").css("border-color","#000000");
              //alert(valid);
            }
            return valid;
          });

          $("#val_num_geo").focus(function(){
            $("#numeros").fadeOut();
          });
          $("#val_num_sip").focus(function(){
            $("#numeros").fadeOut();
          });
          $("#val_inum").focus(function(){
            $("#numeros").fadeOut();
          });

          $("#boutton_modifier_set").click(function(){
            var valid = true;
            if($("#val_new_num_geo").val() == "" && $("#val_new_num_sip").val() == "" && $("#val_new_inum").val() == ""){
              $("#val_new_num_geo").css("border-color","#FF0000");
              $("#val_new_num_sip").css("border-color","#FF0000");
              $("#val_new_inum").css("border-color","#FF0000");
              valid = false;
              $("#new_numeros").fadeIn();
              //alert(valid);
            }else{
              $("#val_new_num_geo").css("border-color","#000000");
              $("#val_new_num_sip").css("border-color","#000000");
              $("#val_new_inum").css("border-color","#000000");
              //alert(valid);
            }
            return valid;
          });

          $("#val_new_num_geo").focus(function(){
            $("#new_numeros").fadeOut();
          });
          $("#val_new_num_sip").focus(function(){
            $("#new_numeros").fadeOut();
          });
          $("#val_new_inum").focus(function(){
            $("#new_numeros").fadeOut();
          });

          <?php foreach($all_sets as $result) { ?>
          $("#receveur<?php echo $result["id_set_num"] ?>").click(function(){
              var receveur = $(this).val();
              if(receveur == 1){
                $("#svitr<?php echo $result['id_set_num'] ?>").fadeIn();
                $("#proposition1tr<?php echo $result['id_set_num'] ?>").fadeIn();
                $("#proposition2tr<?php echo $result['id_set_num'] ?>").fadeIn();
                $("#proposition3tr<?php echo $result['id_set_num'] ?>").fadeIn();
                $("#utilisateurtr<?php echo $result['id_set_num'] ?>").fadeOut();
                $("#utilisateur<?php echo $result['id_set_num'] ?>").val("");

                $("#proposition1<?php echo $result['id_set_num'] ?>").click(function(){
                  if($(this).val() == "utilisateur"){
                    $("#p1<?php echo $result['id_set_num'] ?>").fadeIn();
                    $("#p2<?php echo $result['id_set_num'] ?>").fadeOut();
                    $("#p3<?php echo $result['id_set_num'] ?>").fadeOut();
                  } else {
                    $("#p1<?php echo $result['id_set_num'] ?>").fadeOut();
                  }
                });

                $("#proposition2<?php echo $result['id_set_num'] ?>").click(function(){
                  if($(this).val() == "utilisateur"){
                    $("#p2<?php echo $result['id_set_num'] ?>").fadeIn();
                    $("#p1<?php echo $result['id_set_num'] ?>").fadeOut();
                    $("#p3<?php echo $result['id_set_num'] ?>").fadeOut();
                  }else {
                    $("#p2<?php echo $result['id_set_num'] ?>").fadeOut();
                  }
                });

                $("#proposition3<?php echo $result['id_set_num'] ?>").click(function(){
                  if($(this).val() == "utilisateur"){
                    $("#p3<?php echo $result['id_set_num'] ?>").fadeIn();
                    $("#p1<?php echo $result['id_set_num'] ?>").fadeOut();
                    $("#p2<?php echo $result['id_set_num'] ?>").fadeOut();
                  }else {
                    $("#p3<?php echo $result['id_set_num'] ?>").fadeOut();
                  }
                });

              } else if(receveur == 3){
                
                $("#utilisateurtr<?php echo $result['id_set_num'] ?>").fadeIn();
                $("#svitr<?php echo $result['id_set_num'] ?>").fadeOut();
                $("#proposition1tr<?php echo $result['id_set_num'] ?>").fadeOut();
                $("#proposition2tr<?php echo $result['id_set_num'] ?>").fadeOut();
                $("#proposition3tr<?php echo $result['id_set_num'] ?>").fadeOut();
                $("#p1<?php echo $result['id_set_num'] ?>").fadeOut();
                $("#p2<?php echo $result['id_set_num'] ?>").fadeOut();
                $("#p3<?php echo $result['id_set_num'] ?>").fadeOut();

              } else {
                
                $("#proposition1tr<?php echo $result['id_set_num'] ?>").fadeOut();
                $("#proposition2tr<?php echo $result['id_set_num'] ?>").fadeOut();
                $("#proposition3tr<?php echo $result['id_set_num'] ?>").fadeOut();
                $("#utilisateurtr<?php echo $result['id_set_num'] ?>").fadeOut();
                $("#svitr<?php echo $result['id_set_num'] ?>").fadeOut();
                $("#p1<?php echo $result['id_set_num'] ?>").fadeOut();
                $("#p2<?php echo $result['id_set_num'] ?>").fadeOut();
                $("#p3<?php echo $result['id_set_num'] ?>").fadeOut();
              }
          });

          $("#non<?php echo $result['id_set_num'] ?>").click(function(){
            $("#utilisateur<?php echo $result['id_set_num'] ?>").val("");
            $("#svi<?php echo $result['id_set_num'] ?>").val("");
            $("#proposition1<?php echo $result['id_set_num'] ?>").val("conférence");
            $("#proposition2<?php echo $result['id_set_num'] ?>").val("conférence");
            $("#proposition3<?php echo $result['id_set_num'] ?>").val("conférence");
            $("#proposition1tr<?php echo $result['id_set_num'] ?>").fadeOut();
            $("#proposition2tr<?php echo $result['id_set_num'] ?>").fadeOut();
            $("#proposition3tr<?php echo $result['id_set_num'] ?>").fadeOut();
            $("#utilisateurtr<?php echo $result['id_set_num'] ?>").fadeOut();
            $("#svitr<?php echo $result['id_set_num'] ?>").fadeOut();
          });
      <?php } ?>

      //custom select box

      $(function(){
          $('select.styled').customSelect();
      });

    });

  </script>
  </body>
</html>
