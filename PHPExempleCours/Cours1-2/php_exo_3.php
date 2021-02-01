<?php 
    $mois = array('Janvier' => 31, 
    'Février' => 28,
    'Mars' => 31,
    'Avril' => 30,
    'Mai' => 31,
    'Juin' => 30,
    'Juillet' => 31,
    'Aout' => 31,
    'Septembre' => 30,
    'Octobre' => 31,
    'Novembre' => 30,
    'Decembre' => 31,
);
    echo "Tableau des mois de l'année et du nombre de jours les composant:  <br/>" ;
    echo "<table><tr><th scope='col'>Nom</th><th scope='col'>Nombre de jours</th></tr>";
    foreach($mois as $clef=>$valeur)
    {
        echo "<tr><td>$clef</td><td>$valeur</td></tr>";
    }
    echo "</table>";
    $Nb_de_mois = count($mois);
    echo "</br> Nombre de mois dans le tableau : $Nb_de_mois";
    $mois_bien_trie = ksort($mois);
    if($mois_bien_trie){
        echo "</br> Tableau des mois de l'année triés par ordre alphabétique:  <br/>" ;
        echo "<table><tr><th scope='col'>Nom</th><th scope='col'>Nombre de jours</th></tr>";
        foreach($mois as $clef=>$valeur)
        {
            echo "<tr><td>$clef</td><td>$valeur</td></tr>";
        }
        echo "</table>";
    }
?>