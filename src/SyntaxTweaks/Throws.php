<?php

/** @noinspection ALL */

$callable = static fn() => throw new Exception();

$value = $nullableValue ?? throw new InvalidArgumentException();

try {
    // Something goes wrong
} catch (Exception $exception) {
    Log::error("Something went wrong");
}