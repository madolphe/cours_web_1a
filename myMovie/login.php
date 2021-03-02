<?php
	session_start();
	include_once 'includes/manage_db.php';
	include_once 'includes/display_login_form.php';
    $msg_error = "";
    if(!empty($_POST['login']) and !empty($_POST['password'])) {
		$user = get_user( $_POST );
		if ($user->rowCount() == 1) {
			$_SESSION['user_name'] = $_POST['login'];
			header('Location: index.php');
		} else {
			$msg_error = "L'utilisateur ne semble pas exister.";
		}
	}
	// If non empty & user doesn't exist, display login form:
	display_login_form($msg_error);
?>
