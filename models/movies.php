<?php

require_once __DIR__ . '/Production.php';

class Movies extends Production
{

    function __construct(public string $title, public string $language, public int $score, public Genre $genre, public int $profits, public int $length)
    {
        parent::__construct($title, $language, $score, $genre);
    }
}
