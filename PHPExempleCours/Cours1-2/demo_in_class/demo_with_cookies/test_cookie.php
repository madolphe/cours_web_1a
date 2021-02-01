<?php
	setcookie("pseudo", $_POST['login'], time()+24*3600, "/PHPExempleCours/Cours1-2")
?>
Lien vers nouvelle page pour utilisation de ce cookie: <a href="get_cookie.php">ICI</a>
