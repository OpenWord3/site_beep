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
          	<h3><i class="fa fa-angle-right"></i> Liste des numéros entrants</h3>
		  		    <div class="row mt">
			       		<div class="col-lg-12">
                      <div class="content-panel">
                      <h4><i class="fa fa-angle-right"></i></h4>
                          <section id="unseen">
                          <?php if(isset($_POST["configurer_set"])){echo $alert;}?>
                            <table class="table table-bordered table-striped table-condensed">
                              <?php if(isset($_POST["ajouter_set"])){ 
                                      echo $alert_geo." ".$alert_sip." ".$alert_inum; 
                                    }else if(isset($_POST["modifier_set"])){ 
                                      //echo $alert_geo+" "+$alert_sip+" "+$alert_inum; 
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
          <div class="modal fade" id="configuration<?php echo $result['id_set_num']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
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
                  <input type="hidden" name="old_receiver" value="<?php echo $result["receveur"]; ?>">                  
                  <table width="300">
                    <tr id="receveurtr<?php echo $result['id_set_num']; ?>">                      
                      <td><label>Receveur</label></td>
                      <td><select name="receveur" id="receveur<?php echo $result['id_set_num']; ?>">
                        <option value="1">SVI</option>
                        <option value="2">Standard</option>
                        <option value="3">Utilisateur</option>
                      </select></td>
                    </tr>
                    <tr id="svitr<?php echo $result['id_set_num']; ?>" style="display:none;">
                      <td><label>Nom du SVI</label></td>
                      <td><input type="text" name="svi" id="svi<?php echo $result['id_set_num']; ?>"></td>
                    </tr>
                    <tr id="proposition1tr<?php echo $result['id_set_num']; ?>" style="display:none;">
                      <td><label>Proposition 1</label></td>
                      <td><select name="proposition1" id="proposition1<?php echo $result['id_set_num']; ?>">
                        <option value="conférence">conférence</option>
                        <option value="standard">standard</option>
                        <option value="composer">composer</option>
                        <option value="utilisateur">utilisateur</option>
                        <option value="callcenter">centre d'appel</option>
                      </select></td>
                    </tr>
                    <tr id="p1<?php echo $result['id_set_num']; ?>" style="display:none;">
                      <td><label>Nom de l'utilisateur</label></td>
                      <td><select name="user1" id="user1<?php echo $result['id_set_num']; ?>">
                        <?php foreach($all_users as $resultuser){ ?>
                          <option><?php echo $resultuser["login"]; ?></option>
                        <?php } ?>
                      </select></td>
                    </tr>
                    <tr id="pcall1<?php echo $result['id_set_num']; ?>" style="display:none;">
                      <td><label>Centre d'appel</label></td>
                      <td><select name="call1" id="call1<?php echo $result['id_set_num']; ?>" >
                        <?php foreach($all_callcenters as $resultcall){ ?>
                          <option><?php echo $resultcall["nom"]; ?></option>
                        <?php } ?>
                      </select></td>
                    </tr>                   
                    <tr id="proposition2tr<?php echo $result['id_set_num']; ?>" style="display:none;">
                      <td><label>Proposition 2</label></td>
                      <td><select name="proposition2" id="proposition2<?php echo $result['id_set_num']; ?>">
                        <option value="conférence">conférence</option>
                        <option value="standard">standard</option>
                        <option value="composer">composer</option>
                        <option value="utilisateur">utilisateur</option>
                        <option value="callcenter">centre d'appel</option>
                      </select></td>
                    </tr> 
                    <tr id="p2<?php echo $result['id_set_num']; ?>" style="display:none;">
                      <td><label>Nom de l'utilisateur</label></td>
                      <td><select name="user2" id="user2<?php echo $result['id_set_num']; ?>">
                        <?php foreach($all_users as $resultuser){ ?>
                          <option><?php echo $resultuser["login"]; ?></option>
                        <?php } ?>
                      </select></td>
                    </tr> 
                    <tr id="pcall2<?php echo $result['id_set_num']; ?>" style="display:none;">
                      <td><label>Centre d'appel</label></td>
                      <td><select name="call2" id="call2<?php echo $result['id_set_num']; ?>">
                        <?php foreach($all_callcenters as $resultcall){ ?>
                          <option><?php echo $resultcall["nom"]; ?></option>
                        <?php } ?>
                      </select></td>
                    </tr>  
                    <tr id="proposition3tr<?php echo $result['id_set_num']; ?>" style="display:none;">
                      <td><label>Proposition 3</label></td>
                      <td><select name="proposition3" id="proposition3<?php echo $result['id_set_num']; ?>">
                        <option value="conférence">conférence</option>
                        <option value="standard">standard</option>
                        <option value="composer">composer</option>
                        <option value="utilisateur">utilisateur</option>
                        <option value="callcenter">centre d'appel</option>
                      </select></td>
                    </tr>
                    <tr id="p3<?php echo $result['id_set_num']; ?>" style="display:none;">
                      <td><label>Nom de l'utilisateur</label></td>
                      <td><select name="user3" id="user3<?php echo $result['id_set_num']; ?>">
                        <?php foreach($all_users as $resultuser){ ?>
                          <option><?php echo $resultuser["login"]; ?></option>
                        <?php } ?>
                      </select></td>
                    </tr>
                    <tr id="pcall3<?php echo $result['id_set_num']; ?>" style="display:none;">
                      <td><label>Centre d'appel</label></td>
                      <td><select name="call3" id="call3<?php echo $result['id_set_num']; ?>">
                        <?php foreach($all_callcenters as $resultcall){ ?>
                          <option><?php echo $resultcall["nom"]; ?></option>
                        <?php } ?>
                      </select></td>
                    </tr>
                    <tr id="utilisateurtr<?php echo $result['id_set_num']; ?>" style="display:none;">
                      <td><label>Utilisateur</label></td>
                      <td><select name="utilisateur" id="utilisateur<?php echo $result['id_set_num']; ?>">
                        <?php foreach($all_users as $resultuser){ ?>
                          <option><?php echo $resultuser["login"]; ?></option>
                        <?php } ?>
                      </select></td>
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

          <div class="modal fade" id="suppression<?php echo $result['id_set_num']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
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
                      <input type="hidden" name="id_set_num" value="<?php echo $result['id_set_num']; ?>">
                      <input type="hidden" name="num_geo" value="<?php echo $result['num_geo']; ?>">
                      <input type="hidden" name="num_sip" value="<?php echo $result['num_sip']; ?>">
                      <input type="hidden" name="inum" value="<?php echo $result['inum']; ?>">
                      <input type="hidden" name="receveur" value="<?php echo $result['receveur']; ?>">
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

          <div class="modal fade" id="modification<?php echo $result['id_set_num']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title" id="myModalLabel">Ajouter un ou des numéros au set du compte <?php echo $result["compte"]; ?></h4>
              </div>
              <div class="modal-body">
                <center>
                <form action="<?php echo INDEX ?>?index=vue_gestion_numero_entrant" method="POST">
                  <input type="hidden" name="id_set_num" value="<?php echo $result['id_set_num']; ?>">
                  <input type="hidden" name="old_num_geo" value="<?php echo $result['num_geo']; ?>">
                  <input type="hidden" name="old_num_sip" value="<?php echo $result['num_sip']; ?>">
                  <input type="hidden" name="old_inum" value="<?php echo $result['inum']; ?>">
                  <input type="hidden" name="receveur" value="<?php echo $result['receveur']; ?>">
                  <table width="300">
                   <tr <?php if($result["num_geo"] != ""){echo "style='display:none;'";} ?>>
                      <td><label>Numéro géographique</label></td>
                      <td><input type="textbox" id="val_new_num_geo" placeholder="Nouveau Numéro géographique" name="new_num_geo" <?php if($result["num_geo"] != ""){echo "value=".$result["num_geo"];} ?>></td>
                    </tr>
                    <tr <?php if($result["num_sip"] != ""){echo "style='display:none;'";} ?>>
                      <td><label>Numéro SIP</label></td>
                      <td><input type="textbox" id="val_new_num_sip" placeholder="Nouveau Numéro SIP" name="new_num_sip" <?php if($result["num_sip"] != ""){echo "value=".$result["num_sip"];} ?>></td>
                    </tr>
                    <tr <?php if($result["inum"] != ""){echo "style='display:none;'";} ?>>
                      <td><label>Numéro INUM</label></td>
                      <td><input type="textbox" id="val_new_inum" placeholder="Nouveau Numéro INUM" name="new_inum" <?php if($result["inum"] != ""){echo "value=".$result["inum"];} ?>></td>
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
          $("#receveur<?php echo $result['id_set_num']; ?>").click(function(){
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
                    $("#pcall1<?php echo $result['id_set_num'] ?>").fadeOut();
                    $("#pcall2<?php echo $result['id_set_num'] ?>").fadeOut();
                    $("#pcall3<?php echo $result['id_set_num'] ?>").fadeOut();
                  }else if($(this).val() == "callcenter"){
                    $("#pcall1<?php echo $result['id_set_num'] ?>").fadeIn();
                    $("#pcall2<?php echo $result['id_set_num'] ?>").fadeOut();
                    $("#pcall3<?php echo $result['id_set_num'] ?>").fadeOut();
                    $("#p1<?php echo $result['id_set_num'] ?>").fadeOut();
                    $("#p2<?php echo $result['id_set_num'] ?>").fadeOut();
                    $("#p3<?php echo $result['id_set_num'] ?>").fadeOut();
                  } else {
                    $("#p1<?php echo $result['id_set_num'] ?>").fadeOut();
                    $("#pcall1<?php echo $result['id_set_num'] ?>").fadeOut();
                  }
                });

                $("#proposition2<?php echo $result['id_set_num'] ?>").click(function(){
                  if($(this).val() == "utilisateur"){
                    $("#p2<?php echo $result['id_set_num'] ?>").fadeIn();
                    $("#p1<?php echo $result['id_set_num'] ?>").fadeOut();
                    $("#p3<?php echo $result['id_set_num'] ?>").fadeOut();
                    $("#pcall2<?php echo $result['id_set_num'] ?>").fadeOut();
                    $("#pcall1<?php echo $result['id_set_num'] ?>").fadeOut();
                    $("#pcall3<?php echo $result['id_set_num'] ?>").fadeOut();
                  }else if($(this).val() == "callcenter"){
                    $("#pcall2<?php echo $result['id_set_num'] ?>").fadeIn();
                    $("#pcall1<?php echo $result['id_set_num'] ?>").fadeOut();
                    $("#pcall3<?php echo $result['id_set_num'] ?>").fadeOut();
                    $("#p2<?php echo $result['id_set_num'] ?>").fadeOut();
                    $("#p1<?php echo $result['id_set_num'] ?>").fadeOut();
                    $("#p3<?php echo $result['id_set_num'] ?>").fadeOut();
                  } else {
                    $("#p2<?php echo $result['id_set_num'] ?>").fadeOut();
                    $("#pcall2<?php echo $result['id_set_num'] ?>").fadeOut();
                  }
                });

                $("#proposition3<?php echo $result['id_set_num'] ?>").click(function(){
                  if($(this).val() == "utilisateur"){
                    $("#p3<?php echo $result['id_set_num'] ?>").fadeIn();
                    $("#p1<?php echo $result['id_set_num'] ?>").fadeOut();
                    $("#p2<?php echo $result['id_set_num'] ?>").fadeOut();
                    $("#pcall3<?php echo $result['id_set_num'] ?>").fadeOut();
                    $("#pcall1<?php echo $result['id_set_num'] ?>").fadeOut();
                    $("#pcall2<?php echo $result['id_set_num'] ?>").fadeOut();
                  }else if($(this).val() == "callcenter"){
                    $("#pcall3<?php echo $result['id_set_num'] ?>").fadeIn();
                    $("#pcall1<?php echo $result['id_set_num'] ?>").fadeOut();
                    $("#pcall2<?php echo $result['id_set_num'] ?>").fadeOut();
                    $("#p3<?php echo $result['id_set_num'] ?>").fadeOut();
                    $("#p1<?php echo $result['id_set_num'] ?>").fadeOut();
                    $("#p2<?php echo $result['id_set_num'] ?>").fadeOut()
                  } else {
                    $("#p3<?php echo $result['id_set_num'] ?>").fadeOut();
                    $("#pcall3<?php echo $result['id_set_num'] ?>").fadeOut();
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
                $("#pcall1<?php echo $result['id_set_num'] ?>").fadeOut();
                $("#pcall2<?php echo $result['id_set_num'] ?>").fadeOut();
                $("#pcall3<?php echo $result['id_set_num'] ?>").fadeOut();

              } else {
                
                $("#proposition1tr<?php echo $result['id_set_num'] ?>").fadeOut();
                $("#proposition2tr<?php echo $result['id_set_num'] ?>").fadeOut();
                $("#proposition3tr<?php echo $result['id_set_num'] ?>").fadeOut();
                $("#utilisateurtr<?php echo $result['id_set_num'] ?>").fadeOut();
                $("#svitr<?php echo $result['id_set_num'] ?>").fadeOut();
                $("#p1<?php echo $result['id_set_num'] ?>").fadeOut();
                $("#p2<?php echo $result['id_set_num'] ?>").fadeOut();
                $("#p3<?php echo $result['id_set_num'] ?>").fadeOut();
                $("#pcall1<?php echo $result['id_set_num'] ?>").fadeOut();
                $("#pcall2<?php echo $result['id_set_num'] ?>").fadeOut();
                $("#pcall3<?php echo $result['id_set_num'] ?>").fadeOut();
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
            $("#p3<?php echo $result['id_set_num'] ?>").fadeOut();
            $("#p1<?php echo $result['id_set_num'] ?>").fadeOut();
            $("#p2<?php echo $result['id_set_num'] ?>").fadeOut();
            $("#pcall3<?php echo $result['id_set_num'] ?>").fadeOut();
            $("#pcall1<?php echo $result['id_set_num'] ?>").fadeOut();
            $("#pcall2<?php echo $result['id_set_num'] ?>").fadeOut();
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
