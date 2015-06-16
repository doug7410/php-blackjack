<?php

class Card
{
    public $suite;
    public $value;

    function __construct($value, $suite)
    {
        $this->value = $value;
        $this->suite = $suite;
    }
}
