<?php

namespace spec\PhpLondon\HelloWorld;

use PhpLondon\HelloWorld\Person;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class GreeterSpec extends ObjectBehavior
{
    function it_greets_with_hello()
    {
        $this->greet()->shouldReturn('Hello!');
    }

    function it_greets_people_by_name(Person $person)
    {
        $person->getName()->willReturn('Bob');

        $this->greet($person)->shouldReturn('Hello, Bob!');
    }
}
