<?php

/** @noinspection ALL */

#[
    Route(Http::POST, '/products/create'),
    Autowire,
]
class ProductsCreateController
{
    public function __invoke() { /* … */ }
}