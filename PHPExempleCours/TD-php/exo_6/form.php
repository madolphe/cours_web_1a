<?php
$status = session_status();
if($status == PHP_SESSION_NONE){session_start();}

if (!isset($_POST['soumis'])){
	?>
	<h1>Vérification du numéro Insee</h1>
	<form method="post" action="/PHPExempleCours/TD-php/exo_6/form.php">
		Numero Insee : <input name="numInsee" value=""/><br/>
		<input type="submit" value="Vérifier" name="soumis"/><br/>
	</form>
    <?php if(isset($_SESSION['has_tried'])){
    echo $_SESSION['has_tried'];
	    ?>
    	Le numéro que vous venez d'utilisez est incorrect.-->
<?php }?>
<?php
}
else{
	include('mesfonctions.php');
	$num=$_POST['numInsee'];
	// contrôle du numéro
	if (verifInsee($num))
	{
		echo "<h3>Numéro saisi correct !</h3>";
		if(isset($_SESSION['has_tried'])){$_SESSION = array();}
	}
	else{
		unset($_POST['soumis']);
		$_SESSION['has_tried'] = 'ERROR';
		//include('form.php');
		header('Location: ../');
	}
}
?>
