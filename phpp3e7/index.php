<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8" />
    <title>PHP - PARTIE 3 - EXO 7</title>
  </head>
  <body>
    <h1>PHP - PARTIE 3 - EXO 7</h1>
    <p><strong>En allant de 1 à 100 avec un pas de 15, afficher le message On tient le bon bout.</strong></p>
    <?php
    for ($number = 1; $number <= 100 ; $number += 15) { ?>
      <p><?php echo 'On tient le bon bout : ' . $number; ?></p>
      <?php
    }
     ?>
  </body>
</html>
