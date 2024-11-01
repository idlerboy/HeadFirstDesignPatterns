<?php

namespace Parrot;

abstract class Parrot{
    public function __construct(protected $repeatBehavior, protected $flyBehavior)
    {
    }

    public function repeat(){
        $this->repeatBehavior->repeat();
    }

    public function fly(){
        $this->flyBehavior->fly();
    }
}