<html>
	<head>
		<title>Accès a une base MySQL</title>
	</head>
	<body>
		<h2>Formulaire d'enregistrement des préférences</h2>
		<form method="POST" action="TraiteForm.php">
			<?php // PROGRAMME "PRINCIPAL"
				//connexion à la base de données
				require("connect.php");
				echo "Sélectionner un CLIENT : ";
				$MaRequete="SELECT * FROM CLIENT Order By CLI_NOM";
				$MonRs = $BDD -> query( $MaRequete );
				echo "<select name='client'>";
				echo "<option selected>-- Choisir un item --</option>";
				while ($Tuple = $MonRs ->fetch() )
				{
					echo "<option value='$Tuple[CLI_NUM]'> $Tuple[CLI_NOM]($Tuple[CLI_NUM]) </option>";
				}
				echo"</select><br/><br/>";

                echo "Sélectionner un PAYS : ";
                $MaRequete="SELECT * FROM PAYS Order By PAYS_LIB";
                $MonRs = $BDD -> query( $MaRequete );
                echo "<select name='pays'>";
                echo "<option selected>-- Choisir un item --</option>";
                while ($Tuple = $MonRs ->fetch() )
                {
                    echo "<option value='$Tuple[PAYS_CODE]'> $Tuple[PAYS_LIB]($Tuple[PAYS_CODE]) </option>";
                }
                echo"</select><br/><br/>";

                echo "Sélectionner une ESTIMATION : ";
                $MaRequete="SELECT * FROM ESTIMATION Order By EST_LIB";
                $MonRs = $BDD -> query( $MaRequete );
                echo "<select name='estimation'>";
                echo "<option selected>-- Choisir un item --</option>";
                while ($Tuple = $MonRs ->fetch() )
                {
                    echo "<option value='$Tuple[EST_CODE]'> $Tuple[EST_LIB]($Tuple[EST_CODE]) </option>";
                }
                echo"</select><br/><br/>";
			?>
			<input type="Submit" value="Soumettre">
		</form>
	</body>
</html>
