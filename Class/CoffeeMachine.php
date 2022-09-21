<?php

namespace Class;

use Interfaces\Drink;
use Interfaces\Type;

abstract class CoffeeMachine
{

    public function __construct(string $type)
    {
        $this->selectType(new $type);
    }

    abstract public function getChoice(): Drink;
    abstract protected function selectType(Type $type): void;

    public function make()
    {
        $drink = $this->getChoice();

        try {
            $drink->start();
        } catch (\Exception $e) {
            echo $e->getMessage() . '<br>';

            $drink->stop();

            die;
        }

        $drink->end();
    }
}