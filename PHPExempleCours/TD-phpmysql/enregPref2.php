<?php
	require_once 'utils/functions.php';
	function AfficherListe($PTABLE, $PCODE, $PLIBELLE){
		require("connect.php");
		$MaRequete = "SELECT * FROM ".escape($PTABLE)." Order By ".escape($PLIBELLE);
		$MonRs = $BDD -> query( $MaRequete );
		echo "<select name=$PTABLE>";
		echo "<option selected>-- Choisir un item --</option>";
		while ($Tuple = $MonRs ->fetch() )
		{
			echo "<option value='$Tuple[$PCODE]'> $Tuple[$PLIBELLE]($Tuple[$PCODE]) </option>";
		}
		echo"</select><br/><br/>";
	}
?>

<html>
	<head>
		<title>Accès a une base MySQL</title>
	</head>
	<body>
		<h2>Formulaire d'enregistrement des préférences</h2>
		<form method="POST" action="TraiteForm.php">
			<?php
			echo "Sélectionner un CLIENT : ";
			AfficherListe('CLIENT','CLI_NUM','CLI_NOM');
			echo "Sélectionner un PAYS : ";
			AfficherListe('PAYS','PAYS_CODE','PAYS_LIB');
			echo "Sélectionner une ESTIMATION : ";
			AfficherListe('ESTIMATION','EST_CODE','EST_LIB');
			?>
			<input type="Submit" value="Soumettre">
		</form>
	</body>
</html>

