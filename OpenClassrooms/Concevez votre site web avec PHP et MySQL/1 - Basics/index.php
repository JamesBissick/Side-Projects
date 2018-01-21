<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
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
            print "----------------------------------------------";
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
            print "----------------------------------------------";
            print "<br><br>";

            // Arrays

            $prenom = array("Jean-Michel","Christophe","Kevin","Jason","Dylan","Jennifer","Donovan");
            print "$prenom[3]";

            // Associative Arrays (associate (a) value(s) to a value inside of it)

            $id = array(
                'Prenom' => "Patty",
                'Nom' => "Smith",
                'Age' => 47);
            
            print_r ($id); // print_r let you print the chosen var literally, in it's entirety
            
            print "<br><br>";
            
            // Browse through an array

            $pays = array(
                'Europe' => 'France','Germany','UK',
                'North America' => 'Canada','USA',
                'Asia' => 'China','South Korea','Japan'
            );
            foreach ($pays as $region => $elements) { // we use foreach instead of for loop cause it allows us to browse associative arrays
                print $region . ':' . $elements . '<br>';
            }

            print "<br><br>";

            // Searching in an array

            // -- array_key_exists : pour vérifier si une clé existe dans l'array ;
            if (array_key_exists('Europe',$pays)){ 
                print 'Key "Europe" exists in the array.';
            } else {
                print 'Key "Europe" doesn\'t exist in the array';
            };

            print "<br><br>";
            print "----------------------------------------------";
            print "<br><br>";

            // -- in_array : pour vérifier si une valeur existe dans l'array ;
            if (in_array('China',$pays)){
                print 'Value "China" is in the array.';
            } else {
                print 'Value "China" is not in the array.';
            }

            print "<br><br>";
            print "----------------------------------------------";
            print "<br><br>";

            // -- array_search : pour récupérer la clé d'une valeur dans l'array.
            $fruits = array ('Banane', 'Pomme', 'Poire', 'Cerise', 'Fraise', 'Framboise');

            $position = array_search('Fraise', $fruits);
            echo '"Fraise" se trouve en position ' . $position . '<br />';

            $position = array_search('Banane', $fruits);
            echo '"Banane" se trouve en position ' . $position;
            print "<br><br>";
            print "----------------------------------------------";

            print "<br><br>";

            // -- strlen: longueur d'une chaîne

<<<<<<< HEAD
            $phrase = 'A sea turtle’s sex is determined by the temperature of the sand it’s born in; 
            rising global temperatures mean that female green sea turtles now outnumber males 116 to 1.';

            print $phrase;
=======
            $phrase = 'A sea turtle’s sex is determined by the temperature of the sand it’s born in 
            rising global temperatures mean that female green sea turtles now outnumber males 116 to 1.';

            print $phrase;
            print "<br>";
            print "The sentence above has " . strlen($phrase) . " characters.";

            print "<br><br>";
            
            // -- str_replace: rechercher et remplacer

            $ma_variable = str_replace('b', 'p', 'bim bam boum');
            echo $ma_variable;

            print "<br><br>";

            // -- str_shuffle: mélanger les lettres

            $chaine = "I am a sentence and I'm about to be mixed.";
            $chaine = str_shuffle($chaine);
            echo $chaine;

            print "<br><br>";


            // -- Enregistrons les informations de date dans des variables

            $jour = date('d');
            $mois = date('m');
            $annee = date('Y');

            $heure = date('H');
            $minute = date('i');

            print "<br><br>";

            // -- Calculer le volume d'un cône

            // ---- Ci-dessous, la fonction qui calcule le volume du cône
            function VolumeCone($rayon, $hauteur)
            {
            $volume = $rayon * $rayon * 3.14 * $hauteur * (1/3); // calcul du volume
            return $volume; // indique la valeur à renvoyer, ici le volume
            }

            $volume = VolumeCone(3, 1);
            echo 'Le volume d\'un cône de rayon 3 et de hauteur 1 est de ' . $volume;
>>>>>>> 9342ce1f00e44b6fa4b9c1e7683689677931babb
            

        ?>
        
        <br><br><br><br><br><br>
        <p>Aujourd'hui nous sommes le <?php echo date('d/m/Y h:i:s'); ?>.</p>

    </body>
</html>
