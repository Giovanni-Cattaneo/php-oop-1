<?php

include './Production.php';

$matrix = new Production('The Matrix', 'English', 9, new Genre('action', 'lorem ipsum dolor lorem ipsum dolor'));

$cast_away = new Production('Cast Away', 'English', 8, new Genre('action', 'lorem ipsum dolor lorem ipsum dolor'));

$schindler_list = new Production('Schindler List', 'English', 9, new Genre('action', 'lorem ipsum dolor lorem ipsum dolor'));

$lord_of_the_rings = new Production('Lord Of The Rings', 'English', 10, new Genre('action', 'lorem ipsum dolor lorem ipsum dolor'));

$star_wars = new Production('Star Wars', 'English', 8, new Genre('action', 'lorem ipsum dolor lorem ipsum dolor'));

$in_vacanza_su_marte = new Production('In Vacanza Su Marte', 'Italiano', 2, new Genre('action', 'lorem ipsum dolor lorem ipsum dolor'));


// $matrix->isGood($matrix->score);

// $matrix->title = 'The Matrix';

// $matrix->language = 'English';

// $matrix->score = '8/10';



// var_dump($matrix);

// var_dump($cast_away);

// $the_martian = new Production();

// $it = new Production();