<?php

namespace App;

use ReflectionClass;

#[ExampleAttribute("message")]
class FooExample
{
    #[ExampleAttribute("message")]
    public const FOO = 'foo';

    #[ExampleAttribute("message")]
    public $x;

    #[ExampleAttribute("message")]
    public function foo(#[ExampleAttribute("message")] $bar
    ) {

    }
}


$f = new FooExample();

$reflectionClass = new ReflectionClass($f);
$attributes = $reflectionClass->getAttributes();

foreach ($attributes as $attribute) {
    var_dump($attribute->getArguments());
    var_dump($attribute->getName());
    var_dump($attribute->getTarget());
    var_dump($attribute->isRepeated());
    $attribute->newInstance();
}
