<?php
	session_start();
	include_once 'includes/head.php';
	include_once 'includes/navbar.php';
	include_once 'includes/display_add_movie_form.php';
	include_once 'includes/manage_db.php';
?>

<?php
	$msg_error = "";
	print_r($_POST);
	if(!empty($_POST['mov_title']) and
	   !empty($_POST['mov_description_long']) and
	   !empty($_POST['mov_description_short']) and
	   !empty($_POST['mov_director']) and
	   !empty($_POST['mov_year'])) {
		$status = add_movie( $_POST, $_FILES );
		if ($status) {
			header('Location: index.php');
		} else {
			echo "PROBLEME:";
			$msg_error = "Tous les champs doivent être renseignés.";
		}
	}
	// If non empty & user doesn't exist, display login form:
	display_add_movie_form($msg_error);
?>

<?php
	include_once 'includes/footer.php';
	include_once 'includes/scripts_js.php';
?>