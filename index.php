<?php

class Production
{
    public $title;
    public $language;
    public $score;
}

$matrix = new Production();

$matrix->title = 'The Matrix';

$matrix->language = 'English';

$matrix->score = '8/10';


var_dump($matrix);

$cast_away = new Production();

$the_martian = new Production();

$it = new Production();
