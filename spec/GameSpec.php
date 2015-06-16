<?php

namespace spec;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;
use Deck;

class GameSpec extends ObjectBehavior
{
    function it_is_initializable(Deck $deck)
    {
        $this->beConstructedWith($deck);
        $this->shouldHaveType('Game');
    }

}
