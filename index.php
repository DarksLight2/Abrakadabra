<?php

use Class\Coffee;
use Class\CoffeeMachine;
use Class\Tea;
use Class\TeaTypes\Black;
use Class\TeaTypes\Green;

spl_autoload_register(function ($filename) {
    require '.' . DIRECTORY_SEPARATOR . $filename . '.php';
});

function make(CoffeeMachine $choice): void
{
    $choice->make();
}

make(new Coffee(Black::class));
