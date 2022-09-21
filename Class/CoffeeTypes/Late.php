<?php

namespace Class\CoffeeType;

use Interfaces\Type;

class Late implements Type
{

    public function confirmSelection()
    {
        echo 'Choice is a Coffee Late';
    }
}