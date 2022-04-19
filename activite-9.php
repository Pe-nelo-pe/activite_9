<?php

$nums = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13];
$suites =["♦", "♣", "♥", "♠"];
$deck = [];

for ($i = 0; $i < count($suites); $i++){
    for ($j = 0; $j < count($nums); $j++){
        array_push($deck, $nums[$j]." ".$suites[$i]); 
    }
}

$sub_deck1 = array_slice($deck, 0, 26);
$sub_deck2 = array_slice($deck, 26, 52);
$shuffle_deck = [];

for ($i = 0; $i < 26; $i++){
    array_push($shuffle_deck, $sub_deck1[$i]);
    array_push($shuffle_deck, $sub_deck2[$i]);
    }

    for ($i = 0; $i < 52; $i++){
        echo $shuffle_deck[$i] . " ";
        if (($i+1)%13==0) {
            echo "<br>";
        }    
    };
