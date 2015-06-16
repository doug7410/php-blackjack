<?php

namespace spec;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class CardSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $suite = 'spades';
        $value = '10';
        $this->beConstructedWith($suite, $value);
        $this->shouldHaveType('Card');
    }
}
