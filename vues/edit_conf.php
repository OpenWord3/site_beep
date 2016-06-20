<!DOCTYPE html>
<html>
  <body>        
                <form action="<?php echo INDEX ?>?index=edit_conference" method="POST">
                <table width="300">
                  <tr>
                    <td><label>Numéro de salle de conférence</label></td>
                    <td><input type="textbox" value="<?php echo $select_conf['num']; ?>" name="num_conf" <?php if(($select_conf['num'] == 770) || ($select_conf['num'] == 790)){ echo "disabled"; } ?>></td>
					<input type="hidden" name="num_origine" value="<?php echo $select_conf['num'];?>" >
                  </tr>
                  <tr>
                    <td><label>Mot de Passe</label></td>
                    <td><input type="textbox" value="<?php echo $select_conf['mdp'];?>" name="mdp_conf" <?php if(($select_conf['num'] == 770) || ($select_conf['num'] == 790)){ echo " disabled"; } ?>></td>
                  </tr>
                  <tr>
                    <td><label>TalkOnly</label></td>
					<?php if($select_conf['option_talk'] == 0){  ?>
                    <td><input type="checkbox" name="opt_talk" value="1"></td>
					<?php }else if($select_conf['option_talk'] == 1){ ?>
					<td><input type="checkbox" name="opt_talk" value="1" checked></td>
					<?php } ?>
				  </tr>
                  <tr>
                    <td><label>Musique d'attente</label></td>
					<?php if($select_conf['option_music'] == 0){  ?>
                    <td><input type="checkbox" name="opt_music" value="1"></td>
					<?php }else if($select_conf['option_music'] == 1){ ?>
					<td><input type="checkbox" name="opt_music" value="1" checked></td>
					<?php } ?>
                  </tr>
                </table>
                <button type="submit" name="modifier" value="<?php echo $select_conf['id_conf']; ?>" class="btn btn-primary">Modifier</button>
			</form>	
			  <form action="<?php echo INDEX ?>?index=show_conferences" method="POST">
				<button type="submit" name="fermer" class="btn btn-default">Fermer</button>
			</form>
		
</body>
</html>