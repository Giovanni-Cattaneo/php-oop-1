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

    function isGood($score)
    {
        $this->score = $score;
        if ($score > 7) {
            var_dump("$this->title è un buon film");
        } else {
            var_dump("$this->title Non è un buon film mi dispiace");
        }
    }
}

$matrix = new Production('The Matrix', 'English', '9/10');

$matrix->isGood($matrix->score);

// $matrix->title = 'The Matrix';

// $matrix->language = 'English';

// $matrix->score = '8/10';

$cast_away = new Production('Cast Away', 'English', '8/10');

var_dump($matrix);

var_dump($cast_away);

// $the_martian = new Production();

// $it = new Production();
