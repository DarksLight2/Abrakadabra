<?php

namespace Class;

use Interfaces\Drink;
use Interfaces\Type;

class Coffee extends CoffeeMachine
{
    protected function selectType(Type $type): void
    {
        $type->confirmSelection();
    }

    public function getChoice(): Drink
    {
        return new CoffeeCreator();
    }
}