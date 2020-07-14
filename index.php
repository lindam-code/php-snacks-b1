<?php
// Snack 1
// Creiamo un array 'matches' contenente altri array i quali rappresentano
// delle partite di basket di un’ipotetica tappa del calendario. Ogni array
// della partita avrà una squadra di casa e una squadra ospite, punti fatti
// dalla squadra di casa e punti fatti dalla squadra ospite.
// Stampiamo a schermo tutte le partite con questo schema:
// Olimpia Milano - Cantù | 55-60
$array_partite = [
  [
    'casa' => 'ferrara',
    'ospite' => 'bologna',
    'punti_casa' => 65,
    'punti_ospite' => 60,
  ],
  [
    'casa' => 'roma',
    'ospite' => 'palermo',
    'punti_casa' => 75,
    'punti_ospite' => 100,
  ],
  [
    'casa' => 'sassari',
    'ospite' => 'cagliari',
    'punti_casa' => 173,
    'punti_ospite' => 171,
  ]
];
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Snaks b1</title>
  </head>
  <body>
    <!-- Stampo a schermo i risultati delle partite -->
    <h1>Risultati partite giocate</h1>
    <?php for ($i=0; $i <  count($array_partite); $i++) { ?>
      <?php $this_partita = $array_partite[$i]; ?>
      <ul>
       <li>
         <?php echo $this_partita[casa] ?> - <?php echo $this_partita[ospite] ?>
         /
         <?php echo $this_partita[punti_casa] ?> - <?php echo $this_partita[punti_ospite] ?>
       </li>
      </ul>
    <?php } ?>
  </body>
</html>
