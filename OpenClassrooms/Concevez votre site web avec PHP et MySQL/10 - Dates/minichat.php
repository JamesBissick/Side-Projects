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
        <label for="messages">Message : </label> <input type="text" name="messages" id="messages"> <br>

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

    // Récupérer les 10 derniers messages (ordre par ID descendant)
    $reponse = $bdd->query('SELECT pseudo, messages, dates FROM data ORDER BY ID DESC LIMIT 0, 10');

    // Afficher la dates de création des messages, les pseudo suivi des messages (utiliser htmlspecialchars pour éviter les injections sql)
    while ($donnees = $reponse->fetch())
    {
        echo '<p>' . htmlspecialchars($donnees['dates']) . '<strong> ' . htmlspecialchars($donnees['pseudo']) . '</strong> : ' . htmlspecialchars($donnees['messages']) . '</p>';
    }

    $reponse->closeCursor();

    ?>
    </body>
</html>