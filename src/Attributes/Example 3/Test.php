<?php

/** @noinspection ALL */

#[AttributeWithScalarExpression(1 + 1)]
#[AttributeWithClassNameAndConstants(PDO::class, PHP_VERSION_ID)]
#[AttributeWithClassConstant(Http::POST)]
#[AttributeWithBitShift(4 >> 1, 4 << 1)]
class Test{

}