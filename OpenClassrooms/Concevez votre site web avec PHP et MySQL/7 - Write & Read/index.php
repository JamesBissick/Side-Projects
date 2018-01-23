<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Document</title>
    </head>
    <body>
        <?php
        $monfichier = fopen('./files/fichier.txt', 'r+');
        
        $pages_vues = fgets($monfichier); // On lit la première ligne (nombre de pages vues)

        $pages_vues ++; // On augmente de 1 ce nombre de pages vues
        fseek($monfichier, 0); // On remet le curseur au début du fichier
        fputs($monfichier, $pages_vues); // On écrit le nouveau nombre de pages vues
        
        fclose($monfichier);
        
        echo '<p>Cette page a été vue ' . $pages_vues . ' fois !</p>';
        ?>
    </body>
</html>