<?php

namespace Class\TeaTypes;

use Interfaces\TeaType;
use Interfaces\Type;

class Green implements Type, TeaType
{
    public function confirmSelection()
    {
        echo 'You`re choice is green tea.<br>';
    }
}