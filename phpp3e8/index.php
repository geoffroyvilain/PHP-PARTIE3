<?php
$number = 200;
 ?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8" />
    <title>PHP - PARTIE 3 - EXO 8</title>
  </head>
  <body>
    <h1>PHP - PARTIE 3 - EXO 8</h1>
    <p><strong>En allant de 200 à 0 avec un pas de 12, afficher le message Enfin !!!!</strong></p>
    <?php
    while($number >= 0) { ?>
      <p><?php echo 'Enfin !!!! : ' . $number; ?></p>
      <?php $number -= 12;
    }
     ?>
  </body>
</html>
