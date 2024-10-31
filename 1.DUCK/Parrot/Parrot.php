<?php

use Duck\Duck;
use Interface\Fly;
use Interface\Quack;

abstract class Parrot{
    public function __construct(protected $repeat, protected $fly)
    {
    }

    public function repeat(){
        $this->repeat->repeat();
    }

    public function
}