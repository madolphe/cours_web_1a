<html>
	<body>
	<?php
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
	?>
	</body>
</html>