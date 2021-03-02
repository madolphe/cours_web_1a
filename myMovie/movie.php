<?php
	session_start();
	include_once "includes/manage_db.php";
	include_once 'includes/head.php';
	include_once 'includes/navbar.php';
	$movie = get_movie_by_id(intval($_GET['id']));
	$res = $movie->fetch();
?>
<div class="container jumbotron mt-2">
	<div class="row">
		<div class="col-4">
			<img class="img-fluid" src=<?php echo "images/".strtolower(str_replace(' ', '', $res['mov_title'])).".jpg" ?>>
		</div>
		<div class="col-8">
			<h3><?php echo $res["mov_title"]?></h3>
			<p><?php echo $res["mov_description_short"]?></p>
			<p><small><?php echo $res["mov_description_long"]?></small></p>
		</div>
	</div>
</div>
<?php
include_once 'includes/footer.php';
?>