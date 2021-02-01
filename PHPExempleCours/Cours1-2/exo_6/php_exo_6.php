<h4>Que pensez vous de ce site ?</h4>
<form method="post" action="exo_6/recup.php">
	<label for="login">Votre Nom:</label>
	<input type="text" name="login" /> <br/>
	<label for="comment">Commentaire:</label>
	<input type="text" name="comment"/><br/>
	<label for="note">Note/10 ?</label>
	<select name="note" size="10">
		<option value="">--Choix de la note--</option>
		<?php
			for($i=0;$i<=10;$i++){
				echo "<option value=\"$i\">$i</option>";
			}
		?>
	</select>
	<input type="submit" value="Envoyer">
</form>