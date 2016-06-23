<!DOCTYPE html>
<html lang="fr">
  <head>
    <!--<meta http-equiv="Refresh" content="30; url=<?php echo INDEX ?>?index=vue_gestion_gateway"> -->	
    <title>Tableau de bord - Beep</title>
	
	<?php include ("./assets/pages/admin_css.php") ?>
	
  </head>

  <body>
		
	  <?php include ("./assets/pages/admin_menu.php") ?>
	  
      <section id="main-content">
        <section class="wrapper">
          	<h3><i class="fa fa-angle-right"></i> Liste des numéros entrants</h3>
		  		    <div class="row mt">
			       		<div class="col-lg-12">
                      <div class="content-panel">
                      <h4><i class="fa fa-angle-right"></i></h4>
                          <section id="unseen">
                            <table class="table table-bordered table-striped table-condensed">
                              <?php if(isset($_POST["ajouter_set"])){ echo $alert_geo+" "+$alert_sip+" "+$alert_inum; }else if(isset($_POST["modifier_set"])){ echo $alert_geo+" "+$alert_sip+" "+$alert_inum; }else if(isset($_POST["supprimer_set"])){ echo $alert; } ?>
                              <thead>
                              <tr>
                                <th>Compte</th>                                
                                <th>Host (Ippi, Ovh, etc...)</th>
                                <th>Numero géographique</th>
                                <th>Numéro SIP</th>
                                <th>Numéro INUM</th>
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
                                  <td>
                                    <button class="btn btn-primary btn-xs" data-toggle="modal" data-target="#modification<?php echo $result["id_set_num"]; ?>" ><a href="#modification<?php echo $result["id_set_num"]; ?>"></a><i class="fa fa-pencil"></i></button>
                                    <button class="btn btn-danger btn-xs" data-toggle="modal" data-target="#suppression<?php echo $result["id_set_num"]; ?>"><i class="fa fa-trash-o "></i></button>
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
                      <input type="hidden" name="id_gateway" value="<?php echo $result["id_set_num"] ?>">
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
                    <td><label>Compte</label></td>
                    <td><select name="compte">
                        <?php foreach($all_gateways as $result){ ?>
                        <option><?php echo $result["compte"]; ?></option>
                        <?php } ?>
                    </select></td>
                  </tr>
                  <tr>
                    <td><label>Host</label></td>
                    <td><select name="host">
                        <?php foreach($all_gateways as $result){ ?>
                        <option><?php echo $result["host"]; ?></option>
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
      });
      //custom select box

      $(function(){
          $('select.styled').customSelect();
      });

  </script>
  </body>
</html>
