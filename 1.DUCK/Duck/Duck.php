<?php

namespace Duck;

use Interface\Fly;
use Interface\Quack;

abstract class Duck {
    protected $fly;
    protected $quack;

    public function performFly() {
        $this->fly->fly();
    }

    public function performQuack() {
        $this->quack->quack();
    }

    abstract public function display();
}