<html>
	<body>
	<?php
	if (array_key_exists('v1', $_POST))
	{
		$nb = $_POST['nb'];
		// On def la première valeur minimale:
		$min = $_POST['v1'];
		$ind_min = 1;
		for ($i=2; $i<=$nb; $i++)
		{ $key = 'v'.$i;
			if ($_POST[$key] < $min) {
			    // SI $_POST[$key] est autre chose qu'un entier la comparaison est possible et sera fausse
				$min = $_POST[$key];
				$ind_min = $i; }
		}
		print "Le minimum est la valeur $min (indice $ind_min)";
	} else
	{
	    $nb = $_POST['nb'];
		print '<form action="minimum_tableau.php" method="POST">';
		print 'Veuillez remplir les valeurs du tableau<br/>';
		print '<table><tr><th>Indice</th><th>Valeur</th></tr>';
		for ($i=1;$i<=$nb;$i++)
		{
			$nom = "v".$i;
			print '<tr><td>'.$i.'</td><td><input type="text" name="'.$nom.'" id="'.$nom.'"/></td></tr>';
		}
		print '</table><input type="hidden" name="nb" value='.$nb.'/><br/>';
		print '<p><input type="submit" value="Minimum ?"/><br/></form>'; }
	?>
	</body>
</html>

     