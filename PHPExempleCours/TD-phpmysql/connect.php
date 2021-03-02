<?php
	try
		{ $BDD = new PDO( "mysql:host=localhost;dbname=prefvoyagesec;charset=utf8", "testnmdp",
			"", array(PDO::ATTR_ERRMODE =>PDO::ERRMODE_EXCEPTION)); ;
			// connexion serveur de BD MySql et choix base
		}
	catch (Exception $e) {
		die('Erreur fatale : ' . $e->getMessage());
	}
?>