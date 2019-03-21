<?php
$number = 1;
?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
  <meta charset="utf-8" />
  <title>PHP - PARTIE 3 - EXO 4</title>
</head>
<body>
  <h1>PHP - PARTIE 3 - EXO 4</h1>
  <div><strong>
    <p>
      Créer une variable et l'initialiser à 1.<br />
      Tant que cette variable n'atteint pas 10, il faut :
    </p>
    <li>L'afficher</li>
    <li>L'incrementer de la moitié de sa valeur</li>
  </strong></div>

  <?php
  while ($number <10) {
    ?>
    <p>Résultat : <?php echo $number; ?></p>
    <!-- ici, on incrémente la variable number de la moitié de sa valeur car la condition n'est pas réunie -->
    <?php $number = $number + ($number / 2);
// on peut aussi faire $number += $number/2;
  }
  ?>
</body>
</html>
