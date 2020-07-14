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

// Snack 2
// Passare come parametri GET name, mail e age e verificare
// (cercando i metodi che non conosciamo nella documentazione) che:
// 1. name sia più lungo di 3 caratteri,
// 2. che mail contenga un punto e una chiocciola
// 3. e che age sia un numero.
// Se tutto è ok stampare “Accesso riuscito”, altrimenti “Accesso negato”
$nome = $_GET['name'];
$mail = $_GET['email'];
$eta = $_GET['age'];
$risultato_accesso = '';
if (empty($nome) || empty($mail) || empty($eta)) {
  $risultato_accesso = 'Accesso negato.';
} elseif (strlen($nome) <= 3) {
  $risultato_accesso = 'Accesso negato.';
} elseif (strpos($mail,'@') === false || strpos($mail,'.') === false) {
  $risultato_accesso = 'Accesso negato.';
} elseif (is_numeric($eta) === false) {
  $risultato_accesso = 'Accesso negato.';
} else {
  $risultato_accesso = 'Accesso riuscito.';
}
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
         <?php echo $this_partita['casa'] ?> - <?php echo $this_partita['ospite'] ?>
         /
         <?php echo $this_partita['punti_casa'] ?> - <?php echo $this_partita['punti_ospite'] ?>
       </li>
      </ul>
    <?php } ?>

    <!-- Stampo a schermo se l'utente ha le credenziali per entrare -->
    <h2>Accedi al sito</h2>
    <p>Scrivi nome, mail ed età nell'url per accedere</p>
    <p> <?php echo $risultato_accesso ?> </p>
  </body>
</html>
