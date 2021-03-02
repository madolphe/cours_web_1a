<?php
	include_once "db_access.php";
	function get_movies_from_db ($columns=NULL){
		/**
		 * Return specified columns for all movies
		 *
		 * @param Array   $columns  columns to retrieve
		 *
		 * @throws PDOException If specified columns are not in table movie
		 * @return Array $all_movies with all movies
		 */
		if(!is_null($columns)){
			$request = "SELECT";
			foreach ($columns as $column){
				$request .= " ".$column.",";
			}
			$request = substr($request, 0, -1);
			$request .= " FROM movie";
		}else{
			$request = "SELECT * FROM movie";
		}
		try{
			$results = get_db() -> query ($request);
		}catch (Exception $e) {
			die('Erreur fatale : ' . $e->getMessage());
		}
		return $results;
	}


	function get_movie_by_id($id){
		/**
		 * Return specified columns for all movies
		 *
		 * @param Array   $columns  columns to retrieve
		 *
		 * @throws PDOException If specified columns are not in table movie
		 * @return Array $all_movies with all movies
		 */
		$request = get_db() -> prepare("SELECT * FROM movie WHERE mov_id=?");
		$request->execute(array($id));
		return $request;
	}

	function get_user ($infos){
		/**
		 * Return specified columns for all movies
		 *
		 * @param Array   $columns  columns to retrieve
		 *
		 * @throws PDOException If specified columns are not in table movie
		 * @return Array $all_movies with all movies
		 */
		$request = get_db() -> prepare("SELECT * FROM user WHERE usr_login=:usr_login and usr_password=:usr_password");
		$request->bindValue("usr_login", $infos['login'], PDO::PARAM_STR);
		$request->bindValue("usr_password", $infos['password'], PDO::PARAM_STR);
		$request->execute();
		return $request;
	}

	function add_movie($infos, $img_file){
		/**
		 * Return specified columns for all movies
		 *
		 * @param Array   $columns  columns to retrieve
		 *
		 * @throws PDOException If specified columns are not in table movie
		 * @return Array $all_movies with all movies
		 */
		$target_dir = "images/";
		$target_file = $target_dir . basename($img_file["mov_image"]["name"]);
		$check = getimagesize($_FILES["mov_image"]["tmp_name"]);
		if($check !== false) {
			move_uploaded_file($_FILES["mov_image"]["tmp_name"], $target_file);
			echo 'here';
		}
		$request = get_db() -> prepare("INSERT INTO movie(mov_title, mov_description_short, mov_description_long, 
                  mov_director, mov_year, mov_image) VALUES (:mov_title, :mov_description_short, :mov_description_long, 
                                                            :mov_director, :mov_year, :mov_image)");
		$request->bindValue("mov_title", $infos['mov_title'], PDO::PARAM_STR);
		$request->bindValue("mov_description_short", $infos['mov_description_short'], PDO::PARAM_STR);
		$request->bindValue("mov_description_long", $infos['mov_description_long'], PDO::PARAM_STR);
		$request->bindValue("mov_director", $infos['mov_director'], PDO::PARAM_STR);
		$request->bindValue("mov_year", $infos['mov_year'], PDO::PARAM_STR);
		$request->bindValue("mov_image", basename($img_file["mov_image"]["name"]), PDO::PARAM_STR);
		$request->execute();
		return $request;
	}

?>
