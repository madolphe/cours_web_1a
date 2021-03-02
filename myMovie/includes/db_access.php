<?php
	function get_db(){
		/**
		 * Does something interesting
		 *
		 * @param Place   $where  Where something interesting takes place
		 * @param integer $repeat How many times something interesting should happen
		 *
		 * @throws Some_Exception_Class If something interesting cannot happen
		 * @author Monkey Coder <mcoder@facebook.com>
		 * @return Status
		 */
		try{
			$bdd = new PDO(
				"mysql:host=localhost;dbname=mymovies;charset=utf8",
				"mymovies_user",
				"secret",
				array(PDO::ATTR_ERRMODE =>PDO::ERRMODE_EXCEPTION));
		}
		catch (Exception $e) {
			die('Erreur fatale : ' . $e->getMessage());
		}
		return $bdd;
	}
?>