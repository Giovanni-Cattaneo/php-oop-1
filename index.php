<?php

class Production
{
    public $title;
    public $language;
    public $score;

    function __construct($title, $language, $score)
    {
        $this->title = $title;
        $this->language = $language;
        $this->score = $score;
    }
}

$matrix = new Production('The Matrix', 'English', '8/10');

// $matrix->title = 'The Matrix';

// $matrix->language = 'English';

// $matrix->score = '8/10';


var_dump($matrix);

// $cast_away = new Production();

// $the_martian = new Production();

// $it = new Production();
