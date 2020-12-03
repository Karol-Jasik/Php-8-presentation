<?php


class ClassOnObject
{

}

$t = new ClassOnObject();

$t1 = get_class($t);

$t::class;
