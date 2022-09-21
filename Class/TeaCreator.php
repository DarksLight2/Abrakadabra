<?php

namespace Class;

use Interfaces\Drink;
use Interfaces\Type;

class TeaCreator  implements Drink
{
    /**
     * @throws \Exception
     */
    public function start()
    {
        if(rand(0, 1) === 1)
            echo 'Starting machine....<br>';
        else
            throw new \Exception('Don`t have a water');
    }

    public function end()
    {
        echo 'Finish..<br>';
    }

    public function stop()
    {
        echo 'Stopping...<br>';
    }
}