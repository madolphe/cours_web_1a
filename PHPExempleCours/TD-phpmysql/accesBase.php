
<html><head><title>Accès a une base MySQL</title></head>
<body>
<h2>LISTE des PAYS connus dans la BASE de DONNEES prefVoyages</h2>
	<?php
	// inclura le script contenu dans le fichier connect.php
	// intérêt : si on change les paramètres de connexion, on ne les change qu'à un endroit.
	require("connect.php");
	 // MaRequete : variable chaîne contenant la requête SQL
	if ($BDD) {
		$MaRequete="SELECT * FROM PAYS Order By PAYS_CODE";
		// Envoi de la requête "à travers la CONNEXION" et récupération
		$CurseurPays = $BDD -> query( $MaRequete );
	}
	?>
	<table>
		<?php
		// fetch se positionne sur une ligne du curseur de la requête
		// et la retourne sous forme d'un tableau (s'il existe bien une ligne)
		while ( $tuple = $CurseurPays->fetch() ) // pour chaque ligne stockée dans $ligne
		{
			echo "<tr><td>";
			echo $tuple["PAYS_CODE"];
			echo "</td><td>";
			echo $tuple["PAYS_LIB"];
			echo "</td></tr>";
		}
	// affiche la colonne "CodePays" du tableau "tuple"
	// le passage au suivant est contenu dans la condition de la boucle
?> </table></body></html>