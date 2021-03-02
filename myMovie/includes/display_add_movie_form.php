<?php
function display_add_movie_form($msg_error=""){
	include_once 'includes/head.php';
	include_once 'includes/navbar.php';   ?>
	<h2 class="text-center">Ajout d'un film</h2>
	<form class="container p-5 d-flex flex-column form-container" action="movie_add.php" method="post" enctype="multipart/form-data">
		<div class="form-group row">
			<label class="col-sm-4 col-form-label text-right" for="login">Titre</label>
            <div class="col-sm-6">
                <input type="text" class="form-control" name="mov_title"/>
            </div>
		</div>
		<div class="form-group row">
			<label class="col-sm-4 col-form-label text-right" for="password">Description courte</label>
            <div class="col-sm-6">
                <textarea name="mov_description_short" class="form-control" placeholder="Entrez sa description courte" required></textarea>
            </div>
		</div>
		<div class="form-group row">
			<label class="col-sm-4 col-form-label text-right" for="password">Description longue</label>
            <div class="col-sm-6">
                <textarea name="mov_description_long" class="form-control" placeholder="Entrez sa description courte" required></textarea>
            </div>
		</div>
		<div class="form-group row">
			<label class="col-sm-4 col-form-label text-right" for="password">Réalisateur</label>
            <div class="col-sm-6">
                <input type="text" class="form-control" name="mov_director"/>
            </div>
		</div>
		<div class="form-group row">
			<label class="col-sm-4 col-form-label text-right">Année de sortie</label>
            <div class="col-sm-6">
                <input type="number" name="mov_year" value="" class="form-control" placeholder="Entrez son année de sortie" required>
            </div>
        </div>
		<div class="form-group row">
			<label class="col-sm-4 col-form-label text-right">Image</label>
            <div class="col-sm-6">
                <input type="file" class="form-control-file" name="mov_image"/>
            </div>
		</div>
		<?php if($msg_error){?>
			<div class="alert-danger">Login ou mot de passe incorrect.</div>
		<?php } ?>
		<button type="submit" class="btn btn-primary align-self-center">
            <i class="bi bi-save"></i>
            Ajouter
        </button>
	</form>
	<?php
	include_once 'includes/footer.php';
	include_once 'includes/scripts_js.php';
}
?>
