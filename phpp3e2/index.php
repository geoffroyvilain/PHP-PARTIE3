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
    <h1>PHP - PARTIE3 - EXO2</h1>
    <p>Créer deux variables. Initialiser la première à 0 et la deuxième avec un nombre compris en 1 et 100.</p>
    <p>Tant que la première variable n'est pas supérieure à 20 :</p>
    <ul>
      <li>Multiplier la première variable avec la deuxième</li>
      <li>Afficher le résultat</li>
      <li>Incrementer la première variable</li>
    </ul>
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
