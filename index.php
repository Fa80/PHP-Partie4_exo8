<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
  <meta charset="utf-8">
  <title>Partie4_Exercice 8</title>
</head>
<!-- Faire une fonction qui prend en paramètre trois nombres et qui renvoit la somme de ces nombres.
Tous les paramètres doivent avoir une valeur par défaut. -->
<body>
  <?php
  $number = rand(1, 100);
  $number2 = rand(1, 100);
  $number3 = rand(1, 100);
  function numbers($number, $number2, $number3){
    return $number + $number2 + $number3;
  }
  echo numbers ($number, $number2, $number3);
  ?>
</body>
</html>
