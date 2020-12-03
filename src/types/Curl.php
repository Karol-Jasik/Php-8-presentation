<?php

function test(): CurlHandle
{
    return curl_init();
}

new CurlHandle();

$t = test();
