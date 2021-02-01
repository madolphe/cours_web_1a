<!DOCTYPE html>
<html>
	<head>
		<title>ADN</title>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	</head>
	<body>
		<?php
		if (!isset($_POST['seq'])){
			?>
			<form method="post" action="exo_7/adn.php">
				Entrez la séquence ADN :
                <input type= "text" name="seq" value=""/><br/>
				<input type="submit" value="Vérifier" name="soumis"/><br/>
			</form>
		<?php }
		else{
			$ch = strtoupper( $_POST['seq'] );
			$nba=0;
			$nbc=0;
			$nbg=0;
			$nbt=0;
			$nbautre=0;
			for($i=0; $i< strlen($ch); $i++ )
			{
				$car = substr($ch , $i , 1);
				switch ($car) {
					case "A":
						$nba++;
						break;
					case "T":
						$nbt++;
						break;
					case "C":
						$nbc++;
						break;
					case "G":
						$nbg++;
						break;
					default:
						$nbautre++;
						break; }
			}
			print "Séquence ADN : ".$_POST['seq'] .":";
			print "<br/>adénine : $nba <br/> thymine: $nbt<br/> cytosine:$nbc <br/> guanine: $nbg <br/>";
			print "Nombre de caractères inconnus : $nbautre"; }
		?>
	</body>
</html>