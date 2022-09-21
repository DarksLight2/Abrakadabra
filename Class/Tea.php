<?php

namespace Class;

use Interfaces\Drink;
use Interfaces\TeaType;
use Interfaces\Type;

class Tea extends CoffeeMachine
{
    public function getChoice(): Drink
    {
        return new TeaCreator();
    }

    protected function selectType(Type $type): void
    {
        $type->confirmSelection();
    }
}