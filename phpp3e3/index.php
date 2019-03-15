<?php
// on initialise les variables
$numberA = 100;
$numberB = rand(1, 101); // on initialise la variable avec un nombre entre 1 inclus et 101 non inclus
?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8" />
    <title>PHP - PARTIE3 - EXO3</title>
  </head>
  <body>
  <?php
  //tant que le la variable A est <= à 10 on affiche le résultat de a*b et on décrémente le A de 1
  while ($numberA > 10)
  {
    ?><p><?php echo 'résultat :' . $numberA * $numberB;?></p>
     <?php
    $numberA--;
  }
   ?>
  </body>
</html>

<!-- < ?php
$numberA = 100;
$numberB = rand(1, 101);
while ($numberA <=10)
{
  echo $numberA * $numberB;
  $numberA-;
}
 ?> -->
