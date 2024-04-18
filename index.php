<?php

class Production
{
    public $title;
    public $language;
    public $score;
}

$matrix = new Production();

$matrix->title = 'The Matrix';

var_dump($matrix);

$cast_away = new Production();

$the_martian = new Production();

$it = new Production();
