<?php

class Production
{
    // public $title;
    // public $language;
    // public $score;

    function __construct(public string $title, public string $language, public int $score)
    {
        $this->title = $title;
        $this->language = $language;
        $this->score = $score;
    }

    function isGood($score)
    {
        $this->score = $score;
        if ($score > 7) {
            echo "$this->title è un buon film";
        } else {
            echo "$this->title Non è un buon film mi dispiace";
        }
    }
}
