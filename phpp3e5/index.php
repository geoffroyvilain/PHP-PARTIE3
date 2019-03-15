<?php
$number = 1;
 ?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8" />
    <title>PHP - PARTIE3 - EXO 5</title>
  </head>
  <body>
    <h1>PHP - PARTIE3 - EXO 5</h1>
    <p><strong>En allant de 1 à 15 avec un pas de 1, afficher le message On y arrive presque.</strong></p>
    <?php
    // tant que la variable n'est pas égal à 15
   while($number <=15)
   {
     ?>
     <!-- On affiche le résultat + phrase -->
     <p><?php echo $number . ' : On y arrive presque'; ?></p>
     <!-- On incrémente la variable de 1 à chaque tour -->
     <?php $number++;
   }
     ?>
  </body>
</html>
