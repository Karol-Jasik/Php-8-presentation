<?php

class StringableInterface implements Stringable
{
    public function __toString(): string
    {
        return '';
    }
}

function test(string|Stringable $string)
{

}