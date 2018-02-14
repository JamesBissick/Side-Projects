<?php
    // Connexion à la base de données
    try {
        $bdd = new PDO('mysql:host=localhost;dbname=blog;charset=utf8', 'root', '');
    }
    catch(Exception $e) {
            die('Erreur : '.$e->getMessage());
    }

    // Récupérer les 5 derniers articles (ordre par ID descendant)
    $reponse = $bdd->query('SELECT ID, author, title, content, creation_date FROM articles ORDER BY ID DESC LIMIT 0, 5');

    // Afficher la dates de création des messages, les pseudo suivi des messages (utiliser htmlspecialchars pour éviter les injections sql)
    // A noter que j'utilise nl2br pour garder ma mise en page initiale grâce aux retours à la ligne
    while ($donnees = $reponse->fetch()) {
        echo '<h2> ' . htmlspecialchars($donnees['title']) . '</h2><br><p class="articles">' . 
        nl2br(htmlspecialchars($donnees['content'])) . '</p><br>' . '<p class="author"><em>' . 
        'Posted by: ' . htmlspecialchars($donnees['author']) .' the -'. 
        htmlspecialchars($donnees['creation_date']) . '</em></p>'; 
?>
        <a href='comments.php <?php echo $donnees['id']; ?>' class='read_comments'>Read Comments</a>
    

<?php
    }
    // Fermer la boucle
    $reponse->closeCursor();
?> 