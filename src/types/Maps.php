<?php

/** @noinspection ALL */

class Maps {
    private WeakMap $cache;

    public function getSomethingWithCaching(object $obj) {
        return $this->cache[$obj] ??= $this->computeSomethingExpensive($obj);
    }
}