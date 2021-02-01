<?php 
    echo "<strong> Utilisation de l'instruction FOR </strong> <br/>";
    $Nombre = 5;
    $Somme = 0;
    for($index_somme=1; $index_somme<=$Nombre; $index_somme++)
    {
        $Somme = $Somme + $index_somme;
    }
    echo "La somme des entiers de 1 à $Nombre est égale à $Somme <br/>";
    echo "<br/><strong> Utilisation de l'instruction WHILE </strong> <br/>";
    $index = 1;
    $Somme = 0;
    while($index<$Nombre)
    {
        $Somme = $Somme + $index;
        $index ++;
    }
    echo "La somme des entiers de 1 à $Nombre est égale à $Somme <br/>";
?>