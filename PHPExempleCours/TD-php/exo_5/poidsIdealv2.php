<html>
<body>
<?php
	if (array_key_exists('taille', $_POST))
		/* ou if(isset($_POST['taille']))*/
		{
			$t = $_POST['taille'];
			$a = $_POST['age'];
			$s = $_POST['sexe'];
			if (empty($t) or empty($a))
				print 'Vous devez saisir toutes les informations !';
			else {
				if (($a<20) || ($a>60) || ($t<150) || ($t>190))
					print "La formule n'est pas valable pour les valeurs que vous
					avez saisies !";
				else {
					if ($s == 1) {$pi = $t - 110 + $a * 0.17;}
					else {$pi = $t - 112 + $a * 0.15;}
					print "Votre poids idéal est de : $pi";
				}
			}
		}
	else
	{?>
		<form action="exo_5/poidsIdealv2.php" method="POST">
			Veuillez saisir les informations suivantes<br/>
			<label for="taille">Taille :</label>
			<input type="text" name="taille"/><br/>
			<label for="age">Age :</label>
			<input type="text" name="age"/><br/>
			<label for="sexe">Sexe :</label>
			<input type="radio" name="sexe" value="1" checked/> Masculin
			<input type="radio" name="sexe" value="2"/> Féminin
			<input type="submit" value="Calculer !"/>
		</form>
	<?php }?>
</body>
</html>