<?php

namespace Duck;

use Class\MuteQuack;
use Interface\Fly;

class SimpleDuck implements Fly{
    public function __construct()
    {
    }

    public static function statictxt(){
        echo "static text";
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