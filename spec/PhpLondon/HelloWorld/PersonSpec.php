<?php

namespace spec\PhpLondon\HelloWorld;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class PersonSpec extends ObjectBehavior
{
    function let()
    {
        $this->beConstructedWith('Alice');
    }

    function it_returns_the_name_it_is_created_with()
    {
        $this->getName()->shouldReturn('Alice');
    }

    function it_returns_its_new_name_when_the_name_has_been_changed()
    {
        $this->changeNameTo('Bob');

        $this->getName()->shouldReturn('Bob');
    }
}
