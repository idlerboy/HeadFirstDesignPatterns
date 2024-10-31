<?php

namespace Duck;

use Class\MuteQuack;
use Interface\Fly;

class SimpleDuck extends Duck implements Fly{
    public function __construct()
    {
        $this->quack = new MuteQuack();
    }

    public function fly(){
        echo "Simple fly\n";
    }

    public function quack(){
        echo "Simple quack\n";
    }

    public function display()
    {
        echo "Simple duck\n";
    }
}