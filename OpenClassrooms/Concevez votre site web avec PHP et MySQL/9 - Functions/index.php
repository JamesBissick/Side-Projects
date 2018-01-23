<?php

//Putting every game's name in Uppercase
$bdd = new PDO('mysql:host=localhost;dbname=jeuxvideo;charset=utf8', 'root', '');
$reponse = $bdd->query('SELECT UPPER(nom) AS nom_maj FROM jeux_video');


while ($donnees = $reponse->fetch()) {
	echo $donnees['nom_maj'] . '<br />';
}

$reponse->closeCursor();

//Average price of game list
$reponse = $bdd->query('SELECT AVG(prix) AS average_price FROM jeux_video');

$donnees = $reponse->fetch();

echo 'Average price of every games is ' . $donnees['average_price'] . '€.';


$reponse->closeCursor();

?>