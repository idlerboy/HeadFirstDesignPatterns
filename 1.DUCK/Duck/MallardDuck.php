<?php

namespace Duck;

use Class\FlyWithWings;
use Class\Quack;

class MallardDuck extends Duck {
    public function __construct() {
        $this->flyBehavior = new FlyWithWings();
        $this->quackBehavior = new Quack();
    }

    public function display() {
        echo "I'm a Model Duck!\n";
    }
}
