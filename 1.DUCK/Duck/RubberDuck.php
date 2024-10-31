<?php
namespace Duck;

use Class\FlyNoWay;
use Class\Quack;

class RubberDuck extends Duck {
    public function __construct() {
        $this->fly = new FlyNoWay();
        $this->quack = new Quack();
    }

    public function display() {
        echo "I'm a Rubber Duck!\n";
    }
}