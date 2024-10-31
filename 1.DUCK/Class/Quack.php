<?php

namespace Class;

use Interface\Quack as QuackInterface;

class Quack implements QuackInterface
{
    public function quack()
    {
        echo "quack";
    }
}