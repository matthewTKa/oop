<?php

include $_SERVER['DOCUMENT_ROOT'] . '/4-math_modeling/Game.php';

$arr = [
    [1,2,5,1],
    [22,11,23,1],
    [3,3,3,1]
];

$game = new Game($arr,1);

$game->maximin();
?>



