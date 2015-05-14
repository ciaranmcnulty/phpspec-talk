<?php

namespace HelloWorld;

class Greeter
{
    private $logger;

    public function __construct(Logger $logger)
    {
        $this->logger = $logger;
    }

    public function greet(Named $named = null)
    {
        $greeting = 'Hello';
        if ($named) { $greeting .= ', ' . $named->getName(); }

        $this->logger->log($greeting);

        return $greeting;
    }
}