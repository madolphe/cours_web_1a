<?php

if ( !empty( $_POST['login'] ) && ! empty( $_POST['comment'] ) && ! empty( $_POST['note'] ) ) {
	echo "Login :" . $_POST['login'] . "<br/>";
	echo "Comment :" . $_POST['comment']. "<br/>";
	echo "Note :" . $_POST['note']. "<br/>";
}

?>