<?php
//ouverture d'une connection à la bdd liste
$objectpdo = new PDO('mysql:host=localhost;dbname=liste','adam', 'azerty');

$pdostate = $objectpdo->prepare('SELECT *FROM liste');


//éxécution de la requête
$executeok = $pdoState->execute();

//
$contacts = $pdostate->fetchAll();

foreach ($listes as $liste){

echo('<li> </li>');

}
    





?>