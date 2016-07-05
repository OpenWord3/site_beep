<!DOCTYPE html>
<html lang="fr">
  <head>

	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Tableau de bord Admin">
    <meta name="author" content="Louis-Adolphe Mougnin">
    <meta name="keyword" content="Dashboard, Bootstrap, Admin, Theme, Responsive, Fluid, Retina">

    <title>Tableau de bord - Beep</title>
	
	<?php include ("./assets/pages/admin_css.php") ?>
	<script type="text/javascript" src="http://code.jquery.com/jquery-1.4.4.min.js"></script>
	
	<style>
.messagebox {
position:absolute;
width:auto;
margin-left:30px;
border:1px solid #c93;
background:#ffc;
padding:5px 10px;
}

.dispo {
position:absolute;
width:auto;
margin-left:30px;
border:1px solid #349534;
background:#C9FFCA;
padding:5px 10px;
color:#008000;
}

.busy {
position:absolute;
width:auto;
margin-left:30px;
border:1px solid #CC0000;
background:#F7CBCA;
padding:5px 10px;
color:#CC0000;
}

input {
padding: 5px 10px;
}
</style>
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
					<center><?php if(isset($msg)){ echo $msg;} ?></center>
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
                    <td><input type="textbox" placeholder="Login" name="login" required pattern="[a-zA-Z]{1}[a-zA-Z0-9]{3,11}" maxlength="12"></td>
                  </tr>
                  <tr>
                    <td><label>Nom</label></td>
                    <td><input type="textbox" placeholder="Nom" name="nom" required pattern="[a-zA-Z]+[A-Za-zéèç\0\s\-]{1,32}"></td>
                  </tr>
                  <tr>
                    <td><label>Prenoms</label></td>
                    <td><input type="textbox" placeholder="Prenoms" name="prenom" required pattern="[a-zA-Z]+[A-Za-zéèç\0\s\-]{1,32}"></td>
                  </tr>
                  <tr>
                    <td><label>Adresse Mail</label></td>
                    <td><input type="mail" placeholder="Adresse Mail" name="mail" required pattern="[a-z0-9._]+@[a-z]+.[a-z]{2,4}"></td>
                  </tr>
                  <tr>
                    <td><label>Mot de Passe</label></td>
                    <td><input type="textbox" Value="BeepProject" name="mdp" required></td>
                  </tr>
                  <tr>
                    <td><label>Numéro de téléphone</label></td>
                    <td><input type="textbox" placeholder="Numéro de téléphone" name="num" required pattern="[0-9]{2,10}"></td>
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
                    <td><input type="textbox" placeholder="Nom du groupe" name="nom_groupe" required></td>
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
                        <th><label>Le login de l'utilisateur</label></th>
                        <th><input type="textbox" placeholder="Le login de l'utilisateur" name="login"></th>
                      </tr>
              <!--        <tr>
                        <th><label>Le nom de son groupe</label></th>
                        <th><input type="textbox" placeholder="Le nom de son groupe" name="groupe"></th>
                      </tr> -->
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
  <script type="text/javascript">
$("#login").keyup(function()
{
$("#msgbox").removeClass().addClass('messagebox').text('Check en cours...').fadeIn("slow");
$.post("./check_pseudo.php" ,{ login:$(this).val() } ,function(data)
{
if(data=='no')
{
$("#msgbox").fadeTo(200,0.1,function()
{
$(this).html('Ce login est déjà pris').addClass('busy').fadeTo(900,1);
});
}
else
{
$("#msgbox").fadeTo(200,0.1,function()
{
$(this).html('Ce login est disponible').addClass('dispo').fadeTo(900,1);
});
}
});
});
</script>
</html>
