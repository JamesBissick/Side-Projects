<?php
// Connexion à la bdd minichat

$bdd = new PDO('mysql:host=localhost;dbname=minichat;charset=utf8', 'root', '');

// Enregistrer les messages dans le tableau data
$req = $bdd->prepare('INSERT INTO data (pseudo, message) VALUES(?, ?)');
$req->execute(array($_POST['pseudo'], $_POST['message']));

// Redirection du visiteur vers la page du minichat
header('Location: minichat.php');
?>