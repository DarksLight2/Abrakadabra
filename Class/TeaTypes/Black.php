<?php

namespace Class\TeaTypes;

use Interfaces\TeaType;
use Interfaces\Type;

class Black implements Type, TeaType
{
    public function confirmSelection()
    {
        echo 'You`re choice is black tea.<br>';
    }
}