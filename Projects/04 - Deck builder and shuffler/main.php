<?php

//Building a deck of playing cards

$suits = array (
    "Spades", "Hearts", "Clubs", "Diamonds"
);
 
$faces = array (
    "Two", "Three", "Four", "Five", "Six", "Seven", "Eight",
    "Nine", "Ten", "Jack", "Queen", "King", "Ace"
);


//Building a deck array
$deck = array();
 
foreach ($suits as $suit) {
    foreach ($faces as $face) {
        $deck[] = array ("face"=>$face, "suit"=>$suit);
    }
}

//Shuffling the deck and drawing a random card  

shuffle($deck);
 
$card = array_shift($deck);
 
echo $card['face'] . ' of ' . $card['suit'];

?>