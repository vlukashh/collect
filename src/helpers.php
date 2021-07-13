<?php

namespace Collect;

function collect(array $array = []): Collect
{
    return new Collect($array);
}