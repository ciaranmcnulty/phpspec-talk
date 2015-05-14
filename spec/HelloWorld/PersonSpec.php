<?php

namespace spec\HelloWorld;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class PersonSpec extends ObjectBehavior
{
    function let()
    {
        $this->beConstructedWith('Bob');
    }

    function it_returns_the_name_it_is_created_with()
    {
        $this->getName()->shouldReturn('Bob');
    }

    function it_returns_its_new_name_when_it_has_been_renamed()
    {
        $this->changeNameTo('Alice');

        $this->getName()->shouldReturn('Alice');
    }
}
