<?php
// Check if a user is connected
function isUserConnected() {
	return isset($_SESSION['user_name']);
}

?>