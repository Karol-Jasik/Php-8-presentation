<?php

/** @noinspection PhpUnused */

declare(strict_types=1);

class NewTypes
{
    public function mixed(mixed $value): mixed
    {
        return $value;
    }

    public function typeStatic(): static
    {
        return parent::typeStatic();
    }
}