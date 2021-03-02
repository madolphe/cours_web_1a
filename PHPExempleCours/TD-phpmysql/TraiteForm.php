<?php
	if(isset($_POST['PAYS']) and isset($_POST['ESTIMATION']) and isset($_POST['CLIENT'])) {
		echo "PAYS CODE: $_POST[PAYS] </br>";
		echo "CLIENT CODE: $_POST[CLIENT] </br>";
		echo "ESTIMATION CODE: $_POST[ESTIMATION]  </br>";
		require('connect.php');
		// D'abord on verifie que l'element n'existe pas deja en BDD:
		$requete_verif = $BDD->prepare("SELECT * FROM PREFERENCE WHERE CLI_NUM= ? and PAYS_CODE= ? and EST_CODE= ?");
		$requete_verif->execute(array($_POST['CLIENT'], $_POST['PAYS'], $_POST['ESTIMATION']));
		$ligne = $requete_verif->fetch();
		if(! $ligne){
			$requete = $BDD->prepare("INSERT INTO PREFERENCE VALUES (:client, :pays, :estimation)");
			$requete->bindValue('client', $_POST['CLIENT'], PDO::PARAM_INT);
			$requete->bindValue('pays', $_POST['PAYS'], PDO::PARAM_STR);
			$requete->bindValue('estimation', $_POST['ESTIMATION'], PDO::PARAM_STR);
			$requete->execute();
			echo "Insertion avec succes.";
		}
		else{
			echo "Donnee existe deja.";
		}
	}
?>