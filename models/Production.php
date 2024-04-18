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
