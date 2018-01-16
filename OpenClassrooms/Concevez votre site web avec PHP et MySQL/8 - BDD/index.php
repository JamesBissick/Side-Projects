<?php
try
{
	$bdd = new PDO('mysql:host=localhost;dbname=test;charset=utf8', 'root', '');
}
catch(Exception $e)
{
        die('Erreur : '.$e->getMessage());
}

// On ajoute une entrée dans la table jeux_video
$bdd->exec('UPDATE jeux_video SET prix = 10, nbre_joueurs_max = 32 WHERE ID = 51');
$reponse = $bdd->query('SELECT nom FROM jeux_video') or die(print_r($bdd->errorInfo()));

echo 'Le jeu a bien été ajouté !';

?>