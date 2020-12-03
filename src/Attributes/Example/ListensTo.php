<?php

#[Attribute]
class ListensTo
{
    public string $event;

    public function __construct(string $event)
    {
        $this->event = $event;
    }

    public function test(): void{

    }
}