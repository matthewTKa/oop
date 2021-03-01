<?php

include $_SERVER['DOCUMENT_ROOT'] . '/4-math_modeling/Game.php';

$arr = [
    [3,2,5,10],
    [1,5,100,9],
    [13,32,33,9]
];

$game = new Game($arr,1);

$game->maximin();
?>



