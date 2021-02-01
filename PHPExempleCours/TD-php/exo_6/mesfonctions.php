<?php
	function verifInsee($num){
		if (strlen($num)!=13)
			return false;
		if ( (substr($num , 0 , 1)!="1") && (substr($num , 0 , 1)!="2") )
			return false;
		else return true;
	}
?>