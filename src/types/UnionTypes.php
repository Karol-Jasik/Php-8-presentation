<?php

/** @noinspection PhpUnused */

declare(strict_types=1);

class UnionTypes
{
    protected string|bool $parameter;

    public function stringOrBoolReturn(bool $bool): string|bool
    {
        if ($bool) {
            return true;
        }

        return 'true';
    }

    public function stringOrBoolParameter(string|bool $value): array
    {
        return [];
    }

    public function returnFalse(): false
    {
        return false;
    }

    public function returnNull(): null
    {
        return false;
    }

    public function returnNullAndString(): null|string
    {
        return false;
    }

    public function returnFalseAndString(): false|null|array
    {
        return false;
    }

    public function returnFalseAndBool(): false|bool
    {
        return false;
    }

    public function returnObjectAndStdClass(): object|stdClass
    {
        return new stdClass();
    }

    public function returnIntStringAndAgainInt(): int|string|int
    {
        return 0;
    }

    public function returnIterableAndArray(): iterable|array
    {
        return [];
    }

    public function returnVoidAndString(): void|string
    {
    }
}
