<?php

namespace Duck;

use Interface\Fly;
use Interface\Quack;

abstract class Duck {
    protected $flyBehavior;
    protected $quackBehavior;

    public function performFly() {
        $this->flyBehavior->fly();
    }

    public function performQuack() {
        $this->quackBehavior->quack();
    }

    abstract public function display();

    public function swim(){
        echo "All ducks can swim, you know!";
    }

    public function setFlyBehavior(Fly $flyBehavior){
        $this->flyBehavior = $flyBehavior;
    }

    function setQuackBehavior(Quack $quackBehavior){
        $this->quackBehavior = $quackBehavior;
    }
}