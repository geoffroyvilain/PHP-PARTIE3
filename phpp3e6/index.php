<?php
$number = 20;
 ?>
 <!DOCTYPE html>
 <html lang="fr" dir="ltr">
   <head>
     <meta charset="utf-8" />
     <title>PHP - PARTIE 3 - EXO 6</title>
   </head>
   <body>
     <h1>PHP - PARTIE 3 - EXO 6</h1>
     <p><strong>En allant de 20 à 0 avec un pas de 1, afficher le message C'est presque bon.</strong></p>
     <?php
     while ($number >= 0) { ?>
       <p><?php echo 'c\'est presque bon ' . $number; ?></p>
       <?php $number--;
     }
      ?>
   </body>
 </html>
