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
     /* tant que la variable est supérieur ou égal à 0 la boucle continue
      ici on initialise la variable à 20 et on décrémente de 1
     d ou je pars; ou je vais; par combien */
     for ($number = 20; $number >= 0; $number--) { ?>
       <p><?php echo 'c\'est presque bon ' . $number; ?></p>
       <?php
     }
      ?>
   </body>
 </html>
