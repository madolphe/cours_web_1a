<?php
	if(empty($_POST['a']) OR empty($_POST['b']))
	{
        header('Location: form.php?erreur=Il y a un probleme!!!');
	}else
    {
	    echo $_POST['a']." a la puissance ".$_POST['b']." vaut: ".pow($_POST['a'], $_POST['b']);
    }
?>
