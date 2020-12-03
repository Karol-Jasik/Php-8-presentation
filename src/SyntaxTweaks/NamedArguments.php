<?php

/**
 * @param string $value
 * @param array<string, int> $second
 */
function test(string $value, array $second)
{

}

test(value: 'string', second: ['string' => 1]);

test(second: [], value: 'string');

test(value: 'string', []);
