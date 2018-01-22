<?php
$reponse = $bdd->query('SELECT AVG(prix) AS prix_moyen FROM jeux_video');

$donnees = $reponse->fetch();
echo $donnees['prix_moyen'];

$reponse->closeCursor();

?>

<!-- 
//--- AVG : calculer la moyenne
SELECT AVG(prix) AS prix_moyen FROM jeux_video

//--- SUM : additionner les valeurs
SELECT SUM(prix) AS prix_total FROM jeux_video WHERE possesseur='Patrick'

//--- MAX : retourner la valeur maximale
SELECT MAX(prix) AS prix_max FROM jeux_video

//--- MIN : retourner la valeur minimale
SELECT MIN(prix) AS prix_min FROM jeux_video

//--- COUNT : compter le nombre d'entrées
SELECT COUNT(*) AS nbjeux FROM jeux_video
-->


<!-- GROUP BY : grouper des données
En revanche, ce qui pourrait avoir du sens, ce serait de demander le prix moyen des jeux pour chaque 
console ! Pour faire cela, on doit utiliser un nouveau mot-clé: GROUP BY

//SELECT AVG(prix) AS prix_moyen, console FROM jeux_video GROUP BY console

-->