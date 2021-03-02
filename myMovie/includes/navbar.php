<?php require_once "includes/utils.php"; ?>

<nav class="navbar navbar-expand-lg navbar-light bg-light sticky-top">
    <div class="container">
        <a class="navbar-brand" href="index.php"><i class="bi bi-film"></i> MyMovies</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto">
				<?php if(isUserConnected()){?>
                    <li class="nav-item"><a class="nav-link" href="movie_add.php"><i class="bi bi-plus-circle"></i>
                            Ajouter un film</a></li>
				<?php }?>
                <li class="nav-item dropdown">
					<?php if(isUserConnected()){?>
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="bi bi-person-fill"></i>
                            Bienvenue, <?php echo $_SESSION['user_name']?>
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="logout.php">Se déconnecter</a>
                        </div>
					<?php }else{?>
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Non connecté
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="login.php">Connexion</a>
                        </div>
					<?php }?>
                </li>
            </ul>
        </div>
    </div>
</nav>