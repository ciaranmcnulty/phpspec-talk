<?php

namespace spec\PhpLondon\HelloWorld;

use PhpLondon\HelloWorld\Logger;
use PhpLondon\HelloWorld\Person;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class GreeterSpec extends ObjectBehavior
{
    function let(Person $bob, Logger $logger) {
        $this->beConstructedWith($logger);
        $bob->getName()->willReturn('Bob');
    }

    function it_greets_by_saying_hello()
    {
        $this->greet()->shouldReturn('Hello');
    }

    function it_greets_people_by_name(Person $bob)
    {
        $this->greet($bob)->shouldReturn('Hello, Bob');
    }

    function it_logs_the_greetings_it_makes(Person $bob, Logger $logger)
    {
        $this->greet($bob);

        $logger->log('Hello, Bob')->shouldHaveBeenCalled();
    }
}
