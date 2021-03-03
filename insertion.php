<?php 


//ouverture d'une connection à la bdd liste
$objectpdo = new PDO('mysql:host=localhost;dbname=liste','adam', 'azerty');

//preparation de la requette d'insertion (SQL)
$pdostatement = $objectpdo->prepare('INSERT INTO ma_liste (content) VALUES (:toto)'); 

//Lisaison de chaque marqueur à une valeur
$pdostatement->bindValue('toto',$_POST['todo']);

$insertvalid = $pdostatement->execute();


?>



