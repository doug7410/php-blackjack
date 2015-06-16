<?php

class Deck
{


    public $cards = [];

    function __construct()
    {
        $values = [2,3,4,5,6,7,8,9,10,'J','Q','K','A'];
        $suites = ['hearts', 'clubs', 'spades', 'diamonds'];
        foreach($suites as $suite)
        {
            foreach($values as $value)
            {
                array_push($this->cards, new Card($value, $suite));
            }
        }
    }

    /**
     * @return array
     */
    public function getCards()
    {
        return $this->cards;
    }


    public function count()
    {
        return count($this->cards);
    }
}
