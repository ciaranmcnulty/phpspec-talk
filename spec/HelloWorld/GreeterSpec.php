<?php

namespace spec\HelloWorld;

use HelloWorld\Logger;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;
use HelloWorld\Named;

class GreeterSpec extends ObjectBehavior

{
    function let(Named $named, Logger $logger)
    {
        $this->beConstructedWith($logger);
        $named->getName()->willReturn('Bob');
    }

    function it_greets_by_saying_hello()
    {
        $this->greet()->shouldReturn('Hello');
    }

    function it_greets_named_things_by_name(Named $named)
    {
        $this->greet($named)->shouldReturn('Hello, Bob');
    }

    function it_logs_the_greetings(Named $named, Logger $logger)
    {
        $this->greet($named);
        $logger->log('Hello, Bob')->shouldHaveBeenCalled();
    }
}
