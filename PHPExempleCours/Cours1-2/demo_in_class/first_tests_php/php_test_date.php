<!DOCTYPE html>
<html lang="fr">
    <!--Je commente de cette manière-->
  <head>
    <!-- Head regroupe des informations générales sur la page -->
    <meta charset="utf-8"><!--Méthode d'encodage de la page-->
    <title>Essayons le php</title>
  </head>
  <body>
      Bonjour, nous sommes le :
      <?php 
        $date = date("d-m-Y");
        echo $date;
        echo "<h3>SALUUUUUT</h3>";
      ?>
  </body>
</html>