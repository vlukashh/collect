<?php

use Collect\Collect;

function make_collect(array $array = []): Collect
{
    return new Collect($array);
}