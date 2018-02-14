<?php

// 1.Building a deck of playing cards

$suits = array (
    "Spades", "Hearts", "Clubs", "Diamonds"
);
 
$faces = array (
    "Two", "Three", "Four", "Five", "Six", "Seven", "Eight",
    "Nine", "Ten", "Jack", "Queen", "King", "Ace"
);


// 2.Building a deck array
$deck = array();
 
foreach ($suits as $suit) {
    foreach ($faces as $face) {
        $deck[] = array ("face"=>$face, "suit"=>$suit);
    }
}


// 3.Drawing two hands of five cards each
$hands = array(1 => array(), 2=>array());
 
for ($i = 0; $i < 5; $i++) {
    $hands[1][] = implode(" of ", array_shift($deck));
    $hands[2][] = implode(" of ", array_shift($deck));
}

// 4.Calculating the odds of drawing specific card
function calculate_odds($draw, $deck) {
    $remaining = count($deck);
    $odds = 0;
    foreach ($deck as $card) {
        if (  ($draw['face'] == $card['face'] && $draw['suit'] == 
$card['suit'] ) ||
              ($draw['face'] == '' && $draw['suit'] == $card['suit'] ) ||
              ($draw['face'] == $card['face'] && $draw['suit'] == '' ) ) {
            $odds++;
        }
    }
    return $odds . ' in ' . $remaining;
}
$draw = array('face' => 'Ace', 'suit' => 'Spades');
 
echo implode(" of ", $draw) . ' : ' . calculate_odds($draw, $deck);

$draw = array('face' => '', 'suit' => 'Spades');
$draw = array('face' => 'Ace', 'suit' => 'Clubs');


?>