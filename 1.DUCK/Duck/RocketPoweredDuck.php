<?php

namespace Duck;

use Class\RocketFlying;

class RocketPoweredDuck extends Duck{
    public function __construct()
    {
        $this->fly = new RocketFlying();
    }
    
    public function display()
    {
        echo "Rocket Duck";
    }
}