<?php //@TODO: add movie page?>

<?php
    session_start();
    include_once "includes/manage_db.php";
    include_once 'includes/head.php';
    include_once 'includes/navbar.php';
?>
<div class="container container-movies">
<?php
    $columns = array('mov_id', 'mov_title', 'mov_description_short');
    $all_movies = get_movies_from_db($columns) -> fetchAll();
    echo "<div class='container-fluid container-movie'>";
    foreach ($all_movies as $film){ ?>
        <div class='row d-flex justify-content-between'>
            <h3 class="align-self-center"><a href=<?php echo "movie.php?id=".$film['mov_id'].">".$film['mov_title']?></a></h3>
            <img src=<?php echo "images/".strtolower(str_replace(' ', '', $film['mov_title'])).".jpg" ?>>
        </div>
        <div class="row">
            <p> <?php echo $film['mov_description_short'] ?> </p>
        </div>
    <?php } ?>
    </div>
</div>
<?php include_once 'includes/footer.php'?>
<?php include_once 'includes/scripts_js.php'?>


