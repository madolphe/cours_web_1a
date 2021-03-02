<?php
function escape($valeur)
{
	return htmlspecialchars($valeur, ENT_QUOTES, 'UTF-8', false);
}
?>