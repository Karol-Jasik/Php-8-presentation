<?php

/** @noinspection ALL */

$t = 500;
# ==
# ===
$message = match ($t) {
    200, 300 => throw new Exception(),
    400 => function () {

    },
    500 => fn() => 200,
    default => 'unknown status code',
};

###########################################################

function test()
{
    return true;
}

$message = match (false) {
    true => true,
    test() => match ($t) {
        1 => $t
    },
    $message === false => 1
};