<?php

namespace Duck;

use Class\FlyWithWings;
use Class\Quack;

class MallardDuck extends Duck {
    public function __construct() {
        $this->fly = new FlyWithWings();
        $this->quack = new Quack();
    }

    public function display() {
        echo "I'm a Mallard Duck!\n";
    }
}
