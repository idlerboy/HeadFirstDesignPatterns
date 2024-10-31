<?php

namespace Class;

use Interface\Fly;
// Using our new design, what would you do if you needed
// to add rocket-powered flying to the SimUDuck app?

// Rocket Powered flying duck
class RocketFlying implements Fly{
    public function fly(){
        echo "Rocket flying";
    }
}