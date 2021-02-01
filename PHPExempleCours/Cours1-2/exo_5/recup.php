<?php
	if(!empty($_POST['login']) && !empty($_POST['mdp']))
	{
		echo "Reception via la methode POST <br/>";
		echo "Login :".$_POST['login']."<br/>";
		echo "Mdp :".$_POST['mdp'];
	} // Petite variation, on peut tester si les clefs existent, attention le champ peut du coup être vide!
	elseif(array_key_exists('login', $_GET) && array_key_exists('mdp', $_GET))
	{
		echo "Reception via la methode GET <br/>";
		echo "Login :".$_GET['login']."<br/>";
		echo "Mdp :".$_GET['mdp'];
	}
	else{
		echo "Formulaire incomplet  <br/>";
		echo "Dans \$_POST il y a: <br/>";
		foreach ($_POST as $key=>$value)
		{
			echo $key."   ".$value;
			echo "<br/>";
		}
		echo "Dans \$_GET il y a: <br/>";
		foreach ($_GET as $key=>$value)
		{
			echo $key."   ".$value;
			echo "<br/>";
		}
	}
?>