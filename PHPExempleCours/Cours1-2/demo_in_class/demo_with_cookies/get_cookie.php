<?php
if(isset($_COOKIE['pseudo']))
{
	echo 'Tres bon ce cookie '.$_COOKIE['pseudo'].'!';
}else{
	echo 'Jai faim, ou est le cookie?';
}
?>