<?php
session_start();
// session_destroy();?>
<html lang="fr">
	<head>
		<meta charset="utf-8">
		<title>Exercices de TD</title>
	</head>
	<body>
	<h1>Exercice 1:</h1>
	<?php
		include_once "exo_1/form.php";
	?>
	</body>
    <h1>Exercice 4:</h1>
	<?php
	include_once "exo_4/get_method.php";
	?>
    </body>
    <h1>Exercice 5:</h1>
	<?php
	include_once "exo_5/poidsIdealv2.php";
	?>
    <h1>Exercice 6:</h1>
	<?php
	    include "exo_6/form.php";
	?>
    <h1>Exercice 7:</h1>
	<?php
	include "exo_7/adn.php";
	?>
    <h1>Exercice 8:</h1>
	<?php
	include "exo_8/form_tableau.html";
	?>
    </body>
</html>