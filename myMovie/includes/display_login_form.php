<?php
	function display_login_form($msg_error=""){
		include_once 'includes/head.php';
		include_once 'includes/navbar.php';   ?>
    <h2 class="text-center">Connexion</h2>
	<form class="container p-5 d-flex flex-column form-container" action="login.php" method="post">
		<div class="form-outline mb-4">
			<label class="form-label" for="login">Login:</label>
			<input type="text" class="form-control" name="login"/>
		</div>
		<div class="form-outline mb-4">
			<label class="form-label" for="password">Mot de passe:</label>
			<input type="password" name="password" class="form-control" />
		</div>
		<?php if($msg_error){?>
			<div class="alert-danger">Login ou mot de passe incorrect.</div>
		<?php } ?>
		<button type="submit" class="btn btn-primary mb-4 align-self-center">Se connecter</button>
	</form>
<?php
		include_once 'includes/footer.php';
		include_once 'includes/scripts_js.php';
	}
?>

