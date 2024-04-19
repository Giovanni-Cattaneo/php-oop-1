<?php

require_once __DIR__ . '/Production.php';

class Movies extends Production
{

    function __construct(public int $profits, public int $length)
    {
    }
}
