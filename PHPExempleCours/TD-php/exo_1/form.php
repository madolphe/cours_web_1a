<h2>Elevation à la puissance : a puissance b</h2>
<form action="/PHPExempleCours/TD-php/exo_1/print_results.php" method="POST">
    <label for="a">Tapez le chiffre a: </label>
    <input type="text" name="a">
    <label for="b">Tapez le chiffre b:  </label>
    <input type="text" name="b">
    <input type="submit" value="Valider">
</form>
<?php
    if(isset($_GET['erreur'])){echo $_GET['erreur'];}
?>