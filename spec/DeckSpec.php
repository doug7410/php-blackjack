<?php

namespace spec;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;
use Card;

class DeckSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType('Deck');
    }

    function it_has_an_array_of_cards()
    {
        for($i=0; $i<$this->getWrappedObject()->count(); $i++)
        {
            $this->getCards()[$i]->shouldHaveType('Card');
        }
        $this->getCards()->shouldBeArray();
    }

    function it_is_initialized_with_52_cards_of_the_correct_values_and_suites()
    {
        $values = [2,3,4,5,6,7,8,9,10,'J','Q','K','A'];
        $suites = ['hearts', 'clubs', 'spades', 'diamonds'];
        $cards = [];
        foreach($suites as $suite)
        {
            foreach($values as $value)
            {
                $cards[] = new Card($value, $suite);
            }
        }
        $this->getCards()->shouldBeLike($cards);
        $this->getCards()->shouldHaveCount(52);
    }




}
