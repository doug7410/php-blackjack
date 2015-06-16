<?php


class Game
{
    private $deck;

    /**
     * @param Deck $deck
     */
    function __construct(Deck $deck)
    {
        $this->deck = $deck;
    }
}
