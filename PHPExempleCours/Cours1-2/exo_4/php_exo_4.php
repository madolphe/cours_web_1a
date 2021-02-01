<?php 
    include_once "exo_4/fonctionsCalcul.php";
    $longeur = 10;
    $largeur = 5; 
    echo "L'aire d'un recteur de longueur $longeur et de largeur $largeur vaut ".calculAire($longeur, $largeur).".";
    echo "</br>";
    echo "Le périmètre d'un recteur de longueur $longeur et de largeur $largeur vaut ".calculPerimetre($longeur, $largeur).".";
?>