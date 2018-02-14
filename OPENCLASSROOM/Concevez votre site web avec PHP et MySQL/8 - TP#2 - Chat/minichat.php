<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Minichat</title>
    </head>

    <body>
    
    <form action="minichat_post.php" method="post">
        <p>
        <label for="pseudo">Pseudo : </label> <input type="text" name="pseudo" id="pseudo"> <br>
        <label for="message">Message : </label> <input type="text" name="message" id="message"> <br>

        <input type="submit" value="Envoyer">
	</p>
    </form>

    <?php
    // Connexion à la base de données
    try
    {
        $bdd = new PDO('mysql:host=localhost;dbname=minichat;charset=utf8', 'root', '');
    }
    catch(Exception $e)
    {
            die('Erreur : '.$e->getMessage());
    }

    // Récupération des 10 derniers messages
    $reponse = $bdd->query('SELECT pseudo, message FROM data ORDER BY ID DESC LIMIT 0, 10');

    // Afficher les messages (utiliser htmlspecialchars pour éviter les injections sql)
    while ($donnees = $reponse->fetch())
    {
        echo '<p><strong>' . htmlspecialchars($donnees['pseudo']) . '</strong> : ' . htmlspecialchars($donnees['message']) . '</p>';
    }

    $reponse->closeCursor();

    ?>
    </body>
</html>