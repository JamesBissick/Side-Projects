<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="./css/styles.css">
    <title>Blog: Planet News!</title>
</head> 
    <header>
        <h1>Planet News</h1>
        <div class="headband"></div>
    </header>

    <body>
        <?php
            // Connexion à la base de données
            try
            {
                $bdd = new PDO('mysql:host=localhost;dbname=blog;charset=utf8', 'root', '');
            }
            catch(Exception $e)
            {
                    die('Erreur : '.$e->getMessage());
            }

            // Récupération du billet
            $req = $bdd->prepare('SELECT id, title, content, creation_date FROM articles WHERE id = ?');
            $req->execute(array($_GET['ID_articles']));
            $donnees = $req->fetch();
        ?>
        <h2>Commentaires</h2>

        <?php
        $req->closeCursor();

        // Récupération des commentaires
        $req = $bdd->prepare('SELECT author, comments, date_comment FROM comments WHERE ID_articles = ? ORDER BY date_comment');
        $req->execute(array($_GET['ID_articles']));

        while ($donnees = $req->fetch())
        {
        ?>
        <p><strong><?php echo htmlspecialchars($donnees['athor']); ?></strong> le <?php echo $donnees['date_comment']; ?></p>
        <p><?php echo nl2br(htmlspecialchars($donnees['comment'])); ?></p>
        <?php
        }
        $req->closeCursor();
        ?>
    </body>
</html>