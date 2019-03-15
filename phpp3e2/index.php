<?php
// on initialise les variables
$numberA = 0;
$numberB = rand(1, 101); // on initialise la variable avec un nombre entre 1 inclus et 101 non inclus
?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8" />
    <title>PHP - PARTIE3 - EXO2</title>
  </head>
  <body>
  <?php
  //tant que le la variable A est <= à 20 on affiche le résultat de a*b et on incrémente le A de 1
  while ($numberA <= 20)
  {
    ?><p><?php echo 'résultat :' . $numberA * $numberB;?></p>
     <?php
    $numberA++;
  }
   ?>
  </body>
</html>
