<?php $count = 0; ?>
 <!DOCTYPE html>
 <html lang="fr" dir="ltr">
   <head>
     <meta charset="utf-8" />
     <title>PHP - PARTIE 3 - EXO 1</title>
   </head>
   <body>
     <h1>PHP - PARTIE 3 - EXO 1</h1>
  <p>
      Créer une variable et l'initialiser à 0.
      Tant que cette variable n'atteint pas 10, il faut :
  </p>
  <p>l'afficher et l'incrementer</p>
    <?php
    //while = tant que : donc tant que la var est inférieur à 0, on incrémente de 1.
    while ($count <= 10)
    { ?>
      <p><?= $count; ?></p>
      <?php
      $count++;
    }
?>
   </body>
 </html>
