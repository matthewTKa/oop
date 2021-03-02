<?php

include $_SERVER['DOCUMENT_ROOT'] . '/4-math_modeling/Game.php';

$arr = [
    [2,3,5,9],
    [-2,-4,-2,7],
    [7,5,0,-3],
    [-1,6,1,2],
    [6,9,6,3]
];

$game = new Game($arr,1);

$game->maximin();

$game->minimax();
?>



