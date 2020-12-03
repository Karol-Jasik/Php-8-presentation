<?php

namespace App;

use Attribute;

#[Attribute]
class ExampleAttribute
{
    private string $message;

    /**
     * ExampleAttribute constructor.
     * @param string $message
     */
    public function __construct(string $message)
    {
        $this->message = $message;
    }

    /**
     * @return string
     */
    public function getMessage(): string
    {
        return $this->message;
    }
}