<?php
//ouverture d'une connection à la bdd liste
$objectpdo = new PDO('mysql:host=localhost;dbname=liste','adam', 'azerty');

$pdoStat = $objectpdo->prepare('SELECT *FROM ma_liste');


//éxécution de la requête
$executeok = $pdoStat->execute();

//récupération des résultats
$listes = $pdoStat->fetchAll();


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <ul>
        <?php foreach ($listes as $liste): ?>
            <li>
                <?=$liste['content'] ?>
            </li>
        <?php endforeach ?>
    </ul>
</body>
</html>
