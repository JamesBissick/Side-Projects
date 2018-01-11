<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>Ceci est une page HTML de test</title>
    </head>
    <body>
        <h1>Ma page web</h1>
        
        <p>
            Cette page contient <strong>uniquement</strong> du code HTML.<br />
            Voici quelques petits tests :
        </p>
        
        <ul>
        <li style="color: blue;">Texte en bleu</li>
        <li style="color: red;">Texte en rouge</li>
        <li style="color: green;">Texte en vert</li>
        </ul>

        <?php echo "Ceci est du texte PHP <br>"; ?>
        <?php echo "Ceci est du texte <strong>PHP</strong><br>"; ?>
        <?php echo "Cette ligne a été écrite \"uniquement\" en PHP.<br>"; ?>

        <?php

            // Test site pour enfant
            $age = 8;
            
            if ($age <= 12) {
                echo "Salut gamin !<br>";
                $autorisation = true;
            } else {
                echo "Tu es trop vieu!";
                $autorisation = false;
            }
            print "Ce site est consacré aux enfants. Vous avez $age ans.<br>";

            print "Avez-vous l'autorisation de rentrer sur ce site? ";

            if($autorisation === true) {
                $autorisation = "Oui!<br>";
                print "Réponse: $autorisation";
                print "Bienvenu petit nouveau :o).<br>";
                
            } else {
                $autorisation = "Non!<br>";
                print "Réponse: $autorisation";
                print "Au revoir.";
                
            }
            print "<br><br>";
            

            // Test program cookies
            $price = 15;
            
            if ($price <= 12) {
                print "Yes, these cookies are for $price$ only!";
            } else {
                print "Oh sorry, the sale is not available anymore. These cookies will cost you $price$.";
            }
            print "<br><br>";

            // L'épreuve des notes
            $note = 20;

            switch($note) //On indique sur qu'elle variable on travaille
            {
                case 0:
                    echo "$note! Tu es vraiment nul! omagad";
                break;

                case 5:
                    echo "$note! Tu n'as pas compris grand chose..";
                break;

                case 10:
                    echo "$note! Pile poil la moyenne! Peut mieux faire ;)";
                break;
            
                case 15:
                    echo "$note! Bravo, trés bonne note!";
                break;

                case 20:
                    echo "$note! Mes félicitations, tu as tout compris!";
                break;

                defaut:
                    echo "Entres ta notes!";
            }

            print "<br><br>";

            // Arrays

            

            
        ?>
        
        
        <p>Aujourd'hui nous sommes le <?php echo date('d/m/Y h:i:s'); ?>.</p>

    </body>
</html>
