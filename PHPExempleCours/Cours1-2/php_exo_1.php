<?php 
    $Ma_chaine_de_caracteres = "Ceci est un message de paix.";
    echo "La chaine à inverser : $Ma_chaine_de_caracteres <br/>";
    $inverse = "";
    echo "<br/> Boucle for \"décroissante\" :"; 
    for($index_car=strlen($Ma_chaine_de_caracteres)-1; $index_car>=0; $index_car--)
    {
        $inverse=$inverse.$Ma_chaine_de_caracteres[$index_car];
    }
    echo "<br/>".$inverse."<br/>";
    $inverse = "";
    echo "<br/> Boucle for croissante mais parcourt par index négatifs <br/>";
    for($index_car=1; $index_car<=strlen($Ma_chaine_de_caracteres); $index_car++)
    {
        $inverse=$inverse.$Ma_chaine_de_caracteres[-$index_car];
    }
    echo $inverse;
?>
