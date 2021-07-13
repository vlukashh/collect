<?php
namespace collect;
use Collect\Collect;

function make(array $array = []): Collect
{
    return new Collect($array);
}