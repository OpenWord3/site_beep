<!DOCTYPE html>
<html>
  <body>
				
                  <form action="<?php echo INDEX ?>?index=edit_user" method="POST">
                <table width="300">
                  <tr>
                    <th><label>Protocole</label></th>
                    <th><select required name="protocole" onChange="THEFUNCTION(this.selectedIndex);">
					<option>SIP</option>
					</select>
					</th>
                  </tr>
	              <tr>
                    <td><label>Option De Transfert</label></td>
                    <td><select name="option_transfert">
					<option value="0">0</option>
					<option value="1">1</option>
					</select></td>
                  </tr>
	              <tr>
                    <td><label>Groupes</label></td>
                    <td><select name="groupe"><?php while($donnees = $show_groupe->fetch()){ $nom = $donnees['nom']; echo "<option value='$nom'>$nom</option>"; } ?></select></td>
                  </tr>
                  <tr>
                    <td><label>Login</label></td>
                    <td><input type="textbox" value="<?php echo $select_user['login']; ?>" name="login" required></td>
                  </tr>
				  <tr>
                    <td><label>Mot de Passe</label></td>
                    <td><input type="textbox" value="<?php echo $select_user['mdp']; ?>" name="mdp"></td>
                  </tr>
                  <tr>
                    <td><label>Nom</label></td>
                    <td><input type="textbox" value="<?php echo $select_user['nom']; ?>" name="nom" required pattern="[a-zA-Z]{2,20}"></td>
                  </tr>
                  <tr>
                    <td><label>Prenoms</label></td>
                    <td><input type="textbox" value="<?php echo $select_user['prenom']; ?>" name="prenom" required pattern="[a-zA-Z]{2,20}"></td>
                  </tr>
                  <tr>
                    <td><label>Adresse Mail</label></td>
                    <td><input type="mail" value="<?php echo $select_user['mail']; ?>" name="mail" required pattern="[a-z0-9._]+@[a-z]+.[a-z]{2,4}"></td>
                  </tr>
                    <td><label>Numéro de téléphone</label></td>
                    <td><input type="textbox" value="<?php echo $select_user['num']; ?>" name="num"></td>
					<input type="hidden" name="num_origine" value="<?php echo $select_user['num']; ?>">
                  </tr>
                  <tr>
                    <td><label>Numéro de transfert</label></td>
                    <td><input type="textbox" value="<?php echo $select_user['num_transfert']; ?>" name="num_transfert"></td>
                  </tr>
                </table>
             
                </center>
              </div>
              <div class="modal-footer">
                <button type="submit" name="modifier" value="<?php echo $select_user['id_user']; ?>" class="btn btn-primary">Modifier</button>
              </div>
			  </form>
			  <form action="<?php echo INDEX ?>?index=show_users" method="POST">
              <div class="modal-footer">
				<button type="submit" name="fermer" class="btn btn-default">Fermer</button>
			</div>
			</form>
</body>
</html>