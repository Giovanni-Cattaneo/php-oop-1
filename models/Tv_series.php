<?php

require_once __DIR__ . '/Production.php';

class Tv_series extends Production
{

    function __construct(public int $seasons)
    {
    }
}
