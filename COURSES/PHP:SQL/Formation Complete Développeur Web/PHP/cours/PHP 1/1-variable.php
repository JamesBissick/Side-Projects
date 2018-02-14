
<?php
    $varA = 7;
    $varB = 34;

    // Fonction de démonstration de l'usage des variables en dehors du scope local
    function printVar() {
        global $varA; // Permet de récupérer une var globale en dehors ma function locale
        echo $varA . '<br>';
        // Super globale:
        echo $GLOBALS['varB'];
    }
    // Ne pas oublie d'appeler ma fonction pour l'exécuter!!
    printVar();

    echo '<br>';

    // Example 2
    function MultiplyCD() {
        $varC = 8;
        $varD = 13;
        echo "$varC x $varD = " . $varC * $varD;
    }
    MultiplyCD();

    echo '<br><br>Variable statique:<br>';

    // Fonction avec variable statique
    function IncrementAndPrint() {
        static $varE = 7;
        $varE++;
        echo $varE . '<br>';
    }
    IncrementAndPrint();
    IncrementAndPrint();
    IncrementAndPrint();
?>